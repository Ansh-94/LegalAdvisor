<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
include('includes/header.php');
?>
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us - AI Lawyer Advisor</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .team-card {
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .team-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>

<body class="bg-gradient-to-b from-purple-100 to-white min-h-screen ml-[30px] mr-[30px]">
  <header class="mt-[15px] mb-[15px] ml-[30px] mr-[30px]">
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



    <div class="bg-white w-full rounded-lg shadow-lg overflow-hidden">
      <!-- Header Section with 10px Rounded Top Corners -->
      <div class="bg-purple-700 text-white text-center py-8 rounded-t-[10px]">
        <h1 class="text-3xl font-bold">About Us</h1>
        <p class="text-lg mt-2 px-6">
          Welcome to <strong>AI Lawyer Advisor</strong>, a project designed to provide citizens with AI-powered legal
          guidance.
          Our mission is to make legal information accessible, accurate, and user-friendly for everyone.
        </p>
      </div>

      <!-- Project Description -->
      <div class="p-8 text-gray-700">
        <h2 class="text-2xl font-bold text-purple-700 mb-4">What is AI Lawyer Advisor?</h2>
        <p class="mb-4">
          AI Lawyer Advisor is a cutting-edge platform that helps individuals understand their legal rights
          and take informed actions when facing legal issues. Users can describe their situations, and our
          AI chatbot provides instant legal guidance based on applicable laws and regulations.
        </p>
        <h2 class="text-2xl font-bold text-purple-700 mb-4">Our Mission</h2>
        <p>
          Our mission is to bridge the gap between legal knowledge and the general public by leveraging
          artificial intelligence. We aim to create an easy-to-use, secure, and accurate legal advisory
          system for citizens worldwide.
        </p>
      </div>

      <!-- Team Section -->
      <div class="p-8">
        <h2 class="text-2xl font-bold text-purple-700 text-center mb-6">Meet Our Team</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
          <!-- Ansh Card -->
          <div class="team-card bg-gray-200 rounded-lg shadow-md p-4 text-center">
            <img src="C:\Users\Meghani Ansh\Pictures\My Phtotos\EOS_8913" alt="Ansh"
              class="w-24 h-24 rounded-full mx-auto">
            <h3 class="text-lg font-bold mt-4">Ansh</h3>
            <p class="text-sm text-gray-600">Full Stack Developer</p>
          </div>
          <!-- Aryan Card -->
          <div class="team-card bg-gray-200 rounded-lg shadow-md p-4 text-center">
            <img src="https://via.placeholder.com/100" alt="Aryan" class="w-24 h-24 rounded-full mx-auto">
            <h3 class="text-lg font-bold mt-4">Aryan</h3>
            <p class="text-sm text-gray-600">UI/UX Designer</p>
          </div>
          <!-- Paresh Card -->
          <div class="team-card bg-gray-200 rounded-lg shadow-md p-4 text-center">
            <img src="https://via.placeholder.com/100" alt="Paresh" class="w-24 h-24 rounded-full mx-auto">
            <h3 class="text-lg font-bold mt-4">Paresh</h3>
            <p class="text-sm text-gray-600">Backend Engineer</p>
          </div>
        </div>
      </div>

      <!-- Footer with 10px Rounded Bottom Corners -->
      <div class="bg-purple-700 text-white text-center py-4 rounded-b-[10px]">
        <p>&copy; 2025 AI Lawyer Advisor. All Rights Reserved.</p>
      </div>
    </div>
</body>

</html>