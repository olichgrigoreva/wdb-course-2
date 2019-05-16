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

            let p=document.createElement("p");
            mid_column.append(p);

                let input_username=document.createElement("input");
                input_username.type="text";
                input_username.id="username";
                input_username.value="Введите имя пользователя";
                input_username.classList.add("input");
                p.append(input_username);

            p=document.createElement("p");
            mid_column.append(p);

                let input_password = document.createElement("input");
                input_password.type = "password";
                input_password.id = "password";
                input_password.classList.add("input");
                input_password.value="Введите пароль";
                p.append(input_password);

            p=document.createElement("p");
            mid_column.append(p);

                let repeat_password = document.createElement("input");
                repeat_password.type = "password";
                repeat_password.id = "password";
                repeat_password.classList.add("input");
                repeat_password.value="Введите пароль повторно";
                p.append(repeat_password);

            p=document.createElement("p");
            mid_column.append(p);

                let input_email = document.createElement("input");
                input_email.type = "text";
                input_email.id = "email";
                input_email.classList.add("input");
                input_email.value-"Введите имейл";
                p.append(input_email);

            p=document.createElement("p");
            mid_column.append(p);

                let submit_reg = document.createElement("button");
                submit_reg.type = "submit";
                submit_reg.id = "email";
                submit_reg.classList.add("button");
                submit_reg.innerHTML = "Зарегистрироваться";
                p.append(submit_reg);

            let right_column=document.createElement("div");
            right_column.classList.add("col-sm");
            div_table.append(right_column);
}
