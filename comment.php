<?php
session_start();
if(isset($_SESSION['username'])) {
    $comment = $_POST['comment'];
    // Save the comment to the database or do whatever you want with it
    echo "Comment submitted: ".$comment;
} else {
    header("Location: login.php");
}
?>