<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Вход</title>
    <script type="text/javascript">

      /* построение тела страницы */
      document.addEventListener("DOMContentLoaded", div_1);
      document.addEventListener("DOMContentLoaded", div_1_1);
      document.addEventListener("DOMContentLoaded", div_2);
      document.addEventListener("DOMContentLoaded", form_1);
      document.addEventListener("DOMContentLoaded", div_2_1);
      document.addEventListener("DOMContentLoaded", div_2_3);
      document.addEventListener("DOMContentLoaded", div_2_5);
      document.addEventListener("DOMContentLoaded", div_3);
      document.addEventListener("DOMContentLoaded", podsvet_name);
      document.addEventListener("DOMContentLoaded", podsvet_password);
      document.addEventListener("DOMContentLoaded", go_register);

      function div_1(event) {
        let div=document.createElement("div");
        div.classList.add("text_1", "centr_1", "div_1");
        let div_br_1=document.createElement("div");
        div_br_1.innerHTML="<br>";
        div.append(div_br_1);
        let text=document.createTextNode("Калькулятор.");
        div.append(text);
        let div_br_2=document.createElement("div");
        div_br_2.innerHTML="<br> <?php echo $_SESSION['info_error']; ?>"
        div.append(div_br_2);
        document.querySelector("body").append(div);
      }
      function div_1_1(event) {
        let div=document.createElement("div");
        div.classList.add("centr_1", "div_1_1", "info_box");
        document.querySelector("body").append(div);
      }
      function div_2(event) {
        let div=document.createElement("div");
        div.classList.add("width_1", "container", "div_2");
        let div_br=document.createElement("div");
        div_br.innerHTML="<br> <br> <br> <br>";
        div.append(div_br);
        document.querySelector("body").append(div);
      }
      function form_1(event) {
        let form=document.createElement("form");
        form.classList.add("form_1");
        form.action="authorize.php";
        document.querySelector(".div_2").append(form);
      }
      function div_2_1(event) {
        let div=document.createElement("div");
        div.classList.add("div_2_1");
        let label=document.createElement("label");
        label.setAttribute("for", "enter_username_1");
        label.id="podsvet_name";
        let text=document.createTextNode("Имя пользователя");
        label.append(text);
        div.append(label);
        let input=document.createElement("input");
        input.classList.add("form-control");
        input.name="user";
        input.type="text";
        input.value="";
        input.placeholder="Введите имя пользователя";
        input.id="enter_username_1";
        input.setAttribute("aria-describedby", "enter_email_1_Help");
        div.append(input);
        let small=document.createElement("small");
        small.classList.add("form-text", "text-muted");
        small.id="enter_email_1_Help";
        let text_small=document.createTextNode("Может содержать от 3 до 32 латинских букв, цифр, а также символы .  _  - . Должен начинаться и заканчиваться на букву или цифру, нельзя использовать подряд два одинаковых спецсимвола.");
        small.append(text_small);
        div.append(small);
        document.querySelector(".form_1").append(div);
      }
      function div_2_3(event) {
        let div=document.createElement("div");
        div.classList.add("div_2_3");
        let div_br=document.createElement("div");
        div_br.innerHTML="<br>";
        div.append(div_br);
        let label=document.createElement("label");
        label.setAttribute("for", "enter_password_1");
        label.id="podsvet_password";
        let text=document.createTextNode("Пароль");
        label.append(text);
        div.append(label);
        let input=document.createElement("input");
        input.classList.add("form-control");
        input.name="password";
        input.type="password";
        input.value="";
        input.placeholder="Введите пароль";
        input.id="enter_password_1";
        input.setAttribute("aria-describedby", "enter_password_1_Help");
        div.append(input);
        let small=document.createElement("small");
        small.classList.add("form-text", "text-muted");
        small.id="enter_password_1_Help";
        let text_small=document.createTextNode("Может содержать от 6 до 32 латинских букв, цифр.");
        small.append(text_small);
        div.append(small);
        document.querySelector(".form_1").append(div);
      }
      function div_2_5(event) {
        let div=document.createElement("div");
        div.classList.add("div_2_5", "centr_1");
        let div_br_1=document.createElement("div");
        div_br_1.innerHTML="<br>";
        div.append(div_br_1);
        let button=document.createElement("button");
        button.classList.add("btn", "btn-success");
        button.type="submit";
        let text=document.createTextNode("Войти");
        button.append(text);
        div.append(button);
        let div_br_2=document.createElement("div");
        div_br_2.innerHTML="<br> <br>";
        div.append(div_br_2);
        document.querySelector(".form_1").append(div);
        document.querySelector(".btn-success").addEventListener("click", enter_user);
      }

      function go_register(event) {
        let div=document.createElement("div");
        div.classList.add("centr_1");
        let button=document.createElement("button");
        button.classList.add("btn", "btn-primary");
        button.type="button";
        button.onclick = function() {
          document.location='register.html';
        }
        let text=document.createTextNode("Регистрация");
        button.append(text);
        div.append(button);
        let div_br_1=document.createElement("div");
        div_br_1.innerHTML="<br> <br> <br>";
        div.append(div_br_1);

        document.querySelector(".div_2").append(div);
      }


      function div_3(event) {
        let div=document.createElement("div");
        div.classList.add("text_2", "centr_1");
        let div_br_1=document.createElement("div");
        div_br_1.innerHTML="<br> <br>";
        div.append(div_br_1);
        let text=document.createTextNode("Выполнил: Бронников С.");
        div.append(text);
        let div_br_2=document.createElement("div");
        div_br_2.innerHTML="<br> <br>";
        div.append(div_br_2);
        document.querySelector("body").append(div);
      }

// подсветка полей
// подсветка имя
      function podsvet_name(event) {
        let podsvet_name=document.getElementById("enter_username_1");
        podsvet_name.onkeyup=function podsvet() {
          let user_name=document.querySelector("#enter_username_1").value;
          let lenght_user_name=user_name.length;
          let symbol_massiv="1234567890QqWwEeRrTtYyUuIiOoPpAaSsDdFfGgHhJjKkLlZzXxCcVvBbNnMm._-";
          let length_symbol_massiv=symbol_massiv.length;
          let k;
          let l;
          let sootv_name=0;
            if(lenght_user_name>2) {
              for(k=0; k<lenght_user_name; k++) {
                for(l=0; l<length_symbol_massiv; l++) {
                  if(user_name.charAt(k)==symbol_massiv.charAt(l)) {
                    sootv_name=sootv_name+1;
                  }
                }
              }
            }
          if(lenght_user_name>2 && lenght_user_name<33 && sootv_name==lenght_user_name) {
            document.getElementById("podsvet_name").className="good";
          }
          else {
            document.getElementById("podsvet_name").className="bad";
          }
        }
      }
// подсветка пароль
      function podsvet_password(event) {
        let podsvet_name=document.getElementById("enter_password_1");
        podsvet_name.onkeyup=function podsvet() {
          let password=document.querySelector("#enter_password_1").value;
          let lenght_password=password.length;
          let symbol_massiv_pass="1234567890QqWwEeRrTtYyUuIiOoPpAaSsDdFfGgHhJjKkLlZzXxCcVvBbNnMm";
          let length_symbol_massiv_pass=symbol_massiv_pass.length;
          let m;
          let n;
          let sootv_password=0;
          if(lenght_password>5) {
            for(m=0; m<lenght_password; m++) {
              for(n=0; n<length_symbol_massiv_pass; n++) {
                if(password.charAt(m)==symbol_massiv_pass.charAt(n)) {
                  sootv_password=sootv_password+1;
                }
              }
            }
          }
          if(lenght_password>5 && lenght_password<33 && sootv_password==lenght_password) {
            document.getElementById("podsvet_password").className="good";
          }
          else {
            document.getElementById("podsvet_password").className="bad";
          }
        }
      }

    </script>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap-reboot.min.css">
    <style media="screen">
      .width_1 {
        width: 500px;
      }
      .text_1 {
        font-size: 30px;
        background: #8a736b;
      }
      .text_2 {
        font-size: 10px;
        background: #8a736b;
      }
      .centr_1 {
        text-align: center;
      }
      .info_message {
        background: #ebcf44;
        border-radius: 10px;
        margin: 10px;
      }
      .info_box {
        position: fixed;
        top: 10px;
        left: 10px;
        right: 10px;
        margin: 10px;
      }
      .good {
        color: green;
      }
      .bad {
        color: red;
      }
    </style>
  </head>
  <body>

  </body>
</html>
