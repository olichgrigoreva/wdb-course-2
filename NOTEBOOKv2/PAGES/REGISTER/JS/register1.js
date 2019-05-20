;(function() {
  function doFormSubmit(event) {
    event.preventDefault();
    console.log(' _!!!_ ');
    let formObj = event.target.closest("form");
    let submitObj = formObj.elements.submit;
    for(let i = 0; i < formObj.elements.length; i++){
      el = formObj.elements[i];
      console.log(el);
      if (!el.value || !el.validity.valid) return false; // submit need to display setValidity, return needed
    }
    event.preventDefault();

    fetch("/../../REGISTER/PHP/register.php", {
      method: "POST",
      body: new FormData(formObj)
    }).then(response => {
      return response.text();
    }).then(text => {
      console.log(text)
    });
  } // function buttonLogin(event)

  function createRegisterPage(userLogName, userLogPass) {
    let tmpDOM = document;
    let fContainer = jsForms.createTag(tmpDOM.body, "div", "container", "");
    let signForm = jsForms.createTag(fContainer, "form", "form-signin", "");
    let iUserName = jsForms.createInput(signForm, "text", "form-control formInput", userLogName, "Username", "true", "true");
    let iUserPass = jsForms.createInput(signForm, "password", "form-control formInput", userLogPass, "Password", "true");
    iUserPass.name = "pass1";
    let iUserConfPass = jsForms.createInput(signForm, "password", "form-control formInput", "", "Confirm password", "true");
    iUserConfPass.name = "pass2";
    let iUserMail = jsForms.createInput(signForm, "email", "form-control formInput", "", "EMail", "true");

    let buttonRegister = jsForms.createTag(signForm, "button", "btn btn-lg btn-primary btn-block", "Register");
    buttonRegister.type = "submit";
    buttonRegister.addEventListener("onClick", doFormSubmit);

    signForm.oninput = function (event) {
      if (iUserPass.value != iUserConfPass.value) {
        iUserConfPass.setCustomValidity("Пароли не совпадают!");
      } else {
        iUserConfPass.setCustomValidity("");
      }
    }
  }
  window.createRegisterPage = createRegisterPage;
  window.createRegisterPage
}());
/*

  function createPage(userLogName, userLogPass) {
    createDiv("body", "container", "");
    let signForm = createForm(".container", "form-signin", "", "post");
    let iUserName = createInput(".form-signin", "text", "form-control formInput", userLogName, "Username", "true", "true");
    let iUserPass = createInput(".form-signin", "password", "form-control formInput", userLogPass, "Password", "true");
        iUserPass.name = "pass1";
    let iUserConfPass = createInput(".form-signin", "password", "form-control formInput", "", "Confirm password", "true");
        iUserConfPass.name = "pass2";
    let iUserMail = createInput(".form-signin", "email", "form-control formInput", "", "EMail", "true");
    let iButtonSubmit = createButton(".form-signin", "btn btn-lg btn-primary btn-block", "Register", "submit");
    iButtonSubmit.addEventListener("onClick", doFormSubmit);

    signForm.oninput = function (event) {
      if (iUserPass.value != iUserConfPass.value) {
        iUserConfPass.setCustomValidity("Пароли не совпадают!");
      } else {
        iUserConfPass.setCustomValidity("");
      }
    }
  }// function createPage(userLogName, userLogPass)
*/