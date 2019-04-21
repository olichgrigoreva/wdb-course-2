createReg();
createRegHeader();
createRegHeaderSecond();
createForm();
createInput("Username", "text",  "Username", "Username");
createInput("Password", "text",  "Password", "Password");
// createInput("Confirm_Password", "text", "Confirm_Password", "Confirm password");
createInput("EMail", "text", "EMail", "EMail");
createButton();
createReg1();
createRegFormDiv();

function createReg() {
    let createReg= document.createElement("div");
    createReg.classList.add("container");
    document.querySelector("body").append(createReg);
};
function createRegHeader() {
    let createRegHeader= document.createElement("header");
    document.querySelector("body").append(createRegHeader);
};
function createRegHeaderSecond() {
    let createRegHeaderSecond= document.createElement("div");
    createRegHeaderSecond.classList.add("header_second");
    createRegHeaderSecond.innerHTML = "SUPER NOTEBOOK";
    document.querySelector(".container").append(createRegHeaderSecond);
};

function createForm(){
    let createForm = document.createElement("form");
    createForm.name = "valu";
    createForm.action = "testreg.php";
    document.querySelector(".container").append(createForm);
};

function createInput(appendClass, typeInput, nameInput, placeholderInput){
    let createInput = document.createElement("input");
    createInput.classList.add(appendClass);
    createInput.type = typeInput;
    createInput.name = nameInput;
    createInput.placeholder = placeholderInput;
    document.querySelector("form").append(createInput);
};

function createButton(){
    let createButton = document.createElement("button");
    createButton.classList.add("register");
    createButton.innerHTML = "Register";
    createButton.type = "submit";
    document.querySelector("form").append(createButton);
};

function createReg1() {
    let createReg1= document.createElement("div");
    createReg1.classList.add("showResult");
    document.querySelector(".container").append(createReg1);
};

function createRegFormDiv() {
    let createRegFormDiv= document.createElement("div");
    createRegFormDiv.classList.add("footer");
    createRegFormDiv.innerHTML = "Copyright by ..., 2016";
    document.querySelector("body").append(createRegFormDiv);
};
