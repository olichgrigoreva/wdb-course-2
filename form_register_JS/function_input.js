let appInput = {};
  (function(app){
    app.username = newUsername;
    app.password = newPassword;
    app.confirm_password = newConfirm_password;
    app.e_mail = newEmail;
      function newUsername(){;
        let username = document.createElement("input");
          username.type = "text";
            username.placeholder = "Username";
              username.id = "username";
              username.classList.add("username");
            username.className = "form_control";
          username.name = "username";
        document.querySelector("form").append(username);
      return username;
    }
        function newPassword(){
          let password = document.createElement("input");
            password.type = "password";
              password.placeholder = "Password";
                password.id = "password";
                password.classList.add("password");
              password.className = "form_control";
            password.name = "password";
          document.querySelector("form").append(password);
        }
            function newConfirm_password(){
              let confirm_password = document.createElement("input");
                confirm_password.type = "password";
                  confirm_password.placeholder = "Confirm password";
                    confirm_password.id = "confirm_password";
                    confirm_password.classList.add("confirm_password");
                  confirm_password.className = "form_control";
                confirm_password.name = "confirm_password";
              document.querySelector("form").append(confirm_password);
            }
                function newEmail(){
                  let e_mail = document.createElement("input");
                    e_mail.type = "email";
                      e_mail.placeholder = "Email";
                        e_mail.id = "e_mail";
                        e_mail.ariaDescribedby = "emailHelp";
                      e_mail.classList.add("e_mail");
                    e_mail.className = "form_control";
                  e_mail.name = "e_mail";
                document.querySelector("form").append(e_mail);
                }
}(appInput));
