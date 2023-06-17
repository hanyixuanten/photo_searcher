<?php
    include "passwd.php";
    if(isset($_POST['submit'])){
        $password = $_POST['password'];
        if($password == $passwd){
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
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" name="submit" value="Login">
</form>

