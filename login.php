
<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE Name = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    if ($row['Name'] === $username && $row['password'] === $password) {
        $_SESSION['username'] = $username;
        header("Location: homepage.php");
    }
    else{
        echo "wrong id or pass";
    }

}
?>

