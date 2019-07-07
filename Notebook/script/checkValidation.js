const checkValidation = {};

(function(value) {
    
    value.alertElement = alertElement; 
    
    function alertElement(message){
        let alert = 
            `<div id="alert" class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Warning!</strong> <span>${message}</span> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>`;
        
        return alert;
    }
    
    value.checkResponse = checkResponse;
    
    function checkResponse(text) {
        if(text.length > 0) {
            const value = [text.split(' ')[2], text.split(' ')[5]];
    
            if(value[1].slice(1, -1) === 'user_name') {
                document.getElementById("txtHeader").insertAdjacentHTML('afterend',  this.alertElement(`Пользователь <strong>${value[0].slice(1, -1)}</strong> уже существует`));
            }
    
            if(value[1].slice(1, -1) === 'email') {
                document.getElementById("txtHeader").insertAdjacentHTML('afterend',  this.alertElement(`Такой email <strong>${value[0].slice(1, -1)}</strong> уже существует`));
            }
    
        } else {
            document.location.href = "../Note/index.html";
        }
    }

    value.checkProfileResponse = checkProfileResponse;

    function checkProfileResponse(text) {
        if(text === 'user false') {
            document.getElementById("txtHeader").insertAdjacentHTML('afterend',  this.alertElement(`Такой пользователь уже существует`))
        } else if(text === 'mail false') {
            document.getElementById("txtHeader").insertAdjacentHTML('afterend',  this.alertElement(`Такой email уже существует`))
        } else if(text === 'user and mail false') {
            document.getElementById("txtHeader").insertAdjacentHTML('afterend',  this.alertElement(`Такой пользователь и email уже существуют`))
        } else {
            document.location.href = "../Note/index.html";
        }
    }
    
    value.checkEmpty = checkEmpty;
    
    function checkEmpty() {
        const userName = document.querySelector('input[name="username"]').value;
        const emailValue = document.querySelector('input[name="email"]').value;
        const pass = document.querySelector('input[name="password"]').value;
        const passConfirm = document.querySelector('input[name="passwordconf"]').value;
        const arrOfElement = [userName, emailValue, pass, passConfirm];
    
        function checkArr(value) {
            const checkSpace = value.split('').filter(v => v === ' ');
            
            if (checkSpace.length === value.length || value === '') {
                return true;
            }
        }
    
        if(arrOfElement.some(checkArr)) {
            document.getElementById("txtHeader").insertAdjacentHTML('afterend',  this.alertElement('Заполните поля формы'));
            return false;
        }
    
        return true;
    }
    
    value.checkUser = checkUser;
    
    function checkUser() {
        if (document.querySelector('input[name="username"]').value.split('').filter(val => val === ' ').length > 1) {
            document.getElementById("txtHeader").insertAdjacentHTML('afterend',  this.alertElement(`Имя пользователя не должно содержать более
            одного пробела`));
    
            return false;
        }

        if(document.querySelector('input[name="username"]').value.length < 3) {
            document.getElementById("txtHeader").insertAdjacentHTML('afterend',  this.alertElement(`Имя пользователя должно иметь не менее трех символов`));

            return false;
        }
    
        return true;
    }
    
    value.checkEmail = checkEmail;
    
    function checkEmail() {
        const emailValue = document.querySelector('input[name="email"]').value;
        const arrOfDog = emailValue.split('').filter(v => v === '@').length;
    
        if(!emailValue.includes('@') || emailValue[0] === '@' ||
            emailValue[emailValue.length-1] === '@' || arrOfDog > 1 || emailValue.includes(' ')) {
            document.getElementById("txtHeader").insertAdjacentHTML('afterend',  this.alertElement('Введите правильный email'));
    
            return false;
        }
    
        return true;
    }
    
    value.checkPassword = checkPassword;
    
    function checkPassword() {
        const pass = document.querySelector('input[name="password"]').value.split('');
        const passConfirm = document.querySelector('input[name="passwordconf"]').value.split('');
    
        if(pass.some((v) => v === ' ')) {
            document.getElementById("txtHeader").insertAdjacentHTML('afterend',  this.alertElement('Пробельные символы в пароле запрещены!'));
            return false;
        }

        if(pass.length < 3) {
            document.getElementById("txtHeader").insertAdjacentHTML('afterend',  this.alertElement('Пароль должен иметь не менее трех символов'));

            return false;
        }
    
        if(pass.join('') !== passConfirm.join('')) {
            document.getElementById("txtHeader").insertAdjacentHTML('afterend',  this.alertElement('Пароли не совпадают!'));
    
            return false;
        }
        return true;
    }
    
    value.registerCheck = registerCheck;
    
    function registerCheck() {
        if(!this.checkEmpty() || !this.checkUser() || !this.checkEmail() || !this.checkPassword()) {
            return false
        }
        return true;
    }

}(checkValidation));