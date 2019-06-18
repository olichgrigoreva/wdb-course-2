    var check_input = {};
    (function (i){
        i.check_userName = check_userName;
        i.check_password_user = check_password_user;
        i.check_confirm_password = check_confirm_password;
        i.check_email_user = check_email_user;
      
        function  check_userName(){
            event.preventDefault();
            let user=document.querySelector("#user_name");
            let err_1 = "Данное поле должно быть заполнено!";
            let err_2 = "В Имени пользователя должно быть не менее 3-х символов, и не больше 15";
            if (user.value.length==0){
                document.querySelector("#error_user").append(err_1);
                user.style.border = "1px solid red";
                return false;
            }
             if(user.value.length < 3 || user.value.length > 15){
                document.querySelector("#error_user").append(err_2);
                user.style.border = "1px solid red";
                return false;
                
            }
        }           
        
        function check_password_user() {
            event.preventDefault();
            let pass=document.querySelector("#pass_user"); 
            let conf_pass = document.querySelector("#conf_pass_user");
            let err_1 = "Данное поле должно быть заполнено!";
            let err_3 = "Пароли не совпадают!";
            let err_4 = "В пароле должно быть не менее 3-х символов, и не больше 10";
            if(pass.value.length==0 ){
                document.querySelector("#error_pass").append(err_1);
                pass.style.border = "1px solid red";
                return false;
            }
            
            if(pass.value.length < 3 && pass.value.length > 10){
                document.querySelector("#error_pass").append(err_4);
                pass.style.border = "1px solid red";
                return false;
            }
             if(pass.value !== conf_pass.value){
                document.querySelector("#error_pass").append(err_3);
                pass.style.border = "1px solid red";
                return false;                  
            }
        }
        
        function check_confirm_password (){
            event.preventDefault();
            let err_1 = "Данное поле должно быть заполнено!";
            let err_3 = "Пароли не совпадают!";
            let conf_pass = document.querySelector("#conf_pass_user");
            let pass=document.querySelector("#pass_user");
            
            if(conf_pass.value.length==0 ){
                document.querySelector("#error_conf_pass").append(err_1);
                conf_pass.style.border = "1px solid red";
                return false;
            }
            
            if(pass.length !== conf_pass.length){
                document.querySelector("#error_conf_pass").append(err_3);
                conf_pass.style.border = "1px solid red";
                return false;                  
            }
        
        }
        
        function check_email_user () {
            event.preventDefault();
            let err_1 = "Данное поле должно быть заполнено!";
            let err_5 = "Поле email  должно содержать один знак @ и один знак '.' ";
            let mail= document.querySelector("#email_user");
             
            if(mail.value.length==0){
                document.querySelector("#error_email").append(err_1);
                mail.style.border = "1px solid red";
                return false;
            }
            
            let prov_mail_1=mail.value.indexOf("@") ;
            let prov_mail_2=mail.value.indexOf(".") ;
                        
            if(prov_mail_1<1 || prov_mail_2<1){
            document.querySelector("#error_email").append(err_5);
            mail.style.border = "1px solid red";
            return false;
            }
            
        }
        
    }(check_input));
    
    
   