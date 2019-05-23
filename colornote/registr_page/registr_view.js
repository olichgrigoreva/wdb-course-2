            function common_div (){
                let common_div = document.createElement("div");
                common_div.className = "All";
                document.querySelector("body").append(common_div);
                
            }
            
            function header(){
                let header=document.createElement("div");
                header.classList.add("div_head");
                header.append(document.createTextNode("SUPER NOTEBOOK"));
                document.querySelector(".All").append(header);
            }
            
            function footer (){
                let footer=document.createElement("div");
                footer.classList.add("div_foot");
                footer.append(document.createTextNode("copyright by ... 2016"));
                document.querySelector(".All").append(footer);
            }
            
            function create_form () {
                let middle = document.createElement("form");
                middle.className="form_1";
                document.querySelector(".All").append(middle);
            }
            
            function create_input_username (){
                let input_user = document.createElement("input");
                input_user.className = "input";
                input_user.name="pole_user";
                input_user.id="user_name";
                input_user.placeholder="username";
                input_user.type="text";
                document.querySelector(".form_1").append(input_user);
                
            }
            
            function create_input_password () {
                let input_password = document.createElement("input");
                input_password.classList.add("input");
                input_password.type="password";
                input_password.name="pole_password";
                input_password.id="pass_user";
                input_password.placeholder="password";
                document.querySelector(".form_1").append(input_password);
            }
            
            function create_input_confirm_password() {
                let input_confirm_password = document.createElement("input");
                input_confirm_password.classList.add("input");
                input_confirm_password.type="password";
                // input_password.id="conf_pass_user";
                input_confirm_password.name="pole_confirm_password";
                input_confirm_password.placeholder="confirm password";
                document.querySelector(".form_1").append(input_confirm_password); 
            }
            
            function create_input_email() {
                let input_Email = document.createElement("input");
                input_Email.classList.add("input");
                input_Email.type="email";
                input_Email.name="pole_email";
                // input_password.id="email_user";
                input_Email.placeholder="E-mail";
                document.querySelector(".form_1").append(input_Email); 
            }
            
            function create_button_registr () {
                let button_registr = document.createElement("button");
                button_registr.append(document.createTextNode("Registr"));
                button_registr.classList.add("button_reg");
                button_registr.name = "button_id";
                document.querySelector(".form_1").append(button_registr);
                // document.querySelector("[id='button_id']").addEventListener("click", proverka);
                document.querySelector(".button_reg").addEventListener("click",proverka);
            }
