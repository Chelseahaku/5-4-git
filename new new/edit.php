<?php
session_start();
print_r($_POST);
die();
if(!isset($_SESSION['username'])) {
    header("Location: /");
    exit();
}

if(isset($_POST['name']) && $_POST['name'] != "") {
    $name = $_POST['name'];
    $username = $_SESSION['username'];

    $serverip = "localhost";
    $dbusername = "root";
    $dbpassword = "mysql";
    $dbname = "haku";
  
    // Create connection
    $conn = new mysqli($serverip, $dbusername, $dbpassword, $dbname);
  
    // Check connection
    if ($conn->connect_error) {
      header("Location: /register.php?error=database");
      exit();
    }
  
    $sql = "UPDATE `users` set `name` = '$name' WHERE `username` = '$username'";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        header("Location: /profile.php");
        exit();
    } else {
        header("Location: /profile.php?aldaa=query");
        exit();
    }
} else {
    header("Location: /");
    exit();
}
?>
