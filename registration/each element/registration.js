	document.addEventListener("DOMContentLoaded", loaded);
	function loaded() {
		
	let username = document.createElement("input");
	username.type = "text";
	username.placeholder = "Enter username";
	username.classList.add("username");
	username.className = "form_control";
	username.name = "input_username1";
	document.querySelector("body").append(username);

	let password = document.createElement("input");
	password.type = "password";
	password.placeholder = "Enter password";
	password.classList.add("password");
	password.className = "form_control";
	password.name = "input_password1";
	document.querySelector("body").append(password);

	let confirm_password = document.createElement("input");
	confirm_password.type = "password";
	confirm_password.placeholder = "Confirm password";
	confirm_password.classList.add("confirm_password");
	confirm_password.className = "form_control";
	confirm_password.name = "input_confirm_password1";
	document.querySelector("body").append(confirm_password);	
	
	let e_mail = document.createElement("input");
	e_mail.type = "email";
	e_mail.placeholder = "Enter email";
	e_mail.ariaDescribedby = "emailHelp";
	e_mail.classList.add("e_mail");
	e_mail.className = "form_control";
	e_mail.name = "input_email1";
	document.querySelector("body").append(e_mail);

	let button_registration = document.createElement("button");
	let buttonText = document.createTextNode("Register");
	button_registration.classList.add("button_registration");
	button_registration.className = "btn-primary";
	button_registration.name = "button_registration1";
	button_registration.append(buttonText);
	document.querySelector("body").append(button_registration);
	document.querySelector(".btn-primary").addEventListener("click", email);
	document.querySelector(".btn-primary").addEventListener("click", check_form);
	document.querySelector(".btn-primary").addEventListener("click", validateEmail);
	}
	function email() {
	if (document.querySelector(".input_email1").value == "") {
	$("#myAlert").append(<div class = alert alert-warning alert-dismissibl id = myAlert2> <button type = button class = close data-dismiss = alert  aria-label=  true>&times;</button>Success!</div>);
	}
	}
	function check_form() {
		if (document.querySelector(".input_id_1").value == " "){
			if (document.querySelector(".input_id_2").value == " "){
				if (document.querySelector(".input_id_3").value == " "){
					if (document.querySelector(".input_id_4").value == " "){
					alert("Some fields are empty");
					return false;
					}
				}
			}
		}
	}