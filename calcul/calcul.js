createP();
createContainer();
createCalcul();
createForm();
createInput("size1");
createSelect();
createInput("size2");
createButton();
createResult();
createOptionDisabled();
createOption("/");
createOption("*");
createOption("-");
createOption("+");
createResultat();

function createP(){
    let createP = document.createElement("p");
    createP.innerHTML = "Калькулятор";
    document.querySelector("body").append(createP);
};

function createContainer (){
    let createContainer = document.createElement("div");
    createContainer.classList.add("container");
    document.querySelector("body").append(createContainer);
};

function createCalcul() {
    let createCalcul= document.createElement("div");
    createCalcul.classList.add("calcul");
    document.querySelector(".container").append(createCalcul);
};

function createForm(){
    let createForm = document.createElement("form");
    createForm.name = "valu";
    document.querySelector(".calcul").append(createForm);
};

function createInput(appendClass){
    let createInput = document.createElement("input");
    createInput.classList.add(appendClass);
    document.querySelector("form").append(createInput);
};

function createSelect(){
    let createSelect = document.createElement("select");
    createSelect.classList.add("size");
    document.querySelector("form").append(createSelect);
};

function createOptionDisabled(){
    let createOptionDisabled = document.createElement("option");
    createOptionDisabled.innerHTML = "выбрать действие";
    document.querySelector("select").append(createOptionDisabled);
};

function createOption(znak){
    let createOption = document.createElement("option");
    createOption.innerHTML = znak;
    document.querySelector("select").append(createOption);
};

function createButton(){
    let createButton = document.createElement("button");
    createButton.classList.add("size");
    createButton.innerHTML = "Решить";
    document.querySelector("form").append(createButton);
	createButton.onclick = fetchData;
};

function createResult(){
    let createResult = document.createElement("div");
    createResult.classList.add("resul");
    createResult.innerHTML  =  "Результат = " ;
    document.querySelector(".container").append(createResult);
};

function createResultat(){
    let createResultat = document.createElement("div");
    createResultat.classList.add("showResult");
    document.querySelector(".resul").append(createResultat);
};

function fetchData(event) {
    event.preventDefault();
    var form = document.querySelector('form');
    fetch("calcul.php", {
        method: "POST",
        body: new FormData('form'),
    })
        .then(response => {
            return response.text();
        })
        .then(text => {
            document.querySelector(".showResult").innerHTML = text;
        })
    return false;
};

