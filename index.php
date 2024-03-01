<!DOCTYPE html>
<html>
<head>
    <title>Login and Comment</title>
</head>
<body>

    <?php
    session_start();
    
    if(isset($_SESSION['username'])) {
        echo "<h2>Welcome, ".$_SESSION['username']."</h2>";
        echo "<form action='comment.php' method='post'>
        <textarea name='comment' placeholder='Enter your comment'></textarea>
        <input type='submit' value='Submit'>
        </form>";
    } else {
        echo "<h2>Please login to access the comment box</h2>";
        echo "<form action='login.php' method='post'>
        <input type='text' name='username' placeholder='Username'>
        <input type='text' name='password' placeholder='Password'>
        <input type='submit' value='Login'>
        </form>";
    }

    ?>

</body>
</html>