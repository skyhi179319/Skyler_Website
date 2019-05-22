var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
// 200*100 Library
function Background_Yellow_1() {
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
function Middle_Circle_Goldenrod_1() {
    // Middle circle
    ctx.fillStyle = "goldenrod";
    ctx.beginPath();
    ctx.arc(100, 50, 40, 0, 2 * Math.PI);
    ctx.fill();
}
function Line_Across_1() {
    // Line Across
    ctx.moveTo(0,50);
    ctx.lineTo(200,50);
    ctx.stroke();
}
function Line_Down_1() {
    // Line  Down
    ctx.moveTo(100,0);
    ctx.lineTo(100,100);
    ctx.stroke();
}
function Left_Circle_Brown_1() {
    // Left Circle
    ctx.fillStyle = "Brown";
    ctx.beginPath();
    ctx.moveTo(100,50);
    ctx.arc(50, 25, 25, 0, 2 * Math.PI);
    ctx.fill();
}
function Right_Circle_Brown_1() {
    // Right Circle
    ctx.fillStyle = "Brown";
    ctx.beginPath();
    ctx.moveTo(200,50);
    ctx.arc(150, 25, 25, 0, 2 * Math.PI);
    ctx.fill();
}
function Overall_1() {
    Background();
    Middle_Circle();
    Line_Across();
    Line_Down();
    Left_Circle();
    Right_Circle();
}
function Lines_1(){
    Background();
    Line_Across();
    Line_Down();
}
function Tiny_Circles_1(){
    Left_Circle();
    Right_Circle();
}
function Circles_1(){
    Left_Circle();
    Right_Circle();
    Middle_Circle();
}
function Lines_And_Circles_Green_1() {
    Lines();
    Tiny_Circles();
    // Left Circle
    ctx.fillStyle = "Green";
    ctx.beginPath();
    ctx.moveTo(100,150);
    ctx.arc(50, 75, 10, 0, 2 * Math.PI);
    ctx.fill();
    // Right Circle
    ctx.fillStyle = "Green";
    ctx.beginPath();
    ctx.moveTo(150,150);
    ctx.arc(150, 75, 10, 0, 2 * Math.PI);
    ctx.fill();
}
// 200*200 Library
var ballRadius = 10;
var x = canvas.width/2;
var y = canvas.height-30;
var x_2 = canvas.width/2;
var y_2 = canvas.height-75;
var x_3 = canvas.width/3;
var y_3 = canvas.height-150;
var dx = 2;
var dy = -2;
var dx_2 = 4;
var dy_2 = -4;
var dx_3 = 1;
var dy_3 = -1;
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
    ctx.closePath();
    ctx.beginPath();
    var gradient = ctx.createLinearGradient(0, 0, 200, 0);
    gradient.addColorStop(0, 'Blue');
    gradient.addColorStop(0, 'Yellow');
    gradient.addColorStop(1, 'Green');
    ctx.arc(x_2, y_2, 5, 0, 2 * Math.PI);
    ctx.fillStyle = gradient;
    ctx.fill();
    ctx.closePath();
    ctx.beginPath();
    var gradient = ctx.createLinearGradient(0, 0, 200, 0);
    gradient.addColorStop(0, 'Blue');
    gradient.addColorStop(0, 'Purple');
    gradient.addColorStop(1, 'Pink');
    ctx.arc(x_3, y_3, 20, 0, 2 * Math.PI);
    ctx.fillStyle = gradient;
    ctx.fill();
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
    drawBall();
    ctx.beginPath();
    ctx.moveTo(0,0);
    ctx.lineTo(0,200);
    ctx.stroke();
    ctx.moveTo(200,0);
    ctx.lineTo(200,200);
    ctx.stroke();
    ctx.closePath();
    
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
    x += dx;
    y += dy;
    x_2 += dx_2;
    y_2 += dy_2;
    x_3 += dx_3;
    y_3 += dy_3;
}
function Start_Animation(){
    setInterval(draw, 10);
}

