

document.addEventListener("DOMContentLoaded", loaded);

function fill_created_tag(tag_name, tag_type, tag_class, field_name,tag_placeholder, query_Selector){
    tag_name.type = tag_type;
    tag_name.classList.add(tag_class);
    tag_name.name = field_name;
    tag_name.placeholder = tag_placeholder;
    document.querySelector(query_Selector).append(tag_name);
    }

function loaded() {
    let username = document.createElement("input");
    fill_created_tag(username, "text", "form-control", "username_field","Username", ".container");
    username.classList.add("reg_fields");
    username.classList.add("username_field");
            
    let password = document.createElement("input");
    fill_created_tag(password, "password", "form-control", "pass_field","Password", ".container");
    password.classList.add("reg_fields");
    password.classList.add("pass_field");

    let confirm_password = document.createElement("input");
    fill_created_tag(confirm_password, "password", "form-control", "confirm_field","Confirm password", ".container");
    confirm_password.classList.add("reg_fields");
    confirm_password.classList.add("confirm_field");

    let e_mail = document.createElement("input");
    fill_created_tag(e_mail, "email", "form-control", "email_field","EMail", ".container");
    e_mail.classList.add("reg_fields");
    e_mail.classList.add("email_field");

    let reg_button = document.createElement("button");
    fill_created_tag(reg_button, "button", "btn-primary", "register_button","Register", ".container");
    reg_button.innerHTML = "<b>Register</b>";
    reg_button.classList.add("register_button");

    document.querySelector("button").addEventListener("click", check_form);
    }

function check_form(){
    if (document.querySelector(".username_field").value == '') {
        $("#myAlert").append("<div class='alert alert-success alert-dismissable' id='myAlert2'> <button type='button' class='close' data-dismiss='alert'  aria-hidden='true'>&times;</button> Success! message sent successfully.</div>");
    }
}

