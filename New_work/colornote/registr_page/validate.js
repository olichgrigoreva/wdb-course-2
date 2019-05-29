    function  check_userName(){
        event.preventDefault();
        let user=document.querySelector("#user_name").value;
        let err_1 = "Данное поле должно быть заполнено!";
        let err_2 = "Данное поле должно быть заполнено!";
        if (user.length==0){
            document.getElementById("error_user").innerHTML = err_1;
            document.getElementById("error_user").innerHTML = err_2;
            // user.style.border = "2px solid red";
            return false;
        }
         if(user >= 3 && user <=15){
            document.getElementById("user_name").value="В Имени пользователя должно быть не менее 3-х символов, и не больше 15";
            return false;
        }
    }           
    
    function check_password_user() {
        event.preventDefault();
        let pass=document.querySelector("#pass_user").value; 
        let conf_pass = document.querySelector("#conf_pass_user").value;
        let err_1 = "Данное поле должно быть заполнено!";
        let err_3 = "Пароли не совпадают!";
        let err_4 = "В пароле должно быть не менее 3-х символов, и не больше 10";
        if(pass.length==0 ){
            document.getElementById("error_pass").innerHTML=err_1;
            return false;
        }
        
        if(pass >= 3 && pass <=10){
            document.getElementById("error_pass").innerHTML=err_4;
            return false;
        }
         if(pass !== conf_pass){
            document.getElementById("error_pass").innerHTML = err_3;
            alert (" пароли не совпадают!");
            return false;                  
        }
    }
    
    function check_confirm_password (){
        event.preventDefault();
        let err_1 = "Данное поле должно быть заполнено!";
        let err_3 = "Пароли не совпадают!";
        let conf_pass = document.querySelector("#conf_pass_user").value;
        let pass=document.querySelector("#pass_user").value;
        
        if(pass.length==0 ){
            document.getElementById("error_pass").innerHTML=err_1;
            return false;
        }
        
        if(pass !== conf_pass){
            document.getElementById("error_conf_pass").innerHTML = err_3;
            alert (" пароли не совпадают!");
            return false;                  
        }
    
    }
    
    function check_email_user () {
        event.preventDefault();
        let err_1 = "Данное поле должно быть заполнено!";
        let err_5 = "Поле email  должно содержать один знак @ и один знак '.' ";
        let mail= document.querySelector("#email_user").value;
         
        if(mail.length==0){
            document.getElementById("error_email").innerHTML=err_1;
            return false;
        }
        
        let prov_mail_1=mail.indexOf("@") ;
        let prov_mail_2=mail.indexOf(".") ;
                    
        if(prov_mail_1<1 || prov_mail_2<1){
        document.getElementById("error_email").innerHTML=err_1;
        return false;
        }
        
    }
    
    
   