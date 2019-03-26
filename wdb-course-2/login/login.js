createReg();
createRegHeader();
createRegHeaderSecond();
createForm();
createInput("Username", "text",  "Username", "Username");
createInput("Password", "text",  "Password", "Password");
createInput("Confirm_Password", "text", "Confirm_Password", "Confirm password");
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
    document.querySelector(".container").append(createForm);
};
// function createRegForm() {
//     let createRegForm= document.createElement("div");
//     createRegForm.classList.add("reg_form");
//     document.querySelector(".container").append(createRegForm);
// };
function createInput(appendClass, typeInput, nameInput, placeholderInput){
    let createInput = document.createElement("input");
    createInput.classList.add(appendClass);
    createInput.type = typeInput;
    createInput.name = nameInput;
    createInput.placeholder = placeholderInput;
    document.querySelector("form").append(createInput);
};

// function createInput(appendClass, typeInput, numInput, placeholderInput){
//     let createInput = document.createElement("input");
//     createInput.classList.add(appendClass);
//     createInput.type = typeInput;
//     createInput.name = numInput;
//     createInput.placeholder = placeholderInput;
//     document.querySelector("form").append(createInput);
// };


function createButton(){
    let createButton = document.createElement("button");
    createButton.classList.add("register");
    createButton.innerHTML = "Register";
    document.querySelector("form").append(createButton);
    createButton.onclick = check;
};
// function check() {
//     var string1 = document.querySelector('.Username');
//     var string2 = document.querySelector('.Password');
//     var string3 = document.querySelector('.Confirm_Password');
//     var string4 = document.querySelector('.EMail');
//     if ((string1.value.length > 0) && (string2.value=string3.value) && (string4.value.indexOf("@") > -1)) {
//         window.alert("Приветствую, дорогой друг!!!");
//     }
//     else {
//         window.alert("Упс! Где-то ошибка, попробуй ещё раз, дорогой друг!!!")
//     }
// };

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

function check(event) {
    event.preventDefault();
    var form = document.querySelector('form');
    fetch('login.php', {
        method: "POST",
        body: new FormData(form),
    })
        .then(response => {
            return response.text();
        })
        .then(text => {
            document.querySelector(".showResult").replaceWith(text);
        })
    return false;
}