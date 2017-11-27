var bird;
var img;

function preload()
{
     img = loadImage("/public/game/benodigtheden/flappy bird background.gif");
}


function setup(){
    createCanvas(400, 600);
    bird = new bird();
}

function draw(){
    background(img);
    bird.update();
    bird.show();
    
}

function keyPressed(){
    if (key == ' '){
        bird.up();
    }
}

