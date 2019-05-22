<html>
<head>
<title>GAMES</title>
<link rel="stylesheet" href="http://localhost:3306/Scripts/CSS/Main.css">
<link rel="icon" href="http://localhost:3306/Server/Icon.png">
</head>
<body class="Game_Page">
<br>
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
        <button class="dropbtn">Canvas </button>
        <div class="dropdown-content">
        <a class="Standard" href="http://localhost:3306/Pages/Games/Canvas/Canvas_1.php">Canvas Basic Drawer</a>
        <a class="Extra" href="http://localhost:3306/Pages/Games/Canvas/Canvas_2.php">Canvas - Extra</a>
        <a class="Elite" href="http://localhost:3306/Pages/Games/Canvas/Canvas_3.php">Canvas - Elite</a>
        <a class="Standard" href="http://localhost:3306/Pages/Games/Canvas/Graduation.php">Canvas - Graduation</a>
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
<div style="text-align: center;">
    <canvas id="myCanvas" width="200" height="100" style="border:1px solid #d3d3d3;">
</div>
<div style="text-align: center;">
<div>
    <button class="Canvas_Button" onclick="Background()">Background</button>
    <button class="Canvas_Button" onclick="Line_Across()">Line Across</button>
    <button class="Canvas_Button" onclick="Line_Down()">Line Down</button>
    <div>
        <button class="Canvas_Button" onclick="Lines()">Lines</button>
        <button class="Canvas_Button" onclick="Overall()">Overall</button>
        <button class="Canvas_Button" onclick="Tiny_Circles()">Tiny Circles</button>
        <button class="Canvas_Button" onclick="Circles()">Circles</button>
    </div>
    <button class="Canvas_Button" onclick="Left_Circle()">Left Circle</button>
    <button class="Canvas_Button" onclick="Middle_Circle()">Middle Circle</button>
    <button class="Canvas_Button" onclick="Right_Circle()">Right Circle</button>
</div>
<script>
// x=width y=height
var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
function Background() {
    // Background Color
    // Create gradientm
    var grd = ctx.createLinearGradient(0, 0, 200, 0);
    grd.addColorStop(0, "yellow");
    grd.addColorStop(0, "gold");
    grd.addColorStop(1, "goldenrod");
    grd.addColorStop(1, "darkgoldenrod");
    // Fill with gradient
    ctx.fillStyle = grd;
    ctx.fillRect(0, 0, 200, 100);
    // Background
    ctx.moveTo(0,0);
    ctx.lineTo(200,100);
    ctx.stroke();
    ctx.moveTo(200,0);
    ctx.lineTo(-200,200);
    ctx.stroke();
}
function Middle_Circle() {
    // Middle circle
    ctx.fillStyle = "goldenrod";
    ctx.beginPath();
    ctx.arc(100, 50, 40, 0, 2 * Math.PI);
    ctx.fill();
}
function Line_Across() {
    // Line Across
    ctx.moveTo(0,50);
    ctx.lineTo(200,50);
    ctx.stroke();
}
function Line_Down() {
    // Line  Down
    ctx.moveTo(100,0);
    ctx.lineTo(100,100);
    ctx.stroke();
}
function Left_Circle() {
    // Left Circle
    ctx.fillStyle = "Brown";
    ctx.beginPath();
    ctx.moveTo(100,50);
    ctx.arc(50, 25, 25, 0, 2 * Math.PI);
    ctx.fill();
}
function Right_Circle() {
    // Right Circle
    ctx.fillStyle = "Brown";
    ctx.beginPath();
    ctx.moveTo(200,50);
    ctx.arc(150, 25, 25, 0, 2 * Math.PI);
    ctx.fill();
}
function Overall() {
    Background();
    Middle_Circle();
    Line_Across();
    Line_Down();
    Left_Circle();
    Right_Circle();
}
function Lines(){
    Background();
    Line_Across();
    Line_Down();
}
function Tiny_Circles(){
    Left_Circle();
    Right_Circle();
}
function Circles(){
    Left_Circle();
    Right_Circle();
    Middle_Circle();
}
</script>
</body>
</html>