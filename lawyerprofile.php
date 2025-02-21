<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('includes/header.php');
include('includes/db.php');


// Check if LawyerID is set in GET or POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['LawyerID'])) {
    $LawyerID = intval($_POST['LawyerID']);  // Ensure it's an integer
} elseif (isset($_GET['LawyerID'])) {
    $LawyerID = intval($_GET['LawyerID']);  // Ensure it's an integer
} else {
    die("❌ Error: No Lawyer selected! Please go back and select a Lawyer.");
}

// SQL Query to Fetch Patient, Doctor, Hospital, and Treatment Data
$query = "SELECT l.LawyerID,
            l.FullName,
            l.BarRegistration,
            l.Specialization,
            l.Experience,
            sm.StateName,
            cm.CityName,
            l.Email,l.Phone,
            l.ConsultationFee,
            l.HourlyRate,
            l.Bio,l.RecentCases,
            l.ProfilePicture  FROM lawyers l 
            INNER JOIN statemaster sm ON l.StateMasterID = sm.StateMasterID
            INNER JOIN citymaster cm ON sm.StateMasterID = cm.StateMasterID
            WHERE LawyerID = ? ";

// Prepare and execute the query
$stmt = mysqli_prepare($conn, $query);
if (!$stmt) {
    die("❌ Error: Failed to prepare statement.");
}

// Bind parameter (ensure correct data type)
mysqli_stmt_bind_param($stmt, "i", $LawyerID);

// Execute statement
if (!mysqli_stmt_execute($stmt)) {
    die("❌ Error: Execution failed.");
}

// Get results
$result = mysqli_stmt_get_result($stmt);

// Fetch data
if ($result && mysqli_num_rows($result) > 0) {
    $lawyerprofile = mysqli_fetch_assoc($result);
} else {
    die("❌ Error: No records found for Cancer ID $LawyerID.");
}

// ... (Your existing code for $LawyerID and the main query above)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Legal Advisor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-b from-purple-100 to-white">
    <!-- Outer Container with Gradient Background -->
    <div
        class="container mx-auto p-6 shadow-md rounded-lg mt-[70px] bg-gradient-to-b from-white to-blue-50 lg:w-[80vw]">
        <!-- Lawyer Details Card -->
        <div class="bg-white/70 shadow-lg p-6 rounded-lg border border-gray-200">
            <h3 class="text-xl font-semibold text-blue-900 mb-4">Lawyer Details</h3>

            <div class="flex flex-wrap md:flex-nowrap gap-6 items-start">
                <!-- Lawyer Image -->
                <div class="w-40 h-40 flex-shrink-0">
                    <img src="uploads/<?= htmlspecialchars($lawyerprofile['ProfilePicture']) ?>" alt="Lawyer Image"
                        class="w-full h-full rounded-lg object-cover shadow-md border">
                </div>

                <!-- Lawyer Details -->
                <div class="flex-1">
                    <p class="text-lg font-semibold text-gray-800">
                        <strong>Full Name:</strong> <?= htmlspecialchars($lawyerprofile['FullName']); ?>
                    </p>
                    <p class="text-gray-700 mt-[8px]">
                        <strong>Bar Registration:</strong> <?= htmlspecialchars($lawyerprofile['BarRegistration']); ?>
                    </p>
                    <p class="text-gray-700">
                        <strong>Specialization:</strong> <?= htmlspecialchars($lawyerprofile['Specialization']); ?>
                    </p>
                    <p class="text-gray-700 mt-[8px]">
                        <strong>Experience:</strong> <?= htmlspecialchars($lawyerprofile['Experience']); ?> Years
                    </p>
                    <p class="text-gray-700">
                        <strong>State Name:</strong> <?= htmlspecialchars($lawyerprofile['StateName']); ?>
                    </p>
                    <p class="text-gray-700">
                        <strong>City Name:</strong> <?= htmlspecialchars($lawyerprofile['CityName']); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- Hospital Information Card -->
    <div class="container mx-auto lg:w-[80vw]">
        <div class="mt-6 bg-white/70 shadow-lg p-6 rounded-lg border border-gray-200">
            <p class="text-gray-700">
                <strong>Email:</strong> <?= htmlspecialchars($lawyerprofile['Email']); ?>
            </p>
            <p class="text-gray-700">
                <strong>Contact No:</strong> <?= htmlspecialchars($lawyerprofile['Phone']); ?>
            </p>
            <p class="text-gray-700">
                <strong>Consultation Fee:</strong>
                <?= htmlspecialchars($lawyerprofile['ConsultationFee']); ?>
            </p>
            <p class="text-gray-700">
                <strong>Hourly Rate:</strong> <?= htmlspecialchars($lawyerprofile['HourlyRate']); ?>
            </p>
            <p class="text-gray-700">
                <strong>Bio :</strong> <?= htmlspecialchars($lawyerprofile['Bio']); ?>
            </p>
            <p class="text-gray-700">
                <strong>Recent Cases:</strong> <?= htmlspecialchars($lawyerprofile['RecentCases']); ?>
                <!-- </p>
            <form action="lawyerRegistration.php" method="POST"> -->

            <form action="lawyerRegistration1.php" method="GET">
                <input type="hidden" name="LawyerID" value="<?= htmlspecialchars($lawyerprofile['LawyerID']); ?>">
                <button type="submit"
                    class="bg-purple-700 text-white rounded-lg text-lg px-4 py-2 hover:bg-purple-500 transition">
                    Edit Profile
                </button>
            </form>
            <!-- </form> -->
        </div>
    </div>

</body>

</html>