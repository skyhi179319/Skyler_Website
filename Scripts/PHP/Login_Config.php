<?php
$Username = $_POST["Username"];
$Username_Valid = skyler;
$Password = $_POST["Password"];
$Password_Valid = skyler;
function Main_Login(){
    $Username = $_POST["Username"];
    $Username_Valid = skyler;
    $Password = $_POST["Password"];
    $Password_Valid = skyler;
    if($Username = $Username_Valid and $Password = $Password_Valid) {
        header("Location: http://localhost:3001/Pages/Home/Main_Page.php");
    }
    else{
        header("Location: http://localhost:3001/Main_Login.php");
    }
}
?>