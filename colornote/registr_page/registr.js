document.addEventListener("DOMContentLoaded", loaded);






function loaded(){
                
                let disp = document.createElement("div");
                disp.className = "All";
                document.querySelector("body").append(disp);
    
                let header=document.createElement("div");
                header.classList.add("div_head");
                header.append(document.createTextNode("SUPER NOTEBOOK"));
                document.querySelector(".All").append(header);
               
                let footer=document.createElement("div");
                footer.classList.add("div_foot");
                footer.append(document.createTextNode("copyright by ... 2016"));
                document.querySelector(".All").append(footer);
                
                let middle = document.createElement("form");
                middle.className="form_1";
                document.querySelector(".All").append(middle);
                
                let br = document.createElement("br");
                document.querySelector(".All").append(br);
               
                let input_user = document.createElement("input");
                input_user.className = "input";
                input_user.name="pole_user";
                input_user.id="user_name";
                input_user.placeholder="username";
                input_user.type="text";
                document.querySelector(".form_1").append(input_user);
               
               
                let input_password = document.createElement("input");
                input_password.classList.add("input");
                input_password.type="password";
                input_password.name="pole_password";
                input_password.id="pass_user";
                input_password.placeholder="password";
                document.querySelector(".form_1").append(input_password);
               
                
                let input_confirm_password = document.createElement("input");
                input_confirm_password.classList.add("input");
                input_confirm_password.type="password";
                input_password.id="conf_pass_user";
                input_confirm_password.name="pole_confirm_password";
                input_confirm_password.placeholder="confirm password";
                document.querySelector(".form_1").append(input_confirm_password); 
                
                
                let input_Email = document.createElement("input");
                input_Email.classList.add("input");
                input_Email.type="email";
                input_Email.name="pole_email";
                input_password.id="email_user";
                input_Email.placeholder="E-mail";
                document.querySelector(".form_1").append(input_Email); 
                
                
                let button_registr = document.createElement("button");
                button_registr.append(document.createTextNode("Registr"));
                button_registr.classList.add("button_reg");
                button_registr.name = "button_id";
                document.querySelector(".form_1").append(button_registr);
                // document.querySelector("[id='button_id']").addEventListener("click", proverka);
                document.querySelector(".button_reg").addEventListener("click",proverka);
                
                
            }
            
            function proverka(){
                alert("hihi");
                let user=document.forms["form"]["pole_user"].value;
                let pass=document.forms["form"]["pole_password"].value; 
                let conf_pass=document.forms["form"]["pole_confirm_password"].value; 
                let mail=document.forms["form"]["pole_email"].value; 
                
                if (user.length==0){
                   document.getElementById("user_name").innerHTML="Данное поле обязательно к заполнению";
                   alert("55");
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