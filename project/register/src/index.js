document.addEventListener("DOMContentLoaded", loaded);

function loaded() {
  header();
  form();
  div1();
  username();
  div2();
  password();
  div3();
  confirm_password();
  div4();
  e_mail();
  button();
  //button.addEventListener("click", function(event) {
    //check(event);
  //})
  footer();
}

  function header() {
    let header = document.createElement("header");
    header.className = "header";
    header.classList.add("header");
    let header_text = document.createTextNode("NOTEBOOK");
    header.append(header_text);
    document.querySelector("body").append(header);
  }

  function form() {
    let form = document.createElement("form");
    form.className = "container form group";
    form.id = "container";
    document.querySelector("body").append(form);
  }

  function div1() {
    let div1 = document.createElement("div1");
    div1.className = "form-group";
    document.querySelector("form").append(div1);
  }

  function username() {
    let username = document.createElement("input");
    username.type = "text";
    username.class = "form-control";
    username.className = "form-control";
    username.placeholder = "Username";
    username.setAttribute('username', 1);
    username.id = "username";
    username.name = "username";
    username.classList.add("reg_fields");
    username.classList.add("username_field");
    document.querySelector("div1").append(username);
  }

  function div2() {
    let div2 = document.createElement("div2");
    div2.className = "form-group";
    document.querySelector("form").append(div2);
  }

  function password() {
    let password = document.createElement("input");
    password.type = "password";
    password.class = "form-control";
    password.className = "form-control";
    password.placeholder = "Password";
    password.id = "password";
    password.name = "password";
    password.classList.add("reg_fields");
    password.classList.add("password_field");
    document.querySelector("div2").append(password);
  }

  function div3() {
    let div3 = document.createElement("div3");
    div3.className = "form-group";
    document.querySelector("form").append(div3);
  }

  function confirm_password() {
    let confirm_password = document.createElement("input");
    confirm_password.type = "password";
    confirm_password.class = "form-control";
    confirm_password.className = "form-control";
    confirm_password.placeholder = "Confirm Password";
    confirm_password.id = "confirm_password";
    confirm_password.name = "confirm_password";
    confirm_password.classList.add("reg_fields");
    confirm_password.classList.add("confirm_password_field");
    document.querySelector("div3").append(confirm_password);
  }

  function div4() {
    let div4 = document.createElement("div4");
    div4.className = "form-group";
    document.querySelector("form").append(div4);
  }

  function e_mail() {
    let e_mail = document.createElement("input");
    e_mail.type = "e_mail";
    e_mail.class = "form-control";
    e_mail.className = "form-control";
    e_mail.placeholder = "Email";
    e_mail.id = "e_mail";
    e_mail.name = "e_mail";
    e_mail.classList.add("reg_fields");
    e_mail.classList.add("e_mail_field");
    document.querySelector("div4").append(e_mail);
  }

  function button() {
    let button = document.createElement("button");
    let buttonText = document.createTextNode("Register");
    button.type = "submit";
    button.id = "button_register";
    button.className = "btn btn-primary";
    button.name = "register";
    button.append(buttonText);
    document.querySelector("form").append(button);
    document.querySelector("button").addEventListener("click", check);
  }

  function footer() {
    let footer = document.createElement("footer");
    footer.classList.add("footer");
    footer.className = "footer";
    let footer_text = document.createTextNode("© Copyright 2019. All rights reserved");
    footer.append(footer_text);
    document.querySelector("body").append(footer);
  }

  function check() {
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
