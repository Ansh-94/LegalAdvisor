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

<body class="bg-gradient-to-b from-purple-100 to-white min-h-screen mx-8">
  <header class="mt-[15px] mb-[15px] ml-[30px] mr-[30px]">
    <script>
      function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('-translate-x-full');
      }
      function toggleMoreSidebar() {
        document.getElementById('moreSidebar').classList.toggle('-translate-x-full');
      }
    </script>

    <div class="bg-white w-full rounded-lg shadow-lg overflow-hidden">

      <div class="bg-purple-700 text-white text-center py-8 rounded-t-[10px]">
        <h1 class="text-3xl font-bold">About Us</h1>
        <p class="text-lg mt-2 px-6">
          Welcome to <strong>AI Lawyer Advisor</strong>—your trusted partner in AI-powered legal guidance.
          We are dedicated to making legal information accessible, accurate, and user-friendly.
        </p>
      </div>

      <!-- Main Content Section -->
      <div class="p-8 text-gray-700 space-y-8">
        <!-- About Section -->
        <section>
          <h2 class="text-2xl font-bold text-purple-700 mb-4">What is AI Lawyer Advisor?</h2>
          <p class="mb-4">
            AI Lawyer Advisor is a cutting-edge platform that empowers individuals with the legal insights they need.
            Whether you're seeking to understand your rights or need help navigating complex legal issues, our AI-driven
            system provides instant guidance based on the most current laws and regulations.
          </p>
        </section>

        <!-- Our Offerings Section -->
        <section>
          <h2 class="text-2xl font-bold text-purple-700 mb-4">Our Offerings</h2>
          <ul class="list-disc ml-6 mb-4 space-y-2">
            <li>
              <strong>AI-Powered Legal Chatbot:</strong> Get instant legal insights and guidance around the clock.
            </li>
            <li>
              <strong>Personalized Legal Assistance:</strong> Receive tailored advice specific to your situation.
            </li>
            <li>
              <strong>Find and Connect with Lawyers:</strong> Browse and connect with verified legal professionals.
            </li>
            <li>
              <strong>Legal Document Generator:</strong> Easily generate contracts, affidavits, and more in a compliant
              format.
            </li>
            <li>
              <strong>Case Tracking & Management:</strong> Stay updated on your legal proceedings with our tracking
              system.
            </li>
          </ul>
        </section>

        <!-- Why Choose Us Section -->
        <section>
          <h2 class="text-2xl font-bold text-purple-700 mb-4">Why Choose AI Lawyer Advisor?</h2>
          <ul class="list-disc ml-6 mb-4 space-y-2">
            <li>
              <strong>24/7 Legal Support:</strong> Access legal guidance anytime, anywhere.
            </li>
            <li>
              <strong>User-Friendly Interface:</strong> Navigate our platform with ease.
            </li>
            <li>
              <strong>Cost-Effective:</strong> Save time and money with our free initial legal insights.
            </li>
            <li>
              <strong>Verified Legal Professionals:</strong> Connect with trusted experts when you need personalized
              help.
            </li>
            <li>
              <strong>Data Privacy & Security:</strong> We ensure your information remains secure and confidential.
            </li>
          </ul>
        </section>

        <!-- Our Mission Section -->
        <section>
          <h2 class="text-2xl font-bold text-purple-700 mb-4">Our Mission</h2>
          <p class="mb-4">
            Our mission is to bridge the gap between legal knowledge and the general public by leveraging advanced AI
            technologies. We are committed to simplifying legal processes, educating citizens about their rights, and
            ensuring that legal assistance is accessible to everyone.
          </p>
        </section>

        <!-- Get Started Section -->
        <section class="text-center">
          <h2 class="text-2xl font-bold text-purple-700 mb-4">Get Started Today</h2>
          <p class="mb-4">
            Begin your legal journey with <strong>AI Lawyer Advisor</strong>—your smart partner for legal empowerment.
          </p>
          <div class="flex justify-center space-x-4">
            <a href="chatbot.php" class="bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-800">
              Chat with Our AI
            </a>
            <a href="lawyerDirectory.php" class="bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-800">
              Connect with a Lawyer
            </a>
          </div>
        </section>
      </div>

      <!-- Team Section -->
      
      <!-- Footer Section with Rounded Bottom Corners -->
      <div class="bg-purple-700 text-white text-center py-4 rounded-b-[10px]">
        <p>&copy; 2025 AI Lawyer Advisor. All Rights Reserved.</p>
      </div>
    </div>
  </header>
</body>

</html>