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
    <title>Legal Advisor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=add" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />


</head>

<body class="bg-purple-100  bg-cover bg-center w-full">
    <!-- <img class="h-[50%]" src="justice.jpg" alt=""> -->

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

    <div class="bg-gray-100 bg-[url('./img/justice.jpg')] bg-cover bg-center bg-fixed">
        <!-- Main Content -->
        <!-- bg-fixed -->
        <main class="p-8 text-center ">

            <!-- <div class="text-5xl font-bold  items-center ">Understanding Your Legal Rights Made Simple</div> -->
            <h2 class="text-5xl font-bold text-white w-[50%]   text-center mx-auto">
                Understanding Your Legal Rights Made Simple
            </h2>

            <p class="text-white text-xl  mx-auto w-[50%] mt-10 ">Get expert guidence and connect with qualified legal
                professionals to protect your rights and intrests.</p>
            <button onclick="window.location.href='chatbot1.php'"
                class="mt-10 bg-purple-700 text-white hover:text-purple-400  text-[15px] px-5 py-2 rounded mb-20">Get
                Legal Guidance</button>


        </main>
    </div>

    <!-- <div class="mt-[10px] grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white shadow p-4 rounded">
            <h3 class="font-bold">Expert Legal Guidance</h3>
            <p class="text-gray-600">Get personalized legal advice from professionals.</p>
        </div>
        <div class="bg-white shadow p-4 rounded">
            <h3 class="font-bold">Legal Resources</h3>
            <p class="text-gray-600">Access comprehensive legal information.</p>
        </div>
        <div class="bg-white shadow p-4 rounded">
            <h3 class="font-bold">Lawyer Directory</h3>
            <p class="text-gray-600">Find and connect with qualified lawyers.</p>
        </div>
    </div> -->

    <!-- <div class="max-w-6xl mx-auto text-center py-16">
        <h2 class="text-4xl font-bold text-yellow-400 mb-6">AI Legal Advisor :</h2>
        <p class="text-2xl text-white">your personal legal AI assistant</p>

        <div class="mt-6 flex justify-center space-x-4">
            <button class="bg-gray-300 text-black px-6 py-2 rounded-lg">For Consumers</button>
            <button class="bg-gray-300 text-black px-6 py-2 rounded-lg">For Lawyers</button>
        </div>

        <div class="mt-8">
            <button onclick="window.location.href='chatbot1.php'"
                class="bg-yellow-400 text-black px-8 py-3 rounded-lg font-semibold shadow-lg">
                AI Legal Assistance
            </button>
        </div>

        <div class="mt-12 flex justify-center">
            <img src="img/robot.jpg" alt="AI Legal Advisor" class="w-96">
        </div>
    </div> -->
    <div
        class="max-w-6xl mx-auto flex items-center justify-between py-16 px-8 bg-purple-700 rounded-[30px] mt-[60px] transition-transform duration-400 transform hover:-translate-y-4">
        <div class="text-left max-w-xl">
            <h2 class="text-4xl font-bold text-yellow-400 mb-4">AI Legal Advisor :</h2>
            <p class="text-3xl text-white font-semibold">your personal legal AI assistant</p>

            <div class="mt-6 flex space-x-4">
                <button class="bg-gray-300 text-black px-6 py-2 rounded-lg">For Consumers</button>
                <button class="bg-gray-300 text-black px-6 py-2 rounded-lg">For Lawyers</button>
            </div>

            <div class="mt-8">
                <button onclick="window.location.href='chatbot1.php'"
                    class="bg-yellow-400 text-black px-8 py-3 rounded-lg font-semibold shadow-lg">
                    AI Legal Advisor
                </button>
            </div>
        </div>

        <div class="flex justify-end w-1/2 ">
            <img src="img/robot.jpg" alt="AI Legal Advisor" class="w-96 rounded-[30px]">
        </div>
    </div>



    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 mt-[35px]">What is AI Legal Advisor?</h2>
        <h4 class="text-2xl font-bold text-gray-800 mb-8 mt-[35px]">Our goal is simple: to make justice widely
            available. Whether you're a consumer, practicing law, or studying it, we're here for you.</h4>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Service 1 -->
            <div
                class="bg-white p-6 rounded-lg shadow-md text-center transition-transform duration-300 transform hover:-translate-y-4">
                <div class="text-4xl">👨‍⚖️</div>
                <h3 class="text-lg font-semibold mt-4 text-gray-800">Expert Legal Guidance</h3>
                <p class="text-gray-600 mt-2">Get personalized legal advice from experienced professionals</p>
            </div>

            <!-- Service 2 -->
            <div
                class="bg-white p-6 rounded-lg shadow-md text-center transition-transform duration-300 transform hover:-translate-y-4">
                <div class="text-4xl">📚</div>
                <h3 class="text-lg font-semibold mt-4 text-gray-800">Legal Resources</h3>
                <p class="text-gray-600 mt-2">Access comprehensive legal information and resources</p>
            </div>

            <!-- Service 3 -->
            <div
                class="bg-white p-6 rounded-lg shadow-md text-center transition-transform duration-300 transform hover:-translate-y-4">
                <div class="text-4xl">🤝</div>
                <h3 class="text-lg font-semibold mt-4 text-gray-800">Lawyer Directory</h3>
                <p class="text-gray-600 mt-2">Find and connect with qualified lawyers in your area</p>
            </div>
        </div>
    </div>


    <!-- Hero Section -->
    <!-- <div class="bg-blue-800 text-white text-center py-16">
        <h1 class="text-3xl font-bold">Need Legal Assistance?</h1>
        <p class="text-lg mt-2">Our platform connects you with experienced legal professionals</p>
        <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg">
            Join as a Lawyer
        </button>
    </div> -->

    <!-- Footer -->
    <footer class="bg-purple-900 text-white py-10 mt-10">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-6 text-center md:text-left">
            <!-- Column 1 -->
            <div>
                <h3 class="text-lg font-semibold text-blue-400">Legal Advisory</h3>
                <p class="mt-2 text-gray-400">Your trusted source for legal guidance and professional connections.</p>
            </div>

            <!-- Column 2 -->
            <div>
                <h3 class="text-lg font-semibold text-blue-400">Quick Links</h3>
                <ul class="mt-2 space-y-2">
                    <li><a href="AboutUs.php" class="text-gray-400 hover:text-white">About Us</a></li>
                    <li><a href="contactus.php" class="text-gray-400 hover:text-white">Contact</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Terms of Service</a></li>
                </ul>
            </div>

            <!-- Column 3 -->
            <div>
                <h3 class="text-lg font-semibold text-blue-400">Contact Info</h3>
                <p class="mt-2 text-gray-400">Email: contact@legaladvisory.com</p>
                <p class="text-gray-400">Phone: (555) 123-4567</p>
            </div>
        </div>
    </footer>

</body>

</html>