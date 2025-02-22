<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('includes/header.php');
include('includes/db.php');


// Check if LawyerID is set in GET or POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['LawyerID'])) {
    $LawyerID = intval($_POST['LawyerID']);  // Ensure it's an integer
} elseif (isset($_GET['LawyerID'])) {
    $LawyerID = intval($_GET['LawyerID']);  // Ensure it's an integer
} else {
    die("❌ Error: No Lawyer selected! Please go back and select a Lawyer.");
}

// SQL Query to Fetch Patient, Doctor, Hospital, and Treatment Data
$query = "SELECT l.LawyerID,
                 l.FullName,
                 l.BarRegistration,
                 l.Specialization,
                 l.Experience,
                 l.StateMasterID,
                 l.CityMasterID,
                 sm.StateName,
                 cm.CityName,
                 l.Email,
                 l.Phone,
                 l.ConsultationFee,
                 l.HourlyRate,
                 l.Bio,
                 l.RecentCases,
                 l.ProfilePicture  
                 FROM lawyers l 
                 INNER JOIN statemaster sm ON l.StateMasterID = sm.StateMasterID
                 INNER JOIN citymaster cm ON l.CityMasterID = cm.CityMasterID  -- FIXED JOIN
                 WHERE l.LawyerID = ?
 ";

// Prepare and execute the query
$stmt = mysqli_prepare($conn, $query);
if (!$stmt) {
    die("❌ Error: Failed to prepare statement.");
}

// Bind parameter (ensure correct data type)
mysqli_stmt_bind_param($stmt, "i", $LawyerID);

// Execute statement
if (!mysqli_stmt_execute($stmt)) {
    die("❌ Error: Execution failed.");
}

// Get results
$result = mysqli_stmt_get_result($stmt);

// Fetch data
if ($result && mysqli_num_rows($result) > 0) {
    $lawyerprofile = mysqli_fetch_assoc($result);
} else {
    die("❌ Error: No records found for Cancer ID $LawyerID.");
}

// ... (Your existing code for $LawyerID and the main query above)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Legal Advisor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-b from-purple-100 to-white min-h-screen flex flex-col items-center">

    <!-- Outer Container with Gradient Background -->
    <div
        class="container mx-auto p-6 shadow-lg rounded-xl mt-[50px] bg-purple-700 backdrop-blur-lg border border-gray-300 lg:w-[80vw]">

        <!-- Lawyer Details Card -->
        <!-- <div class="bg-white/80 shadow-lg p-6 rounded-xl border border-purple-200"> -->
        <div
            class="bg-white/80 shadow-lg p-6 rounded-xl border border-purple-200 transition-all duration-300 hover:scale-y-105">


            <h3 class="text-2xl font-bold text-blue-900 mb-4 text-center">👨‍⚖️ Lawyer Details</h3>

            <div class="flex flex-wrap md:flex-nowrap gap-6 items-center">
                <!-- Lawyer Image -->
                <div class="w-40 h-40 flex-shrink-0 rounded-xl overflow-hidden shadow-md border border-gray-300">
                    <img src="uploads/<?= htmlspecialchars($lawyerprofile['ProfilePicture']) ?>" alt="Lawyer Image"
                        class="w-full h-full object-cover">
                </div>

                <!-- Lawyer Details -->
                <div class="flex-1 space-y-2">
                    <p class="text-lg font-semibold text-black">
                        <strong>👤 Full Name:</strong> <?= htmlspecialchars($lawyerprofile['FullName']); ?>
                    </p>
                    <p class="text-black hover:bg-purple-500 py-1 rounded-full">
                        <strong>🆔 Bar Registration:</strong>
                        <?= htmlspecialchars($lawyerprofile['BarRegistration']); ?>
                    </p>
                    <p class="text-black hover:bg-purple-500 py-1 rounded-full">
                        <strong>⚖️ Specialization:</strong> <?= htmlspecialchars($lawyerprofile['Specialization']); ?>
                    </p>
                    <p class="text-black hover:bg-purple-500 py-1 rounded-full">
                        <strong>📅 Experience:</strong> <?= htmlspecialchars($lawyerprofile['Experience']); ?> Years
                    </p>

                </div>
            </div>
        </div>
    </div>


    <div
        class="container mx-auto p-6 shadow-lg rounded-xl mt-[10px] bg-purple-700 backdrop-blur-lg border border-gray-300 lg:w-[80vw]">
        <!-- Additional Details -->
        <div class="bg-white/80 shadow-lg p-6 rounded-xl border border-purple-200 hover:scale-y-105 ">
            <div class="flex-1 space-y-1">
                <p class="text-black hover:bg-purple-500 py-1 rounded-full">
                    <strong>📍 State:</strong> <?= htmlspecialchars($lawyerprofile['StateName']); ?>
                </p>

                <p class="text-black hover:bg-purple-500 py-1 rounded-full">
                    <strong>🏙️ City:</strong> <?= htmlspecialchars($lawyerprofile['CityName']) ?>
                </p>
                <p class="text-black hover:bg-purple-500 py-1 rounded-full"><strong>📧 Email:</strong>
                    <?= htmlspecialchars($lawyerprofile['Email']); ?></p>
                <p class="text-black hover:bg-purple-500 py-1 rounded-full"><strong>📞 Contact No:</strong>
                    <?= htmlspecialchars($lawyerprofile['Phone']); ?></p>
                <p class="text-black hover:bg-purple-500 py-1 rounded-full"><strong>💰 Consultation Fee:</strong>
                    <?= htmlspecialchars($lawyerprofile['ConsultationFee']); ?></p>
                <p class="text-black hover:bg-purple-500 py-1 rounded-full"><strong>⏳ Hourly Rate:</strong>
                    <?= htmlspecialchars($lawyerprofile['HourlyRate']); ?></p>
                <p class="text-black hover:bg-purple-500 py-1 rounded-full"><strong>📖 Bio:</strong>
                    <?= htmlspecialchars($lawyerprofile['Bio']); ?></p>
                <p class="text-black hover:bg-purple-500 py-1 rounded-full"><strong>⚖️ Recent Cases:</strong>
                    <?= htmlspecialchars($lawyerprofile['RecentCases']); ?></p>
            </div>
            <!-- Edit Profile Button -->
            <?php if ($_SESSION['UserType'] == 'Lawyer') { ?>
                <form action="lawyerRegistration1.php" method="GET" class="mt-4 text-center">
                    <input type="hidden" name="LawyerID" value="<?= htmlspecialchars($lawyerprofile['LawyerID']); ?>">
                    <button type="submit"
                        class="bg-purple-700 text-white rounded-xl text-lg px-6 py-2 hover:bg-purple-500 transition duration-300 shadow-md transform hover:scale-105">
                        ✏️ Edit Profile
                    </button>
                </form>
            <?php } else {
            } ?>
        </div>

    </div>
</body>


</html>