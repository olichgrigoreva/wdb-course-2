document.addEventListener("DOMContentLoaded", loaded);

function loaded() {
  (function (){
    let header = document.createElement("HEADER");
     header.append(document.createTextNode("SUPER NOTEBOOK"));
    document.querySelector("body").append(header);
  }())

  (function (){
    let form = document.createElement("FORM");
     form.method = "POST";
    document.querySelector("body").append(form);

    let username = document.createElement("input");
     username.type        = "input";
     username.id          = "username";
     username.placeholder = "Username";
    document.querySelector("form").append(username);

    let password = document.createElement("input");
     password.type        = "input";
     password.id          = "password";
     password.placeholder = "Password";
    document.querySelector("form").append(password);

    let confirm_pass = document.createElement("input");
     confirm_pass.type        = "input";
     confirm_pass.id          = "confirm_pass";
     confirm_pass.placeholder = "Confirm password";
    document.querySelector("form").append(confirm_pass);

    let email = document.createElement("input");
     email.type        = "input";
     email.id          = "email";
     email.placeholder = "EMail";
    document.querySelector("form").append(email);

    let button_reg = document.createElement("button");
     button_reg.append(document.createTextNode("Register"));
     button_reg.classList.add("button_reg");
     button_reg.onclick = save_user;
    document.querySelector("form").append(button_reg);
  }())

  (function (){
    let footer = document.createElement("FOOTER");
     footer.append(document.createTextNode("Copyright by ..., 2016"));
    document.querySelector("body").append(footer);
  }())
}

function save_user(event){
  event.preventDefault();

  let form = document.querySelector("form");

  fetch ("save_user.php", {
    method: "POST",
    body: new FormData (form)
  })
  .then (response => {
    return response.text ();
  })
  .then (text => {
   window.location.href = "/notebook/index.html";
  })
}
