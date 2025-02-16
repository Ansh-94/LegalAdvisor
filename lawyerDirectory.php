<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['user'])) {
    header("Location: log.php");
    exit();
}

include('includes/header.php');
include('includes/db.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawyer Directory</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=add" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
</head>

<body class="bg-gray-100">

    <!-- JavaScript for Sidebar Toggle -->
    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        }
        function toggleMoreSidebar() {
            document.getElementById('moreSidebar').classList.toggle('-translate-x-full');
        }
    </script>

    <div class="max-w-6xl mx-auto p-6">
        <h2 class="text-3xl font-bold mb-4">Find a Lawyer</h2>

        <div class="flex items-center space-x-4 mb-6">
            <input type="text" id="search" placeholder="Search by name or specialization..."
                class="border p-2 w-full rounded-md">


            <select id="state" class="border p-2 rounded-md">
                <option value="">Select State</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
            </select>




        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6" id="lawyer-list">
            <?php
            $query = "SELECT * FROM lawyers";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                // Check if 'profile_image' exists in the array and is not empty
                $profile_image = isset($row['profile_image']) && !empty($row['profile_image'])
                    ? $row['profile_image']
                    : 'img/advocate.png'; // Use default image if missing
            
                echo "<div class='bg-white rounded-lg shadow-md p-4 flex space-x-4' data-state='{$row['state']}' data-city='{$row['city']}'>";
                echo "<img src='{$profile_image}' class='rounded-lg w-24 h-24' alt='Profile Image'>";
                echo "<div>";
                echo "<h3 class='text-lg font-bold'>{$row['full_name']}</h3>";
                echo "<p class='text-gray-500'>{$row['specialization']}</p>";
                echo "<p class='text-gray-500'>{$row['city']}, {$row['state']} | {$row['experience']} years experience</p>";
                echo "<p class='text-gray-500'>✉️ {$row['email']}</p>";
                echo "<p class='text-gray-500'>📞 {$row['phone']}</p>";
                echo "<p class='font-semibold'>Consultation Fee: \${$row['consultation_fee']} | Hourly Rate: \${$row['hourly_rate']}/hr</p>";
                echo "</div></div>";
            }
            ?>

        </div>
    </div>

    <script>
        // Get necessary DOM elements
        const stateDropdown = document.getElementById('state');
        const searchInput = document.getElementById('search');
        const lawyerCards = document.querySelectorAll('#lawyer-list > div');

        // Filter Lawyers based on Search and State
        function filterLawyers() {
            const query = searchInput.value.toLowerCase().trim();
            const selectedState = stateDropdown.value.toLowerCase(); // Convert to lowercase for case-insensitive matching

            lawyerCards.forEach(card => {
                const name = card.innerText.toLowerCase(); // Convert card content to lowercase
                const state = card.getAttribute('data-state').toLowerCase(); // Convert to lowercase for matching

                // Check if the card matches the search query and selected state
                const matchesSearch = name.includes(query);
                const matchesState = selectedState === "" || state === selectedState;

                card.style.display = (matchesSearch && matchesState) ? 'flex' : 'none';
            });
        }

        // Attach filter function to search input and state dropdown
        searchInput.addEventListener('input', filterLawyers);
        stateDropdown.addEventListener('change', filterLawyers);

        // Populate states on page load
        populateStates();

    </script>


</body>

</html>