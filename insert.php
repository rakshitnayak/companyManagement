<?php
include 'config.php';


extract($_POST);

if (
    isset($_POST['nameSend']) && isset($_POST['websiteSend'])  && isset($_POST['phSend']) && isset($_POST['addressSend'])
    && isset($_POST['citySend']) && isset($_POST['stateSend'])
    && isset($_POST['countrySend']) && isset($_POST['industrySend'])
) {
    $sql1 = "INSERT INTO company(c_name,c_website,c_ph,c_address,c_city,c_state,c_country,c_industry)
   VALUES('$nameSend', '$websiteSend','$phSend','$addressSend','$citySend','$stateSend','$countrySend','$industrySend')";
    $result = mysqli_query($conn, $sql1);
}
