let app = {};
(function (name){
    name.createDiv = createDiv;
    function createDiv(parentDiv, divName, className) {
        document.querySelector(parentDiv).append(divName);
        divName.className = className;
    }
}(app));
