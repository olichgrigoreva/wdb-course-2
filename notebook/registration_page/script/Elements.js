let appElements = {};
  (function(app) {
    app.newHeader = newHeader;
    app.newForm = newForm;
    app.newUsername = newUsername;
    app.newPassword = newPassword;
    app.newConfirm_password = newConfirm_password;
    app.newE_mail = newE_mail;
    //app.newButton = newButton;
    app.newData_collection = newData_collection;
    app.newFooter = newFooter;
      function newHeader() {
        let header = document.createElement("header");
        header.classList.add("header");
        header.className = "header";
        let header_text = document.createTextNode("SUPER NOTEBOOK");
        header.append(header_text);
          document.querySelector("body").append(header);
      }
          function newForm() {
            let form = document.createElement("form");
            form.className = "form";
            form.name = "form";
              document.querySelector("body").append(form);
          }
              function newUsername() {
                let username = document.createElement("input");
                username.type = "text";
                username.classList.add("username");
                username.className = "form_control";
                username.placeholder = "Username";
                username.id = "username";
                username.name = "username";
                //username.value = "Username";
                  document.querySelector("form").append(username);
                  return username;
              }
                  function newPassword() {
                    let password = document.createElement("input");
                    password.type = "password";
                    password.classList.add("password");
                    password.className = "form_control";
                    password.placeholder = "Password";
                    password.id = "password";
                    password.name = "password";
                    //password.value = "Password";
                      document.querySelector("form").append(password);
                      return password;
                  }
                      function newConfirm_password() {
                        let confirm_password = document.createElement("input");
                        confirm_password.type = "password";
                        confirm_password.classList.add("password");
                        confirm_password.className = "form_control";
                        confirm_password.placeholder = "Confirm Password";
                        confirm_password.id = "confirm_password";
                        confirm_password.name = "confirm_password";
                        //confirm_password.value = "Confirm password";
                          document.querySelector("form").append(confirm_password);
                          return confirm_password;
                      }
                          function newE_mail() {
                            let e_mail = document.createElement("input");
                            e_mail.type = "e_mail";
                            e_mail.classList.add("e_mail");
                            e_mail.className = "form_control";
                            e_mail.placeholder = "Email";
                            e_mail.id = "e_mail";
                            e_mail.name = "e_mail";
                            //e_mail.value = "Email";
                              document.querySelector("form").append(e_mail);
                              return e_mail;
                          }
                              function newButton(){
                                let button = document.createElement("button");
                                let buttonText = document.createTextNode("Register");
                                button.type = "submit";
                                button.id = "inblock";
                                button.className = "btn-primary";
                                button.append(buttonText);
                                  document.querySelector("form").append(button);
                                  button.addEventListener('click', in_function);
                                  return button;
                              }
                                  function newFooter() {
                                    let footer = document.createElement("footer");
                                    footer.classList.add("footer");
                                    footer.className = "footer";
                                    let footer_text = document.createTextNode("Copyright by ... 2019");
                                    footer.append(footer_text);
                                      document.querySelector("body").append(footer);
                                  }
                                      function newData_collection(){
                                        let input = document.createElement("input");
                                        input.type = "submit";
                                        input.className = "btn-primary";
                                        input.value = "Register";
                                        input.id = "inblock";
                                        input.name = "inblock";
                                          document.querySelector("form").append(input);
                                      }
} (appElements));
