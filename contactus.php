<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('includes/header.php');


if (isset($_POST['submit'])) {
    echo "
    <html>
        <body>
        <script>
            alert('We will replyyou within 24 hours');
            location.href = 'contactus.php';
         </script>
        <body>
    <html> ";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Lawyer Directory</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-b from-purple-100 to-white min-h-screen ml-[30px] mr-[30px]">
    <header class="flex items-center justify-center  p-[35px]">

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

        <div class="bg-white max-w-4xl w-full flex rounded-lg shadow-lg overflow-hidden">
            <!-- Left Section (Contact Info) -->
            <div class="w-1/3 bg-purple-700 text-white flex flex-col justify-start p-6">
                <h2 class="text-xl font-bold mb-4">Contact Info</h2>

                <!-- New Added Text Above Email -->
                <p class="text-sm mb-4">
                    Have questions about our services? We're here to help. Fill out the form below, and we'll get back
                    to you as soon as possible.
                </p>

                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <span>📧</span>
                        <p class="text-sm">support@legaldirectory.com</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <span>📞</span>
                        <p class="text-sm">1-800-LAWYERS</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <span>📍</span>
                        <p class="text-sm">123 Legal Street, New York, NY 10001</p>
                    </div>
                </div>
            </div>

            <!-- Right Section (Form) -->
            <div class="w-2/3 p-8 flex flex-col">
                <h2 class="text-2xl font-bold text-purple-700 mb-2">Get in Touch</h2>
                <p class="text-gray-600 mb-4">Have questions? Reach out to us.</p>

                <form class="space-y-4 flex-grow" method="POST" action="https://formsubmit.co/aryannai941@gmail.com">
                    <input type="text" placeholder="Your Name"
                        class="w-full px-4 py-2 border-2 rounded-md focus:outline-none focus:border-purple-600">
                    <input type="email" placeholder="Your Email" name="email"
                        class="w-full px-4 py-2 border-2 rounded-md focus:outline-none focus:border-purple-600">
                    <input type="text" placeholder="Subject"
                        class="w-full px-4 py-2 border-2 rounded-md focus:outline-none focus:border-purple-600">
                    <textarea placeholder="Your Message"
                        class="w-full px-4 py-2 border-2 rounded-md h-28 focus:outline-none focus:border-purple-600"></textarea>
                    <button type="submit"
                        class="w-full bg-purple-700 hover:bg-purple-800 text-white py-2 rounded-md transition">
                        Send Message
                    </button>
                </form>
            </div>
        </div>

</body>

</html>