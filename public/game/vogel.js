function vogel() {
    this.x = 50;
    this.y = height / 2;
 
    this.zwaartenkracht = 5;
    this.speed = 0;
 

    this.verschijn = function()
    {
        fill(0,200,255);
        ellipse(this.x,this.y,40,40);
    }
    
    
    
    this.spring = function () 
    {
        this.speed -= this.zwaartenkracht*10;
        console.log(this.speed)

    }
    
    
    
    
    this.update = function ()
    {
        this.speed += this.zwaartenkracht;
        this.y += this.zwaartenkracht;
        
        
        
        
        if (this.y > height) {
            this.y = height;
            this.speed = 0;
        } else if(this.y < 0) {
            this.y = 0;
            this.speed = 0;
        }
        
        
        

        
    }
    
    
    
}

