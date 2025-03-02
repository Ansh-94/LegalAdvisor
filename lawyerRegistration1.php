<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('includes/header.php');
include('includes/db.php');
include('includes/security.php');


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

$message = "";

if (isset($_GET['LawyerID'])) {
    $LawyerID = intval($_GET['LawyerID']);
    if (isset($_POST['btnUpdate'])) {
        if ('Update' == $_POST["btnUpdate"]) {


            $LawyerID = intval($_POST["LawyerID"]);
            $FullName = $_POST["FullName"];
            $BarRegistration = encryptData($_POST["BarRegistration"]);
            $Specialization = $_POST["Specialization"];
            $Experience = intval($_POST["Experience"]);
            $StateMasterID = intval($_POST["StateName"]);
            $CityMasterID = intval($_POST["CityName"]);
            $Email = encryptData($_POST["Email"]);
            $Phone = encryptData($_POST["Phone"]);

            $ConsultationFee = floatval($_POST["ConsultationFee"]);
            $HourlyRate = floatval($_POST["HourlyRate"]);
            $Bio = $_POST["Bio"];
            $RecentCases = $_POST["RecentCases"];
            $ProfilePicture = $_POST["ProfilePicture"];

            // Fetch existing profile picture if no new image is uploaded
            $stmt = $conn->prepare("SELECT ProfilePicture FROM lawyers WHERE LawyerID = ?");
            if (!$stmt) {
                die("Prepare failed: " . $conn->error);
            }
            $stmt->bind_param("i", $LawyerID);
            $stmt->execute();
            $stmt->bind_result($existingProfilePicture);
            $stmt->fetch();
            $stmt->close();

            $ProfilePicture = $existingProfilePicture;

            // Handle file upload
            if (!empty($_FILES["ProfilePicture"]["name"])) {
                $target_dir = "uploads/";
                $ProfilePicture = basename($_FILES["ProfilePicture"]["name"]);
                $target_file = $target_dir . $ProfilePicture;

                if (move_uploaded_file($_FILES["ProfilePicture"]["tmp_name"], $target_file)) {
                    echo "File uploaded successfully.";
                } else {
                    echo "File upload failed.";
                }
            }

            // Update query
            $stmt = $conn->prepare("UPDATE lawyers SET 
            FullName = ?, 
            BarRegistration = ?, 
            Specialization = ?, 
            Experience = ?, 
            StateMasterID = ?, 
            CityMasterID = ?, 
            Email = ?, 
            Phone = ?, 
            ConsultationFee = ?, 
            HourlyRate = ?, 
            Bio = ?, 
            RecentCases = ?, 
            ProfilePicture = ? 
        WHERE LawyerID = ?");

            if (!$stmt) {
                die("Prepare failed: " . $conn->error);
            }

            $stmt->bind_param(
                "sssisissddsssi",
                $FullName,
                $BarRegistration,
                $Specialization,
                $Experience,
                $StateMasterID,
                $CityMasterID,
                $Email,
                $Phone,
                $ConsultationFee,
                $HourlyRate,
                $Bio,
                $RecentCases,
                $ProfilePicture,
                $LawyerID
            );

            if ($stmt->execute()) {
                echo "<script>alert('Record Updated Successfully'); window.location.href='lawyerDirectory.php';</script>";
            } else {
                die("Execution failed: " . $stmt->error);
            }

            $stmt->close();
            $conn->close();
        } else {
            if (!$stmt->execute()) {
                die("Execution failed: " . $stmt->error . " | SQL: " . $stmt->sqlstate);
            }

        }
    }
}

if (empty($_GET["LawyerID"])) {
} else {
    $btn = "Update";
    $stmt = "Select * from lawyers where LawyerID=" . $_GET["LawyerID"];
    $result = $conn->query($stmt);
    while ($row = $result->fetch_assoc()) {

        $LawyerID = $row['LawyerID'];
        $FullName = $row['FullName'];
        $BarRegistration = decryptData($row["BarRegistration"]);
        $Specialization = $row["Specialization"];
        $Experience = $row["Experience"];
        $StateMasterID = $row["StateMasterID"];
        $CityMasterID = $row["CityMasterID"];
        $Email = decryptData($row["Email"]);
        $Phone = decryptData($row["Phone"]);
        $ConsultationFee = $row["ConsultationFee"];
        $HourlyRate = $row["HourlyRate"];
        $Bio = $row["Bio"];
        $RecentCases = $row["RecentCases"];
        $ProfilePicture = $row["ProfilePicture"];
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
        <form class="grid grid-cols-2 gap-4 mt-6 " method="POST" action="" enctype="multipart/form-data">
            <input type="hidden" name="LawyerID" value="<?php echo $LawyerID; ?>">

            <input type="text" placeholder="Full Name" name="FullName" class="border p-2 rounded"
                value="<?php echo "$FullName"; ?>" required>

            <input type="text" placeholder="Bar Council Registration Number" name="BarRegistration"
                class="border p-2 rounded" value="<?php echo "$BarRegistration"; ?>" minlength="10" maxlength="15"
                required>
            <select class="border p-2 rounded" name="Specialization" id="Specialization">
                <option>Select Specialization</option>
                <option value="CriminalLaw" <?php if ($Specialization == "CriminalLaw")
                    echo "selected"; ?>>Criminal Law
                </option>
                <option value="CivilRights" <?php if ($Specialization == "CivilRights")
                    echo "selected"; ?>>Civil Rights
                </option>
                <option value="CorporateLaw" <?php if ($Specialization == "CorporateLaw")
                    echo "selected"; ?>>Corporate
                    Law</option>
                <option value="CyberLaw" <?php if ($Specialization == "CyberLaw")
                    echo "selected"; ?>>Cyber Law</option>
                <option value="FamilyLaw" <?php if ($Specialization == "FamilyLaw")
                    echo "selected"; ?>>Family Law
                </option>
                <option value="TaxLaw" <?php if ($Specialization == "TaxLaw")
                    echo "selected"; ?>>Tax Law</option>
                <option value="IntellectualPropertyLaw" <?php if ($Specialization == "IntellectualPropertyLaw")
                    echo "selected"; ?>>Intellectual Property Law</option>
                <option value="RealEstateLaw" <?php if ($Specialization == "RealEstateLaw")
                    echo "selected"; ?>>RealEstate
                    Law</option>
                <option value="ImmigrationLaw" <?php if ($Specialization == "ImmigrationLaw")
                    echo "selected"; ?>>Immigration Law</option>
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
            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    function loadData(type, StateMasterID) {
                        $.ajax({
                            url: "load-cs.php",
                            type: "POST",
                            data: { type: type, id: StateMasterID },
                            success: function (data) {
                                if (type == "CityData") {
                                    $("#S2").html(data);
                                } else {
                                    $("#S1").append(data);
                                }

                            }
                        });
                    }

                    loadData();

                    $("#S1").on("change", function () {
                        var country = $("#S1").val();

                        if (country != "") {
                            loadData("CityData", country);
                        } else {
                            $("#S2").html("");
                        }


                    })
                });

            </script>

            <?php

            $query = "SELECT citymaster.CityMasterID, citymaster.CityName 
                      FROM citymaster 
                      INNER JOIN statemaster ON citymaster.StateMasterID = statemaster.StateMasterID 
                      WHERE citymaster.StateMasterID = $StateMasterID AND citymaster.Flag = 0";
            $result = mysqli_query($conn, $query);

            ?>

            <select name="CityName" required="" id="S2" class="border p-2 rounded"
                value='<?php echo "$CityMasterID"; ?>'>
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
                    <?php echo htmlspecialchars($Bio); ?>
            </textarea>

            <textarea placeholder="About Recent Cases" name="RecentCases" class="border p-2 rounded col-span-2">
                    <?php echo htmlspecialchars(("$RecentCases")) ?>
            </textarea>

            <div class="border-dashed border-2 p-4 rounded col-span-2 text-center">
                <p class="text-gray-600">Upload a file or drag and drop</p>
                <p class="text-sm text-gray-400">PNG, JPG, GIF up to 10MB</p>

                <!-- Image Preview -->
                <?php if (!empty($ProfilePicture)) { ?>
                    <img src="uploads/<?= htmlspecialchars($ProfilePicture) ?>" alt="Lawyer Image"
                        class="w-[120px] h-[120px] object-cover ml-[330px] mt-2 mb-2">
                <?php } else { ?>
                    <img id="imagePreview" src="default.png"
                        class="mt-2 mx-auto w-32 h-32 rounded-full object-cover hidden">
                <?php } ?>

                <input type="file" name="ProfilePicture" accept="image/*" class="mt-2 ml-[70px]"
                    onchange="previewImage(event)">
            </div>

            <script>
                function previewImage(event) {
                    var reader = new FileReader();
                    reader.onload = function () {
                        var img = document.getElementById('imagePreview');
                        img.src = reader.result;
                        img.classList.remove("hidden");
                    };
                    reader.readAsDataURL(event.target.files[0]);
                }
            </script>

            <button type="Submit" name="btnUpdate" value="Update"
                class="bg-purple-700 text-white py-2 rounded col-span-2">Update</button>


        </form>
</body>

</html>