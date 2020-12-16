function Shape(length){
    this.length=length;
    console.log("shape of length",length);
    
    }
    function Square(length){
        Shape.call(this.length);
        this.length=length;
        this.square =function(){
            console.log("area of square is:",(this.length*this.length));
        }

    }
    function Rectangle(length,width){
        Shape.call(this.length,this.width);
        this.length=length;
        this.width=width;
        this.rect =function(){
            console.log("area of rectangle is:",(this.length*this.width));
        }


    }
    function Triangle(length,width){
        Shape.call(this.length,this.width);
        this.length=length;
        this.width=width;
        
        this.tri =function(){
            console.log("area of rectangle is:",(this.length*this.width)/2);
        }


    }
    var arg1=new Square(10);
    arg1.square();
    var arg2=new Rectangle(10,20);
    arg2.rect();
    var arg3=new Triangle(10,20);
    arg3.tri();
