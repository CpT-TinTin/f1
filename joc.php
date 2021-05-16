<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
canvas {
    border:1px solid #d3d3d3;
    background-color: #f1f1f1;
}
</style>
<link rel="stylesheet" href="style.css">
<div class="topnav">

  <a href="paginaprincipala.php">Home</a>
  <a href="driverstandings.php">Driver Standings</a>
  <a href="constructorstandings.php">Constructor Standings</a>
  <a href="joc.php">Joculet</a>
  <a href="adaugarepunctaje.php">Adaugare Punctaje</a>
</div>
</head>

<body onload="startGame()">
<audio id="audio" controls style="display:none">
  <source src="I moving up and down like a acoaster (LANDO NORRIS).mp4" type="audio/mpeg"> Your browser does not support the audio element.
</audio>
<script>
var myGamePiece;
document.addEventListener('keydown', function(e) {
  if (e.keyCode == 83) {
    document.getElementById('audio').play();
  }
});
function startGame() {
    myGamePiece = new component(100, 100, "masinavrum.png", 650, 570, "image");
	myBackground = new component(1200, 800, "circuit.png", 0, 0, "image");
    myGameArea.start();
}

var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 1200;
        this.canvas.height = 800;
        this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
        this.frameNo = 0;
        this.interval = setInterval(updateGameArea, 20);
        window.addEventListener('keydown', function (e) {
            e.preventDefault();
            myGameArea.keys = (myGameArea.keys || []);
            myGameArea.keys[e.keyCode] = (e.type == "keydown");
        })
        window.addEventListener('keyup', function (e) {
            myGameArea.keys[e.keyCode] = (e.type == "keydown");
        })
    },
    stop : function() {
        clearInterval(this.interval);
    },    
    clear : function() {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}

function component(width, height, color, x, y, type) {
    this.type = type;
    if (type == "image") {
        this.image = new Image();
        this.image.src = color;
    }
    this.type = type;
    this.width = width;
    this.height = height;
    this.speed = 0;
    this.angle = 0;
    this.moveAngle = 0;
    this.x = x;
    this.y = y;    
     this.update = function() {
        ctx = myGameArea.context;
        if (type == "image") {
            ctx.drawImage(this.image, 
                this.x, 
                this.y,
                this.width, this.height);
        } else {
            ctx.fillStyle = color;
            ctx.fillRect(this.x, this.y, this.width, this.height);
        }
    }
    this.newPos = function() {
        this.angle += this.moveAngle * Math.PI / 180;
        this.x += this.speed * Math.sin(this.angle);
        this.y -= this.speed * Math.cos(this.angle);
    }
}

function updateGameArea() {
    myGameArea.clear();
	myBackground.newPos();
	myBackground.update();
	myGamePiece.image.src = "masinavrum.png";
    myGamePiece.moveAngle = 0;
    myGamePiece.speed = 0;
    if (myGameArea.keys && myGameArea.keys[37]) {myGamePiece.moveAngle = -1; }
    if (myGameArea.keys && myGameArea.keys[39]) {myGamePiece.moveAngle = 1; }
    if (myGameArea.keys && myGameArea.keys[38]) {myGamePiece.speed= 1; }
    if (myGameArea.keys && myGameArea.keys[40]) {myGamePiece.speed= -1; }
    myGamePiece.newPos();
    myGamePiece.update();
}


</script>
Prin sagetile de la tastatura se poate misca masinuta. Iar pe tasta S sa se poate pune muzica de fundal(volum sa fie cat mai mic ca se aude destul de tare)
</body>
</html>