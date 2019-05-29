document.addEventListener("DOMContentLoaded", loaded);

function loaded(){
    
        common_div();
        header();
        footer();
        create_form();
        errors();
        // label();
        create_input_username();
        create_input_password();
        create_input_confirm_password();
        create_input_email();
        create_button_registr();
        
               
}
            
           
function validate(){
              
        check_userName();
        check_password_user();
        check_confirm_password();
        check_email_user();
              
}

function errors(){
        error_list();
        error_user();
        error_pass();
        error_conf_pass();
        error_email();
}
      
           