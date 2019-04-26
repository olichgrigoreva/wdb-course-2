let app={};
(function () {
    let x = 7;
    let y = 8;

    function sum() {
        console.log(' _summ: ');
        console.log('x + y = ');
        console.log(x + y);
        return x + y;
    }
    app.div = div;
    console.log(' _duv: ');
    console.log('x / y = ');
    console.log(x / y);
    function div() {
        return x - y;
    }
    app.sum = sum;
    app.div = div;
} () );

