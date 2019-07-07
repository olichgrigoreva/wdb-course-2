const createElements = {};

(function(element) {
    element.createHeaderOrFooter = createHeaderOrFooter;

    function createHeaderOrFooter(elem, cls1, cls2, childHeadline, txt) {
        const element = document.createElement(elem);
        const headline = document.createElement(childHeadline);
        const text = document.createTextNode(txt);
        const div = document.createElement("div");

        element.className = cls1;
        div.className = cls2;
        headline.append(text);
        div.append(headline)
        element.append(div)

        document.querySelector('.container-fluid').append(element);
    }

    element.createDiv = createDiv;

    function createDiv(cls, parent, child) {
        const div = document.createElement("div");
        div.className = cls;
        if (child) {
            div.append(child)
        }
        document.querySelector(parent).append(div);
    }

    element.createH3 = createH3;

    function createH3(cls, txt, parent, id) {
        const h3 = document.createElement("h3");
        h3.className = cls;
        h3.id = id;
        const text = document.getElementById('profile') !== null ?
            document.createTextNode('Profile') : document.createTextNode(txt);

        h3.append(text);

        document.querySelector(parent).append(h3);
    }

    element.createForm = createForm;

    function createForm(cls, act, method, parent) {
        const form = document.createElement("form");
        form.className = cls;

        if(act) form.action = act;
        if(method) form.method = method;

        document.querySelector(parent).append(form);
    }

    element.createInput = createInput;

    function createInput(cls, name, placeholder, type) {
        const input = document.createElement("input");
        input.required = true;
        input.className = cls;
        input.name = name;
        input.placeholder = placeholder;
        input.type = type;

        return input;
    }

    element.createButton = createButton;

    function createButton(cls, txt, func, parent) {
        const button = document.createElement("button");
        const buttonTxt = document.createTextNode(txt);
        button.className = cls;
        button.append(buttonTxt);
        button.type = "submit";
        document.querySelector(parent).append(button);
        document.querySelector("button").addEventListener("click", func);
    }

    element.clearForm = clearForm;

    function clearForm() {
        document.querySelector('input[name="username"]').value = '';
        document.querySelector('input[name="email"]').value = '';
        document.querySelector('input[name="password"]').value = '';
        document.querySelector('input[name="passwordconf"]').value = '';
    }
}(createElements));