<?php
include('connection.php');


if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $c_pass = $_POST['c_pass'];


    $sql = "INSERT INTO user VALUES(NULL, '$name', '$email', '$pass')";

    if (mysqli_query($conn, $sql)) {
        echo "success";
    } else {
        echo "Error:Failed to send" . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
