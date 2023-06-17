<?php
    include "passwd.php";
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username == "admin" && $password == $passwd){
            setcookie("r", hash("sha256", $passwd), time()+3600);
            header("Location: update.php");
            exit();
        }
        else{
            echo "Invalid username or password";
        }
    }
?>

<form method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" name="submit" value="Login">
</form>

