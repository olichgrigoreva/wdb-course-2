function formValidation(){
var emailid = document.logination.user_login;
var passid = document.logination.user_password;

		if (email_validation(emailid)){
			if(password_validation(passid,1,4)){
				<!-- AJAX Request -->
				fetch("../components/login.php", {
				method: "POST",
				body: new FormData(logination)
				})
				.then(responce=>{
				return responce.text();
				})
				.then(text=>{
				let s1=text;
				if (s1=="false"){
				alert("Пользователь с такими почтовым ящиком или паролем не существует"),
				emailid.focus();
				}
				else {
				location.href='notepadpage.php';
				}
				})
			}
		}
			
				
				
		
		return false;
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

		document.addEventListener("DOMContentLoaded", loaded);
			function loaded() {
				 let textstring0 = document.createElement("div");
				 textstring0.append(document.createTextNode("ЛОГИН:"));
				 document.querySelector("form").append(textstring0);
				 let input0 = document.createElement("input");
				 input0.name = "user_login";
				 input0.placeholder = "Адрес электронной почты";
				 document.querySelector("form").append(input0);
			
			
			     let textstring1 = document.createElement("div");
				 textstring1.append(document.createTextNode("Пароль"));
				 document.querySelector("form").append(textstring1);
				 let input1 = document.createElement("input");
				 input1.name = "user_password";
				 document.querySelector("form").append(input1);
				 
				 let reglink = document.createElement("a");
				 reglink.append(document.createTextNode("Регистрация"));
				 reglink.setAttribute("href", "register.htm");
				 document.querySelector("form").append(reglink);
				 				 				 	 
				 let apply1button = document.createElement("input");
				 apply1button.value ="Войти";
				 apply1button.name = "apply1";
				 apply1button.className = "submit";
				 apply1button.type = "submit";
				 document.querySelector("form").append(apply1button);
				 }
				 
				