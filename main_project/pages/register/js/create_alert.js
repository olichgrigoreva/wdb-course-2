(function (name){
    name.createAlert = createAlert;
    function createAlert(divName, textNode) {
        divName.className = "alert alert-warning alert-dismissible mt-3"; // fade show почему то, работает некорректно, элемент остаётся невидимым после закрытия и повторного размещения
        divName.append(document.createTextNode(textNode));
        let closeButton = document.createElement("button");
            closeButton.type = "button";
            closeButton.classList.add("close");
            closeButton.dataset.dismiss = "alert";
            // closeButton.setAttribute("aria-label", "close");
            // let cross = document.createElement("span");
            // cross.setAttribute("aria-hidden", "true");
            // cross.append(document.createTextNode("&times;"));
            // closeButton.append(cross);
            closeButton.innerHTML = "&times;";
        divName.append(closeButton);
    }
}(app));
