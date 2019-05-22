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
        <button class="dropbtn">Basics </button>
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
    <canvas id="myCanvas" width="200" height="200" style="border:1px solid #d3d3d3;">
</div>
<div style="text-align: center;">
<div>
<button class="Canvas_Button" onclick="Start_Animation()">Start Animation</button>
</div>
<script>
var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
var ballRadius = 10;
var x = canvas.width/2;
var y = canvas.height-30;
var x_2 = canvas.width/2;
var y_2 = canvas.height-75;
var x_3 = canvas.width/3;
var y_3 = canvas.height-150;
var x_4 = canvas.width/4;
var y_4 = canvas.height-140;
var dx = 2;
var dy = -2;
var dx_2 = 4;
var dy_2 = -4;
var dx_3 = 1;
var dy_3 = -1;
var dx_4 = 2;
var dy_4 = -3;
// 200*200 Library
function drawBall() {
    ctx.beginPath();
    var gradient = ctx.createLinearGradient(0, 0, 200, 0);
    gradient.addColorStop(1, 'Purple');
    gradient.addColorStop(1, 'blue');
    gradient.addColorStop(0, 'gold');
    ctx.arc(x, y, ballRadius, 0, 2 * Math.PI);
    ctx.fillStyle = gradient;
    ctx.fill();
    ctx.moveTo(x,y);
    ctx.lineTo(x,y);
    ctx.stroke();
    ctx.closePath();
    ctx.beginPath();
    var gradient = ctx.createLinearGradient(0, 0, 200, 0);
    gradient.addColorStop(0, 'Blue');
    gradient.addColorStop(0, 'Yellow');
    gradient.addColorStop(1, 'Green');
    ctx.arc(x_2, y_2, 5, 0, 2 * Math.PI);
    ctx.fillStyle = gradient;
    ctx.fill();
    ctx.moveTo(x_2,y_2);
    ctx.lineTo(x_2,y_2);
    ctx.stroke();
    ctx.closePath();
    ctx.beginPath();
    var gradient = ctx.createLinearGradient(0, 0, 200, 0);
    gradient.addColorStop(0, 'Blue');
    gradient.addColorStop(0, 'Purple');
    gradient.addColorStop(1, 'Pink');
    ctx.arc(x_3, y_3, 20, 0, 2 * Math.PI);
    ctx.fillStyle = gradient;
    ctx.fill();
    ctx.moveTo(x_3,y_3);
    ctx.lineTo(x_3,y_3);
    ctx.stroke();
    ctx.closePath();
    ctx.beginPath();
    var gradient = ctx.createLinearGradient(0, 0, 200, 0);
    gradient.addColorStop(0, 'Blue');
    gradient.addColorStop(0, 'Purple');
    gradient.addColorStop(1, 'navy');
    ctx.arc(x_4, y_4, 15, 0, 2 * Math.PI);
    ctx.fillStyle = gradient;
    ctx.fill();
    ctx.moveTo(x_4,y_4);
    ctx.lineTo(x_4,y_4);
    ctx.stroke();
    ctx.closePath();
}


function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    var grd = ctx.createLinearGradient(0, 0, 200, 0);
    grd.addColorStop(0, "yellow");
    grd.addColorStop(0, "gold");
    grd.addColorStop(1, "goldenrod");
    grd.addColorStop(1, "darkgoldenrod");
    // Fill with gradient
    ctx.fillStyle = grd;
    ctx.fillRect(0, 0, 200, 200);
    ctx.beginPath();
    ctx.moveTo(0,0);
    ctx.lineTo(0,200);
    ctx.stroke();
    ctx.moveTo(200,0);
    ctx.lineTo(200,200);
    ctx.stroke();
    ctx.closePath();
    ctx.textAlign = "center";
    ctx.font = "30px Arial";
    ctx.strokeText("Jesus", 100, 110);
    // Top Left Circle
    ctx.fillStyle = "Green";
    ctx.beginPath();
    ctx.arc(50, 75, 10, 0, 2 * Math.PI);
    ctx.fill();
    // Top Right Circle
    ctx.fillStyle = "Green";
    ctx.beginPath();
    ctx.arc(150, 75, 10, 0, 2 * Math.PI);
    ctx.fill();
    // Bottom Left Circle
    ctx.fillStyle = "Green";
    ctx.beginPath();
    ctx.arc(50, 125, 10, 0, 2 * Math.PI);
    ctx.fill();
    // Bottom Right Circle
    ctx.fillStyle = "Green";
    ctx.beginPath();
    ctx.arc(150, 125, 10, 0, 2 * Math.PI);
    ctx.fill();
    // Box Lines
    ctx.moveTo(50,75);
    ctx.lineTo(150,75);
    ctx.lineTo(150,125);
    ctx.lineTo(50,125);
    ctx.lineTo(50,75);
    ctx.stroke();
    drawBall();




    if(x + dx > canvas.width-ballRadius || x + dx < ballRadius) {
        dx = -dx;
    }
    if(y + dy > canvas.height-ballRadius || y + dy < ballRadius) {
        dy = -dy;
    }
    if(x_2 + dx_2 > canvas.width-ballRadius || x_2 + dx_2 < ballRadius) {
        dx_2 = -dx_2;
    }
    if(y_2 + dy_2 > canvas.height-ballRadius || y_2 + dy_2 < ballRadius) {
        dy_2 = -dy_2;
    }
    if(x_3 + dx_3 > canvas.width-ballRadius || x_3 + dx_3 < ballRadius) {
        dx_3 = -dx_3;
    }
    if(y_3 + dy_3 > canvas.height-ballRadius || y_3 + dy_3 < ballRadius) {
        dy_3 = -dy_3;
    }
    if(x_4 + dx_4 > canvas.width-ballRadius || x_4 + dx_4 < ballRadius) {
        dx_4 = -dx_4;
    }
    if(y_4 + dy_4 > canvas.height-ballRadius || y_4 + dy_4 < ballRadius) {
        dy_4 = -dy_4;
}
    x += dx;
    y += dy;
    x_2 += dx_2;
    y_2 += dy_2;
    x_3 += dx_3;
    y_3 += dy_3;
    x_4 += dx_4;
    y_4 += dy_4;
}
function Start_Animation(){
    setInterval(draw, 10);
}


</script>
</body>
</html>
