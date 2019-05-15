

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
    fill_created_tag(reg_button, "submit", "btn-primary", "register_button","Register", ".container");
    reg_button.innerHTML = "<b>Register</b>";
    reg_button.classList.add("register_button");

    document.querySelector("button").addEventListener("click", check_form);
    }

 
function check_form(){
    event.preventDefault();
    if (document.querySelector(".username_field").value == '' || document.querySelector(".pass_field").value == '' || document.querySelector(".confirm_field").value == '' || document.querySelector(".email_field").value == '') {
        let myalert = document.createElement("div");
        myalert.className="alert alert-warning alert-dismissible fade show";
        myalert.role = "alert";
        myalert.innerHTML='<strong>Fill all fields!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
       document.querySelector(".container").append(myalert);
    }
    else{
        if (document.querySelector(".pass_field").value !== document.querySelector(".confirm_field").value){
            let myalert = document.createElement("div");
            myalert.className="alert alert-warning alert-dismissible fade show";
            myalert.role = "alert";
            myalert.innerHTML='<strong>Passwords d\'not match!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
           document.querySelector(".container").append(myalert);
        }
        else{
            var mailformat = /.+@.+\..+/i;
            if(mailformat.test(document.querySelector(".email_field").value) == false){
                let myalert = document.createElement("div");
                myalert.className="alert alert-warning alert-dismissible fade show";
                myalert.role = "alert";
                myalert.innerHTML='<strong>Wrong email format!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
               document.querySelector(".container").append(myalert);
            }
            else {
                send_data(event);
            }
        }
    }

    window.setTimeout(function(){
        $(".alert").alert('close');
    },10000);

}

function send_data(event) {
        event.preventDefault();
        let input_data = document.querySelector("form");
        fetch("/www/add_user.php", {
        method: "POST",
        body: new FormData(input_data)
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

        window.setTimeout(function(){
            $(".alert").alert('close');
        },10000);

        if (text == "User is created"){
            window.location.href = "/www/index.php";
        }

        });
}

