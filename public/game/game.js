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
    vogel.gravity(40,30,20,20,10);

    if (vogel.locationy <= 0) {
        vogel.locationy += 10;
    }

        
    
    

    
}

  function keyPressed() {
            if (key === " ") {
                vogel.locationy -= 10;
            }
        }
        

    
    
    
    




