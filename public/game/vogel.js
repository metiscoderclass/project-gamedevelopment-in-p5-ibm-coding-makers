var bird;
var img;
var pipe;
var begin = false;



function preload()
{
     img = loadImage("/public/game/benodigtheden/gamebackground.png");
}



function setup(){
    createCanvas(400, 600);
    bird = new bird();
    pipe = new pipe();
}

function draw(){
    background(img);
    if (begin == true) {
    bird.update();
    }
    bird.show();
    
    pipe.show();
    pipe.update();
    
    //if ((!game.y > pipe. )) {
      //  
    //}
    
    

    
    
}


function keyPressed(){
    
   
        if (key == ' '){
            begin = true;
            console.log(begin)
        
            bird.up();
        }
    
}


