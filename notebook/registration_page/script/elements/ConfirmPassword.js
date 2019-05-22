let appConfirmPassword = {};
  (function(app){
    app.newConfirmPassword = newConfirmPassword;
      function newConfirmPassword() {
        let confirm_password = document.createElement("input");
        confirm_password.type = "password";
        confirm_password.classList.add("password");
        confirm_password.className = "form-control";
        confirm_password.placeholder = "Confirm Password";
        confirm_password.id = "confirm_password";
        confirm_password.name = "confirm_password";
        //confirm_password.value = "Confirm password";
        document.querySelector("div3").append(confirm_password);
      }
} (appConfirmPassword));
