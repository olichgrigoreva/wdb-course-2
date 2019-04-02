function createInput(parentObject, className, value, comment) {
  let objInput=document.createElement("input");
  objInput.type="text";
  if (className) objInput.classList.add(className);
  if (comment) objInput.placeholder = comment;
  document.querySelector(parentObject).append(objInput);
  return objInput;
}

function createSelect(parentObject, className, valueList, defaultItemIndex) {
  let objSelect=document.createElement("select");
  for (var i=0; i<valueList.length; i++) {
    let objOption=document.createElement("option");
    objOption.value=valueList[i];
    objOption.text=valueList[i];
    if ((defaultItemIndex) && (defaultItemIndex==i)) objOption.defaultSelected = true;
    objSelect.append(objOption);
  }
  if (className) objSelect.classList.add(className);
  document.querySelector(parentObject).append(objSelect);
  return objSelect;
}

function createA(parentObject, className, value) {
  let objA=document.createElement("a");
  if (className) objA.classList.add(className);
  if (value) objA.innerHTML=value;
  document.querySelector(parentObject).append(objA);
  return objA;
}

function createDiv(parentObject, className, value) {
  let objDiv=document.createElement("div");
  if (className) objDiv.classList.add(className);
  const divText=document.createTextNode(value);
  objDiv.append(divText);
  document.querySelector(parentObject).append(objDiv);
  return objDiv;
}

function createButton(parentObject, className, value) {
  let objButton=document.createElement("button");
  if (className) objButton.classList.add(className);
  const buttonText=document.createTextNode(value);
  objButton.append(buttonText);
  document.querySelector(parentObject).append(objButton);  
  return objButton;
}

function bCalculate(val1, val2, operation) {
  let value1=parseFloat(val1);
  let value2=parseFloat(val2);
  let result=0;
  if (value1 && value2) {
    switch(operation) {
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
  } else result = "�������� ����������";
  return result;
}

function createPage(){
  var list = ["+","-","*","/"];
  inputVal1=createInput("body", "value_inp", "", "first_number");
  selectOperation=createSelect("body", "operationType", list, 0);
  inputVal2=createInput("body", "value_inp", "", "second_number");
  aEqvText=createA("body", "value_inp", " = ");
  aResult=createA("body", "value_inp", "");
  divEmpty=createDiv("body", "value_inp", "");
  butResult=createButton("body", "value_inp", "���������");
  butResult.addEventListener("click", function(event) {
    let res=bCalculate(inputVal1.value, inputVal2.value, selectOperation.value);
    aResult.innerHTML=res;
  });
}
