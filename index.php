<?php
ob_start();
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('includes/header.php');
if (time() - $_SESSION['LoginActivity'] > 3600) {
    echo "<script>alert('Session Expired Please Login Again!');</script>";
    echo '<script>window.location.href=`log.php`</script>  ';
}
?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AILegal Advisor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=add" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    <style>
        html,
        body {
            width: 100%;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            /* Prevent horizontal scrolling */
        }
    </style>


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
            <button onclick="window.location.href='chatbot.php'"
                class="mt-10 bg-purple-700 text-white   text-[15px] px-5 py-2 rounded mb-20 transition-transform duration-300 hover:scale-105 hover:shadow-2xl">Get
                Legal Guidance</button>


        </main>
    </div>


    <div
        class="max-w-6xl mx-auto flex flex-col-reverse lg:flex-row items-center justify-between py-16 px-6 bg-purple-700 rounded-[30px] mt-[60px]">

        <!-- Left Text Section -->
        <div class="text-center lg:text-left max-w-xl">
            <h2 class="text-3xl md:text-4xl font-bold text-yellow-400 mb-4">AI Legal Advisor :</h2>
            <p class="text-xl md:text-3xl text-white font-semibold">your personal legal AI assistant</p>

            <!-- Buttons for Consumers & Lawyers -->
            <div class="mt-6 flex flex-col sm:flex-row sm:space-x-4 space-y-4 sm:space-y-0">
                <span
                    class="bg-gray-300 text-black px-6 py-2 rounded-lg transition-colors duration-300 font-semibold shadow-lg hover:bg-yellow-400">
                    For Consumers
                </span>

                <span
                    class="bg-gray-300 text-black px-6 py-2 rounded-lg transition-colors duration-300 font-semibold shadow-lg hover:bg-yellow-400">
                    For Lawyers
                </span>
            </div>

            <!-- AI Legal Advisor Button -->
            <div class="mt-8">
                <button onclick="window.location.href='chatbot.php'"
                    class="bg-yellow-400 text-black px-8 py-3 rounded-lg font-semibold shadow-lg transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
                    AI Legal Advisor
                </button>
            </div>
        </div>

        <!-- Right Image Section -->
        <div class="flex justify-center lg:justify-end w-full lg:w-1/2 mb-8 lg:mb-0">
            <img src="img/robot.jpg" alt="AI Legal Advisor"
                class="w-64 sm:w-80 md:w-96 rounded-[30px] transition-transform duration-500 hover:scale-110">
        </div>

    </div>

    <div
        class="max-w-6xl mx-auto flex flex-col-reverse lg:flex-row items-center justify-between py-16 px-6 bg-purple-700 rounded-[30px] mt-[60px] shadow-xl">

        <!-- Left Text Section -->
        <div class="text-white max-w-lg w-full">
            <h2 class="text-3xl font-bold mb-6 text-yellow-400">Explore Laws & Legal Rules</h2>
            <ul class="space-y-3">
                <li class="flex items-center gap-2 hover:text-yellow-300 transition-colors duration-300">
                    ✅ Explore the vast world of laws and legal rules that shape our society.
                </li>
                <li class="flex items-center gap-2 hover:text-yellow-300 transition-colors duration-300">
                    ✅ Understand your rights, duties, and the justice system in depth.
                </li>
                <li class="flex items-center gap-2 hover:text-yellow-300 transition-colors duration-300">
                    ✅ Navigate legal complexities with clarity and confidence.
                </li>
                <li class="flex items-center gap-2 hover:text-yellow-300 transition-colors duration-300">
                    ✅ Empower yourself with the knowledge to make informed decisions.
                </li>
            </ul>

            <!-- Explore More Button -->
            <div class="mt-6">
                <button onclick="window.location.href='LawsRules.php'"
                    class="bg-yellow-400 text-black px-8 py-3 rounded-lg font-semibold shadow-lg transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
                    Explore More
                </button>
            </div>
        </div>

        <!-- Right Image Section -->
        <div class="flex justify-center lg:justify-end w-full lg:w-1/2 mb-8 lg:mb-0">
            <img src="img/hammer.jpeg" alt="Legal Hammer"
                class="w-64 sm:w-80 md:w-96 rounded-[30px] transition-transform duration-500 hover:scale-110 shadow-lg">
        </div>

    </div>




    <section class="text-center py-16">
        <!-- <button class="bg-purple-600 text-white px-6 py-2 rounded-lg border border-gray-600 flex item-center gap-2 mx-auto"><span class="material-symbols-outlined">group</span> Users</button> -->
        <h2 class="text-4xl font-semibold mt-6">Who is Legal Advisor AI for?</h2>
        <p class="text-xl font-semibold text-black mt-2 w-[50%] mx-auto">
            Our goal is simple: to make justice widely available. Whether you're a consumer, practicing law, or studying
            it, we're here for you.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto mt-12 px-4">
            <!-- Card 1 -->
            <div
                class="bg-purple-700 p-6 rounded-xl shadow-lg text-center transition-transform duration-300 transform hover:scale-105 flex flex-col justify-between min-h-[400px]">
                <div class="text-2xl"><span class="material-symbols-outlined text-white"
                        style="font-size:larger">person</span></div>
                <h3 class="text-lg font-semibold text-white">AI for Legal Consumers</h3>
                <p class="text-white">
                    From deciphering complex terms to understanding rights, we've got you covered.
                </p>
                <img src="img/consumer.jpg" alt="AI for Legal Consumers" class="w-40 h-40 mx-auto rounded-full">
            </div>

            <!-- Card 2 -->
            <div
                class="bg-purple-700 p-6 rounded-xl shadow-lg text-center transition-transform duration-300 transform hover:scale-105 flex flex-col justify-between min-h-[400px]">
                <div class="text-2xl"><span class="material-symbols-outlined text-white"
                        style="font-size:larger">balance</span></div>
                <h3 class="text-lg font-semibold text-white">AI for Lawyers</h3>
                <p class="text-white">
                    Let us handle the research and paperwork while you elevate client relationships.
                </p>
                <img src="img/lawyer.jpg" alt="AI for Lawyers" class="w-40 h-40 mx-auto rounded-full">
            </div>

            <!-- Card 3 -->
            <div
                class="bg-purple-700 p-6 rounded-xl shadow-lg text-center transition-transform duration-300 transform hover:scale-105 flex flex-col justify-between min-h-[400px]">
                <div class="text-2xl"><span class="material-symbols-outlined text-white"
                        style="font-size:larger">home</span></div>
                <h3 class="text-lg font-semibold text-white">AI for Law Firms</h3>
                <p class="text-white">
                    Streamlining processes and boosting efficiency, we're revolutionizing the way law firms operate.
                </p>
                <img src="img/firm.jpg" alt="AI for Law Firms" class="w-40 h-40 mx-auto rounded-full">
            </div>

            <!-- Card 4 -->
            <div
                class="bg-purple-700 p-6 rounded-xl shadow-lg text-center transition-transform duration-300 transform hover:scale-105 flex flex-col justify-between min-h-[400px]">
                <div class="text-2xl"><span class="material-symbols-outlined text-white"
                        style="font-size:larger">import_contacts</span>
                </div>
                <h3 class="text-lg font-semibold text-white">AI for Law Students</h3>
                <p class="text-white">
                    We've made a perfect learning tool. It helps students prepare for a career in law.
                </p>
                <img src="img/student.jpg" alt="AI for Law Students" class="w-40 h-40 mx-auto rounded-full">
            </div>
        </div>

    </section>


    <section class="text-white py-5 px-6">
        <div class="max-w-6xl mx-auto text-center">
            <button class="border-2 bg-purple-700  px-6 py-2 rounded-full text-lg font-semibold mb-4 text-white ">
                + Advantages
            </button>
            <h2 class="text-3xl md:text-4xl text-black font-bold">Why our AI in law is better?</h2>
            <p class="text-xl text-black mt-2">
                In contrast to others, our LegalTech software is quick, easy, and wallet-friendly.
            </p>
        </div>

        <!-- Feature Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 max-w-6xl mx-auto mt-12">
            <!-- Fast -->
            <div
                class="bg-purple-700 p-6 rounded-lg shadow-lg text-center flex flex-col items-center transform transition-all duration-300 hover:scale-105">
                <span class="text-5xl">⚡</span>
                <h3 class="text-xl font-semibold mt-3 text-white">Fast</h3>
                <p class="text-white mt-2">
                    The fastest online lawyer service, ideal for avoiding expenses and appointments.
                </p>
            </div>

            <!-- Cost-effective -->
            <div
                class="bg-purple-700 p-6 rounded-lg shadow-lg text-center flex flex-col items-center transform transition-all duration-300 hover:scale-105">
                <span class="text-5xl">💲</span>
                <h3 class="text-xl font-semibold mt-3 text-white">Cost-Less</h3>
                <p class="text-white mt-2">
                    Forget the high costs of the traditional law market. The Artificial Intelligence Law Advisor is
                    completely free to use.
                </p>
            </div>

            <!-- 24/7 Support -->
            <div
                class="bg-purple-700 p-6 rounded-lg shadow-lg text-center flex flex-col items-center transform transition-all duration-300 hover:scale-105">
                <span class="text-5xl">⚽</span>
                <h3 class="text-xl font-semibold mt-3 text-white">24/7 Support</h3>
                <p class="text-white mt-2">
                    Our customer support team is always available to assist you with any questions about the platform.
                </p>
            </div>

            <!-- Private -->
            <div
                class="bg-purple-700 p-6 rounded-lg shadow-lg text-center flex flex-col items-center transform transition-all duration-300 hover:scale-105">
                <span class="text-5xl">🔒</span>
                <h3 class="text-xl font-semibold mt-3 text-white">Private</h3>
                <p class="text-white mt-2">
                    We stand firm on privacy, ensuring that users' conversations remain secure and anonymous.
                </p>
            </div>
        </div>

    </section>


    <div class="flex items-center justify-center w-full">
        <div
            class="bg-purple-700 p-6 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105 max-w-6xl w-full m-3">
            <div class="flex items-center mb-4">
                <span class="text-blue-400 text-2xl">🛡️</span>
                <h2 class="text-2xl font-semibold text-yellow-400">Right to Equality</h2>
            </div>
            <ul class="list-disc list-inside space-y-2 text-white">
                <li><span class="font-semibold text-xl">Article 14:</span> Equality before the law and equal protection
                    of the laws within India.</li>
                <li><span class="font-semibold text-xl">Article 15:</span> Prohibition of discrimination on grounds of
                    religion, race, caste, sex, or place of birth.</li>
                <li><span class="font-semibold text-xl">Article 16:</span> Equality of opportunity in matters of public
                    employment.</li>
                <li><span class="font-semibold text-xl">Article 17:</span> Abolition of untouchability and prohibition
                    of its practice.</li>
                <li><span class="font-semibold text-xl">Article 18:</span> Abolition of titles (except academic and
                    military distinctions).</li>
            </ul>
        </div>
    </div>

    <div class="flex items-center justify-center w-full">
        <div
            class="bg-purple-700 p-6 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105 max-w-6xl w-full m-3">
            <div class="flex items-center mb-4">
                <span class="text-blue-400 text-2xl">🛡️</span>
                <h2 class="text-2xl font-semibold text-yellow-400">Right to Freedom</h2>
            </div>
            <ul class="list-disc list-inside space-y-2 text-white">
                <li><span class="font-semibold text-xl">Article 19:</span> Six freedoms including speech, assembly,
                    association, movement, residence, and profession.</li>
                <li><span class="font-semibold text-xl">Article 20:</span> Protection in respect of conviction for
                    offenses (no double jeopardy, no ex post facto law).</li>
                <li><span class="font-semibold text-xl">Article 21:</span> Right to life and personal liberty.</li>
                <li><span class="font-semibold text-xl">Article 22:</span> Right to education (free and compulsory
                    education for children aged 6–14 years).</li>
                <li><span class="font-semibold text-xl">Article 23:</span> Protection against arrest and detention in
                    certain cases.</li>
            </ul>
        </div>
    </div>

    <div class="flex items-center justify-center w-full">
        <div
            class="bg-purple-700 p-6 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105 max-w-6xl w-full m-3">
            <div class="flex items-center mb-4">
                <span class="text-blue-400 text-2xl">🛡️</span>
                <h2 class="text-2xl font-semibold text-yellow-400">Right against Exploitation</h2>
            </div>
            <ul class="list-disc list-inside space-y-2 text-white">
                <li><span class="font-semibold text-xl">Article 23:</span> Prohibition of human trafficking and forced
                    labor.</li>
                <li><span class="font-semibold text-xl">Article 24:</span> Prohibition of child labor in hazardous
                    industries and occupations.</li>
            </ul>
        </div>
    </div>

    <div class="flex items-center justify-center w-full">
        <div
            class="bg-purple-700 p-6 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105 max-w-6xl w-full m-3">
            <div class="flex items-center mb-4">
                <span class="text-blue-400 text-2xl">🛡️</span>
                <h2 class="text-2xl font-semibold text-yellow-400">Right to Freedom of Religion</h2>
            </div>
            <ul class="list-disc list-inside space-y-2 text-white">
                <li><span class="font-semibold text-xl">Article 25:</span> Freedom of conscience and the right to freely
                    profess, practice, and propagate religion.</li>
                <li><span class="font-semibold text-xl">Article 26:</span> Freedom to manage religious affairs.</li>
                <li><span class="font-semibold text-xl">Article 27:</span> Freedom from payment of taxes for promotion
                    of any religion.</li>
                <li><span class="font-semibold text-xl">Article 28:</span> Freedom from attending religious instruction
                    in educational institutions wholly funded by the State.</li>
            </ul>
        </div>
    </div>

    <div class="flex items-center justify-center w-full">
        <div
            class="bg-purple-700 p-6 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105 max-w-6xl w-full m-3">
            <div class="flex items-center mb-4">
                <span class="text-blue-400 text-2xl">🛡️</span>
                <h2 class="text-2xl font-semibold text-yellow-400">Cultural and Educational Rights</h2>
            </div>
            <ul class="list-disc list-inside space-y-2 text-white">
                <li><span class="font-semibold text-xl">Article 29:</span> Protection of the interests of minorities to
                    preserve their culture, language, or script.</li>
                <li><span class="font-semibold text-xl">Article 30:</span> Right of minorities to establish and
                    administer educational institutions.</li>
            </ul>
        </div>
    </div>

    <div class="flex items-center justify-center w-full">
        <div
            class="bg-purple-700 p-6 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105 max-w-6xl w-full m-3">
            <div class="flex items-center mb-4">
                <span class="text-blue-400 text-2xl">🛡️</span>
                <h2 class="text-2xl font-semibold text-yellow-400">Right to Constitutional Remedies</h2>
            </div>
            <ul class="list-disc list-inside space-y-2 text-white">
                <li><span class="font-semibold text-xl">Article 32:</span> Right to approach the Supreme Court or High
                    Courts for enforcement of Fundamental Rights.</li>
            </ul>
        </div>
    </div>

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
                <p class="mt-2 text-gray-400">Email: ailegaladvisor01.com</p>
                <p class="text-gray-400">Phone: (555) 123-4567</p>
            </div>
        </div>
    </footer>

</body>

</html>