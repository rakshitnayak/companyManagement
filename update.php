<?php
include 'config.php';

if (isset($_POST['updateid'])) {
    $user_id = $_POST['updateid'];

    $sql4 = "SELECT * FROM company WHERE c_id=$user_id";
    $result = mysqli_query($conn, $sql4);
    $response = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $response = $row;
    }
    echo json_encode($response);
} else {
    $response['status'] = 200;
    $response['message'] = "invalid or data not found";
}


//update query

if (isset($_POST['hiddendata'])) {
    $uniqueid = $_POST['hiddendata'];
    $name = $_POST['updatename'];
    $website = $_POST['updatewebsite'];
    $ph = $_POST['updateph'];
    $address = $_POST['updateaddress'];
    $city = $_POST['updatecity'];
    $state = $_POST['updatestate'];
    $country = $_POST['updatecountry'];
    $industry = $_POST['updateindustry'];

    $sql = "UPDATE company SET c_name='$name', c_website='$website',c_ph='$ph',c_address='$address', c_city='$city',
    c_state='$state', c_country='$country', c_indsutry='$industry' WHERE c_id=$uniqueid";

    $result = mysqli_query($conn, $sql);
}
