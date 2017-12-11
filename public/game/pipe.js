function pipe() {

    this.pijpx1 = 400;
    this.pijpy1 = 0;
    
    this.pijpx2 = 400;
    this.pijpy2 = 305;
    
    this.score = document.getElementById("score");
    
    this.count = 0;
    
    
    
    this.show = function() {
        fill(0,255,0)
        rect(this.pijpx1,this.pijpy1,20,this.w1);
        this.pijpx1 -= 3;
        fill(0,255,0)
        rect(this.pijpx2,this.pijpy2,20,400)
        this.pijpx2 -= 3;
        
        
        
        
    }
    
    
    this.update = function()
    {
        if (this.pijpx1 <= 0) {
            this.pijpx1 = 400;
            this.pijpy1 = 0;
                
                
            this.pijpx2 = 400;
            this.pijpy2 = 300;
            console.log("nieuwe pipe")
            
            this.w1 = random(200);
           

            if (this.w1 <= 0 || this.w1 <= 100) {
                this.w1 += 100;
            }
            
            
            
            
            if (bird.y > this.w1) {
                this.count += 1;
                score.innerHTML = "score " + this.count;
            }
            
            this.show();
            
        }
    }
    
    
    
    
    
    
}

