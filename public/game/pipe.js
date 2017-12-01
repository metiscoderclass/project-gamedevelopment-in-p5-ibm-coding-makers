function pipe() {

    this.pijpx1 = 400;
    this.pijpy1 = 0;
    
    this.pijpx2 = 400;
    this.pijpy2 = 305;
    
    
    this.pijp2x1 = 300;
    this.pijp2y1 = 0;
    
    this.pijp1x1 = 400;
    this.pijp1y1 - 305;
    
    
   
   
    this.show = function() {
        fill(0,255,0)
        rect(this.pijpx1,this.pijpy1,20,200)
        this.pijpx1 -= 1;
        fill(0,255,0)
        rect(this.pijpx2,this.pijpy2,20,height)
        this.pijpx2 -= 1;
        
        
        
        
    }
    
    this.show2 = function()
    {
        fill(0,255,0)
        rect(this.pijpx1,this.pijpy1,20,200)
        this.pijpx1 -= 1;
        fill(0,255,0)
        rect(this.pijpx2,this.pijpy2,20,height)
        this.pijpx2 -= 1;
    }
    
    this.update = function()
    {
        if (this.pijpx1 <= 0) {
            console.log("nieuwe pipe")
            this.show();
            this.show2();
            
        } 
    }
    
    
    
    
    
    
}

