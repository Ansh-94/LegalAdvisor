<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('includes/header.php');
include('includes/db.php');


$LawyerID = "";
$FullName = "";
$BarRegistration = "";
$Specialization = "";
$Experience = "";
$StateMasterID = "";
$CityMasterID = "";
$Email = "";
$Phone = "";
$ConsultationFee = "";
$HourlyRate = "";
$Bio = "";
$RecentCases = "";
$ProfilePicture = "";
$CreatedAt = "";
$btn = "Register";
$message = "";


if (isset($_POST["btnRegister"]) && $_POST["btnRegister"] == 'Update') {


    $LawyerID = $_POST["LawyerID"];
    $FullName = $_POST["FullName"];
    $BarRegistration = $_POST["BarRegistration"];
    $Specialization = $_POST["Specialization"];
    $Experience = $_POST["Experience"];
    $StateName = $_POST["StateName"];
    $CityName = $_POST["CityName"];
    $Email = $_POST["Email"];
    $Phone = $_POST["Phone"];
    $ConsultationFee = $_POST["ConsultationFee"];
    $HourlyRate = $_POST["HourlyRate"];
    $Bio = $_POST["Bio"];
    $RecentCases = $_POST["RecentCases"];

    // Handle file upload
    $ProfilePicture = $_FILES["ProfilePicture"]["name"];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["ProfilePicture"]["name"]);

    if (!empty($ProfilePicture)) {
        move_uploaded_file($_FILES["ProfilePicture"]["tmp_name"], $target_file);
    }

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("
        UPDATE lawyers SET 
            FullName = ?, 
            BarRegistration = ?, 
            Specialization = ?, 
            Experience = ?, 
            StateMasterID = ?, 
            CityMasterID = ?, 
            Email = ?, 
            ConsultationFee = ?, 
            HourlyRate = ?, 
            Bio = ?, 
            RecentCases = ?, 
            ProfilePicture = ? 
        WHERE LawyerID = ?
    ");

    $stmt->bind_param(
        "ssssssssssssi",
        $FullName,
        $BarRegistration,
        $Specialization,
        $Experience,
        $StateName,
        $CityName,
        $Email,
        $ConsultationFee,
        $HourlyRate,
        $Bio,
        $RecentCases,
        $ProfilePicture,
        $LawyerID
    );

    if ($stmt->execute()) {
        echo "<script>alert('Record Updated Successfully'); window.location.href='lawyers_list.php';</script>";
    } else {
        echo "<script>alert('Error updating record: " . $conn->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}


if (empty($_GET["LawyerID"])) {
} else {
    $btn = "Update";
    $stmt = "Select * from lawyers where LawyerID=" . $_GET["LawyerID"];
    $result = $conn->query($stmt);
    while ($row = $result->fetch_assoc()) {

        $LawyerID = $row['LawyerID'];
        $FullName = $row['FullName'];
        $BarRegistration = $row["BarRegistration"];
        $Specialization = $row["Specialization"];
        $Experience = $row["Experience"];
        $StateMasterID = $row["StateMasterID"];
        $CityMasterID = $row["CityMasterID"];
        $Email = $row["Email"];
        $Phone = $row["Phone"];
        $ConsultationFee = $row["ConsultationFee"];
        $HourlyRate = $row["HourlyRate"];
        $Bio = $row["Bio"];
        $RecentCases = $row["RecentCases"];
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawyer Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=add" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
</head>

<body class="bg-gray-100">


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

    <div class="max-w-4xl mx-auto bg-white p-8 mt-10 rounded shadow">
        <h2 class="text-2xl font-bold">Lawyer Registration</h2>
        <form class="grid grid-cols-2 gap-4 mt-6 " method="POST" action="lawyerRegistration.php"
            enctype="multipart/form-data">

            <input type="text" placeholder="Full Name" name="FullName" class="border p-2 rounded"
                value="<?php echo "$FullName"; ?>" required>

            <input type="text" placeholder="Bar Council Registration Number" name="BarRegistration"
                class="border p-2 rounded" value="<?php echo "$BarRegistration"; ?>" minlength="10" maxlength="15"
                required>
            <select class="border p-2 rounded " name="Specialization" value="<?php echo "$Specialization"; ?>">
                <option>Select Specialization</option>
                <option values="CriminalLaw">Criminal Law</option>
                <option value="CivilRights">Civil Rights</option>
                <option value="CorporateLaw">Corporate Law</option>
            </select>
            <input type="number" name="Experience" placeholder="Years of Experience"
                value="<?php echo "$Experience"; ?>" class="border p-2 rounded" required>
            <?php
            $query = "Select * from statemaster where Flag=0";
            $result = mysqli_query($conn, $query);

            ?>
            <select id="S1" name="StateName" required="" class="border p-2 rounded "
                value=" <?php echo $StateMasterID; ?>">
                <option>----State----</option>
                <?php
                while ($data = mysqli_fetch_array($result)) {
                    if ($data[0] == $_GET['StateMasterID'] || $data[0] == $StateMasterID) {
                        echo "<option value='$data[0]' selected> $data[1] </option>";
                    } else {
                        echo "<option value='$data[0]'> $data[1] </option>";
                    }
                }

                ?>

            </select>

            <?php

            $query = "SELECT citymaster.CityMasterID, citymaster.CityName 
                      FROM citymaster 
                      INNER JOIN statemaster ON citymaster.StateMasterID = statemaster.StateMasterID 
                      WHERE citymaster.StateMasterID = $StateMasterID AND citymaster.Flag = 0";
            $result = mysqli_query($conn, $query);

            ?>

            <select name="CityName" required="" class="border p-2 rounded" value='<?php echo "$CityMasterID"; ?>'>
                <option value="" selected>-----All City Name-----</option>
                <?php
                while ($data = mysqli_fetch_array($result)) {
                    if ($data[0] == $_GET['CityMasterID'] || $data[0] == $CityMasterID) {
                        echo "<option value='$data[0]' selected> $data[1] </option>";
                    } else {
                        echo "<option value='$data[0]'> $data[1] </option>";
                    }
                }

                ?>
            </select>
            <input type="email" name="Email" placeholder="Email" value="<?php echo "$Email"; ?>"
                class="border p-2 rounded" required>
            <input type="tel" name="Phone" placeholder="Phone" value="<?php echo "$Phone"; ?>"
                class="border p-2 rounded" minlength="10" maxlength="10">
            <input type="number" name="ConsultationFee" placeholder="Consultation Fee"
                value="<?php echo "$ConsultationFee"; ?>" class="border p-2 rounded">
            <input type="number" name="HourlyRate" placeholder="Hourly Rate" value="<?php echo "$HourlyRate"; ?>"
                class="border p-2 rounded">
            <textarea placeholder="Professional Bio" name="Bio" class="border p-2 rounded col-span-2">
                    <?php echo htmlspecialchars("$Bio"); ?>
            </textarea>

            <textarea placeholder="About Recent Cases" name="RecentCases" class="border p-2 rounded col-span-2">
                    <?php echo htmlspecialchars(("$RecentCases")) ?>
            </textarea>

            <div class="border-dashed border-2 p-4 rounded col-span-2 text-center">
                <p class="text-gray-600">Upload a file or drag and drop</p>
                <p class="text-sm text-gray-400">PNG, JPG, GIF up to 10MB</p>
                <input type="file" name="ProfilePicture" accept="image/*" class="mt-2">
            </div>
            <!-- <button type="Submit" name="btnRegister" value="Register"
                class="bg-purple-700 text-white py-2 rounded col-span-2">Register</button> -->
            <input class="bg-purple-700 text-white py-2 rounded col-span-2" type="submit" name="btnRegister"
                id="btnRegister" value="<?php echo $btn; ?>" input type='hidden' value='".$row["LawyerID"]."'
                name='LawyerID' id='LayerID'></input>


        </form>
</body>

</html>