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
  <title>Emergency Helplines - AI Lawyer Advisor</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
    <div class="border-l-2 border-r-2 border-gray-300 bg-white w-full rounded-lg shadow-lg overflow-hidden">
      <!-- Header Section  -->
      <header class="bg-purple-700 text-white py-8 w-full"
        style="border: 5px solid #6b46c1; border-radius: 10px 5px 0 0;">
        <div class="px-6">
          <h1 class="text-3xl font-bold text-center">Emergency Helplines</h1>
          <p class="text-lg mt-2 text-center px-6">
            In case of an emergency, contact the relevant helpline below for immediate assistance.
          </p>
        </div>
      </header>

      <!-- Emergency Contact Section -->
      <div class="p-8">
        <h2 class="text-2xl font-bold text-purple-700 text-center mb-6">Important Contacts</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

          <div class="bg-gray-200 rounded-2xl shadow-md p-4 flex items-center gap-4">
            <span class="text-3xl">🚔</span>
            <div>
              <h3 class="text-lg font-bold">Police</h3>
              <p class="text-sm text-gray-600">Call: 100</p>
            </div>
          </div>

          <div class="bg-gray-200 rounded-2xl shadow-md p-4 flex items-center gap-4">
            <span class="text-3xl">🔥</span>
            <div>
              <h3 class="text-lg font-bold">Fire Department</h3>
              <p class="text-sm text-gray-600">Call: 101</p>
            </div>
          </div>

          <div class="bg-gray-200 rounded-2xl shadow-md p-4 flex items-center gap-4">
            <span class="text-3xl">🚑</span>
            <div>
              <h3 class="text-lg font-bold">Ambulance</h3>
              <p class="text-sm text-gray-600">Call: 102</p>
            </div>
          </div>

          <div class="bg-gray-200 rounded-2xl shadow-md p-4 flex items-center gap-4">
            <span class="text-3xl">🌪️</span>
            <div>
              <h3 class="text-lg font-bold">Disaster Management</h3>
              <p class="text-sm text-gray-600">Call: 108</p>
            </div>
          </div>

          <div class="bg-gray-200 rounded-2xl shadow-md p-4 flex items-center gap-4">
            <span class="text-3xl">👩</span>
            <div>
              <h3 class="text-lg font-bold">Women’s Helpline</h3>
              <p class="text-sm text-gray-600">Call: 1091</p>
            </div>
          </div>

          <div class="bg-gray-200 rounded-2xl shadow-md p-4 flex items-center gap-4">
            <span class="text-3xl">👶</span>
            <div>
              <h3 class="text-lg font-bold">Child Helpline</h3>
              <p class="text-sm text-gray-600">Call: 1098</p>
            </div>
          </div>

          <div class="bg-gray-200 rounded-2xl shadow-md p-4 flex items-center gap-4">
            <span class="text-3xl">💻</span>
            <div>
              <h3 class="text-lg font-bold">Cyber Crime Helpline</h3>
              <p class="text-sm text-gray-600">Call: 155260</p>
            </div>
          </div>

          <div class="bg-gray-200 rounded-2xl shadow-md p-4 flex items-center gap-4">
            <span class="text-3xl">👴</span>
            <div>
              <h3 class="text-lg font-bold">Senior Citizens Helpline</h3>
              <p class="text-sm text-gray-600">Call: 14567</p>
            </div>
          </div>

          <div class="bg-gray-200 rounded-2xl shadow-md p-4 flex items-center gap-4">
            <span class="text-3xl">🚗</span>
            <div>
              <h3 class="text-lg font-bold">Road Accident Emergency</h3>
              <p class="text-sm text-gray-600">Call: 1073</p>
            </div>
          </div>

          <div class="bg-gray-200 rounded-2xl shadow-md p-4 flex items-center gap-4">
            <span class="text-3xl">🧠</span>
            <div>
              <h3 class="text-lg font-bold">Mental Health Helpline</h3>
              <p class="text-sm text-gray-600">Call: 1800-599-0019</p>
            </div>
          </div>

          <div class="bg-gray-200 rounded-2xl shadow-md p-4 flex items-center gap-4">
            <span class="text-3xl">☠️</span>
            <div>
              <h3 class="text-lg font-bold">Poison Control</h3>
              <p class="text-sm text-gray-600">Call: 1800-180-1104</p>
            </div>
          </div>

          <div class="bg-gray-200 rounded-2xl shadow-md p-4 flex items-center gap-4">
            <span class="text-3xl">⚖️</span>
            <div>
              <h3 class="text-lg font-bold">Legal Aid Helpline</h3>
              <p class="text-sm text-gray-600">Call: 1800-XYZ-1234</p>
            </div>
          </div>

          <div class="bg-gray-200 rounded-2xl shadow-md p-4 flex items-center gap-4">
            <span class="text-3xl">🙅</span>
            <div>
              <h3 class="text-lg font-bold">Sexual Harassment Helpline</h3>
              <p class="text-sm text-gray-600">Call: 181</p>
            </div>
          </div>

          <div class="bg-gray-200 rounded-2xl shadow-md p-4 flex items-center gap-4">
            <span class="text-3xl">🚫</span>
            <div>
              <h3 class="text-lg font-bold">Domestic Violence Helpline</h3>
              <p class="text-sm text-gray-600">Call: 181</p>
            </div>
          </div>

          <div class="bg-gray-200 rounded-2xl shadow-md p-4 flex items-center gap-4">
            <span class="text-3xl">🎓</span>
            <div>
              <h3 class="text-lg font-bold">Anti-Ragging Helpline</h3>
              <p class="text-sm text-gray-600">Call: 1800-180-5522</p>
            </div>
          </div>
        </div>
      </div>


      <!-- Footer -->
      <footer class="bg-purple-700 text-white py-4 w-full"
        style="border: 5px solid #6b46c1; border-radius: 0 0 5px 5px;">
        <p class="text-center">&copy; 2025 AI Lawyer Advisor. All Rights Reserved.</p>
      </footer>
    </div>
</body>

</html>