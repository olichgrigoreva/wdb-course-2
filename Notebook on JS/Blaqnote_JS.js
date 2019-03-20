document.addEventListener("DOMContentLoaded", loaded);
function loaded() {
    let div_header = document.createElement("header");
    div_header.classList.add("header");
    let header_text = document.createTextNode("SUPER NOTEBOOK");
    div_header.append(header_text);
    document.querySelector("body").append(div_header);
    let form_notebook = document.createElement("form");
    document.querySelector("body").append(form_notebook);
    create_div_input_username();
    function create_div_input_username() {
        let div_input_username = document.createElement("div");
        div_input_username.classList.add("form-group");
        div_input_username.classList.add("username");
        document.querySelector("form").append(div_input_username);
    }
    create_input_username();
    function create_input_username() {
        let input_username = document.createElement("input");
        input_username.type = "text";
        input_username.classList.add("form-control");
        input_username.classList.add("input-username");
        input_username.placeholder = "Username";
        input_username.id = "id-input-username";
        document.querySelector(".username").append(input_username);
    }
    create_div_input_password();
    function create_div_input_password() {
        let div_input_password = document.createElement("div");
        div_input_password.classList.add("form-group");
        div_input_password.classList.add("password");
        document.querySelector("form").append(div_input_password);
    }
    create_input_password();
    function create_input_password() {
        let input_password = document.createElement("input");
        input_password.type = "password";
        input_password.classList.add("form-control");
        input_password.classList.add("input-password");
        input_password.placeholder = "Password";
        input_password.id = "id-input-password";
        document.querySelector(".password").append(input_password);
    }
    create_div_input_confirm_password();
    function create_div_input_confirm_password() {
        let div_input_confirm_password = document.createElement("div");
        div_input_confirm_password.classList.add("form-group");
        div_input_confirm_password.classList.add("confirm-password");
        document.querySelector("form").append(div_input_confirm_password);
    }
    create_input_confirm_password();
    function create_input_confirm_password() {
        let input_confirm_password = document.createElement("input");
        input_confirm_password.type = "password";
        input_confirm_password.classList.add("form-control");
        input_confirm_password.classList.add("input-confirm-password");
        input_confirm_password.placeholder = "Confirm Password";
        input_confirm_password.id = "id-input-confirm-password";
        document.querySelector(".confirm-password").append(input_confirm_password);
    }
    create_div_input_email();
    function create_div_input_email() {
        let div_input_email = document.createElement("div");
        div_input_email.classList.add("form-group");
        div_input_email.classList.add("email");
        document.querySelector("form").append(div_input_email);
    }
    create_input_email();
    function create_input_email() {
        let input_email = document.createElement("input");
        input_email.type = "email";
        input_email.classList.add("form-control");
        input_email.classList.add("input-email");
        input_email.placeholder = "EMail";
        input_email.id = "id-input-email";
        document.querySelector(".email").append(input_email);
    }
    create_div_button();
    function create_div_button() {
        let div_button = document.createElement("div");
        div_button.classList.add("form-group");
        div_button.classList.add("div-button");
        document.querySelector("form").append(div_button);
    }
    create_button();
    function create_button() {
        let button = document.createElement("button");
        button.type = "submit";
        button.classList.add("btn");
        button.classList.add("btn-primary");
        button.classList.add("button");
        button.id = "id-button";
        let button_text = document.createTextNode("Register");
        button.append(button_text);
        document.querySelector(".div-button").append(button);
    //     document.querySelector(".button").addEventListener("click", check);
    }
    let div_footer = document.createElement("footer");
    div_footer.classList.add("footer");
    let footer_text = document.createTextNode("Copyrigth by ..., 2019");
    div_footer.append(footer_text);
    document.querySelector("body").append(div_footer);
}
