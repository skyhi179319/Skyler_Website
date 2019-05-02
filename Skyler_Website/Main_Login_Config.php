<?php
$Username_Main_Login = $_POST["Username_Main_Login"];
$Username_Main_Login_Valid = skyler;
$Password_Main_Login = $_POST["Password_Main_Login"];
$Password_Main_Login_Valid = skyler;
if($Username_Main_Login = $Username_Main_Login_Valid and $Password_Main_Login = $Password_Main_Login_Valid) {
        header("Location: http://localhost:3306/Pages/Home/Main_Page.php");
    }
else{
        header("Location: http://localhost:3306/Main_Login.php");
    }
?>
