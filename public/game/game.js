var background_flappy;
var vogel;

function setup() {
    createCanvas(600,800);
    vogel = new vogel();
    background_flappy = loadImage("/public/game/benodigtheden/backgroundflappy.png");

    
    
}


function draw()
{
    background(background_flappy);
    vogel.update();
    vogel.verschijn();
    

}


        

    
    
    
    




