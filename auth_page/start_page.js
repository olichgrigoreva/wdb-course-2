       
//элементы документа
function load_login(event) {
    form(); //форма
    div('form','p-3'); //div в форме
    header('Welcome!'); //хедер
    input(true, 'Username', '', 'username'); //ввод пользователя
    input(true, 'Password', 'password', 'password'); //ввод пароля
    input_btn('submit', 'submit', 'Login'); //submit input
    document.getElementById("submit").onclick = bind(ajaxRequest, "login_data.php");
    a('http://localhost:8080/auth_page/register.html');
    document.getElementById("link").innerHTML = "Ещё не зарегистрированы?";
    footer('Copyright &copy; 2019'); //футер
}

function load_register(event) {
    form(); //форма
    div('form','p-3'); //div в форме
    header('Welcome!'); //хедер
    input(true, 'Username', '', 'username'); //ввод пользователя
    input(true, 'Password', 'password', 'password'); //ввод пароля
    input(true, 'Confirm password','password','confirm'); //подтверждение правильности пароля
    input(true, 'E-mail','email', 'email'); //ввод почты
    input_btn('submit', 'submit', 'Register'); //submit input
    document.getElementById("submit").onclick = bind(ajaxRequest, "registration_data.php");
    a('http://localhost:8080/auth_page/login.html');
    document.getElementById("link").innerHTML = "Уже зарегистрированы?";
    footer('Copyright &copy; 2019'); //футер
}



//функция для передачи параметров ajax запросу
function bind(func, context) {
  return function() { // (*) анонимная функция
    return func.apply(context, arguments);
  };
}

function ajaxRequest(event){
    //AJAX request
    event.preventDefault();//отмена действий бразузера по умолчанию
    let form = document.querySelector("form");
    //отправка AJAX запроса на сервер
    fetch(this, {//url [настройки запроса] к файлу calc.php
    //fetch("login_data.php", {//url [настройки запроса] к файлу calc.php    
        method: "POST", //методом post
        body: new FormData(form) //с данными из формы  
    }) 
    /*.then(response => {
          return response.text();
    })*/
    /*.then(result => {
        window.location.href = 'http://localhost:8080/auth_page/login.html';
          //document.querySelector("footer").innerHTML=text;
    })*/       
}

//создание формы в body
function form() {
    let form = document.createElement("form");
    document.querySelector("body").append(form);
}

//создание div в form (куда добавить блок, имя класса)
function div(appendto, classname) {
    let div = document.createElement("div");
    div.className = classname;
    document.querySelector(appendto).append(div);
}

//создание шапки (текст, отображаемый в шапке)
function header(text) {
    let header = document.createElement("header");
    header.className = "footer navbar-fixed-bottom";
    document.querySelector("body").append(header);
    document.querySelector('header').innerHTML=text;
}

//создание тега input (обязательное/необязательное, подсказка, тип, имя поля)
function input(required, in_placeholder, input_type, name) {
    let input = document.createElement("input");
    input.required = required;//true false
    input.type = "text";
    input.className = "input form-control mb-3";
    input.placeholder =in_placeholder;
    input.type=input_type;
    input.name=name;
    //input.setAttribute('name',name); создание атрибута
    document.querySelector("div").append(input);
}

//кнопка отправки данных с формы (тип, идентификатор для поиска, обработчик события, подпись кнопки)
function button(type, id, in_function,text_sign) {
    let button = document.createElement("button");
    button.append(document.createTextNode(text_sign));
    button.setAttribute('type',type);
    button.setAttribute('id',id);
    button.className = "button btn btn-info";
    document.querySelector("div").append(button); //помещается в div
    button.addEventListener('click',in_function); //по клику срабатывает какая-то функция, которая передается параметром
}

//подвал (текст подвала)
function footer(text) {
    let footer = document.createElement("footer");
    footer.className = "footer navbar-fixed-bottom";
    document.querySelector("body").append(footer);
    document.querySelector('footer').innerHTML=text;

}

//создание тега input для отправки данных с формы (типа сабмит)
function input_btn(id, name, value) {
    let input = document.createElement("input");
    input.type = "submit";
    input.className = "button btn btn-info";
    input.value =value;
    input.setAttribute('id',id);
    input.name = name;
    document.querySelector("div").append(input);
}

//ссылка
function a(href, text) {
    let a = document.createElement("a");
    a.className = "badge badge-primary";
    a.setAttribute('id',"link");
    a.setAttribute('href',href);
    document.querySelector("div").append(a);
}