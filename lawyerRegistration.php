<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('includes/header.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawyer Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=add" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
</head>

<body class="bg-gray-100">


    <!-- JavaScript for Sidebar Toggle -->
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("-translate-x-full");
        }

        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        }
        function toggleMoreSidebar() {
            document.getElementById('moreSidebar').classList.toggle('-translate-x-full');
        }
    </script>

    <div class="max-w-4xl mx-auto bg-white p-8 mt-10 rounded shadow">
        <h2 class="text-2xl font-bold">Lawyer Registration</h2>
        <form class="grid grid-cols-2 gap-4 mt-6 " method="POST" action="register_lawyer.php">
            <input type="text" placeholder="Full Name" name="name" class="border p-2 rounded" required>
            <input type="text" placeholder="Bar Council Registration Number" name="registration_number"
                class="border p-2 rounded" minlength="10" maxlength="15" required>
            <select class="border p-2 rounded " name="specialization">
                <option>Select Specialization</option>
                <option values="Criminal Law">Criminal Law</option>
                <option value="Civil Rights">Civil Rights</option>
                <option value="Corporate Law">Corporate Law</option>
            </select>
            <input type="number" name="experience" placeholder="Years of Experience" class="border p-2 rounded"
                required>
            <input type="text" name="city" placeholder="City" class="border p-2 rounded" required>
            <input type="text" name="state" placeholder="State" class="border p-2 rounded" required>
            <input type="email" name="email" placeholder="Email" class="border p-2 rounded" required>
            <input type="tel" name="phone" placeholder="Phone" class="border p-2 rounded" minlength="10" maxlength="10">
            <input type="number" name="fee" placeholder="Consultation Fee " class="border p-2 rounded">
            <input type="number" name="hourly_rate" placeholder="Hourly Rate " class="border p-2 rounded">
            <textarea placeholder="Professional Bio" name="bio" class="border p-2 rounded col-span-2"></textarea>
            <div class="border-dashed border-2 p-4 rounded col-span-2 text-center">
                <p class="text-gray-600">Upload a file or drag and drop</p>
                <p class="text-sm text-gray-400">PNG, JPG, GIF up to 10MB</p>
                <input type="file" name="profile_picture" class="mt-2">
            </div>
            <button type="submit" class="bg-purple-700 text-white py-2 rounded col-span-2">Register</button>
        </form>
    </div>
</body>

</html>