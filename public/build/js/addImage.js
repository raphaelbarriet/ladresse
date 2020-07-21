(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["js/addImage"],{

/***/ "./assets/js/menu/addImage.js":
/*!************************************!*\
  !*** ./assets/js/menu/addImage.js ***!
  \************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_regexp_exec__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.regexp.exec */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_string_replace__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.string.replace */ "./node_modules/core-js/modules/es.string.replace.js");
/* harmony import */ var core_js_modules_es_string_replace__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_replace__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_2__);



jquery__WEBPACK_IMPORTED_MODULE_2___default()(document).ready(function (e) {
  var addImage = jquery__WEBPACK_IMPORTED_MODULE_2___default()("#add-image");
  var p = jquery__WEBPACK_IMPORTED_MODULE_2___default()('#plat_images');
  var element = p.data("prototype");
  var counter = jquery__WEBPACK_IMPORTED_MODULE_2___default()('#plat_images .form-groupe').length;
  addImage.click(function () {
    p.append(element.replace(/__name__/g, counter));
    buttonHandleDelete();
    counter++;
  });

  function buttonHandleDelete() {
    jquery__WEBPACK_IMPORTED_MODULE_2___default()('button[data-action="delete"]').click(function () {
      var target = this.dataset.target;
      jquery__WEBPACK_IMPORTED_MODULE_2___default()(target).remove();
    });
  }

  buttonHandleDelete();
});

/***/ })

},[["./assets/js/menu/addImage.js","runtime","vendors~app~js/addImage~js/homeMenu","vendors~app~js/addImage","vendors~js/addImage"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvbWVudS9hZGRJbWFnZS5qcyJdLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsImUiLCJhZGRJbWFnZSIsInAiLCJlbGVtZW50IiwiZGF0YSIsImNvdW50ZXIiLCJsZW5ndGgiLCJjbGljayIsImFwcGVuZCIsInJlcGxhY2UiLCJidXR0b25IYW5kbGVEZWxldGUiLCJ0YXJnZXQiLCJkYXRhc2V0IiwicmVtb3ZlIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7QUFDQUEsNkNBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBbUIsVUFBQ0MsQ0FBRCxFQUFPO0FBQ3RCLE1BQU1DLFFBQVEsR0FBR0osNkNBQUMsQ0FBQyxZQUFELENBQWxCO0FBQ0EsTUFBTUssQ0FBQyxHQUFHTCw2Q0FBQyxDQUFDLGNBQUQsQ0FBWDtBQUNBLE1BQUlNLE9BQU8sR0FBR0QsQ0FBQyxDQUFDRSxJQUFGLENBQU8sV0FBUCxDQUFkO0FBQ0EsTUFBSUMsT0FBTyxHQUFHUiw2Q0FBQyxDQUFDLDJCQUFELENBQUQsQ0FBK0JTLE1BQTdDO0FBRUFMLFVBQVEsQ0FBQ00sS0FBVCxDQUFnQixZQUFXO0FBQ3ZCTCxLQUFDLENBQUNNLE1BQUYsQ0FBU0wsT0FBTyxDQUFDTSxPQUFSLENBQWdCLFdBQWhCLEVBQTZCSixPQUE3QixDQUFUO0FBQ0FLLHNCQUFrQjtBQUNsQkwsV0FBTztBQUNWLEdBSkQ7O0FBT0EsV0FBU0ssa0JBQVQsR0FBOEI7QUFDMUJiLGlEQUFDLENBQUMsOEJBQUQsQ0FBRCxDQUFrQ1UsS0FBbEMsQ0FBeUMsWUFBWTtBQUNqRCxVQUFNSSxNQUFNLEdBQUcsS0FBS0MsT0FBTCxDQUFhRCxNQUE1QjtBQUNBZCxtREFBQyxDQUFDYyxNQUFELENBQUQsQ0FBVUUsTUFBVjtBQUNILEtBSEQ7QUFJSDs7QUFFREgsb0JBQWtCO0FBRXJCLENBdEJELEUiLCJmaWxlIjoianMvYWRkSW1hZ2UuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgJCBmcm9tICdqcXVlcnknO1xyXG4kKGRvY3VtZW50KS5yZWFkeSggKGUpID0+IHtcclxuICAgIGNvbnN0IGFkZEltYWdlID0gJChcIiNhZGQtaW1hZ2VcIilcclxuICAgIGNvbnN0IHAgPSAkKCcjcGxhdF9pbWFnZXMnKVxyXG4gICAgbGV0IGVsZW1lbnQgPSBwLmRhdGEoXCJwcm90b3R5cGVcIilcclxuICAgIGxldCBjb3VudGVyID0gJCgnI3BsYXRfaW1hZ2VzIC5mb3JtLWdyb3VwZScpLmxlbmd0aFxyXG5cclxuICAgIGFkZEltYWdlLmNsaWNrKCBmdW5jdGlvbigpIHtcclxuICAgICAgICBwLmFwcGVuZChlbGVtZW50LnJlcGxhY2UoL19fbmFtZV9fL2csIGNvdW50ZXIpKVxyXG4gICAgICAgIGJ1dHRvbkhhbmRsZURlbGV0ZSgpXHJcbiAgICAgICAgY291bnRlcisrXHJcbiAgICB9KVxyXG5cclxuXHJcbiAgICBmdW5jdGlvbiBidXR0b25IYW5kbGVEZWxldGUoKSB7XHJcbiAgICAgICAgJCgnYnV0dG9uW2RhdGEtYWN0aW9uPVwiZGVsZXRlXCJdJykuY2xpY2soIGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAgICAgY29uc3QgdGFyZ2V0ID0gdGhpcy5kYXRhc2V0LnRhcmdldDtcclxuICAgICAgICAgICAgJCh0YXJnZXQpLnJlbW92ZSgpXHJcbiAgICAgICAgfSlcclxuICAgIH1cclxuXHJcbiAgICBidXR0b25IYW5kbGVEZWxldGUoKVxyXG5cclxufSkiXSwic291cmNlUm9vdCI6IiJ9