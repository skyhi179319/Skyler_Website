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

<div style="text-align:center;width:480px;">
<script>
//Move Around
var myGamePiece;
var mySound;
function startGame() {
    myGamePiece = new component(30, 30, "red", 10, 120);
    myGameArea.start();
}

var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 480;
        this.canvas.height = 270;
        this.canvas.boarderColor = "red";
        this.context = this.canvas.getContext("2d");
        document.body.insertAfter(this.canvas, document.body.childNodes[0]);
        this.interval = setInterval(updateGameArea, 20);
    },
    clear : function() {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}

function component(width, height, color, x, y) {
    this.width = width;
    this.height = height;
    this.speedX = 0;
    this.speedY = 0;
    this.x = x;
    this.y = y;    
    this.update = function() {
        ctx = myGameArea.context;
        ctx.fillStyle = color;
        ctx.fillRect(this.x, this.y, this.width, this.height);
    }
    this.newPos = function() {
        this.x += this.speedX;
        this.y += this.speedY;        
    }    
}

function updateGameArea() {
    myGameArea.clear();
    myGamePiece.newPos();    
    myGamePiece.update();
}

function moveup() {
    myGamePiece.speedY = -1; 
}

function movedown() {
    myGamePiece.speedY = 1; 
}

function moveleft() {
    myGamePiece.speedX = -1; 
}

function moveright() {
    myGamePiece.speedX = 1; 
}

function clearmove() {
    myGamePiece.speedX = 0; 
    myGamePiece.speedY = 0; 
}
</script>
<div>
  <button onmousedown="moveup()" onmouseup="clearmove()" ontouchstart="moveup()">UP</button><br><br>
  <button onmousedown="moveleft()" onmouseup="clearmove()" ontouchstart="moveleft()">LEFT</button>
  <button onclick="startGame();">Start Game</button>
  <button onmousedown="moveright()" onmouseup="clearmove()" ontouchstart="moveright()">RIGHT</button><br><br>
  <button onmousedown="movedown()" onmouseup="clearmove()" ontouchstart="movedown()">DOWN</button>
</div>
<canvas id="canvas">
</div>
</body>
</html>