(window.webpackJsonp=window.webpackJsonp||[]).push([[0],{24:function(e,t,a){e.exports=a(57)},48:function(e,t,a){},49:function(e,t,a){},50:function(e,t,a){},51:function(e,t,a){},52:function(e,t,a){},53:function(e,t,a){},54:function(e,t,a){},55:function(e,t,a){},56:function(e,t,a){},57:function(e,t,a){"use strict";a.r(t);var n=a(0),l=a.n(n),o=a(10),r=a.n(o),i=a(11),c=a(22),m=a(3),d=a(9),s=a(2),u=a(4),p=a(6),f=a(5),g=a(7),b=a(8),h=a.n(b),v=(a(12),a(23),a(48),function(e){var t=e.toDo,a=e.done;return l.a.createElement("div",{className:"app-header d-flex"},l.a.createElement("h2",null,t," more to do, ",a," done"))}),E=(a(49),function(e){var t=e.important,a=e.done,n=e.label,o=e.onToggleImportant,r=e.onToggleDone,i=e.modalToggleOn,c=(e.onDelete,e.itemUpdate),m="todo-list-item";return t&&(m+=" important"),a&&(m+=" done"),l.a.createElement("span",{className:m},l.a.createElement("span",{className:"todo-list-item-label",onClick:r}," ",n," "),l.a.createElement("button",{type:"button",className:"btn btn-outline-success btn-sm float-right",onClick:o},l.a.createElement("i",{className:"fa fa-exclamation"})),l.a.createElement("button",{type:"button",className:"btn btn-outline-danger btn-sm float-right",onClick:i},l.a.createElement("i",{className:"fa fa-trash-o"})),l.a.createElement("button",{type:"button",className:"btn btn-outline-info btn-sm float-right",onClick:c},l.a.createElement("i",{className:"fa fa-pencil",id:"item-refactor"})))}),I=(a(50),function(e){var t=e.items,a=(e.itemId,e.onItemSelected),n=e.onToggleImportant,o=e.onToggleDone,r=e.modalToggleOn,i=e.itemUpdate,c=e.onDelete,m=t.map(function(e){var t=e.id,m=Object(d.a)(e,["id"]);return l.a.createElement("li",{key:t,onClick:function(){return a(t)},className:"list-group-item"},l.a.createElement(E,Object.assign({},m,{onToggleImportant:function(){return n(t)},onToggleDone:function(){return o(t)},modalToggleOn:function(){return r(t)},onDelete:function(){return c(t)},onItemSelected:function(){return a(t)},itemUpdate:function(e){e.stopPropagation(),i(t)}})))});return l.a.createElement("ul",{className:"todo-list list-group"},m)}),N=(a(51),function(e){function t(){var e,a;Object(s.a)(this,t);for(var n=arguments.length,l=new Array(n),o=0;o<n;o++)l[o]=arguments[o];return(a=Object(p.a)(this,(e=Object(f.a)(t)).call.apply(e,[this].concat(l)))).state={term:""},a.onTermChange=function(e){var t=a.props.onSearchChange,n=void 0===t?function(){}:t;a.setState({term:e.target.value}),n(e.target.value)},a}return Object(g.a)(t,e),Object(u.a)(t,[{key:"render",value:function(){return l.a.createElement("input",{type:"text",className:"form-control search-input",placeholder:"type to search",value:this.state.term,onChange:this.onTermChange})}}]),t}(n.Component)),O=[{name:"all",label:"All"},{name:"active",label:"Active"},{name:"done",label:"Done"}],x=function(e){var t=e.filter,a=e.onFilterChange,n=void 0===a?function(){}:a,o=O.map(function(e){var a=e.name,o=e.label,r="btn "+(a===t?"btn-info":"btn-outline-secondary");return l.a.createElement("button",{key:a,type:"button",onClick:function(){return n(a)},className:r},o)});return l.a.createElement("div",{className:"btn-group"},o)},T=function(e){var t=e.onToggleAdd,a=e.ItemAddedToggle?"Close Edit Mode":"Add Note";return l.a.createElement("div",{className:"todo-app text-center"},l.a.createElement("button",{type:"button",className:"btn btn-primary btn-lg",onClick:t},a))},y=(a(52),function(e){function t(){var e,a;Object(s.a)(this,t);for(var n=arguments.length,l=new Array(n),o=0;o<n;o++)l[o]=arguments[o];return(a=Object(p.a)(this,(e=Object(f.a)(t)).call.apply(e,[this].concat(l)))).state={label:"",date:"",text:""},a.ItemAddFormUpdate=function(e){var t=e.label,n=e.date,l=e.text;a.setState({label:t,date:n,text:l})},a.onLabelChange=function(e){a.setState({label:e.target.value})},a.onDateChange=function(e){a.setState({date:e.target.value})},a.onTextChange=function(e){a.setState({text:e.target.value})},a.onSubmit=function(e){e.preventDefault();var t=a.state,n=t.label,l=t.date,o=t.text;a.setState({label:"",date:"",text:""}),(a.props.onItemAdded||function(){})(n,l,o)},a}return Object(g.a)(t,e),Object(u.a)(t,[{key:"componentDidMount",value:function(){this.props.itemUpdate&&this.ItemAddFormUpdate(this.props.itemUpdate)}},{key:"componentDidUpdate",value:function(e){this.props.itemUpdate&&this.props.itemUpdate.label!==e.itemUpdate.label&&this.ItemAddFormUpdate(this.props.itemUpdate)}},{key:"render",value:function(){return l.a.createElement("form",{onSubmit:this.onSubmit},l.a.createElement("h3",null,"Edit Mode ",this.props.itemUpdate.label),l.a.createElement("hr",null),l.a.createElement("div",{className:"form-group"},l.a.createElement("input",{type:"text",onChange:this.onLabelChange,className:"form-control",id:"note",value:this.state.label,placeholder:"Note",required:!0})),l.a.createElement("div",{className:"form-group"},l.a.createElement("input",{type:"date",onChange:this.onDateChange,className:"form-control",id:"date",value:this.state.date,placeholder:"Date",required:!0})),l.a.createElement("div",{className:"form-group"},l.a.createElement("textarea",{className:"form-control",id:"text",value:this.state.text,onChange:this.onTextChange,rows:"4",required:!0})),l.a.createElement("div",{className:"text-center"},l.a.createElement("button",{type:"submit",className:"btn btn-primary btn-lg"},"Save")))}}]),t}(n.Component)),C=function(e){var t=e.item,a=t.label,n=t.date,o=t.text;return l.a.createElement("div",{className:"container"},l.a.createElement("div",{className:"row mb2"},l.a.createElement("div",{className:"col-md-6"},l.a.createElement("span",null,a)),l.a.createElement("div",{className:"col-md-6 text-right"},l.a.createElement("span",null,n))),l.a.createElement("div",{className:"row"},l.a.createElement("div",{className:"col"},l.a.createElement("hr",null),l.a.createElement("div",null,l.a.createElement("span",null,o)))))},S=(a(53),function(e){var t=e.modalToggleOff,a=e.onDelete,n=e.isOpen,o=e.deleteItem;return n?r.a.createPortal(l.a.createElement(l.a.Fragment,null,l.a.createElement("div",{className:"overlay"},l.a.createElement("div",{className:"modal-dialog alert-modal",role:"document"},l.a.createElement("div",{className:"modal-content"},l.a.createElement("div",{className:"modal-header"},l.a.createElement("h5",{className:"modal-title"},"Delete")),l.a.createElement("div",{className:" text-center modal-body"},l.a.createElement("p",null,"Delete ",l.a.createElement("b",null,o),"?")),l.a.createElement("div",{className:"text-center mb-2"},l.a.createElement("button",{type:"button",className:"btn btn-secondary mr-2","data-dismiss":"modal",onClick:function(){return t()}},"Cancel"),l.a.createElement("button",{type:"button",className:"btn btn-primary",onClick:function(){return a()}},"OK")))))),document.body):null}),A=(a(54),function(){return l.a.createElement("div",{className:"note-header"},l.a.createElement("header",{className:"row"},l.a.createElement("div",{className:"col text-center"},l.a.createElement("h1",null,"NOTEBOOK"),l.a.createElement("span",null,l.a.createElement("a",{href:"http://wdb.virtual/wdb-course-2/Notebook/Profile/profile.html"},"Profile")),"|",l.a.createElement("span",null,l.a.createElement("a",{href:"http://wdb.virtual/wdb-course-2/Notebook/Login/login.php"},"Logout")))))}),U=(a(55),a(56),function(e){function t(){var e,a;Object(s.a)(this,t);for(var n=arguments.length,l=new Array(n),o=0;o<n;o++)l[o]=arguments[o];return(a=Object(p.a)(this,(e=Object(f.a)(t)).call.apply(e,[this].concat(l)))).maxId=100,a.state={items:[],isOpen:!1,itemUpdate:!1,ItemAddedToggle:!1,deleteItem:null,filter:"all",search:"",ItemId:null},a.itemUpdate=function(e){var t=a.findIndex(e,a.state.items),n=a.state.items[t],l=n.id,o=n.label,r=n.date,i=n.text;a.setState({itemUpdate:{id:l,label:o,date:r,text:i}})},a.onToggleAdd=function(){a.setState(function(e){return{ItemAddedToggle:!e.ItemAddedToggle,itemUpdate:!1}})},a.modalToggleOff=function(){a.setState({isOpen:!1})},a.modalToggleOn=function(e){a.setState(function(t){t.isOpen,t.deleteItem;var n=t.items;return{isOpen:!0,deleteItem:n[a.findIndex(e,n)].label,ItemId:e}})},a.onItemAdded=function(e,t,n){var l=a.createItem(e,t,n);if(a.state.itemUpdate){var o={id:a.state.itemUpdate.id,label:l.label,text:l.text,date:l.date};h.a.post("http://wdb.virtual/wdb-course-2/Notebook/Api/update_note.php",o),a.setState(function(e){var t=e.itemUpdate,n=(e.itemId,Object(d.a)(e,["itemUpdate","itemId"])),o=a.findIndex(t.id,n.items),r=[].concat(Object(m.a)(n.items.slice(0,o)),[l],Object(m.a)(n.items.slice(o+1)));return{ItemId:t.id,items:r,itemUpdate:!1,ItemAddedToggle:!1}})}else{var r={label:l.label,date:l.date,text:l.text};h.a.post("http://wdb.virtual/wdb-course-2/Notebook/Api/add_note.php",r).then(function(e){return console.log(e.data)}),a.setState(function(e){return{items:[].concat(Object(m.a)(e.items),[l]),itemUpdate:!1,ItemAddedToggle:!0}})}},a.onItemSelected=function(e){a.setState({ItemId:e,itemUpdate:!1,ItemAddedToggle:!1})},a.itemData=function(e,t){var n=a.findIndex(t,e);if(-1===n)return!1;var l=e[n];return{label:l.label,date:l.date,text:l.text}},a.toggleProperty=function(e,t,n){var l=a.findIndex(t,e),o=!e[l][n],r=Object(c.a)({},e[l],Object(i.a)({},n,o));return[].concat(Object(m.a)(e.slice(0,l)),[r],Object(m.a)(e.slice(l+1)))},a.onToggleDone=function(e){a.setState(function(t){return{items:a.toggleProperty(t.items,e,"done")}})},a.onToggleImportant=function(e){a.setState(function(t){return{items:a.toggleProperty(t.items,e,"important")}})},a.onDelete=function(){var e={id:a.state.ItemId};h.a.post("http://wdb.virtual/wdb-course-2/Notebook/Api/delete_note.php",e).then(function(e){return console.log(e.data)}),a.setState(function(e){var t=e.isOpen,n=e.ItemId,l=Object(d.a)(e,["isOpen","ItemId"]),o=a.findIndex(n,l.items);return{items:[].concat(Object(m.a)(l.items.slice(0,o)),Object(m.a)(l.items.slice(o+1))),isOpen:!t}})},a.findIndex=function(e,t){return t.findIndex(function(t){return t.id===e})},a.onFilterChange=function(e){a.setState({filter:e})},a.onSearchChange=function(e){a.setState({search:e})},a}return Object(g.a)(t,e),Object(u.a)(t,[{key:"componentDidMount",value:function(){var e=this;h.a.post("http://wdb.virtual/wdb-course-2/Notebook/Api/get_notes.php").then(function(e){return e.data}).then(function(t){e.setState({items:t})})}},{key:"createItem",value:function(e,t,a){return{id:++this.maxId,label:e,date:t,text:a,important:!1,done:!1}}},{key:"filterItems",value:function(e,t){return"all"===t?e:"active"===t?e.filter(function(e){return!e.done}):"done"===t?e.filter(function(e){return e.done}):void 0}},{key:"searchItems",value:function(e,t){return 0===t.length?e:e.filter(function(e){return e.label.toLowerCase().indexOf(t.toLowerCase())>-1})}},{key:"render",value:function(){var e=this.state,t=e.items,a=e.filter,n=e.search,o=e.ItemId,r=e.deleteItem,i=e.isOpen,c=e.ItemAddedToggle,m=e.itemUpdate,d=t.filter(function(e){return e.done}).length,s=t.length-d,u=this.searchItems(this.filterItems(t,a),n),p=o?this.itemData(t,o):"",f=c||m?l.a.createElement(y,{onItemAdded:this.onItemAdded,itemUpdate:m}):l.a.createElement(C,{item:p});return l.a.createElement(l.a.Fragment,null,l.a.createElement("div",{className:"row"},l.a.createElement("div",{className:"col"},l.a.createElement(A,null))),l.a.createElement("div",{className:"row mb2"},l.a.createElement("div",{className:"col-md-6"},l.a.createElement("div",{className:"todo-app"},l.a.createElement(v,{toDo:s,done:d}),l.a.createElement("div",{className:"search-panel d-flex"},l.a.createElement(N,{onSearchChange:this.onSearchChange}),l.a.createElement(x,{filter:a,onFilterChange:this.onFilterChange})),l.a.createElement(I,{items:u,onItemSelected:this.onItemSelected,onToggleImportant:this.onToggleImportant,onToggleDone:this.onToggleDone,modalToggleOn:this.modalToggleOn,itemUpdate:this.itemUpdate,onDelete:this.onDelete}),l.a.createElement(T,{onToggleAdd:this.onToggleAdd,ItemAddedToggle:c,itemUpdate:m}))),l.a.createElement("div",{className:"col-md-6"},l.a.createElement("div",{className:"todo-app"},f),l.a.createElement(S,{modalToggleOn:this.modalToggleOn,modalToggleOff:this.modalToggleOff,onDelete:this.onDelete,isOpen:i,ItemId:o,deleteItem:r}))))}}]),t}(n.Component));r.a.render(l.a.createElement(U,null),document.getElementById("root"))}},[[24,1,2]]]);
//# sourceMappingURL=main.228c4bc4.chunk.js.map