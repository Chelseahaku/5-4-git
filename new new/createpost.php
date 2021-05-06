<?php
include 'includes/logincheck.php';
$con;
$user;

$user['id'];

$_POST['post_title'];
$_POST['post_content'];

// prepare and bind
$beldex = $conn->prepare("insert into `posts` (user_id, post_title, post_content) values (?,?,?)");
$beldex->bind_param("iss", $user_id, $post_title, $post_content);

// set parameters and execute
$user_id  = $user['id'];
$post_title = $_post['post_title'];
$post_content = $_POST['post_content'];
$beldex->execute();



$results = $beldex->execute();

if($results) {
    // posts.php
}
?>