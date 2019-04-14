  
  //функции для проверки валидности формы
  function clearForm() {
    document.querySelector('input[name="username"]').value='';
    document.querySelector('input[name="email"]').value='';
    document.querySelector('input[name="password"]').value='';
    document.querySelector('input[name="passwordconf"]').value='';
}

function checkResponse(txt) {
    if(txt.length > 0) {
        const val = [txt.split(' ')[2], txt.split(' ')[5]];

        if(val[1].slice(1, -1) === 'user_name') {
            document.getElementById("txtHeader").insertAdjacentHTML('afterend',  alertElem(`Пользователь <strong>${val[0].slice(1, -1)}</strong> уже существует`));
        }

       if(val[1].slice(1, -1) === 'email') {
            document.getElementById("txtHeader").insertAdjacentHTML('afterend',  alertElem(`Такой email <strong>${val[0].slice(1, -1)}</strong> уже существует`));
        }

    } else {
        document.getElementById("txtHeader").insertAdjacentHTML('afterend',  alertElem(`Вы зарегистрированы!`));
    }
}

  function alertElem(mes){
    let alert = 
    `<div id="alert" class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> <span>${mes}</span> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>`;
    
    return alert;
  } 

  function checkEmpty() {
    const userName = document.querySelector('input[name="username"]').value;
    const emailValue = document.querySelector('input[name="email"]').value;
    const pass = document.querySelector('input[name="password"]').value;
    const passConfirm = document.querySelector('input[name="passwordconf"]').value;
    const arrOfElem = [userName, emailValue, pass, passConfirm];

    function checkArr(v) {
      const checkSpace = v.split('').filter(val => val === ' ');
      
        if (checkSpace.length === v.length || v === '') {
          return true;
        }
    }

    if(arrOfElem.some(checkArr)) {
        document.getElementById("txtHeader").insertAdjacentHTML('afterend',  alertElem('Заполните поля формы'));
        return false;
    }

    return true;
  }

  function checkUser() {
    if (document.querySelector('input[name="username"]').value.split('').filter(val => val === ' ').length > 1) {
      document.getElementById("txtHeader").insertAdjacentHTML('afterend',  alertElem(`Имя пользователя не должно содержать более
      одного пробела`));

      return false;
    }

    return true;
  }

  function checkEmail() {
    const emailValue = document.querySelector('input[name="email"]').value;
    const arrOfDog = emailValue.split('').filter(v => v === '@').length;

    if(!emailValue.includes('@') || emailValue[0] === '@' ||
    emailValue[emailValue.length-1] === '@' || arrOfDog > 1) {
        document.getElementById("txtHeader").insertAdjacentHTML('afterend',  alertElem('Введите правильный email'));

        return false;
    }

    return true;
  }

  function checkPassword() {
    const pass = document.querySelector('input[name="password"]').value.split('');
    const passConfirm = document.querySelector('input[name="passwordconf"]').value.split('');

    if(pass.some((v) => v === ' ')) {
      document.getElementById("txtHeader").insertAdjacentHTML('afterend',  alertElem('Пробельные символы в пароле запрещены!'));
      return false;
    }

    if(pass.join('') !== passConfirm.join('')) {
      document.getElementById("txtHeader").insertAdjacentHTML('afterend',  alertElem('Пароли не совпадают!'));

      return false;
    }

    return true;

  }
 
  function regCheck() {
    if(!checkEmpty() || !checkUser() || !checkEmail() || !checkPassword()) {
      return false
    }
    return true;
  }
  
  // функции для построения DOM-дерева
  function createHeaderOrFooter(elem, cls1, cls2, childHeadline, txt) {
    const element = document.createElement(elem);
    const headline = document.createElement(childHeadline);
    const text = document.createTextNode(txt);
    const div = document.createElement("div");

    element.className = cls1;
    div.className = cls2;
    headline.append(text);
    div.append(headline)
    element.append(div)

    document.querySelector('.container-fluid').append(element);
  }

  function createDiv(cls, parent, child) {
    const div = document.createElement("div");
    div.className = cls;
    if(child) {
        div.append(child)
    }
    document.querySelector(parent).append(div);
  }

  function createH3(cls, txt, parent, id) {
    const h3 = document.createElement("h3");
    h3.className = cls;
    h3.id = id;
    const text = document.createTextNode(txt);

    h3.append(text);

    document.querySelector(parent).append(h3);
  }

  function createForm(cls, act, method, parent) {
    const form = document.createElement("form");
    form.className = cls;

    if(act) form.action = act;
    if(method) form.method = method;

    document.querySelector(parent).append(form);
  }

  function createInput(cls, name, placeholder, type) {
    const input = document.createElement("input");
    input.required = true;
    input.className = cls;
    input.name = name;
    input.placeholder = placeholder;
    input.type = type;

    return input;
  }

  function createButton(cls, txt, func, parent) {
    const button = document.createElement("button");
    const buttonTxt = document.createTextNode(txt);
    button.className = cls;
    button.append(buttonTxt);
    button.type = "submit";
    document.querySelector(parent).append(button);
    document.querySelector("button").addEventListener("click", func);
  }

  function loaded() {
    createHeaderOrFooter('header', 'row block-1', 'col text-center', 'h1', 'NOTEBOOK');
    
    createDiv('row form-row', '.container-fluid');
    createForm('col-md-6 mx-auto form-cont', 'php/registration.php', 'POST', '.form-row');
    createDiv('card card-body', 'form');
    createH3('header text-center mb-4', 'Registration', '.card', 'txtHeader');
    createDiv('form-group', '.card', createInput('form-control input-lg', 'username', 'User Name','text'));
    createDiv('form-group', '.card', createInput('form-control input-lg', 'email', 'E-mail Address','email'));
    createDiv('form-group', '.card', createInput('form-control input-lg', 'password', 'Password', 'password'));
    createDiv('form-group', '.card', createInput('form-control input-lg', 'passwordconf', 'Confirm Password', 'password'));
    createButton('btn btn-primary mb-2 btn btn-lg', 'SUBMIT', reg, '.card');

    createHeaderOrFooter('footer', 'row block-1', 'col text-center align-self-center', 'h4', '© Copyright 2019. All rights reserved');
  }

  document.addEventListener("DOMContentLoaded", loaded);