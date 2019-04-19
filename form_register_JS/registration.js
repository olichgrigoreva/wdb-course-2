				function loaded(event){
				header();
				form();
				username();
				password();
				confirm_password();
				e_mail();
				data_collection();
				document.getElementById("inblock").onclick = registration;
				footer();
				}
				function registration(event){
    				event.preventDefault();
				let form = document.querySelector("form");
				fetch("registration_php.php", {
				method: "POST",
				body: new FormData(form)
					})
				}
					function header(){
					let header = document.createElement("header");
					header.classList.add("header");
					let header_text = document.createTextNode("SUPER NOTEBOOK");
					header.append(header_text);
					document.querySelector("body").append(header);
					}
						function form(){
						let form = document.createElement("form");
						form.className = "form";
						form.name = "form";
						document.querySelector("body").append(form);
						}
							function username(){
							let username = document.createElement("input");
							username.type = "text";
							username.placeholder = "Username";
							username.classList.add("username");
							username.className = "form_control";
							username.name = "username";
							document.querySelector("form").append(username);
							}
							function password(){
							let password = document.createElement("input");
							password.type = "password";
							password.placeholder = "Password";
							password.classList.add("password");
							password.className = "form_control";
							password.name = "password";
							document.querySelector("form").append(password);
							}
							function confirm_password(){
							let confirm_password = document.createElement("input");
							confirm_password.type = "password";
							confirm_password.placeholder = "Confirm password";
							confirm_password.classList.add("confirm_password");
							confirm_password.className = "form_control";
							confirm_password.name = "confirm_password";
							document.querySelector("form").append(confirm_password);
							}
							function e_mail(){
							let e_mail = document.createElement("input");
							e_mail.type = "email";
							e_mail.placeholder = "Email";
							e_mail.ariaDescribedby = "emailHelp";
							e_mail.classList.add("e_mail");
							e_mail.className = "form_control";
							e_mail.name = "e_mail";
							document.querySelector("form").append(e_mail);
							}
							function button(){
    							let button = document.createElement("button");
    							let buttonText = document.createTextNode("Register");
  							button.type = "submit"; //('type',type);
  							button.id = "inblock"; //('id',id);
    							button.className = "btn-primary";
    							document.querySelector("form").append(button);
   							button.addEventListener('click',in_function);
							}
								function footer(){
								let footer = document.createElement("footer");
								footer.classList.add("footer");
								let footer_text = document.createTextNode("Copyright by ... 2019");
								footer.append(footer_text);
								document.querySelector("body").append(footer);
								}
									function data_collection(id, name, value){
    									let input = document.createElement("input");
   									input.type = "submit";
    									input.className = "btn-primary";
    									input.value = "Register";
   									input.id = "inblock";
    									input.name = name;
    									document.querySelector("form").append(input);
									}