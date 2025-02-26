<?php
include('includes/db.php');
include('includes/header.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['CPassword'])) {

        $query = "SELECT * FROM usermaster WHERE UserMasterID = " . $_SESSION["UserMasterID"];
        $result = $conn->query($query);

        if ($result && mysqli_num_rows($result) > 0) {

            // Retrieve form inputs
            $OldPassword = $_POST["OldPassword"];
            $ConfirmPassword = $_POST["ConfirmPassword"];
            $NewPassword = $_POST["NewPassword"];

            // Fetch the user's data
            $User_data = mysqli_fetch_assoc($result);

            // Check if the old password matches the one in the database
            // and if the new password matches the confirmation
            if ($User_data['Password'] === $OldPassword && $NewPassword === $ConfirmPassword) {
                $stmt = "UPDATE usermaster SET Password='" . $NewPassword . "' WHERE UserMasterID=" . $_SESSION['UserMasterID'];
                if ($conn->query($stmt) === TRUE) {
                    echo "<script>alert('Password Changed Successful!'); window.location.href='index.php';</script>";
                    exit;
                } else {
                    echo "<script>alert('Error updating password');</script>";
                }
            } else {
                echo "<script>alert('Password does not match!');</script>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-b from-purple-300 to-white">
    <header class="mt-[80px] mb-[15px] ml-[400px] mr-[30px]">
        <div class="bg-white p-12 rounded-lg shadow-lg w-2/3 text-center flex flex-col">
            <h2 class="h4 text-gray-900 mb-2">
                <?php echo $_SESSION['user']; ?>, do you want to change your password?
            </h2>
            
            <form method="post" class="mt-4">
                <input type="password" name="OldPassword" placeholder="Enter Old Password..."
                    class="w-full p-3 border rounded-lg mb-4">
                <input type="password" name="NewPassword" placeholder="Enter New Password..."
                    class="w-full p-3 border rounded-lg mb-4">
                <input type="password" name="ConfirmPassword" placeholder="Enter New Confirm Password..."
                    class="w-full p-3 border rounded-lg mb-4">
                <button type="submit" name="CPassword"
                    class="w-full bg-purple-500 text-white p-3 rounded-lg hover:bg-purple-700">Change Password</button>
            </form>
        </div>
    </header>
</body>

</html>