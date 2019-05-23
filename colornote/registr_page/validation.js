function validate(){
               
            //   check_input_by-empty();
                alert("hihi");
                // function check_input_by_empty(){
                    
                        let user=document.querySelector("pole_user").value;
                        // let user=document.forms["form"]["pole_user"].value;
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
                // }
                
                // check_email_by_symbol();
                // function check_email_by_symbol(){
                    
                    let prov_mail_1=mail.indexOf("@") ;
                    let prov_mail_2=mail.indexOf(".") ;
                    
                        if(prov_mail_1<1 || prov_mail_2<1){
                            document.getElementById("email_user").innerHTML= "E-mail введен не верно"
                            return false;
                        }
                // }
}