let regFormJS={};
(function (obj) {

  function createInput(parentObject, iType, iClassName, iValue, iComment, iReq, iFocus) {
    let obj = document.createElement("input");
    if (iType) obj.type = iType;
    if (iClassName) obj.className = iClassName;
    if (iValue) obj.value=iValue;
    if (iComment) obj.placeholder = iComment;
    if (iReq) obj.required = true;
    if (iFocus) obj.autofocus = true;
    document.querySelector(parentObject).append(obj);
    return obj;
  }

  function createDiv(parentObject, dClassName, dValue) {
    let obj = document.createElement("div");
    if (dClassName) obj.className = dClassName;
    const divText = document.createTextNode(dValue);
    obj.append(divText);
    document.querySelector(parentObject).append(obj);
    return obj;
  }

  function createButton(parentObject, bClassName, bValue, bType) {
    let obj = document.createElement("button");
    if (bClassName) obj.className = bClassName;
    const buttonText = document.createTextNode(bValue);
    obj.append(buttonText);
    if (bType) obj.type = bType;
    document.querySelector(parentObject).append(obj);
    return obj;
  }

  function createForm(parentObject, fClassName, fAction, fMethod) {
    let obj = document.createElement("form");
    if (fClassName) obj.className = fClassName;
    if (fAction) obj.action = fAction;
    if (fMethod) obj.method = fMethod;
    document.querySelector(parentObject).append(obj);
    return obj;
  }

  function doFormSubmit(event) {
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


  function createPage(userLogName, userLogPass) {
    createDiv("body", "container", "");
    let signForm = createForm(".container", "form-signin", "", "post");
    let iUserName = createInput(".form-signin", "text", "form-control formInput", userLogName, "Username", "true", "true");
    let iUserPass = createInput(".form-signin", "password", "form-control formInput", userLogPass, "Password", "true");
        iUserPass.name = "pass1";
    let iUserConfPass = createInput(".form-signin", "password", "form-control formInput", "", "Confirm password", "true");
        iUserConfPass.name = "pass2";
    let iUserMail = createInput(".form-signin", "email", "form-control formInput", "", "EMail", "true");
    let iButtonSubmit = createInput(".form-signin", "", "btn btn-lg btn-primary btn-block", "", "Register", "");
//    let iButtonSubmit = createButton(".form-signin", "btn btn-lg btn-primary btn-block", "Register", "submit");
    iButtonSubmit.addEventListener("Click", doFormSubmit);

    signForm.oninput = function (event) {
      if (iUserPass.value != iUserConfPass.value) {
        iUserConfPass.setCustomValidity("Пароли не совпадают!");
      } else {
        iUserConfPass.setCustomValidity("");
      }
    }
  }// createpage

  obj.createPage = createPage;
  obj.doFormSubmit = doFormSubmit;
} (regFormJS));