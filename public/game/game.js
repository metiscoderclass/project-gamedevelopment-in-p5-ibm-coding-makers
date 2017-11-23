var background_flappy;
var vogel;

function setup() {
    createCanvas(400,600);
    vogel = new vogel();
    background_flappy = loadImage("/public/game/benodigtheden/backgroundflappy.png");

    
    
}


function draw()
{
    background(background_flappy);
    vogel.update();
    vogel.verschijn();
    

}



function keyPressed() {
    if (key == ' ') {
        console.log("spring");
        
    }
     
}

        

    
    
    
    




