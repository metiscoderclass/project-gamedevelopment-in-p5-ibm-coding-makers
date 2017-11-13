var background_flappy;
var vogel;


function setup() {
    createCanvas(600,800);
    vogel = new vogel_flappy();
    background_flappy = loadImage("/public/game/benodigtheden/backgroundflappy.png");
    vogela = loadImage("/public/game/benodigtheden/flappy.png");
    
    
}


function draw()
{
    background(background_flappy)
    vogel.show();
    
    
}

