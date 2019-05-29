document.addEventListener("DOMContentLoaded", loaded);


function loaded(){
                let header=document.createElement("div");
                header.classList.add("div_head");
                header.append(document.createTextNode("SUPER NOTEBOOK"));
                document.querySelector("body").append(header);
                
                let middle = document.createElement("div");
                middle.className="div_1";
                document.body.append(middle);
                // document.querySelector(".form_1").append(input_user);
                
                let but_1 = document.createElement("button");
                document.querySelector("div_1").append(but_1);
                
                let input_user = document.createElement("input");
                // input_user.classList.add("pole");
                input_user.className = "pole,pole1";
                input_user.name="pole_user";
                input_user.id="user_name";
                input_user.placeholder="username";
                input_user.type="text";
                document.querySelector("body").append(input_user); 
                
                let input_password = document.createElement("input");
                input_password.classList.add("pole");
                input_password.type="password";
                input_password.name="pole_password";
                input_password.id="pass_user";
                input_password.placeholder="password";
                document.querySelector("body").append(input_password); 
                
                let input_confirm_password = document.createElement("input");
                input_confirm_password.classList.add("pole");
                input_confirm_password.type="password";
                input_password.id="conf_pass_user";
                input_confirm_password.name="pole_confirm_password";
                input_confirm_password.placeholder="confirm password";
                document.querySelector("body").append(input_confirm_password); 
                
                let input_Email = document.createElement("input");
                input_Email.classList.add("pole");
                input_Email.type="email";
                input_Email.name="pole_email";
                input_password.id="email_user";
                input_Email.placeholder="E-mail";
                document.querySelector("body").append(input_Email); 
                
                
                let button_registr = document.createElement("button");
                button_registr.append(document.createTextNode("Registr"));
                button_registr.classList.add("button_reg");
                // button_registr.className = "class1";
                button_registr.name = "button_id";
                document.querySelector("body").append(button_registr);
                document.querySelector("[id='button_id']").addEventListener("click", proverka);
                document.querySelector(".button_reg").addEventListener("click",proverka);
                
                let footer=document.createElement("div");
                footer.classList.add("div_foot");
                footer.append(document.createTextNode("copyright by ... 2016"));
                document.querySelector("body").append(footer);
                
            }
            
            function proverka(){
                alert("hihi");
                let user=document.forms["form"]["pole_user"].value;
                let pass=document.forms["form"]["pole_password"].value; 
                let conf_pass=document.forms["form"]["pole_confirm_password"].value; 
                let mail=document.forms["form"]["pole_email"].value; 
                
                if (user.length==0){
                   document.getElementById("user_name").innerHTML="Данное поле обязательно к заполнению";
                   return false;
                }
                
                if(pass.length==0){
                    document.getElementById("pass_user").innerHTML="Данное поле обязательно к заполнению";
                    return false;
                }
                
                if(conf_pass.length==0){
                    document.getElementById("conf_pass_user").innerHTML="Данное поле обязательно к заполнению";
                    return false;
                }
                
                if(mail.length==0){
                    document.getElementById("email_user").innerHTML="Данное поле обязательно к заполнению";
                    return false;
                }
                
                let prov_mail_1=mail.indexOf("@") ;
                let prov_mail_2=mail.indexOf(".") ;
                
                if(prov_mail_1<1 || prov_mail_2<1){
                    document.getElementById("email_user").innerHTML= "E-mail введен не верно"
                    return false;
                }
            }