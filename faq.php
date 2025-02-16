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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="css\faq.css" rel="stylesheet">
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
        <div class="bg-white w-full rounded-lg shadow-lg overflow-hidden">
            <!-- Header Section with 10px Curviness -->
            <div class="bg-purple-700 text-white text-center py-8 rounded-t-[10px]">
                <h1 class="display-4"><b>AI Legal Advisor</b></h1>
                <p class="lead"><i>FAQ which use for your general knowledge or help you how to operate and makinging you
                        friendy with that.</i></p>
            </div>


            <div class="boxaccordion">
                <div class="containerwidth">
                    <div class="wrapper">
                        <button class="toggle">What is Legal Advisory?<i class="fas fa-plus icon"></i></button>
                        <div class="content">
                            <p>Legal Advisory is an online platform that connects users with experienced legal
                                professionals for guidance and legal assistance.</p>
                        </div>
                    </div>
                    <div class="wrapper">
                        <button class="toggle">How does this platform work?<i class="fas fa-plus icon"></i></button>
                        <div class="content">
                            <p>Users can browse legal services, consult lawyers, and get legal advice. Lawyers can also
                                register to offer their services.</p>
                        </div>
                    </div>
                    <div class="wrapper">
                        <button class="toggle"> What legal issues can I get help with?<i
                                class="fas fa-plus icon"></i></button>
                        <div class="content">
                            <p>You can seek legal advice on various matters, including civil disputes, business law,
                                criminal law, family law, and more.</p>
                        </div>
                    </div>
                    <div class="wrapper">
                        <button class="toggle">How can I register as a lawyer on this platform?<i
                                class="fas fa-plus icon"></i></button>
                        <div class="content">
                            <p>Click on the “Join as a Lawyer” button and complete the registration process by providing
                                your credentials and experience.</p>
                        </div>
                    </div>
                    <div class="wrapper">
                        <button class="toggle">What should I do if I face issues with the platform?<i
                                class="fas fa-plus icon"></i></button>
                        <div class="content">
                            <p>If you encounter any technical issues, please report them to our support team through the
                                Contact page.</p>
                        </div>
                    </div>
                    <div class="wrapper">
                        <button class="toggle"> Are there any registration fees for lawyers?<i
                                class="fas fa-plus icon"></i></button>
                        <div class="content">
                            <p>The platform may have different membership plans for lawyers. Please check our pricing
                                details for more information.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer with 5px Purple Rounded Border -->
            <div class="bg-purple-700 text-white text-center py-4 rounded-b-[10px]">
                <p class="text-center">&copy; 2025 AI Lawyer Advisor. All Rights Reserved.</p>
                </footer>
            </div>
            <script>
                //<![CDATA[
                let toggles = document.getElementsByClassName("toggle");
                let contentDiv = document.getElementsByClassName("content");
                let icons = document.getElementsByClassName("icon");

                for (let i = 0; i < toggles.length; i++) {
                    toggles[i].addEventListener("click", () => {
                        if (parseInt(contentDiv[i].style.height) != contentDiv[i].scrollHeight) {
                            contentDiv[i].style.height = contentDiv[i].scrollHeight + "px";
                            toggles[i].style.color = "#0084e9";
                            icons[i].classList.remove("fa-plus");
                            icons[i].classList.add("fa-minus");
                        } else {
                            contentDiv[i].style.height = "0px";
                            toggles[i].style.color = "#111130";
                            icons[i].classList.remove("fa-minus");
                            icons[i].classList.add("fa-plus");
                        }

                        for (let j = 0; j < contentDiv.length; j++) {
                            if (j !== i) {
                                contentDiv[j].style.height = 0;
                                toggles[j].style.color = "#111130";
                                icons[j].classList.remove("fa-minus");
                                icons[j].classList.add("fa-plus");
                            }
                        }
                    });
                }
                //]]>ṇ  
            </script>


</body>

</html>