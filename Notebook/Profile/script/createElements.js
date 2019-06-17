import createElements from '../../script'

    function loaded() {
        createElements.createHeaderOrFooter('header', 'row block-1', 'col text-center', 'h1', 'NOTEBOOK');
            
        createElements.createDiv('row form-row', '.container-fluid');
        createElements.createForm('col-md-6 mx-auto form-cont', 'php/registration.php', 'POST', '.form-row');
        createElements.createDiv('card card-body', 'form');
        createElements.createH3('header text-center mb-4', 'Registration', '.card', 'txtHeader');
        createElements.createDiv('form-group', '.card', createElements.createInput('form-control input-lg', 'username', 'User Name','text'));
        createElements.createDiv('form-group', '.card', createElements.createInput('form-control input-lg', 'email', 'E-mail Address','email'));
        createElements.createDiv('form-group', '.card', createElements.createInput('form-control input-lg', 'password', 'Password', 'password'));
        createElements.createDiv('form-group', '.card', createElements.createInput('form-control input-lg', 'passwordconf', 'Confirm Password', 'password'));
        createElements.createButton('btn btn-primary mb-2 btn btn-lg', 'SUBMIT', reg, '.card');
            
        createElements.createHeaderOrFooter('footer', 'row block-1', 'col text-center align-self-center', 'h4', '© Copyright 2019. All rights reserved');
    }

    document.addEventListener("DOMContentLoaded", loaded);