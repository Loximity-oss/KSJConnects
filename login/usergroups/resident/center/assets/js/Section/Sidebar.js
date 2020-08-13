(function (global, factory) {
  if (typeof define === "function" && define.amd) {
    define('/Section/Sidebar', ['exports', 'jquery', 'Base', 'Plugin'], factory);
  } else if (typeof exports !== "undefined") {
    factory(exports, require('jquery'), require('Base'), require('Plugin'));
  } else {
    var mod = {
      exports: {}
    };
    factory(mod.exports, global.jQuery, global.Base, global.Plugin);
    global.SectionSidebar = mod.exports;
  }
})(this, function (exports, _jquery, _Base2, _Plugin) {
  'use strict';

  Object.defineProperty(exports, "__esModule", {
    value: true
  });

  var _jquery2 = babelHelpers.interopRequireDefault(_jquery);

  var _Base3 = babelHelpers.interopRequireDefault(_Base2);

  var Sidebar = function (_Base) {
    babelHelpers.inherits(Sidebar, _Base);

    function Sidebar() {
      babelHelpers.classCallCheck(this, Sidebar);
      return babelHelpers.possibleConstructorReturn(this, (Sidebar.__proto__ || Object.getPrototypeOf(Sidebar)).apply(this, arguments));
    }

    babelHelpers.createClass(Sidebar, [{
      key: 'process',
      value: function process() {
        babelHelpers.get(Sidebar.prototype.__proto__ || Object.getPrototypeOf(Sidebar.prototype), 'process', this).call(this);

        if (typeof _jquery2.default.slidePanel === 'undefined') {
          return;
        }
        var sidebar = this;
        (0, _jquery2.default)(document).on('click', '[data-toggle="site-sidebar"]', function () {
          var $this = (0, _jquery2.default)(this);

          var direction = 'right';
          if ((0, _jquery2.default)('body').hasClass('site-menubar-flipped')) {
            direction = 'left';
          }

          var options = _jquery2.default.extend({}, (0, _Plugin.getDefaults)('slidePanel'), {
            direction: direction,
            skin: 'site-sidebar',
            dragTolerance: 80,
            template: function template(options) {
              return '<div class="' + options.classes.base + ' ' + options.classes.base + '-' + options.direction + '">\n          <div class="' + options.classes.content + ' site-sidebar-content"></div>\n          <div class="slidePanel-handler"></div>\n          </div>';
            },
            afterLoad: function afterLoad() {
              var self = this;
              this.$panel.find('.tab-pane').asScrollable({
                namespace: 'scrollable',
                contentSelector: '> div',
                containerSelector: '> div'
              });

              sidebar.initializePlugins(self.$panel);

              this.$panel.on('shown.bs.tab', function () {
                self.$panel.find('.tab-pane.active').asScrollable('update');
              });
            },
            beforeShow: function beforeShow() {
              if (!$this.hasClass('active')) {
                $this.addClass('active');
              }
            },
            afterHide: function afterHide() {
              if ($this.hasClass('active')) {
                $this.removeClass('active');
              }
            }
          });

          if ($this.hasClass('active')) {
            _jquery2.default.slidePanel.hide();
          } else {
            var url = $this.data('url');
            if (!url) {
              url = $this.attr('href');
              url = url && url.replace(/.*(?=#[^\s]*$)/, '');
            }

            _jquery2.default.slidePanel.show({
              url: url
            }, options);
          }
        });

        (0, _jquery2.default)(document).on('click', '[data-toggle="show-chat"]', function () {
          (0, _jquery2.default)('#conversation').addClass('active');
        });

        (0, _jquery2.default)(document).on('click', '[data-toggle="close-chat"]', function () {
          (0, _jquery2.default)('#conversation').removeClass('active');
        });
      }
    }]);
    return Sidebar;
  }(_Base3.default);

  exports.default = Sidebar;
});