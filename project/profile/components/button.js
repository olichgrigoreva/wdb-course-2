import "./button.css";
import Form from "./form.js";
import DivUsername from "./div-username.js";
import DivPassword from "./div-password.js";
import DivConfirmPassword from "./div-confirm-password.js";
import DivEmail from "./div-email.js";

export default class Button {
  static open(pageNode) {
    let button = document.createElement("button");
    let buttonText = document.createTextNode("Save");
    button.type = "submit";
    button.id = "button_register";
    button.className = "btn btn-primary";
    button.name = "register";
    button.append(buttonText);
    document.querySelector("form").append(button);
    document.querySelector("button").addEventListener("click", check);
  }
}

function check(event) {
  event.preventDefault();
    if(document.querySelector(".username_field").value == '' || document.querySelector(".password_field").value == '' || document.querySelector(".confirm_password_field").value == '' || document.querySelector(".e_mail_field").value == '') {
      let myalert = document.createElement("div");
      myalert.className="alert alert-info alert-dismissible fade show";
      myalert.role = "alert";
      myalert.innerHTML='<strong>Fill the fields!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
      document.querySelector(".container").append(myalert);
  }
    else {
      if(document.querySelector(".password_field").value !== document.querySelector(".confirm_password_field").value) {
        let myalert = document.createElement("div");
        myalert.className="alert alert-info alert-dismissible fade show";
        myalert.role = "alert";
        myalert.innerHTML='<strong>Passwords d\'not match!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
        document.querySelector(".container").append(myalert);
      }
      else {
          var mailformat = /.+@.+\..+/i;
            if(mailformat.test(document.querySelector(".e_mail_field").value) == false) {
              let myalert = document.createElement("div");
              myalert.className="alert alert-info alert-dismissible fade show";
              myalert.role = "alert";
              myalert.innerHTML='<strong>Wrong email format!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
             document.querySelector(".container").append(myalert);
          }
          else {
                send_data(event);
          }
      }
  }
    window.setTimeout(function() {
      $(".alert").alert('close');
  }, 5000);

}

function send_data(event) {
  event.preventDefault();
    let form = document.querySelector("form");
    fetch("php/add-user.php", {
    method: "POST",
    body: new FormData(form)
    })
    .then(response => {
      return response.text();
    })
    .then(text => {
      let myalert = document.createElement("div");
      myalert.className="alert alert-success alert-dismissible fade show";
      myalert.role = "alert";
      myalert.innerHTML='<strong>'+text+'</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
      document.querySelector(".container").append(myalert);

        window.setTimeout(function() {
          $(".alert").alert('close');
        },5000);

          if(text == "User has created") {
              window.location.href = "../login/index.php";
          }
      });
  }
