/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

$(document).ready(function () {
  if ($("#dt_user").length) {
    $('#dt_user').DataTable({
      processing: true,
      serverSide: true,
      ajax: baseURL + '/data/user',
      order: [[0, "desc"]],
      language: {
        processing: '<div class="circle-inner"></div>'
      },
      columns: [{
        data: 'id',
        visible: false,
        searchable: false
      }, {
        data: 'name'
      }, {
        data: 'gender',
        searchable: false
      }, {
        data: 'address',
        searchable: false,
        render: function render(data, type, row) {
          if (data == '') {
            return "-";
          }

          return data;
        }
      }, {
        data: 'phone',
        searchable: false,
        render: function render(data, type, row) {
          if (data == '') {
            return "-";
          }

          return data;
        }
      }, {
        data: 'email'
      }, {
        data: 'last_login',
        render: function render(data, type, row) {
          return data ? moment(data, "YYYYMMDD").fromNow() : '-';
        },
        searchable: false
      }]
    });
  }

  if ($("#dt_application").length) {
    $('#dt_application').DataTable({
      processing: true,
      serverSide: true,
      ajax: baseURL + '/data/application',
      order: [[0, "desc"]],
      language: {
        processing: '<div class="circle-inner"></div>'
      },
      columns: [{
        data: 'id',
        visible: false,
        searchable: false
      }, {
        data: 'name',
        render: function render(data, type, row) {
          if (data == '') {
            return "-";
          }

          return data;
        }
      }, {
        data: 'website'
      }, {
        data: 'status',
        render: function render(data, type, row) {
          if (data == '') {
            return "-";
          }

          return data;
        }
      }, {
        data: 'client_id',
        searchable: false
      }]
    });
  }

  if ($("#dt_community").length) {
    $('#dt_community').DataTable({
      processing: true,
      serverSide: true,
      ajax: baseURL + '/data/community',
      order: [[0, "desc"]],
      language: {
        processing: '<div class="circle-inner"></div>'
      },
      columns: [{
        data: 'id',
        visible: false,
        searchable: false
      }, {
        data: 'application.name',
        render: function render(data, type, row) {
          return data.toUpperCase();
        }
      }, {
        data: 'user.name',
        render: function render(data, type, row) {
          return data.toUpperCase();
        }
      }, {
        data: 'id',
        render: function render(data, type, row) {
          return '<a class="btn btn-sm btn-success" href="' + baseURL + '/community/' + data + '/' + slugify(row.user.name, {
            lower: true
          }) + '/userlist">View</a>';
        }
      }]
    });
  }

  if ($("#dt_point").length) {
    $('#dt_point').DataTable({
      processing: true,
      serverSide: true,
      ajax: baseURL + '/data/point',
      order: [[0, "desc"]],
      language: {
        processing: '<div class="circle-inner"></div>'
      },
      columns: [{
        data: 'user_id',
        searchable: false
      }, {
        data: 'total_point',
        render: function render(data, type, row) {
          return numeral(data).format('0,0');
        },
        searchable: false
      }, {
        data: 'name',
        name: 'ggid_myuser.name'
      }, {
        data: 'email',
        name: 'ggid_myuser.email'
      }, {
        data: 'user_id',
        render: function render(data, type, row) {
          return '<a class="btn btn-sm btn-success" href="' + baseURL + '/point/' + data + '/view">View</a>';
        }
      }],
      initComplete: function initComplete(settings, json) {}
    });
  }

  if ($("#dt_point_category").length) {
    $('#dt_point_category').DataTable({
      processing: true,
      serverSide: true,
      ajax: baseURL + '/data/pointcategory',
      order: [[7, "desc"]],
      language: {
        processing: '<div class="circle-inner"></div>'
      },
      columns: [{
        data: 'id',
        visible: false,
        searchable: false,
        name: 'ggid_pointcategory.id'
      }, {
        data: 'status',
        name: 'ggid_pointcategory.status',
        render: function render(data, type, row) {
          if (data == "Published") {
            return "<span class='badge badge-success'>Published</span>";
          } else {
            return "<span class='badge badge-danger'>" + data + "</span>";
          }
        }
      }, {
        data: 'amount',
        searchable: false,
        render: function render(data, type, row) {
          return numeral(data).format('0,0');
        }
      }, {
        data: 'name',
        name: 'ggid_pointcategory.name'
      }, {
        data: 'app_name',
        name: 'ggid_application.name'
      }, {
        data: 'action_performed'
      }, {
        data: 'rule_name',
        name: 'ggid_pointcategorytimerule.name',
        render: function render(data, type, row) {
          return "<span class='badge badge-info'>" + data + "</span>";
        }
      }, {
        data: 'datetime_added',
        render: function render(data, type, row) {
          return data ? moment(data, "YYYYMMDD").fromNow() : '-';
        },
        searchable: false
      }],
      initComplete: function initComplete(settings, json) {}
    });
  }

  if ($("#dt_qrcode").length) {
    $('#dt_qrcode').DataTable({
      processing: true,
      serverSide: true,
      ajax: baseURL + '/data/qrcode',
      order: [[7, "desc"]],
      language: {
        processing: '<div class="circle-inner"></div>'
      },
      columns: [{
        data: 'id',
        visible: false,
        searchable: false,
        name: 'ggid_qrcode.id'
      }, {
        data: 'event_name'
      }, {
        data: 'message_title'
      }, {
        data: 'start_date',
        searchable: false
      }, {
        data: 'end_date',
        searchable: false
      }, _defineProperty({
        data: 'point',
        searchable: false,
        render: function render(data, type, row) {
          return numeral(data).format('0,0');
        }
      }, "searchable", false), {
        data: 'app_name',
        name: 'ggid_application.name',
        render: function render(data, type, row) {
          return "<span class='badge badge-info'>" + data + "</span>";
        }
      }, {
        data: 'username',
        name: 'ggid_myuser.name'
      }, {
        data: 'datetime_created',
        render: function render(data, type, row) {
          return data ? moment(data, "YYYYMMDD").fromNow() : '-';
        },
        searchable: false
      }],
      initComplete: function initComplete(settings, json) {}
    });
  }

  if ($("#dt_qrcode_usage").length) {
    $('#dt_qrcode_usage').DataTable({
      processing: true,
      serverSide: true,
      ajax: baseURL + '/data/qrcode/usage',
      order: [[3, "desc"]],
      language: {
        processing: '<div class="circle-inner"></div>'
      },
      columns: [{
        data: 'id',
        visible: false,
        searchable: false,
        name: 'ggid_qrcodeuserrelation.id'
      }, {
        data: 'username',
        name: 'ggid_myuser.name'
      }, {
        data: 'event_name',
        name: 'ggid_qrcode.event_name'
      }, {
        data: 'datetime_created',
        render: function render(data, type, row) {
          return data ? moment(data, "YYYYMMDD").fromNow() : '-';
        },
        searchable: false
      }],
      initComplete: function initComplete(settings, json) {}
    });
  }

  $('div.dataTables_filter input').addClass('form-control');
  $('div.dataTables_length select').addClass('form-control');
});

/***/ }),

/***/ 2:
/*!************************************!*\
  !*** multi ./resources/js/main.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laragon\www\gudanggaram\resources\js\main.js */"./resources/js/main.js");


/***/ })

/******/ });