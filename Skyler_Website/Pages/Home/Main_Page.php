<html>
<head>
<title>HOME</title>
<script src="http://localhost:3306/Scripts/JS/Main.js"></script>
<link rel="stylesheet" href="http://localhost:3306/Scripts/CSS/Main.css">
<link rel="icon" href="http://localhost:3306/Server/Icon.png">
</head>
<body class="Home_Page_Body">
<div class="navbar">
    <a href="#home">Home</a>
    <div class="subnav">
        <button class="subnavbtn">Admin</button>
        <div class="subnav-content">
        <a href="http://localhost:3306/Pages/Admin/Admin_Login.php">ADMIN LOGIN</a>
        </div>
    </div>    
    <div class="subnav">
        <button class="subnavbtn">Games</button>
        <div class="subnav-content">
        <div class="dropdown">
        <button class="dropbtn">Basics </button>
        <div class="dropdown-content">
        <a class="Standard" href="http://localhost:3306/Pages/Games/Games_Page.php">Basics - Standard</a>
        <a class="Extra" href="#">Basics - Extra</a>
        <a class="Elite" href="#">Basics - Elite</a>
        </div>
        </div>
        <div class="dropdown">
        <button class="dropbtn">Brick Breaker</button>
        <div class="dropdown-content">
        <a class="Standard" href="http://localhost:3306/Pages/Games/Brick_Breaker/Game.php">Brick Breaker - Standard</a>
        <a class="Extra" href="#">Basics - Extra</a>
        <a class="Elite" href="#">Basics - Elite</a>
        </div>
    </div> 
    </div>
    </div>
</div>
</body>
</html>