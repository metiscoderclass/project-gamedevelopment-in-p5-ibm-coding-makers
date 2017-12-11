function bird(){
    
    var img = loadImage("/public/game/benodigtheden/flappy.png");

    
    this.y = height/2;
    this.x = 64;
    
    this.gravity = 1.1;
    this.lift = -25;
    this.velocity = 0;    
    
    this.show = function(){
        fill(255);
        image(img,this.x, this.y, 32, 32);
    }
    
    this.up = function(){
        this.velocity += this.lift;
    }
    
    this.update = function(){
        this.velocity += this.gravity;
        this.velocity *= 0.9;
        this.y += this.velocity;
        
        if (this.y > height){
            this.y = height;
            this.velocity = 0;
        }
    
    }
}





    
    
    




