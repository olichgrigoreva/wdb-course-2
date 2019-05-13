
(function (name){
    name.createElmnt = createElmnt;
    function createElmnt(elementName, tagName, type, placeholder, className, parentDiv) {
        elementName.type = type;
        elementName.name = tagName;
        elementName.placeholder = placeholder;
        elementName.className = className;
        parentDiv.append(elementName);
    }
}(app));
