(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["app"],{

/***/ "./assets/css/app.css":
/*!****************************!*\
  !*** ./assets/css/app.css ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_app_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../css/app.css */ "./assets/css/app.css");
/* harmony import */ var _css_app_css__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_css_app_css__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _service_lightbox_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./service/lightbox.js */ "./assets/js/service/lightbox.js");
/* harmony import */ var _service_lightbox_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_service_lightbox_js__WEBPACK_IMPORTED_MODULE_2__);
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// any CSS you import will output into a single css file (app.css in this case)
 // Need jQuery? Install it with "yarn add jquery", then uncomment to import it.




__webpack_require__(/*! popper.js */ "./node_modules/popper.js/dist/esm/popper.js");

__webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js");

/***/ }),

/***/ "./assets/js/service/lightbox.js":
/*!***************************************!*\
  !*** ./assets/js/service/lightbox.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! core-js/modules/es.array.for-each */ "./node_modules/core-js/modules/es.array.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.define-property */ "./node_modules/core-js/modules/es.object.define-property.js");

__webpack_require__(/*! core-js/modules/web.dom-collections.for-each */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var lightBox = /*#__PURE__*/function () {
  "use strict";

  function lightBox() {
    _classCallCheck(this, lightBox);
  }

  _createClass(lightBox, null, [{
    key: "init",
    value: function init() {
      var img = document.querySelectorAll('.img-lightbox');
      img.forEach(function (image) {
        image.addEventListener('click', function () {
          lightboxGenerator(image);
          closeLightBox();
        });
      });
    }
  }]);

  return lightBox;
}();

function closeLightBox() {
  var button = document.querySelector('.close-lightbox');
  button.addEventListener('click', function () {
    document.querySelector('.lightbox').remove();
  });
}

function lightboxGenerator(image) {
  var lightbox = generateElement('div', ['lightbox']);
  lightbox.innerHTML = "<button class=\"close-lightbox btn btn-danger rounded\"><i class=\"fas fa-times\"></i></button>\n                              <div class=\"lightbox-container\">\n                                <img src=\"".concat(image.getAttribute('src'), "\">\n                              </div>");
  document.querySelector('body').appendChild(lightbox);
}
/**
 * 
 * @param {array} options take all tha className 
 * @param {string} element take the wanted element
 */


function generateElement(element) {
  var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : [];
  div = document.createElement(element);
  options.forEach(function (option) {
    div.classList.add(option);
  });
  return div;
}

lightBox.init();

/***/ })

},[["./assets/js/app.js","runtime","vendors~app~js/addImage~js/homeMenu","vendors~app~js/addImage","vendors~app"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvY3NzL2FwcC5jc3MiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2FwcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvc2VydmljZS9saWdodGJveC5qcyJdLCJuYW1lcyI6WyJyZXF1aXJlIiwibGlnaHRCb3giLCJpbWciLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJmb3JFYWNoIiwiaW1hZ2UiLCJhZGRFdmVudExpc3RlbmVyIiwibGlnaHRib3hHZW5lcmF0b3IiLCJjbG9zZUxpZ2h0Qm94IiwiYnV0dG9uIiwicXVlcnlTZWxlY3RvciIsInJlbW92ZSIsImxpZ2h0Ym94IiwiZ2VuZXJhdGVFbGVtZW50IiwiaW5uZXJIVE1MIiwiZ2V0QXR0cmlidXRlIiwiYXBwZW5kQ2hpbGQiLCJlbGVtZW50Iiwib3B0aW9ucyIsImRpdiIsImNyZWF0ZUVsZW1lbnQiLCJvcHRpb24iLCJjbGFzc0xpc3QiLCJhZGQiLCJpbml0Il0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7QUFBQSx1Qzs7Ozs7Ozs7Ozs7O0FDQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTs7Ozs7O0FBT0E7Q0FHQTs7QUFDQztBQUNBOztBQUNBQSxtQkFBTyxDQUFDLDhEQUFELENBQVA7O0FBQ0FBLG1CQUFPLENBQUMsZ0VBQUQsQ0FBUCxDOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztJQ2RLQyxROzs7Ozs7Ozs7MkJBRVc7QUFDVCxVQUFNQyxHQUFHLEdBQUdDLFFBQVEsQ0FBQ0MsZ0JBQVQsQ0FBMEIsZUFBMUIsQ0FBWjtBQUVBRixTQUFHLENBQUNHLE9BQUosQ0FBWSxVQUFBQyxLQUFLLEVBQUk7QUFDakJBLGFBQUssQ0FBQ0MsZ0JBQU4sQ0FBdUIsT0FBdkIsRUFBZ0MsWUFBTTtBQUNwQ0MsMkJBQWlCLENBQUNGLEtBQUQsQ0FBakI7QUFDQUcsdUJBQWE7QUFDZCxTQUhEO0FBSUgsT0FMRDtBQU1IOzs7Ozs7QUFJTCxTQUFTQSxhQUFULEdBQXlCO0FBQ3JCLE1BQUlDLE1BQU0sR0FBR1AsUUFBUSxDQUFDUSxhQUFULENBQXVCLGlCQUF2QixDQUFiO0FBQ0FELFFBQU0sQ0FBQ0gsZ0JBQVAsQ0FBd0IsT0FBeEIsRUFBaUMsWUFBTTtBQUNuQ0osWUFBUSxDQUFDUSxhQUFULENBQXVCLFdBQXZCLEVBQW9DQyxNQUFwQztBQUNILEdBRkQ7QUFHSDs7QUFFRCxTQUFTSixpQkFBVCxDQUEyQkYsS0FBM0IsRUFBa0M7QUFDOUIsTUFBSU8sUUFBUSxHQUFHQyxlQUFlLENBQUMsS0FBRCxFQUFRLENBQUMsVUFBRCxDQUFSLENBQTlCO0FBQ0VELFVBQVEsQ0FBQ0UsU0FBVCwyTkFFc0NULEtBQUssQ0FBQ1UsWUFBTixDQUFtQixLQUFuQixDQUZ0QztBQUtKYixVQUFRLENBQUNRLGFBQVQsQ0FBdUIsTUFBdkIsRUFBK0JNLFdBQS9CLENBQTJDSixRQUEzQztBQUNEO0FBRUQ7Ozs7Ozs7QUFLQSxTQUFTQyxlQUFULENBQXlCSSxPQUF6QixFQUErQztBQUFBLE1BQWJDLE9BQWEsdUVBQUgsRUFBRztBQUM3Q0MsS0FBRyxHQUFHakIsUUFBUSxDQUFDa0IsYUFBVCxDQUF1QkgsT0FBdkIsQ0FBTjtBQUNBQyxTQUFPLENBQUNkLE9BQVIsQ0FBZ0IsVUFBQWlCLE1BQU0sRUFBSTtBQUN4QkYsT0FBRyxDQUFDRyxTQUFKLENBQWNDLEdBQWQsQ0FBa0JGLE1BQWxCO0FBQ0QsR0FGRDtBQUdBLFNBQU9GLEdBQVA7QUFDRDs7QUFHRG5CLFFBQVEsQ0FBQ3dCLElBQVQsRyIsImZpbGUiOiJhcHAuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW4iLCIvKlxuICogV2VsY29tZSB0byB5b3VyIGFwcCdzIG1haW4gSmF2YVNjcmlwdCBmaWxlIVxuICpcbiAqIFdlIHJlY29tbWVuZCBpbmNsdWRpbmcgdGhlIGJ1aWx0IHZlcnNpb24gb2YgdGhpcyBKYXZhU2NyaXB0IGZpbGVcbiAqIChhbmQgaXRzIENTUyBmaWxlKSBpbiB5b3VyIGJhc2UgbGF5b3V0IChiYXNlLmh0bWwudHdpZykuXG4gKi9cblxuLy8gYW55IENTUyB5b3UgaW1wb3J0IHdpbGwgb3V0cHV0IGludG8gYSBzaW5nbGUgY3NzIGZpbGUgKGFwcC5jc3MgaW4gdGhpcyBjYXNlKVxuaW1wb3J0ICcuLi9jc3MvYXBwLmNzcyc7XG5cbi8vIE5lZWQgalF1ZXJ5PyBJbnN0YWxsIGl0IHdpdGggXCJ5YXJuIGFkZCBqcXVlcnlcIiwgdGhlbiB1bmNvbW1lbnQgdG8gaW1wb3J0IGl0LlxuIGltcG9ydCAkIGZyb20gJ2pxdWVyeSc7XG4gaW1wb3J0IGxpZ2h0Ym94IGZyb20gXCIuL3NlcnZpY2UvbGlnaHRib3guanNcIlxuIHJlcXVpcmUoJ3BvcHBlci5qcycpXG4gcmVxdWlyZSgnYm9vdHN0cmFwJylcblxuXG4iLCJjbGFzcyBsaWdodEJveCB7XHJcblxyXG4gICAgc3RhdGljIGluaXQoKXtcclxuICAgICAgICBjb25zdCBpbWcgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuaW1nLWxpZ2h0Ym94JylcclxuXHJcbiAgICAgICAgaW1nLmZvckVhY2goaW1hZ2UgPT4ge1xyXG4gICAgICAgICAgICBpbWFnZS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHtcclxuICAgICAgICAgICAgICBsaWdodGJveEdlbmVyYXRvcihpbWFnZSk7XHJcbiAgICAgICAgICAgICAgY2xvc2VMaWdodEJveCgpO1xyXG4gICAgICAgICAgICB9KVxyXG4gICAgICAgIH0pXHJcbiAgICB9XHJcblxyXG59XHJcblxyXG5mdW5jdGlvbiBjbG9zZUxpZ2h0Qm94KCkge1xyXG4gICAgbGV0IGJ1dHRvbiA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5jbG9zZS1saWdodGJveCcpXHJcbiAgICBidXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoKSA9PiB7XHJcbiAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLmxpZ2h0Ym94JykucmVtb3ZlKClcclxuICAgIH0pXHJcbn1cclxuXHJcbmZ1bmN0aW9uIGxpZ2h0Ym94R2VuZXJhdG9yKGltYWdlKSB7XHJcbiAgICBsZXQgbGlnaHRib3ggPSBnZW5lcmF0ZUVsZW1lbnQoJ2RpdicgLFsnbGlnaHRib3gnXSlcclxuICAgICAgbGlnaHRib3guaW5uZXJIVE1MID0gYDxidXR0b24gY2xhc3M9XCJjbG9zZS1saWdodGJveCBidG4gYnRuLWRhbmdlciByb3VuZGVkXCI+PGkgY2xhc3M9XCJmYXMgZmEtdGltZXNcIj48L2k+PC9idXR0b24+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJsaWdodGJveC1jb250YWluZXJcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW1nIHNyYz1cIiR7aW1hZ2UuZ2V0QXR0cmlidXRlKCdzcmMnKX1cIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+YFxyXG4gXHJcbiAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcignYm9keScpLmFwcGVuZENoaWxkKGxpZ2h0Ym94KVxyXG59XHJcblxyXG4vKipcclxuICogXHJcbiAqIEBwYXJhbSB7YXJyYXl9IG9wdGlvbnMgdGFrZSBhbGwgdGhhIGNsYXNzTmFtZSBcclxuICogQHBhcmFtIHtzdHJpbmd9IGVsZW1lbnQgdGFrZSB0aGUgd2FudGVkIGVsZW1lbnRcclxuICovXHJcbmZ1bmN0aW9uIGdlbmVyYXRlRWxlbWVudChlbGVtZW50LCBvcHRpb25zID0gW10pe1xyXG4gIGRpdiA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoZWxlbWVudClcclxuICBvcHRpb25zLmZvckVhY2gob3B0aW9uID0+IHtcclxuICAgIGRpdi5jbGFzc0xpc3QuYWRkKG9wdGlvbilcclxuICB9KVxyXG4gIHJldHVybiBkaXZcclxufVxyXG5cclxuXHJcbmxpZ2h0Qm94LmluaXQoKVxyXG4iXSwic291cmNlUm9vdCI6IiJ9