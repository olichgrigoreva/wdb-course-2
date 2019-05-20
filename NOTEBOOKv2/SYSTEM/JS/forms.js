;(function() {
    function formsContainer () { // основная функция для библиотеки
    }

    function createInput(parentObject, iType, iClassName, iValue, iComment, iReq, iFocus) {
        let obj = document.createElement("input");
        if (iType) obj.type = iType;
        if (iClassName) obj.className = iClassName;
        if (iValue) obj.value=iValue;
        if (iComment) obj.placeholder = iComment;
        if (iReq) obj.required = true;
        if (iFocus) obj.autofocus = true;
        parentObject.append(obj);
        return obj;
    }

    function createTag(objParent, objTag, objClassName, objValue) {
        let obj=document.createElement(objTag);
        if (objClassName) obj.className=objClassName;
        const objText=document.createTextNode(objValue);
        obj.append(objText);
        if (objParent) objParent.append(obj);
        return obj;
    }

    formsContainer.createInput = createInput;
    formsContainer.createTag = createTag;

    // экспорт formsContainer наружу из модуля
    window.jsForms = formsContainer; // в оригинальном коде здесь сложнее, но смысл тот же

}());