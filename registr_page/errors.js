function error_list(){
                let error_list = document.createElement("div");
                error_list.classList.add("error");
                error_list.name = "error_report";
                error_list.id = "err"
                document.querySelector(".All").append(error_list);
            }
            
            function error_user(){
                let error_user = document.createElement("div");
                error_user.classList.add("error_user");
                error_user.id="error_user";
                document.querySelector(".error").append(error_user);
            }
            
            function error_pass(){
                let error_pass = document.createElement("div");
                error_pass.classList.add("error_pass");
                error_pass.id="error_pass";
                document.querySelector(".error").append(error_pass);
            }
            function error_conf_pass(){
                let error_conf_pass = document.createElement("div");
                error_conf_pass.classList.add("error_conf_pass");
                error_conf_pass.id="error_conf_pass";
                document.querySelector(".error").append(error_conf_pass);
            }
            function error_email(){
                let error_email = document.createElement("div");
                error_email.classList.add("error_email");
                error_email.id="error_email";
                document.querySelector(".error").append(error_email);
            }