document.addEventListener("DOMContentLoaded", loaded);

function loaded() {
  (function() {
    let header = document.createElement("HEADER");
     header.append(document.createTextNode("SUPER NOTEBOOK"));
    document.querySelector("body").append(header);
  }());

  (function() {
    let footer = document.createElement("FOOTER");
     footer.append(document.createTextNode("Copyright by ..., 2016"));
    document.querySelector("body").append(footer);
  }());

  (function() {
    let form = document.createElement("FORM");
     form.method = "POST";
    document.querySelector("body").append(form);

    let username = document.createElement("input");
     username.type  = "input";
     username.id    = "username";
     username.name  = "username";
     username.value = "Username";
    document.querySelector("form").append(username);

    let password = document.createElement("input");
     password.type        = "password";
     password.id          = "password";
     password.name        = "password";
     password.placeholder = "Password";
    document.querySelector("form").append(password);

    let confirm_pass = document.createElement("input");
     confirm_pass.type        = "password";
     confirm_pass.id          = "confirm_pass";
     confirm_pass.name        = "confirm_pass";
     confirm_pass.placeholder = "Confirm password";
    document.querySelector("form").append(confirm_pass);

    let email = document.createElement("input");
     email.type  = "input";
     email.id    = "email";
     email.name  = "email";
     email.value = "EMail";
    document.querySelector("form").append(email);

    let button = document.createElement("button");
     button.append(document.createTextNode("Save"));
     button.classList.add("button");
     button.onclick = save_user;
    document.querySelector("form").append(button);
  }());
}

function save_user(event) {
  event.preventDefault();

  let form = document.querySelector("form");

  fetch("/wdb-course-2/final_project/profile/save_user.php", {
      method: "POST",
      body: new FormData(form),
    })
    .then(response => {
      return response.text();
    })
    .then(text => {
      console.log(text);
      window.location.href = "../notebook/index.html";
    })
}
