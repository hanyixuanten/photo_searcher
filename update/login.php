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
<style>
    /* Style the form container */
    .login-form {
        max-width: 300px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    /* Style the form labels */
    .login-form label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    /* Style the form input fields */
    .login-form input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    /* Style the form submit button */
    .login-form input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Style the error message */
    .login-form .error-message {
        color: red;
        margin-top: 10px;
    }
</style>

<div class="login-form">
    <form method="post">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" name="submit" value="Login">
    </form>
</div>

