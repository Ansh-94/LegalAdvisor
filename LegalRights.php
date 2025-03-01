<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include("includes/header.php");
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


        <div class="flex items-center justify-center w-full">
            <div
                class="bg-purple-700 p-6 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105 max-w-6xl w-full m-3">
                <div class="flex items-center mb-4">
                    <span class="text-blue-400 text-2xl">🛡️</span>
                    <h2 class="text-2xl font-semibold text-yellow-400">Right to Equality</h2>
                </div>
                <ul class="list-disc list-inside space-y-2 text-white">
                    <li><span class="font-semibold text-xl">Article 14:</span> Equality before the law and equal
                        protection
                        of the laws within India.</li>
                    <li><span class="font-semibold text-xl">Article 15:</span> Prohibition of discrimination on grounds
                        of
                        religion, race, caste, sex, or place of birth.</li>
                    <li><span class="font-semibold text-xl">Article 16:</span> Equality of opportunity in matters of
                        public
                        employment.</li>
                    <li><span class="font-semibold text-xl">Article 17:</span> Abolition of untouchability and
                        prohibition
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
                    <li><span class="font-semibold text-xl">Article 23:</span> Protection against arrest and detention
                        in
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
                    <li><span class="font-semibold text-xl">Article 23:</span> Prohibition of human trafficking and
                        forced
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
                    <li><span class="font-semibold text-xl">Article 25:</span> Freedom of conscience and the right to
                        freely
                        profess, practice, and propagate religion.</li>
                    <li><span class="font-semibold text-xl">Article 26:</span> Freedom to manage religious affairs.</li>
                    <li><span class="font-semibold text-xl">Article 27:</span> Freedom from payment of taxes for
                        promotion
                        of any religion.</li>
                    <li><span class="font-semibold text-xl">Article 28:</span> Freedom from attending religious
                        instruction
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
                    <li><span class="font-semibold text-xl">Article 29:</span> Protection of the interests of minorities
                        to
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
                    <li><span class="font-semibold text-xl">Article 32:</span> Right to approach the Supreme Court or
                        High
                        Courts for enforcement of Fundamental Rights.</li>
                </ul>
            </div>
        </div>




        <!-- Footer -->
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