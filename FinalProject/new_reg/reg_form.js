function create_form(event) {

let div_container=document.createElement("div");
div_container.classList.add("container");
document.querySelector("body").append(div_container);

    let div_table=document.createElement("div");
    div_table.classList.add("row");
    div_container.append(div_table);

        let left_column=document.createElement("div");
        left_column.classList.add("col-sm");
        div_table.append(left_column);

        let mid_column=document.createElement("div");
        mid_column.classList.add("col-sm", "container-fluid");
        div_table.append(mid_column);

            let reg_form=document.createElement("form");
            reg_form.classList.add("reg_form", "div_form_style");
            // reg_form.action = "./reg.php";
            reg_form.method = "post";
            mid_column.append(reg_form);

                let p=document.createElement("p");
                reg_form.append(p);

                let input_username = document.createElement("input");
                input_username.type  = "text";
                input_username.id    = "username";
                input_username.name  = "name";
                input_username.placeholder = "Введите имя пользоватея";
                input_username.classList.add("form-control");
                reg_form.append(input_username);

                p=document.createElement("p");
                reg_form.append(p);

                let input_password = document.createElement("input");
                input_password.type  = "password";
                input_password.id    = "password";
                input_password.name  = "pass";
                input_password.placeholder = "Введите пароль";
                input_password.classList.add("form-control");
                reg_form.append(input_password);

                p=document.createElement("p");
                reg_form.append(p);

                let repeat_password = document.createElement("input");
                repeat_password.type  = "password";
                repeat_password.id    = "password";
                repeat_password.name  = "repas";
                repeat_password.placeholder = "Повторите пароль";
                repeat_password.classList.add("form-control");
                reg_form.append(repeat_password);

                p=document.createElement("p");
                reg_form.append(p);

                let input_email = document.createElement("input");
                input_email.type  = "text";
                input_email.id    = "email";
                input_email.name  = "email";
                input_email.placeholder = "Введите email";
                input_email.classList.add("form-control");

                reg_form.append(input_email);

                p=document.createElement("p");
                reg_form.append(p);

                let submit_reg = document.createElement("button");
                submit_reg.type      = "submit";
                submit_reg.id        = "email";
                submit_reg.innerHTML = "Зарегистрироваться";
                submit_reg.classList.add("button", "btn", "btn-primary", "div_form_style", "center");
                reg_form.append(submit_reg);
                // document.querySelector("button").addEventListener ("click", register);

            let right_column = document.createElement("div");
            right_column.classList.add("col-sm");
            div_table.append(right_column);
}
