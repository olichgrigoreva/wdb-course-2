function bCalculate() {
  let value1=parseFloat(document.querySelector(".value1").value);
  let value2=parseFloat(document.querySelector(".value2").value);
  let operationType=document.querySelector(".operationType").value;
  let result=0;
  if (value1 && value2) {
    switch(operationType) {
      case "+":
        result = (value1 + value2).toFixed(3);
        break;
      case "-":
        result = (value1 - value2).toFixed(3);
        break;
      case "*":
        result = (value1 * value2).toFixed(3);
        break;
      case "/":
        if (value2 != 0)
          result = (value1 / value2).toFixed(3);
        else
          result = "Not allow zero dizion!"
        break;
    }
    document.querySelector(".result").innerHTML=result;
  }
}
