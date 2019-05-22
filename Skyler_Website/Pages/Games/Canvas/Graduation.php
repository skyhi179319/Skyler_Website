<html>
<head>
<title>GAMES</title>
<link rel="stylesheet" href="http://localhost:3306/Scripts/CSS/Main.css">
<link rel="icon" href="http://localhost:3306/Server/Icon.png">

</head>
<body class="Game_Page" onload="Start_Animation()">
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
    <canvas id="myCanvas" width="1000" height="500" style="border:1px solid #d3d3d3;">
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
var x_5 = canvas.width/5;
var y_5 = canvas.height-175;
var dx = 2;
var dy = -2;
var dx_2 = 12;
var dy_2 = -12;
var dx_3 = 1;
var dy_3 = -1;
var dx_4 = 2;
var dy_4 = -3;
var dx_5 = 6;
var dy_5 = -5;
// 500*500 Library
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
    ctx.beginPath();
    var gradient = ctx.createLinearGradient(0, 0, 200, 0);
    gradient.addColorStop(0, 'Blue');
    gradient.addColorStop(0, 'Gold');
    gradient.addColorStop(1, 'Silver');
    ctx.arc(x_5, y_5, 25, 0, 2 * Math.PI);
    ctx.fillStyle = gradient;
    ctx.fill();
    ctx.moveTo(x_5,y_5);
    ctx.lineTo(x_5,y_5);
    ctx.stroke();
    ctx.closePath();
}


function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    var grd = ctx.createLinearGradient(0, 0, 1000, 0);
    grd.addColorStop(0,"#ffffff");
    grd.addColorStop(1,"#ffffcc");
    grd.addColorStop(0,"#ffff7f");
    grd.addColorStop(1,"#ffff32");
    grd.addColorStop(0, "yellow");
    grd.addColorStop(1, "gold");
    grd.addColorStop(0, "goldenrod");
    grd.addColorStop(1, "darkgoldenrod");
    // Fill with gradient
    ctx.fillStyle = grd;
    ctx.fillRect(0, 0, 1000, 1000);
    //Canvas Box
    ctx.beginPath();
    ctx.moveTo(0,0);
    ctx.lineTo(0,500);
    ctx.moveTo(0,0);
    ctx.lineTo(1000,0);
    ctx.stroke();
    ctx.moveTo(1000,0);
    ctx.lineTo(1000,500);
    ctx.moveTo(1000,500);
    ctx.lineTo(0,500);
    ctx.stroke();
    ctx.closePath();
    // Text
    ctx.textAlign = "center";
    ctx.font = "25px Arial";
    ctx.strokeText("Skyler Graduation Party Will Be At:", 500, 260);
    ctx.textAlign = "center";
    ctx.font = "20px Arial";
    ctx.strokeText("602 Cardnial Drive, Box Elder", 500, 285);
    ctx.textAlign = "center";
    ctx.font = "12px Arial";
    ctx.strokeText("Right After Graduation! Call For More Information At 417-414-9359", 500, 310);
    // Top Left Circle
    ctx.beginPath();
    ctx.fillStyle = "Green";
    ctx.arc(300, 225, 10, 0, 2 * Math.PI);
    ctx.fill();
    ctx.closePath();
    // Top Right Circle
    ctx.beginPath();
    ctx.fillStyle = "Green";
    ctx.arc(700, 225, 10, 0, 2 * Math.PI);
    ctx.fill();
    ctx.closePath();
    // Bottom Left Circle
    ctx.beginPath();
    ctx.fillStyle = "Green";
    ctx.arc(300, 315, 10, 0, 2 * Math.PI);
    ctx.fill();
    ctx.closePath();
    // Bottom Right Circle
    ctx.beginPath();
    ctx.fillStyle = "Green";
    ctx.arc(700, 315, 10, 0, 2 * Math.PI);
    ctx.fill();
    ctx.closePath();
    // Box Lines
    ctx.beginPath();
    ctx.moveTo(300,225);
    ctx.lineTo(700,225);
    ctx.lineTo(700,315);
    ctx.lineTo(300,315);
    ctx.lineTo(300,225);
    ctx.stroke();
    ctx.closePath();
    // Dec Outside Box
    // Top Left Year Circle
    ctx.beginPath();
    ctx.fillStyle = "Gold";
    ctx.arc(450, 125, 35, 0, 2 * Math.PI);
    ctx.fill();
    ctx.textAlign = "center";
    ctx.font = "30px Arial";
    ctx.strokeText("20", 450, 125);
    ctx.closePath();
    // Top Right Year Circle
    ctx.beginPath();
    ctx.fillStyle = "Gold";
    ctx.arc(550, 125, 35, 0, 2 * Math.PI);
    ctx.fill();
    ctx.textAlign = "center";
    ctx.font = "30px Arial";
    ctx.strokeText("19", 550, 125);
    ctx.closePath();
    // Bottom Left Year Circle
    ctx.beginPath();
    ctx.fillStyle = "Gold";
    ctx.arc(450, 375, 35, 0, 2 * Math.PI);
    ctx.fill();
    ctx.textAlign = "center";
    ctx.font = "30px Arial";
    ctx.strokeText("20", 450, 375);
    ctx.closePath();
    // Bottom Right Year Circle
    ctx.beginPath();
    ctx.fillStyle = "Gold";
    ctx.arc(550, 375, 35, 0, 2 * Math.PI);
    ctx.fill();
    ctx.textAlign = "center";
    ctx.font = "30px Arial";
    ctx.strokeText("19", 550, 375);
    ctx.closePath();
    // Down
    ctx.beginPath();
    ctx.moveTo(500,225);
    ctx.lineTo(500,0);
    ctx.stroke();
    ctx.closePath();
    ctx.beginPath();
    ctx.moveTo(500,315);
    ctx.lineTo(500,500);
    ctx.stroke();
    ctx.closePath();
    // Across
    ctx.beginPath();
    ctx.moveTo(0,270);
    ctx.lineTo(300,270);
    ctx.stroke();
    ctx.closePath();
    ctx.beginPath();
    ctx.moveTo(700,270);
    ctx.lineTo(1000,270);
    ctx.stroke();
    ctx.closePath();
    // Top Left DI
    ctx.beginPath();
    ctx.moveTo(0,0);
    ctx.lineTo(300,225);
    ctx.lineTo(500,0);
    ctx.stroke();
    ctx.closePath();
    // Top Left DIV DI
    ctx.beginPath();
    ctx.moveTo(300,225);
    ctx.lineTo(300,0);
    ctx.stroke();
    ctx.closePath();
    // Top Right DI
    ctx.beginPath();
    ctx.moveTo(1000,0);
    ctx.lineTo(700,225);
    ctx.lineTo(500,0);
    ctx.stroke();
    ctx.closePath();
    // Top Left DIV DI
    ctx.beginPath();
    ctx.moveTo(700,225);
    ctx.lineTo(700,0);
    ctx.stroke();
    ctx.closePath();
    // Bottom Left DI
    ctx.moveTo(0,500);
    ctx.lineTo(300,315);
    ctx.lineTo(500,500);
    ctx.stroke();
    ctx.closePath();
    // Bottom Left DIV DI
    ctx.beginPath();
    ctx.moveTo(300,325);
    ctx.lineTo(300,500);
    ctx.stroke();
    ctx.closePath();
    // Bottom Right DI
    ctx.moveTo(1000,500);
    ctx.lineTo(700,315);
    ctx.lineTo(500,500);
    ctx.stroke();
    ctx.closePath();
    // Bottom Right DIV DI
    ctx.beginPath();
    ctx.moveTo(700,325);
    ctx.lineTo(700,500);
    ctx.stroke();
    ctx.closePath();
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
    if(x_5 + dx_5 > canvas.width-ballRadius || x_5 + dx_5 < ballRadius) {
        dx_5 = -dx_5;
    }
    if(y_5 + dy_5 > canvas.height-ballRadius || y_5 + dy_5 < ballRadius) {
        dy_5 = -dy_5;
}
    x += dx;
    y += dy;
    x_2 += dx_2;
    y_2 += dy_2;
    x_3 += dx_3;
    y_3 += dy_3;
    x_4 += dx_4;
    y_4 += dy_4;
    x_5 += dx_5;
    y_5 += dy_5;
}
function Start_Animation(){
    setInterval(draw, 10);
}


</script>
</body>
</html>
