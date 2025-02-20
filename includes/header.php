<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Legal Advisor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=add" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />


</head>

<body class="bg-purple-100  bg-cover bg-center w-full">
    <!-- <img class="h-[50%]" src="justice.jpg" alt=""> -->

    <header class="bg-white bg shadow-md p-4 flex justify-between items-center ">
        <h1 class="text-xl font-bold text-purple-700 flex items-center space-x-2">
            <a href="index.php" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
                 text-purple-700 font-bold hover:text-purple-900 
                  hover:bg-purple-200">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000"
                    fill="none">
                    <path d="M12 5V22M12 22H9M12 22H15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M21 13L18.5 8L16 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M8 13L5.5 8L3 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M4 8H5.0482C6.31166 8 7.5375 7.471 8.5241 6.5C10.5562 4.5 13.4438 4.5 15.4759 6.5C16.4625 7.471 17.6883 8 18.9518 8H20"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M18.5 17C19.8547 17 21.0344 16.1663 21.6473 14.9349C21.978 14.2702 22.1434 13.9379 21.8415 13.469C21.5396 13 21.04 13 20.0407 13H16.9593C15.96 13 15.4604 13 15.1585 13.469C14.8566 13.9379 15.022 14.2702 15.3527 14.9349C15.9656 16.1663 17.1453 17 18.5 17Z"
                        stroke="currentColor" stroke-width="1.5" />
                    <path
                        d="M5.5 17C6.85471 17 8.03442 16.1663 8.64726 14.9349C8.97802 14.2702 9.14339 13.9379 8.84151 13.469C8.53962 13 8.04 13 7.04075 13H3.95925C2.96 13 2.46038 13 2.15849 13.469C1.85661 13.9379 2.02198 14.2702 2.35273 14.9349C2.96558 16.1663 4.14528 17 5.5 17Z"
                        stroke="currentColor" stroke-width="1.5" />
                    <path
                        d="M13.5 3.5C13.5 4.32843 12.8284 5 12 5C11.1716 5 10.5 4.32843 10.5 3.5C10.5 2.67157 11.1716 2 12 2C12.8284 2 13.5 2.67157 13.5 3.5Z"
                        stroke="currentColor" stroke-width="1.5" />
                </svg>
                <span>AILegal Advisor</span>
            </a>
        </h1>
        <nav class="hidden md:flex space-x-6">

            <a href="index.php" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
                 text-purple-700 font-bold hover:text-purple-900 
                  hover:bg-purple-200">
                <span class="material-symbols-outlined">home</span>
                <span>Home</span>
            </a>
            <a href="chatbot.php" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
                 text-purple-700 font-bold hover:text-purple-900 
                  hover:bg-purple-200" id="legal">
                <span class="material-symbols-outlined">chat</span>
                <span>Get Legal Guidance</span>
            </a>
            <script>
                document.getElementById("legal").addEventListener("click", function (event) {
                    <?php if (!isset($_SESSION['user'])) { ?>
                        // Prevent the link's default behavior
                        event.preventDefault();
                        alert('Login Required!');
                        // Redirect to the login page after the alert
                        window.location.href = 'log.php';
                    <?php } ?>
                });
            </script>
            <a href="lawyerDirectory.php" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
                 text-purple-700 font-bold hover:text-purple-900 
                  hover:bg-purple-200" id="lawyer">
                <span class="material-symbols-outlined">group</span>
                <span>Lawyer Directory</span>
            </a>
            <script>
                document.getElementById("lawyer").addEventListener("click", function (event) {
                    <?php if (!isset($_SESSION['user'])) { ?>
                        // Prevent the link's default behavior
                        event.preventDefault();
                        alert('Login Required!');
                        // Redirect to the login page after the alert
                        window.location.href = 'log.php';
                    <?php } ?>
                    // If session is set, no extra JavaScript runs and the link behaves normally.
                });
            </script>
            <?php if ($_SESSION['UserType'] == 'Lawyer') { ?>

                <a href="lawyerRegistration.php" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
                 text-purple-700 font-bold hover:text-purple-900 
                  hover:bg-purple-200">
                    <span class="material-symbols-outlined">person_add</span>
                    <span>Lawyer Registration</span>
                </a>
            <?php } else { ?>
                <script>
                    document.getElementById("lawyer").addEventListener("click", function (event) {
                        <?php if (!isset($_SESSION['user'])) { ?>
                            // Prevent the link's default behavior
                            event.preventDefault();
                            alert('Login Required!');
                            // Redirect to the login page after the alert
                            window.location.href = 'log.php';
                        <?php } ?>
                        // If session is set, no extra JavaScript runs and the link behaves normally.
                    });
                </script>
            <?php } ?>

            <?php if (isset($_SESSION['user'])) { ?>

                <a href="logout.php" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
 text-purple-700 font-bold hover:text-purple-900 
  hover:bg-purple-200">
                    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
                    <span class="material-symbols-outlined">logout</span>
                    <span>Logout</span>
                </a>

            <?php } else { ?>
                <a href="log.php" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
 text-purple-700 font-bold hover:text-purple-900 
  hover:bg-purple-200">
                    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
                    <span class="material-symbols-outlined">login</span>
                    <span>Login</span>
                </a>

            <?php } ?>
            <button onclick="toggleMoreSidebar()" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
                 text-purple-700 font-bold hover:text-purple-900 
                  hover:bg-purple-200">
                <span class="material-symbols-outlined">
                    more
                </span>
                <span>More</span>
            </button>
        </nav>

        <button class="md:hidden text-indigo-600" onclick="toggleSidebar()">
            &#9776;
        </button>
    </header>

    <!-- Sidebar for More Button -->
    <div id="moreSidebar"
        class="fixed left-0 top-0 w-64 bg-purple-200 h-full rounded-lg shadow-lg transform -translate-x-full transition-transform p-4 z-10">
        <div class="flex items-center px-4 py-2 rounded-lg transition duration-300 
                 text-purple-700 font-bold hover:text-purple-900 
                  hover:bg-purple-500 gap-3">
            <button onclick="toggleMoreSidebar()">
                <span class="text-xl mr-[7px]">✖</span> Close
            </button>
        </div>
        <ul class="mt-4 space-y-4">
            <li><a href="AboutUs.php" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
                 text-purple-700 font-bold hover:text-purple-900 
                  hover:bg-purple-500 gap-3 "><span class="material-symbols-outlined">
                        info</span>About Us</a></li>
            <li><a href="contactus.php" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
                 text-purple-700 font-bold hover:text-purple-900 
                  hover:bg-purple-500 gap-3"><span class="material-symbols-outlined">
                        call</span>Contact Us</a></li>
            <li><a href="LawsRules.php" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
                 text-purple-700 font-bold hover:text-purple-900 
                  hover:bg-purple-500 gap-3"><span class="material-symbols-outlined">
                        gavel</span>Laws & Rules</a></li>
            <li><a href="Emergency.php" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
                 text-purple-700 font-bold hover:text-purple-900 
                  hover:bg-purple-500 gap-3"><span class="material-symbols-outlined">
                        e911_emergency</span>Emergency Helplines</a></li>
            <li><a href="faq.php" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
                            text-purple-700 font-bold hover:text-purple-900 
                             hover:bg-purple-500 gap-3"><span class="material-symbols-outlined">
                        contact_support
                    </span>FAQ</a></li>
        </ul>
    </div>

    <!-- Full Sidebar for Small Screens -->
    <!-- Sidebar -->
    <div id="sidebar"
        class="fixed left-0 top-0 w-64 bg-purple-200 h-full shadow-lg transform -translate-x-full transition-transform p-4 md:hidden">
        <button onclick="toggleSidebar()" class="text-gray-600">&times; Close</button>
        <ul class="mt-4 space-y-4">
            <li><a href="chatbot.php" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
                 text-purple-700 font-bold hover:text-purple-900 
                  hover:bg-purple-200 gap-3"><span class="material-symbols-outlined">chat</span>Get Legal Guidance</a>
            </li>
            <li><a href="lawyerDirectory.php" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
                 text-purple-700 font-bold hover:text-purple-900 
                  hover:bg-purple-200 gap-3"><span class="material-symbols-outlined">group</span>Lawyer Directory</a>
            </li>
            <li><a href="lawyerRegistration.php" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
                 text-purple-700 font-bold hover:text-purple-900 
                  hover:bg-purple-200 gap-3"><span class="material-symbols-outlined">person_add</span>Lawyer
                    Registration</a></li>
            <li><a href="AboutUs.php" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
                 text-purple-700 font-bold hover:text-purple-900 
                  hover:bg-purple-200 gap-3"><span class="material-symbols-outlined">
                        info</span>About Us</a></li>
            <li><a href="contactus.php" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
                 text-purple-700 font-bold hover:text-purple-900 
                  hover:bg-purple-200 gap-3"><span class="material-symbols-outlined">
                        call</span>Contact Us</a></li>
            <li><a href="LawsRules.php" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
                 text-purple-700 font-bold hover:text-purple-900 
                  hover:bg-purple-200 gap-3"><span class="material-symbols-outlined">
                        gavel</span>Laws & Rules</a></li>
            <li><a href="Emergency.php" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
                 text-purple-700 font-bold hover:text-purple-900 
                  hover:bg-purple-200 gap-3"><span class="material-symbols-outlined">e911_emergency</span>Emergency
                    Helplines</a></li>
            <li><a href="faq.php" class="flex items-center px-4 py-2 rounded-lg transition duration-300 
                        text-purple-700 font-bold hover:text-purple-900 
                         hover:bg-purple-200 gap-3"><span class="material-symbols-outlined">
                        contact_support
                    </span>FAQ</a></li>
        </ul>
    </div>

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



</body>

</html>