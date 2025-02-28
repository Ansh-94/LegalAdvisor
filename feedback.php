<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Database Connection
// $conn = new mysqli("localhost", "root", "", "your_database_name");
include('includes/db.php');
include('includes/header.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $message = $conn->real_escape_string($_POST["message"]);

    $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Thank you for your feedback!";
    } else {
        $_SESSION['error'] = "Error: " . $conn->error;
    }
}

// Fetch the 10 most recent feedback entries
$feedbackQuery = "SELECT name, message, created_at FROM feedback ORDER BY created_at DESC LIMIT 10";
$feedbackResult = $conn->query($feedbackQuery);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - AI Lawyer Advisor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-purple-100 flex items-center justify-center min-h-screen p-4 ">
    <!-- 
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full"> -->
    <div class="bg-white shadow-lg rounded-lg p-8 w-1/2 mx-auto mt-[2%]">
        <h2 class="text-2xl font-bold text-purple-700 text-center">Give Us Your Feedback</h2>

        <?php if (isset($_SESSION['success'])): ?>
            <p class="text-green-600 text-center mt-2"><?php echo $_SESSION['success'];
            unset($_SESSION['success']); ?></p>
        <?php elseif (isset($_SESSION['error'])): ?>
            <p class="text-red-600 text-center mt-2"><?php echo $_SESSION['error'];
            unset($_SESSION['error']); ?></p>
        <?php endif; ?>

        <!-- Feedback Form -->
        <form action="" method="POST" class="mt-6">
            <div class="mb-4">
                <label class="block text-gray-700">Your Name:</label>
                <input type="text" name="name" required class="w-full p-2 border rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Your Email:</label>
                <input type="email" name="email" required class="w-full p-2 border rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Your Feedback:</label>
                <textarea name="message" required class="w-full p-2 border rounded-lg"></textarea>
            </div>

            <button type="submit" class="bg-purple-700 text-white py-2 px-4 rounded-lg w-full hover:bg-purple-900">
                Submit Feedback
            </button>
        </form>

        <!-- Display Recent Feedback -->
        <h3 class="text-xl font-bold text-purple-700 mt-8 text-center">Recent Feedback</h3>
        <div class="mt-4 space-y-4 h-[200px] overflow-y-auto">

            <?php if ($feedbackResult->num_rows > 0): ?>
                <?php while ($row = $feedbackResult->fetch_assoc()): ?>
                    <div class="bg-gray-200 p-4 rounded-lg shadow">
                        <p class="font-semibold"><?php echo htmlspecialchars($row['name']); ?></p>
                        <p class="text-gray-700"><?php echo htmlspecialchars($row['message']); ?></p>
                        <p class="text-xs text-gray-500 text-right">
                            <?php echo date("F j, Y, g:i a", strtotime($row['created_at'])); ?>
                        </p>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p class="text-gray-600 text-center">No feedback yet.</p>
            <?php endif; ?>
        </div>
    </div>

</body>

</html>