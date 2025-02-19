<?php

$conn = mysqli_connect("localhost", "root", "", "legaladvisor") or die("Connection failed");
$str = "";
if ($_POST['type'] == "") {
    $sql = "SELECT * FROM statemaster WHERE Flag=0";

    $query = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
    while ($row = mysqli_fetch_assoc($query)) {
        $str .= "<option value='{$row['StateMasterID']}'>{$row['StateName']}</option>";
    }
} else if ($_POST['type'] == "CityData") {

    $sql = "SELECT * FROM citymaster WHERE StateMasterID = {$_POST['id']}";

    $query = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
    $str = "<option value=''>-----All City Name-----</option>";
    while ($row = mysqli_fetch_assoc($query)) {

        $str .= "<option value='{$row['CityMasterID']}'>{$row['CityName']}</option>";
    }
}
echo $str;
?>