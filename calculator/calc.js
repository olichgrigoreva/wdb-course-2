var a,b,c,
    function calculate(a,b,c) {
        if (c=="+"){
            d=a+b;
        }
        if (c=="-"){
            d=a-b;
        }
        if (c=="*"){
            d=a*b;
        }
        if (c=="/" && b!=0){
            d=a/b;
        } 
        if (c=="/" && b==0)
            d="mistake/error";
        }
        return d;
    }
