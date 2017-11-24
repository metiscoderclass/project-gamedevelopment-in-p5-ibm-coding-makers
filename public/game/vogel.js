var bird;
function setup(){
    createCanvas(400, 600);
    bird = new bird();
}

function draw(){
    background(0);
    bird.update();
    bird.show();
    
}

function keyPressed(){
    if (key == ' '){
        bird.up();
    }
}

