<?php
include('includes/db.php');
// include('includes/header.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['CPassword'])) {

        $query = "SELECT * FROM usermaster WHERE UserMasterID = " . $_SESSION["UserMasterID"];
        $result = $conn->query($query);

        if ($result && mysqli_num_rows($result) > 0) {
            // Retrieve form inputs
            $OldPassword = $_POST["OldPassword"];
            $NewPassword = $_POST["NewPassword"];
            $ConfirmPassword = $_POST["ConfirmPassword"];

            // Fetch user data
            $User_data = mysqli_fetch_assoc($result);

            // Verify old password and confirm new password
            if ($User_data['Password'] === $OldPassword && $NewPassword === $ConfirmPassword) {
                $stmt = "UPDATE usermaster SET Password='" . $NewPassword . "' WHERE UserMasterID=" . $_SESSION['UserMasterID'];
                if ($conn->query($stmt) === TRUE) {
                    echo "<script>alert('Password Changed Successfully!'); window.location.href='index.php';</script>";
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

<body class="bg-purple-100 min-h-screen flex flex-col">
    
    <?php include('includes/header.php'); ?>

    <div class="flex flex-grow items-center justify-center p-4">
        <div class="bg-white p-8 md:p-12 rounded-lg shadow-lg w-full max-w-3xl text-center">
            <h2 class="text-gray-900 text-lg font-semibold mb-4">
                <?php echo $_SESSION['user']; ?>, do you want to change your password?
            </h2>

            
            <form method="post" class="space-y-4">


            <form method="post" class="mt-4">

                <input type="password" name="OldPassword" placeholder="Enter Old Password..."
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400">
                <input type="password" name="NewPassword" placeholder="Enter New Password..."
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400">
                <input type="password" name="ConfirmPassword" placeholder="Confirm New Password..."
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400">
                <button type="submit" name="CPassword"
                    class="w-full bg-purple-500 text-white font-semibold p-3 rounded-lg hover:bg-purple-700 transition">
                    Change Password
                </button>
            </form>
        </div>
    </div>

</body>
</html>

