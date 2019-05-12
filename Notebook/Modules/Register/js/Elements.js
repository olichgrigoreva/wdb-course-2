/*
Элементы web-страницы
*/
let appElements = {};

(function (app) {

  app.newInput   = newInput;
  app.newSelect  = newSelect;
  app.newButton  = newButton;
  app.newDisplay = newDisplay;
  app.newDiv     = newDiv;
  app.newForm    = newForm;

  function newInput(parentObj, type, className, placeholder, name) {
    let inputObj  = document.createElement("input");
    inputObj.type = type;
    inputObj.classList.add(className);
    inputObj.placeholder = placeholder;
    //inputObj.value       = value;
    inputObj.name        = name;
    document.querySelector(parentObj).append(inputObj);
    return inputObj;
  }

  function newSelect(parentObj, className, valuesList, DefaultItemIndex) {
    let selectObj = document.createElement("select");
    for (i=0; i<=valuesList.length-1; i++) {
      let optionObj   = document.createElement("option");
      optionObj.value = valuesList[i];
      optionObj.text  = valuesList[i];
      selectObj.append(optionObj);
    }
    selectObj.classList.add(className);
    document.querySelector(parentObj).append(selectObj);
    return selectObj;
  }

  function newButton(parentObj, classNamesList, value) {
    let buttonObj  = document.createElement("button");
    let buttonText = document.createTextNode(value);
    buttonObj.append(buttonText);
    for (i=0; i<=classNamesList.length-1; i++) {
      buttonObj.classList.add(classNamesList[i]);
    }
    document.querySelector(parentObj).append(buttonObj);
    return buttonObj;
  }

  function newDisplay(parentObj, classNamesList, value) {
    let displObj = document.createElement("a");
    for (i=0; i<=classNamesList.length-1; i++) {
      displObj.classList.add(classNamesList[i]);
    }
    displObj.innerHTML=value;
    document.querySelector(parentObj).append(displObj);
    return displObj
  }

  function newDiv(parentObj, className, value) {
    let divObj = document.createElement("div");
    divObj.classList.add(className);
    let divText = document.createTextNode(value);
    divObj.append(divText);
    document.querySelector(parentObj).append(divObj);
  }

  function newForm(parentObj, idName) {
    let formObj = document.createElement("form");
    formObj.setAttribute("id", idName);
    document.querySelector(parentObj).append(formObj);
  }

} (appElements));
