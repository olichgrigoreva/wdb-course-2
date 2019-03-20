function createInput(parentObject, iType, iClassName, iValue, iComment, iReq, iFocus) {
  let obj=document.createElement("input");
  if (iType) obj.type=iType;
  if (iClassName) obj.className=iClassName;
  if (iComment) obj.placeholder=iComment;
  if (iReq) obj.required=true;
  if (iFocus) obj.autofocus=true;
  document.querySelector(parentObject).append(obj);
  return obj;
}

function createDiv(parentObject, dClassName, dValue) {
  let obj=document.createElement("div");
  if (dClassName) obj.className=dClassName;
  const divText=document.createTextNode(dValue);
  obj.append(divText);
  document.querySelector(parentObject).append(obj);
  return obj;
}

function createButton(parentObject, bClassName, bValue, bType) {
  let obj=document.createElement("button");
  if (bClassName) obj.className=bClassName;
  const buttonText=document.createTextNode(bValue);
  obj.append(buttonText);
  if (bType) obj.type=bType;
  document.querySelector(parentObject).append(obj);
  return obj;
}

function createForm(parentObject, fClassName, fAction, fMethod) {
  let obj=document.createElement("form");
  if (fClassName) obj.className=fClassName;
  if (fAction) obj.action=fAction;
  if (fMethod) obj.method=fMethod;
  document.querySelector(parentObject).append(obj);
  return obj;
}

function createPage() {
  createDiv("body", "textHeader", "SUPER NOTEBOOK");
  createDiv("body", "container", "");
  createDiv("body", "textFooter", "Copyrigth by ..., 2016");

  signForm=createForm(".container" ,"form-signin", "/register", "post");
  iUserName=createInput(".form-signin", "text", "form-control formInput", "", "Username", "true", "true");
  iUserPass=createInput(".form-signin", "password", "form-control formInput", "", "Password", "true");
  iUserPass.name="pass1";
  iUserConfPass=createInput(".form-signin", "password", "form-control formInput", "", "Confirm password", "true");
  iUserConfPass.name="pass2";
  iUserMail=createInput(".form-signin", "email", "form-control formInput", "", "EMail", "true");
  createButton(".form-signin", "btn btn-lg btn-primary btn-block", "Register", "submit");

  signForm.oninput = function (event) {
    if (iUserPass.value != iUserConfPass.value) {
      iUserConfPass.setCustomValidity("Пароли не совпадают!");
    } else {
      iUserConfPass.setCustomValidity("");
    }
  }
}