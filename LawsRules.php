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
  <title>Laws & Rules - AI Lawyer Advisor</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="script.js"></script>
  <style>
    .law-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
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
      <!-- Header Section with 10px Curviness -->
      <div class="bg-purple-700 text-white text-center py-8 rounded-t-[10px]">
        <h1 class="text-3xl font-bold">Laws & Rules</h1>
        <p class="text-lg mt-2 px-6">
          Explore legal knowledge in different categories to understand your rights better.
        </p>
      </div>

      

      <div class="p-6">
        <select id="lawSelect" class="w-full p-3 border rounded-lg focus:outline-none focus:border-purple-600">
          <option value="">All Categories</option>
         
          <option value="Law\ida\ida.php">Indian Divorce Act</option>
          <option value="Law\iea\iea.php">Indian Evidence Act</option>
          <option value="Law\mva\mva.php">Motor Vehicles Act</option>
          <option value="Law\nia\nia.php">Negotiable Instruments Act</option>
          <option value="Law\crpc\crpc.php">Code of Criminal Procedure</option>
        </select>
      </div>

      <script>
    function navigateToCategory() {
        let select = document.getElementById("lawSelect");
        select.addEventListener("change", function () {
            let selectedValue = select.value;
            if (selectedValue) {
                window.location.href = selectedValue; // Redirect to selected page
            }
        });
    }

    navigateToCategory()
</script>



      <!-- Laws Categories Section -->
      <div id="laws-container" class="p-6 space-y-4 text-purple-700">
     
      </div>

      

      <!-- Footer with 10px Curviness -->
      <div class="bg-purple-700 text-white text-center py-4 rounded-b-[10px]">
        <p>&copy; 2025 AI Lawyer Advisor. All Rights Reserved.</p>
      </div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const lawsData = {
          "categories": [
            {
              "name": "Criminal Law",
              "laws": [
                { "title": "Theft and Robbery", "description": "Defines theft, robbery, and punishments under IPC Section 378." },
                { "title": "Murder and Assault", "description": "Laws related to homicide and physical assault (IPC Section 302)." }
              ]
            },
            {
              "name": "Civil Law",
              "laws": [
                { "title": "Property Disputes", "description": "Laws regarding ownership and property disputes under the Transfer of Property Act." },
                { "title": "Contract Law", "description": "Enforceability of agreements and breach of contract cases under the Indian Contract Act." }
              ]
            },
            {
              "name": "Family Law",
              "laws": [
                { "title": "Marriage Laws", "description": "Legal regulations regarding marriage, divorce, and alimony." },
                { "title": "Child Custody", "description": "Rights of parents and legal procedures for child custody." }
              ]
            },
            {
              "name": "Cyber Law",
              "laws": [
                { "title": "Online Fraud", "description": "Covers digital scams and fraud protection (IT Act, Section 66D)." },
                { "title": "Hacking", "description": "Punishment for hacking and unauthorized access (IT Act, Section 66)." }
              ]
            },
            {
              "name": "Labor Law",
              "laws": [
                { "title": "Minimum Wage Act", "description": "Regulates wages to protect workers from exploitation." },
                { "title": "Employee Rights", "description": "Rights regarding working conditions, leaves, and benefits." }
              ]
            },
            {
              "name": "Consumer Protection Law",
              "laws": [
                { "title": "Consumer Rights", "description": "Protection against unfair trade practices and defective goods." },
                { "title": "Online Consumer Protection", "description": "Rights and grievance mechanisms for e-commerce disputes." }
              ]
            }
          ]
        };

        const lawsContainer = document.getElementById("laws-container");
        // const categorySelect = document.getElementById("categorySelect");

        function displayLaws(categoryFilter = "All") {
          lawsContainer.innerHTML = "";
          let categoriesToDisplay = categoryFilter === "All"
            ? lawsData.categories
            : lawsData.categories.filter(cat => cat.name === categoryFilter);

          categoriesToDisplay.forEach(category => {
            let categoryDiv = document.createElement("div");
            categoryDiv.className = "bg-purple-100 p-4 rounded-lg shadow-md";
            categoryDiv.innerHTML = `<h2 class='text-xl font-bold text-purple-700 mb-2'>${category.name}</h2>`;

            category.laws.forEach(law => {
              let lawDiv = document.createElement("div");
              lawDiv.className = "law-card bg-white p-3 rounded-md shadow-sm mb-2 hover:bg-purple-200 transition";
              lawDiv.innerHTML = `<h3 class='font-semibold'>${law.title}</h3><p class='text-gray-600'>${law.description}</p>`;
              categoryDiv.appendChild(lawDiv);
            });

            lawsContainer.appendChild(categoryDiv);
          });
        }

        displayLaws();

       
      });
    </script>
</body>

</html>