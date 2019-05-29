function plus() {
     let a , b , result;
     a = document.getElementById("num_1").value;
     a = parseInt(a);
     
     b = document.getElementById("num_2").value;
     b = parseInt(b);
   
     result = a + b;
     document.getElementById("otvet").innerHTML = result;
}

function minus() {
     let a , b , result;
     a = document.getElementById("num_1").value;
     a = parseInt(a);
     
     b = document.getElementById("num_2").value;
     b = parseInt(b);
   
     result = a - b;
     document.getElementById("otvet").innerHTML = result;
}



function ymnogit () {
     let a , b , result;
     a = document.getElementById("num_1").value;
     a = parseInt(a);
     
     b = document.getElementById("num_2").value;
     b = parseInt(b);
   
     result = a * b;
     document.getElementById("otvet").innerHTML = result;
}
    


function delit () {
     let a , b , result;
     a = document.getElementById("num_1").value;
     a = parseInt(a);
     
     b = document.getElementById("num_2").value;
     b = parseInt(b);
   
     result = a / b;
     document.getElementById("otvet").innerHTML = result;
}
