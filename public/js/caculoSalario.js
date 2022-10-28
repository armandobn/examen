/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/caculoSalario.js":
/*!***************************************!*\
  !*** ./resources/js/caculoSalario.js ***!
  \***************************************/
/***/ (() => {

eval("function salario(salario, tiempo) {\n  var total = 0;\n  salario = parseFloat(salario);\n  total = salario * tiempo;\n  return total;\n}\n$(document).ready(function () {\n  var selectCalculo = document.querySelector(\"#salario\");\n  selectCalculo.addEventListener(\"change\", function (event) {\n    var select = event.target.value;\n    var salario_diario = $(\"#salario_diario\").val();\n    var cantidad_total = select == 'semanal' ? salario(salario_diario, 7) : select == 'quincenal' ? salario(salario_diario, 15) : select == 'mensual' ? salario(salario_diario, 30) : 0;\n    document.getElementById(\"salario_total\").innerHTML = \"Cantidad: \".concat(cantidad_total);\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvY2FjdWxvU2FsYXJpby5qcy5qcyIsIm5hbWVzIjpbInNhbGFyaW8iLCJ0aWVtcG8iLCJ0b3RhbCIsInBhcnNlRmxvYXQiLCIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsInNlbGVjdENhbGN1bG8iLCJxdWVyeVNlbGVjdG9yIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwic2VsZWN0IiwidGFyZ2V0IiwidmFsdWUiLCJzYWxhcmlvX2RpYXJpbyIsInZhbCIsImNhbnRpZGFkX3RvdGFsIiwiZ2V0RWxlbWVudEJ5SWQiLCJpbm5lckhUTUwiXSwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9jYWN1bG9TYWxhcmlvLmpzP2E3OGEiXSwic291cmNlc0NvbnRlbnQiOlsiXHJcbmZ1bmN0aW9uIHNhbGFyaW8oc2FsYXJpbyx0aWVtcG8pe1xyXG4gICAgbGV0IHRvdGFsPTA7XHJcbiAgICBzYWxhcmlvPXBhcnNlRmxvYXQoc2FsYXJpbyk7ICAgIFxyXG4gICAgdG90YWw9c2FsYXJpbyp0aWVtcG87XHJcbiAgICByZXR1cm4gdG90YWw7XHJcbn1cclxuXHJcbiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcclxuICAgIGNvbnN0IHNlbGVjdENhbGN1bG8gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI3NhbGFyaW9cIik7XHJcbiAgICBzZWxlY3RDYWxjdWxvLmFkZEV2ZW50TGlzdGVuZXIoXCJjaGFuZ2VcIiwgKGV2ZW50KSA9PiB7XHJcbiAgICAgICAgbGV0IHNlbGVjdCA9IGV2ZW50LnRhcmdldC52YWx1ZTtcclxuICAgICAgICBsZXQgc2FsYXJpb19kaWFyaW8gPSAkKFwiI3NhbGFyaW9fZGlhcmlvXCIpLnZhbCgpOyAgIFxyXG4gICAgICAgIGxldCBjYW50aWRhZF90b3RhbD1zZWxlY3QgPT0gJ3NlbWFuYWwnID8gc2FsYXJpbyhzYWxhcmlvX2RpYXJpbyw3KSA6IHNlbGVjdCA9PSAncXVpbmNlbmFsJyA/IHNhbGFyaW8oc2FsYXJpb19kaWFyaW8sMTUpOiBzZWxlY3QgPT0gJ21lbnN1YWwnID8gc2FsYXJpbyhzYWxhcmlvX2RpYXJpbywzMCk6IDA7XHJcblxyXG4gICAgICAgIFxyXG4gICAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwic2FsYXJpb190b3RhbFwiKS5pbm5lckhUTUw9YENhbnRpZGFkOiAke2NhbnRpZGFkX3RvdGFsfWA7XHJcbiAgICAgXHJcbiAgICB9KTtcclxufSk7XHJcbiJdLCJtYXBwaW5ncyI6IkFBQ0EsU0FBU0EsT0FBTyxDQUFDQSxPQUFPLEVBQUNDLE1BQU0sRUFBQztFQUM1QixJQUFJQyxLQUFLLEdBQUMsQ0FBQztFQUNYRixPQUFPLEdBQUNHLFVBQVUsQ0FBQ0gsT0FBTyxDQUFDO0VBQzNCRSxLQUFLLEdBQUNGLE9BQU8sR0FBQ0MsTUFBTTtFQUNwQixPQUFPQyxLQUFLO0FBQ2hCO0FBRUFFLENBQUMsQ0FBQ0MsUUFBUSxDQUFDLENBQUNDLEtBQUssQ0FBQyxZQUFZO0VBQzFCLElBQU1DLGFBQWEsR0FBR0YsUUFBUSxDQUFDRyxhQUFhLENBQUMsVUFBVSxDQUFDO0VBQ3hERCxhQUFhLENBQUNFLGdCQUFnQixDQUFDLFFBQVEsRUFBRSxVQUFDQyxLQUFLLEVBQUs7SUFDaEQsSUFBSUMsTUFBTSxHQUFHRCxLQUFLLENBQUNFLE1BQU0sQ0FBQ0MsS0FBSztJQUMvQixJQUFJQyxjQUFjLEdBQUdWLENBQUMsQ0FBQyxpQkFBaUIsQ0FBQyxDQUFDVyxHQUFHLEVBQUU7SUFDL0MsSUFBSUMsY0FBYyxHQUFDTCxNQUFNLElBQUksU0FBUyxHQUFHWCxPQUFPLENBQUNjLGNBQWMsRUFBQyxDQUFDLENBQUMsR0FBR0gsTUFBTSxJQUFJLFdBQVcsR0FBR1gsT0FBTyxDQUFDYyxjQUFjLEVBQUMsRUFBRSxDQUFDLEdBQUVILE1BQU0sSUFBSSxTQUFTLEdBQUdYLE9BQU8sQ0FBQ2MsY0FBYyxFQUFDLEVBQUUsQ0FBQyxHQUFFLENBQUM7SUFHNUtULFFBQVEsQ0FBQ1ksY0FBYyxDQUFDLGVBQWUsQ0FBQyxDQUFDQyxTQUFTLHVCQUFjRixjQUFjLENBQUU7RUFFcEYsQ0FBQyxDQUFDO0FBQ04sQ0FBQyxDQUFDIn0=\n//# sourceURL=webpack-internal:///./resources/js/caculoSalario.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/caculoSalario.js"]();
/******/ 	
/******/ })()
;