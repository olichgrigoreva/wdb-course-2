// modules are defined as an array
// [ module function, map of requires ]
//
// map of requires is short require name -> numeric require
//
// anything defined in a previous bundle is accessed via the
// orig method which is the require for previous bundles
parcelRequire = (function (modules, cache, entry, globalName) {
  // Save the require from previous bundle to this closure if any
  var previousRequire = typeof parcelRequire === 'function' && parcelRequire;
  var nodeRequire = typeof require === 'function' && require;

  function newRequire(name, jumped) {
    if (!cache[name]) {
      if (!modules[name]) {
        // if we cannot find the module within our internal map or
        // cache jump to the current global require ie. the last bundle
        // that was added to the page.
        var currentRequire = typeof parcelRequire === 'function' && parcelRequire;
        if (!jumped && currentRequire) {
          return currentRequire(name, true);
        }

        // If there are other bundles on this page the require from the
        // previous one is saved to 'previousRequire'. Repeat this as
        // many times as there are bundles until the module is found or
        // we exhaust the require chain.
        if (previousRequire) {
          return previousRequire(name, true);
        }

        // Try the node require function if it exists.
        if (nodeRequire && typeof name === 'string') {
          return nodeRequire(name);
        }

        var err = new Error('Cannot find module \'' + name + '\'');
        err.code = 'MODULE_NOT_FOUND';
        throw err;
      }

      localRequire.resolve = resolve;
      localRequire.cache = {};

      var module = cache[name] = new newRequire.Module(name);

      modules[name][0].call(module.exports, localRequire, module, module.exports, this);
    }

    return cache[name].exports;

    function localRequire(x){
      return newRequire(localRequire.resolve(x));
    }

    function resolve(x){
      return modules[name][1][x] || x;
    }
  }

  function Module(moduleName) {
    this.id = moduleName;
    this.bundle = newRequire;
    this.exports = {};
  }

  newRequire.isParcelRequire = true;
  newRequire.Module = Module;
  newRequire.modules = modules;
  newRequire.cache = cache;
  newRequire.parent = previousRequire;
  newRequire.register = function (id, exports) {
    modules[id] = [function (require, module) {
      module.exports = exports;
    }, {}];
  };

  var error;
  for (var i = 0; i < entry.length; i++) {
    try {
      newRequire(entry[i]);
    } catch (e) {
      // Save first error but execute all entries
      if (!error) {
        error = e;
      }
    }
  }

  if (entry.length) {
    // Expose entry point to Node, AMD or browser globals
    // Based on https://github.com/ForbesLindesay/umd/blob/master/template.js
    var mainExports = newRequire(entry[entry.length - 1]);

    // CommonJS
    if (typeof exports === "object" && typeof module !== "undefined") {
      module.exports = mainExports;

    // RequireJS
    } else if (typeof define === "function" && define.amd) {
     define(function () {
       return mainExports;
     });

    // <script>
    } else if (globalName) {
      this[globalName] = mainExports;
    }
  }

  // Override the current require with this new one
  parcelRequire = newRequire;

  if (error) {
    // throw error from earlier, _after updating parcelRequire_
    throw error;
  }

  return newRequire;
})({"../../../../usr/lib/node_modules/parcel-bundler/src/builtins/bundle-url.js":[function(require,module,exports) {
var bundleURL = null;

function getBundleURLCached() {
  if (!bundleURL) {
    bundleURL = getBundleURL();
  }

  return bundleURL;
}

function getBundleURL() {
  // Attempt to find the URL of the current script and use that as the base URL
  try {
    throw new Error();
  } catch (err) {
    var matches = ('' + err.stack).match(/(https?|file|ftp|chrome-extension|moz-extension):\/\/[^)\n]+/g);

    if (matches) {
      return getBaseURL(matches[0]);
    }
  }

  return '/';
}

function getBaseURL(url) {
  return ('' + url).replace(/^((?:https?|file|ftp|chrome-extension|moz-extension):\/\/.+)\/[^/]+$/, '$1') + '/';
}

exports.getBundleURL = getBundleURLCached;
exports.getBaseURL = getBaseURL;
},{}],"../../../../usr/lib/node_modules/parcel-bundler/src/builtins/css-loader.js":[function(require,module,exports) {
var bundle = require('./bundle-url');

function updateLink(link) {
  var newLink = link.cloneNode();

  newLink.onload = function () {
    link.remove();
  };

  newLink.href = link.href.split('?')[0] + '?' + Date.now();
  link.parentNode.insertBefore(newLink, link.nextSibling);
}

var cssTimeout = null;

function reloadCSS() {
  if (cssTimeout) {
    return;
  }

  cssTimeout = setTimeout(function () {
    var links = document.querySelectorAll('link[rel="stylesheet"]');

    for (var i = 0; i < links.length; i++) {
      if (bundle.getBaseURL(links[i].href) === bundle.getBundleURL()) {
        updateLink(links[i]);
      }
    }

    cssTimeout = null;
  }, 50);
}

module.exports = reloadCSS;
},{"./bundle-url":"../../../../usr/lib/node_modules/parcel-bundler/src/builtins/bundle-url.js"}],"components/app-header.css":[function(require,module,exports) {
var reloadCSS = require('_css_loader');

module.hot.dispose(reloadCSS);
module.hot.accept(reloadCSS);
},{"_css_loader":"../../../../usr/lib/node_modules/parcel-bundler/src/builtins/css-loader.js"}],"components/app-header.js":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

require("./app-header.css");

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Header =
/*#__PURE__*/
function () {
  function Header() {
    _classCallCheck(this, Header);
  }

  _createClass(Header, null, [{
    key: "open",
    value: function open(pageNode) {
      var header = document.createElement("header");
      header.className = "header";
      header.classList.add("header");
      var header_text = document.createTextNode("NOTEBOOK");
      header.append(header_text);
      pageNode.append(header);
    }
  }]);

  return Header;
}();

exports.default = Header;
},{"./app-header.css":"components/app-header.css"}],"components/form.css":[function(require,module,exports) {
var reloadCSS = require('_css_loader');

module.hot.dispose(reloadCSS);
module.hot.accept(reloadCSS);
},{"_css_loader":"../../../../usr/lib/node_modules/parcel-bundler/src/builtins/css-loader.js"}],"components/form.js":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

require("./form.css");

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Form =
/*#__PURE__*/
function () {
  function Form() {
    _classCallCheck(this, Form);
  }

  _createClass(Form, null, [{
    key: "open",
    value: function open(pageNode) {
      var form = document.createElement("form");
      form.className = "container form group";
      form.id = "container";
      document.querySelector("body").append(form);
      pageNode.append(form);
    }
  }]);

  return Form;
}();

exports.default = Form;
},{"./form.css":"components/form.css"}],"components/div-username.css":[function(require,module,exports) {
var reloadCSS = require('_css_loader');

module.hot.dispose(reloadCSS);
module.hot.accept(reloadCSS);
},{"_css_loader":"../../../../usr/lib/node_modules/parcel-bundler/src/builtins/css-loader.js"}],"components/div-username.js":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _form = _interopRequireDefault(require("./form.js"));

require("./div-username.css");

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var DivUsername =
/*#__PURE__*/
function () {
  function DivUsername() {
    _classCallCheck(this, DivUsername);
  }

  _createClass(DivUsername, null, [{
    key: "open",
    value: function open(pageNode) {
      var div1 = document.createElement("div1");
      div1.className = "form-group";
      document.querySelector("form").append(div1); //pageNode.append(div1);

      var username = document.createElement("input");
      username.type = "text";
      username.class = "form-control";
      username.className = "form-control";
      username.placeholder = "Username";
      username.setAttribute('username', 1);
      username.id = "username";
      username.name = "username";
      username.classList.add("reg_fields");
      username.classList.add("username_field");
      document.querySelector("div1").append(username); //pageNode.append(username);
    }
  }]);

  return DivUsername;
}();

exports.default = DivUsername;
},{"./form.js":"components/form.js","./div-username.css":"components/div-username.css"}],"components/div-password.css":[function(require,module,exports) {
var reloadCSS = require('_css_loader');

module.hot.dispose(reloadCSS);
module.hot.accept(reloadCSS);
},{"_css_loader":"../../../../usr/lib/node_modules/parcel-bundler/src/builtins/css-loader.js"}],"components/div-password.js":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _form = _interopRequireDefault(require("./form.js"));

require("./div-password.css");

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var DivPassword =
/*#__PURE__*/
function () {
  function DivPassword() {
    _classCallCheck(this, DivPassword);
  }

  _createClass(DivPassword, null, [{
    key: "open",
    value: function open(pageNode) {
      var div2 = document.createElement("div2");
      div2.className = "form-group";
      document.querySelector("form").append(div2);
      var password = document.createElement("input");
      password.type = "password";
      password.class = "form-control";
      password.className = "form-control";
      password.placeholder = "Password";
      password.id = "password";
      password.name = "password";
      password.classList.add("reg_fields");
      password.classList.add("password_field");
      document.querySelector("div2").append(password);
    }
  }]);

  return DivPassword;
}();

exports.default = DivPassword;
},{"./form.js":"components/form.js","./div-password.css":"components/div-password.css"}],"components/div-confirm-password.css":[function(require,module,exports) {
var reloadCSS = require('_css_loader');

module.hot.dispose(reloadCSS);
module.hot.accept(reloadCSS);
},{"_css_loader":"../../../../usr/lib/node_modules/parcel-bundler/src/builtins/css-loader.js"}],"components/div-confirm-password.js":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _form = _interopRequireDefault(require("./form.js"));

require("./div-confirm-password.css");

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var DivConfirmPassword =
/*#__PURE__*/
function () {
  function DivConfirmPassword() {
    _classCallCheck(this, DivConfirmPassword);
  }

  _createClass(DivConfirmPassword, null, [{
    key: "open",
    value: function open(pageNode) {
      var div3 = document.createElement("div3");
      div3.className = "form-group";
      document.querySelector("form").append(div3);
      var confirm_password = document.createElement("input");
      confirm_password.type = "password";
      confirm_password.class = "form-control";
      confirm_password.className = "form-control";
      confirm_password.placeholder = "Confirm Password";
      confirm_password.id = "confirm_password";
      confirm_password.name = "confirm_password";
      confirm_password.classList.add("reg_fields");
      confirm_password.classList.add("confirm_password_field");
      document.querySelector("div3").append(confirm_password);
    }
  }]);

  return DivConfirmPassword;
}();

exports.default = DivConfirmPassword;
},{"./form.js":"components/form.js","./div-confirm-password.css":"components/div-confirm-password.css"}],"components/div-email.css":[function(require,module,exports) {
var reloadCSS = require('_css_loader');

module.hot.dispose(reloadCSS);
module.hot.accept(reloadCSS);
},{"_css_loader":"../../../../usr/lib/node_modules/parcel-bundler/src/builtins/css-loader.js"}],"components/div-email.js":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _form = _interopRequireDefault(require("./form.js"));

require("./div-email.css");

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var DivEmail =
/*#__PURE__*/
function () {
  function DivEmail() {
    _classCallCheck(this, DivEmail);
  }

  _createClass(DivEmail, null, [{
    key: "open",
    value: function open(pageNode) {
      var div4 = document.createElement("div4");
      div4.className = "form-group";
      document.querySelector("form").append(div4);
      var e_mail = document.createElement("input");
      e_mail.type = "e_mail";
      e_mail.class = "form-control";
      e_mail.className = "form-control";
      e_mail.placeholder = "Email";
      e_mail.id = "e_mail";
      e_mail.name = "e_mail";
      e_mail.classList.add("reg_fields");
      e_mail.classList.add("e_mail_field");
      document.querySelector("div4").append(e_mail);
    }
  }]);

  return DivEmail;
}();

exports.default = DivEmail;
},{"./form.js":"components/form.js","./div-email.css":"components/div-email.css"}],"components/button.css":[function(require,module,exports) {
var reloadCSS = require('_css_loader');

module.hot.dispose(reloadCSS);
module.hot.accept(reloadCSS);
},{"_css_loader":"../../../../usr/lib/node_modules/parcel-bundler/src/builtins/css-loader.js"}],"components/button.js":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

require("./button.css");

var _form = _interopRequireDefault(require("./form.js"));

var _divUsername = _interopRequireDefault(require("./div-username.js"));

var _divPassword = _interopRequireDefault(require("./div-password.js"));

var _divConfirmPassword = _interopRequireDefault(require("./div-confirm-password.js"));

var _divEmail = _interopRequireDefault(require("./div-email.js"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Button =
/*#__PURE__*/
function () {
  function Button() {
    _classCallCheck(this, Button);
  }

  _createClass(Button, null, [{
    key: "open",
    value: function open(pageNode) {
      var button = document.createElement("button");
      var buttonText = document.createTextNode("Save");
      button.type = "submit";
      button.id = "button_register";
      button.className = "btn btn-primary";
      button.name = "register";
      button.append(buttonText);
      document.querySelector("form").append(button);
      document.querySelector("button").addEventListener("click", check);
    }
  }]);

  return Button;
}();

exports.default = Button;

function check(event) {
  event.preventDefault();

  if (document.querySelector(".username_field").value == '' || document.querySelector(".password_field").value == '' || document.querySelector(".confirm_password_field").value == '' || document.querySelector(".e_mail_field").value == '') {
    var myalert = document.createElement("div");
    myalert.className = "alert alert-info alert-dismissible fade show";
    myalert.role = "alert";
    myalert.innerHTML = '<strong>Fill the fields!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    document.querySelector(".container").append(myalert);
  } else {
    if (document.querySelector(".password_field").value !== document.querySelector(".confirm_password_field").value) {
      var _myalert = document.createElement("div");

      _myalert.className = "alert alert-info alert-dismissible fade show";
      _myalert.role = "alert";
      _myalert.innerHTML = '<strong>Passwords d\'not match!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
      document.querySelector(".container").append(_myalert);
    } else {
      var mailformat = /.+@.+\..+/i;

      if (mailformat.test(document.querySelector(".e_mail_field").value) == false) {
        var _myalert2 = document.createElement("div");

        _myalert2.className = "alert alert-info alert-dismissible fade show";
        _myalert2.role = "alert";
        _myalert2.innerHTML = '<strong>Wrong email format!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
        document.querySelector(".container").append(_myalert2);
      } else {
        send_data(event);
      }
    }
  }

  window.setTimeout(function () {
    $(".alert").alert('close');
  }, 5000);
}

function send_data(event) {
  event.preventDefault();
  var form = document.querySelector("form");
  fetch("php/add-user.php", {
    method: "POST",
    body: new FormData(form)
  }).then(function (response) {
    return response.text();
  }).then(function (text) {
    var myalert = document.createElement("div");
    myalert.className = "alert alert-success alert-dismissible fade show";
    myalert.role = "alert";
    myalert.innerHTML = '<strong>' + text + '</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    document.querySelector(".container").append(myalert);
    window.setTimeout(function () {
      $(".alert").alert('close');
    }, 5000);

    if (text == "User has created") {
      window.location.href = "../login/index.php";
    }
  });
}
},{"./button.css":"components/button.css","./form.js":"components/form.js","./div-username.js":"components/div-username.js","./div-password.js":"components/div-password.js","./div-confirm-password.js":"components/div-confirm-password.js","./div-email.js":"components/div-email.js"}],"components/app-footer.css":[function(require,module,exports) {
var reloadCSS = require('_css_loader');

module.hot.dispose(reloadCSS);
module.hot.accept(reloadCSS);
},{"_css_loader":"../../../../usr/lib/node_modules/parcel-bundler/src/builtins/css-loader.js"}],"components/app-footer.js":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

require("./app-footer.css");

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Footer =
/*#__PURE__*/
function () {
  function Footer() {
    _classCallCheck(this, Footer);
  }

  _createClass(Footer, null, [{
    key: "open",
    value: function open(pageNode) {
      var footer = document.createElement("footer");
      footer.classList.add("footer");
      footer.className = "footer";
      var footer_text = document.createTextNode("© Copyright 2019. All rights reserved");
      footer.append(footer_text);
      pageNode.append(footer);
    }
  }]);

  return Footer;
}();

exports.default = Footer;
},{"./app-footer.css":"components/app-footer.css"}],"index.js":[function(require,module,exports) {
"use strict";

var _appHeader = _interopRequireDefault(require("./components/app-header.js"));

var _form = _interopRequireDefault(require("./components/form.js"));

var _divUsername = _interopRequireDefault(require("./components/div-username.js"));

var _divPassword = _interopRequireDefault(require("./components/div-password.js"));

var _divConfirmPassword = _interopRequireDefault(require("./components/div-confirm-password.js"));

var _divEmail = _interopRequireDefault(require("./components/div-email.js"));

var _button = _interopRequireDefault(require("./components/button.js"));

var _appFooter = _interopRequireDefault(require("./components/app-footer.js"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

document.addEventListener("DOMContentLoaded", function () {
  var node = document.querySelector(".page");

  _appHeader.default.open(node);

  _form.default.open(node);

  _divUsername.default.open(node);

  _divPassword.default.open(node);

  _divConfirmPassword.default.open(node);

  _divEmail.default.open(node);

  _button.default.open(node);

  _appFooter.default.open(node);
});
},{"./components/app-header.js":"components/app-header.js","./components/form.js":"components/form.js","./components/div-username.js":"components/div-username.js","./components/div-password.js":"components/div-password.js","./components/div-confirm-password.js":"components/div-confirm-password.js","./components/div-email.js":"components/div-email.js","./components/button.js":"components/button.js","./components/app-footer.js":"components/app-footer.js"}],"../../../../usr/lib/node_modules/parcel-bundler/src/builtins/hmr-runtime.js":[function(require,module,exports) {
var global = arguments[3];
var OVERLAY_ID = '__parcel__error__overlay__';
var OldModule = module.bundle.Module;

function Module(moduleName) {
  OldModule.call(this, moduleName);
  this.hot = {
    data: module.bundle.hotData,
    _acceptCallbacks: [],
    _disposeCallbacks: [],
    accept: function (fn) {
      this._acceptCallbacks.push(fn || function () {});
    },
    dispose: function (fn) {
      this._disposeCallbacks.push(fn);
    }
  };
  module.bundle.hotData = null;
}

module.bundle.Module = Module;
var checkedAssets, assetsToAccept;
var parent = module.bundle.parent;

if ((!parent || !parent.isParcelRequire) && typeof WebSocket !== 'undefined') {
  var hostname = "" || location.hostname;
  var protocol = location.protocol === 'https:' ? 'wss' : 'ws';
  var ws = new WebSocket(protocol + '://' + hostname + ':' + "35119" + '/');

  ws.onmessage = function (event) {
    checkedAssets = {};
    assetsToAccept = [];
    var data = JSON.parse(event.data);

    if (data.type === 'update') {
      var handled = false;
      data.assets.forEach(function (asset) {
        if (!asset.isNew) {
          var didAccept = hmrAcceptCheck(global.parcelRequire, asset.id);

          if (didAccept) {
            handled = true;
          }
        }
      }); // Enable HMR for CSS by default.

      handled = handled || data.assets.every(function (asset) {
        return asset.type === 'css' && asset.generated.js;
      });

      if (handled) {
        console.clear();
        data.assets.forEach(function (asset) {
          hmrApply(global.parcelRequire, asset);
        });
        assetsToAccept.forEach(function (v) {
          hmrAcceptRun(v[0], v[1]);
        });
      } else {
        window.location.reload();
      }
    }

    if (data.type === 'reload') {
      ws.close();

      ws.onclose = function () {
        location.reload();
      };
    }

    if (data.type === 'error-resolved') {
      console.log('[parcel] ✨ Error resolved');
      removeErrorOverlay();
    }

    if (data.type === 'error') {
      console.error('[parcel] 🚨  ' + data.error.message + '\n' + data.error.stack);
      removeErrorOverlay();
      var overlay = createErrorOverlay(data);
      document.body.appendChild(overlay);
    }
  };
}

function removeErrorOverlay() {
  var overlay = document.getElementById(OVERLAY_ID);

  if (overlay) {
    overlay.remove();
  }
}

function createErrorOverlay(data) {
  var overlay = document.createElement('div');
  overlay.id = OVERLAY_ID; // html encode message and stack trace

  var message = document.createElement('div');
  var stackTrace = document.createElement('pre');
  message.innerText = data.error.message;
  stackTrace.innerText = data.error.stack;
  overlay.innerHTML = '<div style="background: black; font-size: 16px; color: white; position: fixed; height: 100%; width: 100%; top: 0px; left: 0px; padding: 30px; opacity: 0.85; font-family: Menlo, Consolas, monospace; z-index: 9999;">' + '<span style="background: red; padding: 2px 4px; border-radius: 2px;">ERROR</span>' + '<span style="top: 2px; margin-left: 5px; position: relative;">🚨</span>' + '<div style="font-size: 18px; font-weight: bold; margin-top: 20px;">' + message.innerHTML + '</div>' + '<pre>' + stackTrace.innerHTML + '</pre>' + '</div>';
  return overlay;
}

function getParents(bundle, id) {
  var modules = bundle.modules;

  if (!modules) {
    return [];
  }

  var parents = [];
  var k, d, dep;

  for (k in modules) {
    for (d in modules[k][1]) {
      dep = modules[k][1][d];

      if (dep === id || Array.isArray(dep) && dep[dep.length - 1] === id) {
        parents.push(k);
      }
    }
  }

  if (bundle.parent) {
    parents = parents.concat(getParents(bundle.parent, id));
  }

  return parents;
}

function hmrApply(bundle, asset) {
  var modules = bundle.modules;

  if (!modules) {
    return;
  }

  if (modules[asset.id] || !bundle.parent) {
    var fn = new Function('require', 'module', 'exports', asset.generated.js);
    asset.isNew = !modules[asset.id];
    modules[asset.id] = [fn, asset.deps];
  } else if (bundle.parent) {
    hmrApply(bundle.parent, asset);
  }
}

function hmrAcceptCheck(bundle, id) {
  var modules = bundle.modules;

  if (!modules) {
    return;
  }

  if (!modules[id] && bundle.parent) {
    return hmrAcceptCheck(bundle.parent, id);
  }

  if (checkedAssets[id]) {
    return;
  }

  checkedAssets[id] = true;
  var cached = bundle.cache[id];
  assetsToAccept.push([bundle, id]);

  if (cached && cached.hot && cached.hot._acceptCallbacks.length) {
    return true;
  }

  return getParents(global.parcelRequire, id).some(function (id) {
    return hmrAcceptCheck(global.parcelRequire, id);
  });
}

function hmrAcceptRun(bundle, id) {
  var cached = bundle.cache[id];
  bundle.hotData = {};

  if (cached) {
    cached.hot.data = bundle.hotData;
  }

  if (cached && cached.hot && cached.hot._disposeCallbacks.length) {
    cached.hot._disposeCallbacks.forEach(function (cb) {
      cb(bundle.hotData);
    });
  }

  delete bundle.cache[id];
  bundle(id);
  cached = bundle.cache[id];

  if (cached && cached.hot && cached.hot._acceptCallbacks.length) {
    cached.hot._acceptCallbacks.forEach(function (cb) {
      cb();
    });

    return true;
  }
}
},{}]},{},["../../../../usr/lib/node_modules/parcel-bundler/src/builtins/hmr-runtime.js","index.js"], null)
//# sourceMappingURL=/profile.e31bb0bc.js.map