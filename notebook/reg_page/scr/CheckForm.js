import {check_form} export function from ("../elements/Button.js");
check_form() {
  function check_form() {
      event.preventDefault();
        if (document.querySelector("username").value == '' || document.querySelector("password").value == '' || document.querySelector("confirm_password").value == '' || document.querySelector("e_mail").value == '') {
          let myalert = document.createElement("div");
          myalert.className="alert alert-info alert-dismissible fade show";
          myalert.role = "alert";
          myalert.innerHTML='<strong>Fill all fields!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
         document.querySelector(".container").append(myalert);
      }
      else {
            if (document.querySelector("password").value !== document.querySelector("confirm_password").value) {
              let myalert = document.createElement("div");
              myalert.className="alert alert-info alert-dismissible fade show";
              myalert.role = "alert";
              myalert.innerHTML='<strong>Passwords d\'not match!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
             document.querySelector(".container").append(myalert);
          }
            else {
              var mailformat = /.+@.+\..+/i;
                if(mailformat.test(document.querySelector(".e_mail").value) == false) {
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
}
