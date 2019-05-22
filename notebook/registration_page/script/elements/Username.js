let appUsername = {};
  (function(app){
    app.newUsername = newUsername;
      function newUsername() {
        let username = document.createElement("input");
        username.type = "text";
        username.classList.add("username");
        username.className = "form-control";
        username.placeholder = "Username";
        username.id = "username";
        username.name = "username";
        document.querySelector("div1").append(username);
      }
} (appUsername));
