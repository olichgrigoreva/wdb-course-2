export default class Password {
  static open(pageNode) {
    let password = document.createElement("input");
    password.type = "password";
    password.classList.add("password");
    password.className = "form-control";
    password.placeholder = "Password";
    password.id = "password";
    password.name = "password";
    //password.value = "Password";
    document.querySelector("div2").append(password);
  }
}
