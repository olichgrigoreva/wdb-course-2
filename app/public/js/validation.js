function formValidation(){
var uid = document.registration.username;
var passid = document.registration.password;
var confpassid = document.registration.confirm_password;
var emailid = document.registration.email;

		if(username_validation(uid,1,5)){
			if (email_validation(emailid)){
				if(password_validation(passid,1,4)){
					if (confirm_password_validation(passid,confpassid)){
					alert("Данные в форму регистрации занесены корректно");
					<!-- AJAX Request -->
					fetch("../components/register.php", {
					method: "POST",
					body: new FormData(registration)
					})
					.then(responce=>{
					return responce.text();
					})
					.then(text=>{
					let s1=text;
					if (s1=="0"){
					alert("Пользователь с таким почтовым ящиком существует"),
					emailid.focus();
					}
					else {
					alert("Новый пользователь успешно зарегистрирован");
					location.href='auth.htm';
					}
					})
					}
				}
			}
		}
		return false;
}



function username_validation(uid,min,max){
var uid_len = uid.value.length;
	if (uid_len == 0 || uid_len>= max || uid_len<min){
	alert("Поле имя пользователя не может быть пустым / Длина имени не менее "+min+" и не более "+max+" символов");
	uid.focus();
	return false;
	}
	return true;
}

function email_validation(emailid){
var reg = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
var editEMail = emailid.value;
var valid = reg.test(editEMail);
	if (!valid){
		alert('Адрес электронной почты введен не правильно!');
		emailid.focus();
		return false;
		}
		return true;
}	

function password_validation(passid,min,max){
var passid_len = passid.value.length;
	if (passid_len == 0 ||passid_len>= max || passid_len<min){
		alert("Поле введите пароль - не может быть пустым/ Длина пароля от "+min+" до "+max+" символов");
		passid.focus();
		return false;
	}
	return true;
}

function confirm_password_validation (passid,confpassid){
	if (passid.value != confpassid.value){
		alert("Данные введенные в поля Пароль и Подтвердите пароль - не совпадают");
		confpassid.focus();
		return false;
	}
	return true;
}

		document.addEventListener("DOMContentLoaded", loaded);
			function loaded() {
				 let textstring0 = document.createElement("div");
				 textstring0.append(document.createTextNode("Введите имя пользователя:"));
				 document.querySelector("form").append(textstring0);
				 let input0 = document.createElement("input");
				 input0.name = "username";
				 document.querySelector("form").append(input0);
			
			
			     let textstring1 = document.createElement("div");
				 textstring1.append(document.createTextNode("Введите логин (адрес электронной почты):"));
				 document.querySelector("form").append(textstring1);
				 let input1 = document.createElement("input");
				 input1.name = "email";
				 document.querySelector("form").append(input1);
				 				 
				 let textstring2 = document.createElement("div");
				 textstring2.append(document.createTextNode("Введите пароль:"));
				 document.querySelector("form").append(textstring2);
				 let input2 = document.createElement("input");
				 input2.name = "password";
				 input2.type = "password";
				 document.querySelector("form").append(input2);
				 
				 let textstring3 = document.createElement("div");
				 textstring3.append(document.createTextNode("Подтвердите пароль:"));
				 document.querySelector("form").append(textstring3);
				 let input3 = document.createElement("input");
				 input3.name = "confirm_password";
				 input3.type="password";
				 document.querySelector("form").append(input3);
				 				 	 
				 let apply1button = document.createElement("input");
				 apply1button.value ="Зарегистрироваться";
				 apply1button.name = "apply1";
				 apply1button.className = "submit";
				 apply1button.type = "submit";
				 document.querySelector("form").append(apply1button);
				 }
				 
				