<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('includes/db.php'); // Database connection file
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $full_name = $_POST['name'];
    $bar_registration = $_POST['registration_number'];
    $specialization = $_POST['specialization'];
    $experience = $_POST['experience'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $consultation_fee = $_POST['fee'];
    $hourly_rate = $_POST['hourly_rate'];
    $bio = $_POST['bio'];

    // Handle file upload (profile picture)
    $target_dir = "uploads/";
    $profile_picture = "";

    if (!empty($_FILES["profile_picture"]["name"])) {
        $profile_picture = $target_dir . basename($_FILES["profile_picture"]["name"]);
        move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $profile_picture);
    }

    // Check for duplicates
    $duplicate_message = "";

    // Check email
    $check_email = "SELECT 1 FROM lawyers WHERE email = ?";
    $stmt = mysqli_prepare($conn, $check_email);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    if (mysqli_stmt_num_rows($stmt) > 0) {
        $duplicate_message .= "Email already exists! ";
    }
    mysqli_stmt_close($stmt);

    // Check phone number
    $check_phone = "SELECT 1 FROM lawyers WHERE phone = ?";
    $stmt = mysqli_prepare($conn, $check_phone);
    mysqli_stmt_bind_param($stmt, "s", $phone);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    if (mysqli_stmt_num_rows($stmt) > 0) {
        $duplicate_message .= "Phone number already exists! ";
    }
    mysqli_stmt_close($stmt);

    // Check bar registration number
    $check_bar = "SELECT 1 FROM lawyers WHERE bar_registration = ?";
    $stmt = mysqli_prepare($conn, $check_bar);
    mysqli_stmt_bind_param($stmt, "s", $bar_registration);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    if (mysqli_stmt_num_rows($stmt) > 0) {
        $duplicate_message .= "Bar registration number already exists!";
    }
    mysqli_stmt_close($stmt);

    // If duplicate is found, show alert and stop execution
    if (!empty($duplicate_message)) {
        echo "<script>alert('$duplicate_message'); window.history.back();</script>";
        exit();
    }

    // Insert into database
    $query = "INSERT INTO lawyers (full_name, bar_registration, specialization, experience, city, state, email, phone, consultation_fee, hourly_rate, bio, profile_picture)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssssssssssss", $full_name, $bar_registration, $specialization, $experience, $city, $state, $email, $phone, $consultation_fee, $hourly_rate, $bio, $profile_picture);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Registration Successful!'); window.location.href='lawyerRegistration.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "'); window.history.back();</script>";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>