(function (global, factory) {
  if (typeof define === "function" && define.amd) {
    define('/Section/Menubar', ['exports', 'jquery', 'Component'], factory);
  } else if (typeof exports !== "undefined") {
    factory(exports, require('jquery'), require('Component'));
  } else {
    var mod = {
      exports: {}
    };
    factory(mod.exports, global.jQuery, global.Component);
    global.SectionMenubar = mod.exports;
  }
})(this, function (exports, _jquery, _Component2) {
  'use strict';

  Object.defineProperty(exports, "__esModule", {
    value: true
  });

  var _jquery2 = babelHelpers.interopRequireDefault(_jquery);

  var _Component3 = babelHelpers.interopRequireDefault(_Component2);

  var $BODY = (0, _jquery2.default)('body');
  var $HTML = (0, _jquery2.default)('html');

  var Scrollable = function () {
    function Scrollable($el) {
      babelHelpers.classCallCheck(this, Scrollable);

      this.$el = $el;
      this.native = false;
      this.api = null;

      this.init();
    }

    babelHelpers.createClass(Scrollable, [{
      key: 'init',
      value: function init() {
        if ($BODY.is('.site-menubar-native')) {
          this.native = true;
          return;
        }

        this.api = this.$el.asScrollable({
          namespace: 'scrollable',
          skin: 'scrollable-inverse',
          direction: 'vertical',
          contentSelector: '>',
          containerSelector: '>'
        }).data('asScrollable');
      }
    }, {
      key: 'update',
      value: function update() {
        if (this.api) {
          this.api.update();
        }
      }
    }, {
      key: 'enable',
      value: function enable() {
        if (this.native) {
          return;
        }
        if (!this.api) {
          this.init();
        }
        if (this.api) {
          this.api.enable();
        }
      }
    }, {
      key: 'disable',
      value: function disable() {
        if (this.api) {
          this.api.disable();
        }
      }
    }]);
    return Scrollable;
  }();

  var Menubar = function (_Component) {
    babelHelpers.inherits(Menubar, _Component);

    function Menubar() {
      var _ref;

      babelHelpers.classCallCheck(this, Menubar);

      for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
        args[_key] = arguments[_key];
      }

      var _this = babelHelpers.possibleConstructorReturn(this, (_ref = Menubar.__proto__ || Object.getPrototypeOf(Menubar)).call.apply(_ref, [this].concat(args)));

      _this.setupMenu();
      _this.$menuBody = _this.$el.children('.mm-panels');

      // state
      _this.type = 'fold'; // unfold, fold, open, hide;
      return _this;
    }

    babelHelpers.createClass(Menubar, [{
      key: 'initialize',
      value: function initialize() {
        if (this.$menuBody.length > 0) {
          this.initialized = true;
        } else {
          this.initialized = false;
          return;
        }

        this.scrollable = new Scrollable(this.$menuBody);

        $HTML.removeClass('css-menubar').addClass('js-menubar');

        this.change(this.type);
      }
    }, {
      key: 'setupMenu',
      value: function setupMenu() {
        if (typeof _jquery2.default.fn.mmenu !== 'undefined') {
          this.$el.mmenu({
            offCanvas: false,
            navbars: [{
              position: 'bottom',
              content: ['<div class="site-menubar-footer">\n              <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip" data-original-title="Settings">\n                <span class="icon wb-settings" aria-hidden="true"></span>\n              </a>\n              <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">\n                <span class="icon wb-eye-close" aria-hidden="true"></span>\n              </a>\n              <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">\n                <span class="icon wb-power" aria-hidden="true"></span>\n              </a>\n            </div>']
            }]
          });
        }
      }
    }, {
      key: 'getMenuApi',
      value: function getMenuApi() {
        return this.$el.data('mmenu');
      }
    }, {
      key: 'update',
      value: function update() {
        this.scrollable.update();
      }
    }, {
      key: 'change',
      value: function change(type) {
        if (this.initialized) {
          this.reset();
          this[type]();
        }
      }
    }, {
      key: 'animate',
      value: function animate(doing) {
        var _this2 = this;

        var callback = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : function () {};

        $BODY.addClass('site-menubar-changing');

        doing.call(this);

        this.$el.trigger('changing.site.menubar');

        setTimeout(function () {
          callback.call(_this2);
          $BODY.removeClass('site-menubar-changing');
          _this2.update();
          _this2.$el.trigger('changed.site.menubar');
        }, 500);
      }
    }, {
      key: 'hoverTrigger',
      value: function hoverTrigger() {
        var _this3 = this;

        this.$el.on('mouseenter', function () {
          $BODY.addClass('site-menubar-hover');

          setTimeout(function () {
            _this3.scrollable.enable();
          }, 500);
        }).on('mouseleave', function () {
          $BODY.removeClass('site-menubar-hover');

          var api = _this3.getMenuApi();
          if (api) {
            api.openPanel((0, _jquery2.default)('#mm-0'));
          }

          setTimeout(function () {
            _this3.scrollable.disable();
          }, 500);
        });
      }
    }, {
      key: 'hoverTriggerOff',
      value: function hoverTriggerOff() {
        this.$el.off('mouseenter');
        this.$el.off('mouseleave');
      }
    }, {
      key: 'reset',
      value: function reset() {
        $BODY.removeClass('site-menubar-hide site-menubar-open site-menubar-fold site-menubar-unfold');
        $HTML.removeClass('disable-scrolling');
      }
    }, {
      key: 'open',
      value: function open() {
        this.animate(function () {
          $BODY.addClass('site-menubar-open site-menubar-unfold');

          $HTML.addClass('disable-scrolling');
        }, function () {
          this.scrollable.enable();
        });

        this.type = 'open';
      }
    }, {
      key: 'hide',
      value: function hide() {
        this.animate(function () {
          $BODY.addClass('site-menubar-hide site-menubar-unfold');
        }, function () {
          this.scrollable.enable();
        });

        this.type = 'hide';
      }
    }, {
      key: 'unfold',
      value: function unfold() {
        this.animate(function () {
          $BODY.addClass('site-menubar-unfold');
          this.hoverTriggerOff();
        }, function () {
          this.scrollable.enable();

          this.triggerResize();
        });

        this.type = 'unfold';
      }
    }, {
      key: 'fold',
      value: function fold() {
        this.scrollable.disable();

        this.animate(function () {

          $BODY.addClass('site-menubar-fold');
          this.hoverTrigger();
        }, function () {
          this.triggerResize();
        });

        this.type = 'fold';
      }
    }]);
    return Menubar;
  }(_Component3.default);

  exports.default = Menubar;
});