var a,b,c,d
    function calculate(a,b,c) {
        if (c="+"){
            d=a+b;
        }
        if (c="-"){
            d=a-b;
        }
        if (c="*"){
            d=a*b;
        }
        if (c="/" && b!=0){
            d=a/b;
        } else {
            d="mistake/error";
        }
        return d;
    }