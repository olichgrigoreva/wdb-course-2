createReg();
createRegHeader();
createRegHeaderSecond();
createRegForm();
createInput("Username");
createInput("Password");
createInput("Confirm_Password");
createInput("EMail");
createButton();
createRegFormDiv();

function createReg() {
    let createReg= document.createElement("div");
    createReg.classList.add("container");
    document.querySelector("body").append(createReg);
}
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

function createRegForm() {
    let createRegForm= document.createElement("div");
    createRegForm.classList.add("reg_form");
    document.querySelector(".container").append(createRegForm);
};

function createInput(ClassName,){
    let createInput = document.createElement("input");
    createInput.classList.add(ClassName);
    // createInput.type.add(typeName);
    // createInput.placeholder = ("Username");
    // createInput.placeholder = ("Password");
    document.querySelector(".reg_form").append(createInput);
};

function createButton(){
    let createButton = document.createElement("button");
    createButton.classList.add("register");
    createButton.innerHTML = "Register";
    document.querySelector(".reg_form").append(createButton);
};

function createRegFormDiv() {
    let createRegFormDiv= document.createElement("div");
    createRegFormDiv.classList.add("footer");
    createRegFormDiv.innerHTML = "Copyright by ..., 2016";
    document.querySelector("body").append(createRegFormDiv);
};