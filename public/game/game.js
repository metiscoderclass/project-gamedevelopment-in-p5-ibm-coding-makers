var background_flappy;

function setup() {
    createCanvas(600,800);
    vogel = new vogel_flappy();
    background_flappy = loadImage("/public/game/benodigtheden/backgroundflappy.png");

    
    
}


function draw()
{
    background(background_flappy)
    vogel.show();
    
     if (vogel.locationy >= height) {
            console.log("wat het werkt");
        } 
        
    
    

    
}

  function keyPressed() {
            if (key === " ") {
                vogel.locationy -= 10;
            }
        }
    
    


