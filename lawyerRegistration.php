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

if (isset($_POST['btnRegister'])) {
    if ('Register' == $_POST["btnRegister"]) {

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
        $ProfilePicture = $_FILES["ProfilePicture"]['name'];
        $target_dir = 'uploads/';
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        move_uploaded_file($_FILES['ProfilePicture']['tmp_name'], $target_dir . $ProfilePicture);



        // Check for duplicates
        $duplicate_message = "";
        $fields = [
            "Email" => $Email,
            "Phone" => $Phone,
            "BarRegistration" => $BarRegistration
        ];

        foreach ($fields as $column => $value) {
            $query = "SELECT 1 FROM lawyers WHERE $column = ?";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, "s", $value);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) > 0) {
                $duplicate_message .= ucfirst(str_replace("_", " ", $column)) . " already exists! ";
            }
            mysqli_stmt_close($stmt);
        }

        if (!empty($duplicate_message)) {
            echo "<script>alert('$duplicate_message'); window.history.back();</script>";
            exit();
        }


        $stmt = "Insert into lawyers(FullName,BarRegistration,Specialization,Experience,StateMasterID,
        CityMasterID,Email,Phone,ConsultationFee,HourlyRate,Bio,RecentCases,ProfilePicture)values
        ('" . $FullName . "','" . $BarRegistration . "','" . $Specialization . "','" . $Experience . "'
        ,'" . $StateName . "','" . $CityName . "','" . $Email . "','" . $Phone . "','" . $ConsultationFee . "'
        , '" . $HourlyRate . "','" . $Bio . "','" . $RecentCases . "','" . $ProfilePicture . "' ) ";


        if ($conn->query($stmt) === true) {
            echo "<script>alert('Registration Successful!'); window.location.href='lawyerDirectory.php';</script>";

        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "'); window.history.back();</script>";
        }
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


            <input type="text" placeholder="Full Name" name="FullName" class="border p-2 rounded" required>

            <input type="text" placeholder="Bar Council Registration Number" name="BarRegistration"
                class="border p-2 rounded" minlength="10" maxlength="15" required>
            <select class="border p-2 rounded " name="Specialization" id="Specialization">
                <option>Select Specialization</option>
                <option values="CriminalLaw">Criminal Law</option>
                <option value="CivilRights">Civil Rights</option>
                <option value="CorporateLaw">Corporate Law</option>
                <option value="CyberLaw">Cyber Law</option>
                <option value="FamilyLaw">Family Law</option>
                <option value="TaxLaw">Tax Law</option>
                <option value="IntellectualPropertyLaw">Intellectual Property Law</option>
                <option value="RealEstateLaw">RealEstate Law</option>
                <option value="ImmigrationLaw">Immigration Law</option>
                <option value="ImmigrationLaw">Immigration Law</option>

            </select>
            <input type="number" name="Experience" placeholder="Years of Experience" class="border p-2 rounded"
                required>

            <select id="S1" name="StateName" required="" class="border p-2 rounded "
                value=" <?php echo $StateMasterID; ?>">
                <option>----State----</option>

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


            <select name="CityName" required="" class="border p-2 rounded " id="S2"
                value="<?php echo "$CityMasterID"; ?>">
                <option value="" selected>-----All City Name-----</option>

            </select>
            <input type="email" name="Email" placeholder="Email" class="border p-2 rounded" required>
            <input type="tel" name="Phone" placeholder="Phone" class="border p-2 rounded" minlength="10" maxlength="10">
            <input type="number" name="ConsultationFee" placeholder="Consultation Fee " class="border p-2 rounded">
            <input type="number" name="HourlyRate" placeholder="Hourly Rate " class="border p-2 rounded">
            <textarea placeholder="Professional Bio" name="Bio" class="border p-2 rounded col-span-2"></textarea>
            <textarea placeholder="About Recent Cases" name="RecentCases"
                class="border p-2 rounded col-span-2"></textarea>
            <div class="border-dashed border-2 p-4 rounded col-span-2 text-center">
                <b>
                    <p class="text-gray-600">Upload a file or drag and drop</p>
                    <p class="text-sm text-black">PNG, JPG, GIF up to 2MB</p>
                </b>
                <input type="file" name="ProfilePicture" accept="image/*" class="mt-2">
            </div>
            <button type="Submit" name="btnRegister" value="Register"
                class="bg-purple-700 text-white py-2 rounded col-span-2">Register</button>

        </form>
        </form>
</body>

</html>