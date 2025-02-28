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
include('includes/security.php');

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
            <input type="text" id="search" placeholder="Search by Name / State / City or Specialization..."
                class="border p-2 w-full rounded-md">

        </div>

        <div class="flex flex-wrap justify-center gap-6 w-full" id="lawyer-list">
            <?php
            $query = "SELECT 
              l.LawyerID,
              l.FullName,
              l.Specialization,
              l.Experience,
              sm.StateName,
              cm.CityName,
              l.ProfilePicture  
              FROM lawyers l
              INNER JOIN statemaster sm ON l.StateMasterID = sm.StateMasterID
              INNER JOIN citymaster cm ON l.CityMasterID = cm.CityMasterID";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                $ProfilePicture = !empty($row['ProfilePicture']) ? 'uploads/' . htmlspecialchars($row['ProfilePicture']) : 'img/advocate.png';
                ?>

                <div class="bg-white rounded-lg shadow-md w-[350px] flex flex-col transition-all duration-300 search-card">
                    <!-- Combined Image and Content -->
                    <img src="<?= $ProfilePicture ?>" alt="Lawyer Profile Picture"
                        class="w-full h-48 rounded-t-lg object-cover">


                    <h3 class="text-lg font-bold p-4"><?= $row['FullName'] ?></h3>
                    <p class="text-gray-500 px-4"><?= $row['Specialization'] ?></p>
                    <p class="text-gray-500 px-4"><?= $row['CityName'] ?>, <?= $row['StateName'] ?></p>
                    <p class="text-gray-500 px-4"><?= $row['Experience'] ?> years experience</p>

                    <!-- View More Button  -->
                    <form action="lawyerprofile.php" method="GET" class="mt-auto p-4">
                        <input type="hidden" name="LawyerID" value="<?= htmlspecialchars($row['LawyerID']); ?>">
                        <button type="submit"
                            class="w-full bg-purple-700 text-white font-semibold py-2 px-4 rounded-lg hover:bg-purple-500 transition">
                            View More
                        </button>
                    </form>
                </div>

            <?php } ?>
        </div>


        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const searchInput = document.querySelector("#search-input");
                const lawyerCards = document.querySelectorAll(".search-card");

                searchInput.addEventListener("input", function () {
                    const searchValue = searchInput.value.trim().toLowerCase();

                    lawyerCards.forEach(card => {
                        const name = card.querySelector(".lawyer-name").innerText.toLowerCase();
                        if (searchValue === "" || name.includes(searchValue)) {
                            card.style.opacity = "1";
                            card.style.position = "relative";
                            card.style.pointerEvents = "auto";
                        } else {
                            card.style.opacity = "0";
                            card.style.position = "absolute";
                            card.style.pointerEvents = "none";
                        }
                    });
                });
            });
        </script>




        <script>
            document.getElementById('search').addEventListener('input', function () {
                let query = this.value.toLowerCase();
                let cards = document.querySelectorAll('#lawyer-list > div');

                cards.forEach(card => {
                    let text = card.innerText.toLowerCase();
                    card.style.display = text.includes(query) ? 'flex' : 'none';
                });
            });


        </script>


</body>

</html>