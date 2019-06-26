document.addEventListener("DOMContentLoaded", loaded);

function loaded(){
    
        create_reg_view.common_div();
        create_reg_view.header();
        create_reg_view.footer();
        create_reg_view.create_form();
        create_reg_view.create_input_username();
        create_reg_view.create_input_password();
        create_reg_view.create_input_confirm_password();
        create_reg_view.create_input_email();
        create_reg_view.create_button_registr();
        create_reg_view.create_error_div_list();
        create_reg_view.create_error_div_user();
        create_reg_view.create_error_div_pass();
        create_reg_view.create_error_div_conf_pass();
        create_reg_view.create_error_div_email();
               
}
            
           
function validate(){
              
        check_input.check_userName();
        check_input.check_password_user();
        check_input.check_confirm_password();
        check_input.check_email_user();
        return true;
}

function save(){
        
        save_in_bd.save_user();
}

      
           