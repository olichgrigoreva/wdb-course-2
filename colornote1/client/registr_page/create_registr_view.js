    var create_reg_view = {};
    
    (function(create){
        create.common_div = common_div;
        create.header = header;
        create.footer = footer;
        create.create_form = create_form;
        create.create_input_username = create_input_username;
        create.create_input_password = create_input_password;
        create.create_input_confirm_password = create_input_confirm_password;
        create.create_input_email = create_input_email;
        create.create_button_registr = create_button_registr;
        create.create_error_div_list = create_error_div_list;
        create.create_error_div_user = create_error_div_user;
        create.create_error_div_pass = create_error_div_pass;
        create.create_error_div_conf_pass = create_error_div_conf_pass;
        create.create_error_div_email = create_error_div_email;
        
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
                input_user.placeholder="Username";
                input_user.type="text";
                document.querySelector(".form_1").append(input_user);
                
            }
            
            function create_input_password () {
                let input_password = document.createElement("input");
                input_password.classList.add("input");
                input_password.type="password";
                input_password.name="pole_password";
                input_password.id="pass_user";
                input_password.placeholder="Password";
                document.querySelector(".form_1").append(input_password);
            }
            
            function create_input_confirm_password() {
                let input_confirm_password = document.createElement("input");
                input_confirm_password.classList.add("input");
                input_confirm_password.type="password";
                input_confirm_password.id="conf_pass_user";
                input_confirm_password.name="pole_confirm_password";
                input_confirm_password.placeholder="Confirm password";
                document.querySelector(".form_1").append(input_confirm_password); 
            }
            
            function create_input_email() {
                let input_Email = document.createElement("input");
                input_Email.classList.add("input");
                input_Email.type="email";
                input_Email.name="pole_email";
                input_Email.id="email_user";
                input_Email.placeholder="E-mail";
                document.querySelector(".form_1").append(input_Email); 
            }
            
            function create_button_registr() {
                let button_registr = document.createElement("button");
                button_registr.append(document.createTextNode("Registr"));
                button_registr.classList.add("button_reg");
                // button_registr.classList.add("button");
                button_registr.name = "button_id";
                document.querySelector(".form_1").append(button_registr);
                // document.querySelector("[id='button_id']").addEventListener("click", validation);
                document.querySelector(".button_reg").addEventListener( "click" , save);
            }
            
            function create_error_div_list(){
                let error_list = document.createElement("div");
                error_list.classList.add("error");
                error_list.name = "error_report";
                error_list.id = "err";
                document.querySelector(".All").append(error_list);
            }
            
            function create_error_div_user(){
                let error_user = document.createElement("div");
                error_user.classList.add("error_user");
                error_user.id="error_user";
                document.querySelector(".error").append(error_user);
            }
            
            function create_error_div_pass(){
                let error_pass = document.createElement("div");
                error_pass.classList.add("error_pass");
                error_pass.id="error_pass";
                document.querySelector(".error").append(error_pass);
            }
            
            function create_error_div_conf_pass(){
                let error_conf_pass = document.createElement("div");
                error_conf_pass.classList.add("error_conf_pass");
                error_conf_pass.id="error_conf_pass";
                document.querySelector(".error").append(error_conf_pass);
            }
            
            function create_error_div_email(){
                let error_email = document.createElement("div");
                error_email.classList.add("error_email");
                error_email.id="error_email";
                document.querySelector(".error").append(error_email);
            }
    
           
    }(create_reg_view));
            
            