<?php
$Username_Main_Login = $_POST["Username_Main_Login"];
$Username_Main_Login_Valid = "skyler";
$Password_Main_Login = $_POST["Password_Main_Login"];
$Password_Main_Login_Valid = "skyler";
$Username_Admin_Login = $_POST["Username_Admin_Login"];
$Username_Admin_Login_Valid = "Admin";
$Password_Admin_Login = $_POST["Password_Admin_Login"];
$Password_Admin_Login_Valid = "Admin";
if($Username_Main_Login = $Username_Main_Login_Valid && $Password_Main_Login = $Password_Main_Login_Valid) {
    header("Location: http://localhost:3306/Pages/Home/Main_Page.php");
}
elseif($Username_Main_Login <> $Username_Main_Login_Valid && $Password_Main_Login <> $Password_Main_Login_Valid){
    header("Location: http://localhost:3306/Main_Login.php");
}
else{
    header("Location: http://localhost:3306/Main_Login.php");
}
if($Username_Admin_Login = $Username_Admin_Login_Valid and $Password_Admin_Login = $Password_Admin_Login_Valid) {
    header("Location: http://localhost:3306/Pages/Admin/Main_Admin_Page.php");
}
else{
    header("Location: http://localhost:3306/Pages/Admin/Admin_Login.php");
}
?>