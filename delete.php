<?php
include 'config.php';




if (isset($_POST['deletesend'])) {
    $unique = $_POST['deletesend'];

    $sql = "DELETE FROM company where c_id=$unique";
    $result = mysqli_query($conn, $sql);
}
