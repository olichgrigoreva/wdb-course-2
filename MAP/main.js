function createInput(parentObject, iType, iClassName, iComment, iReq, iFocus) {
  let obj=document.createElement("input");
  if (iType) obj.type=iType;
  if (iClassName) obj.className=iClassName;
  if (iComment) obj.placeholder=iComment;
  if (iReq) obj.required=true;
  if (iFocus) obj.autofocus=true;
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

function addAdress(event) {
    let adressString="";
    if (this.parentNode.nodeName==="LI") {
//         adressString=this.parentNode.innerHTML.split('<')[0];
           adressString=this.parentNode.innerText.match(/.*$/)[0]
      }
    else {adressString=iPointAdress.value;}
    createNewAdress(adressString);
}

function createNewAdress(adressString) {
    liNewPoint = createTag(uAdresList, "li", "liAdressList", "");
    bDelAdress = createTag(liNewPoint, "button", "buttRigth", "delete");
    bDelAdress.addEventListener('click', delAdress);
    bCopyAdress = createTag(liNewPoint, "button", "buttRigth", "copy");
    bCopyAdress.addEventListener('click', addAdress);
//    liNewPoint.classList.add("ellipseEnd")
    const objText=document.createTextNode(adressString);
    liNewPoint.append(objText);
}

function delAdress(event) {
    let cross=event.target;
    let block=cross.closest("li");
    block.remove();
}

function createPage() {
  var tmpDOM=document;
  createTag(tmpDOM.body, "div", "textHeader", "MAP ROUTER");
  iPointAdress=createInput(tmpDOM.body, "text", "form-control formInput", "Enter adress", "true", "true");
  bAddAdress=createTag(tmpDOM.body, "button", "form-control formInput", "add adress to route");
  fContainer=createTag(tmpDOM.body, "div", "", "");
  uAdresList=createTag(fContainer, "ul", "cont-dragula ulAdressList", "");
  uAdresList.id="idAdresList";

  createTag(tmpDOM.body, "div", "textFooter", "created by strangerA, 2019");
  drake = dragula([idAdresList]);

  bAddAdress.addEventListener('click', addAdress);
/*
    var AdressCnt=uAdresList.childNodes.length-1;
    if (AdressCnt > 1) {
    }          // if (AdressCnt > 1)
*/
}