  /**
   * --------------------------------------------
   * AdminLTE Layout.js
   * License MIT
   * --------------------------------------------
   */
  var Layout = function ($) {
    /**
     * Constants
     * ====================================================
     */
    var NAME = 'Layout';
    var DATA_KEY = 'lte.layout';
    var JQUERY_NO_CONFLICT = $.fn[NAME];
    var Selector = {
      HEADER: '.main-header',
      MAIN_SIDEBAR: '.main-sidebar',
      SIDEBAR: '.main-sidebar .sidebar',
      CONTENT: '.content-wrapper',
      BRAND: '.brand-link',
      CONTENT_HEADER: '.content-header',
      WRAPPER: '.wrapper',
      CONTROL_SIDEBAR: '.control-sidebar',
      LAYOUT_FIXED: '.layout-fixed',
      FOOTER: '.main-footer'
    };
    var ClassName = {
      HOLD: 'hold-transition',
      SIDEBAR: 'main-sidebar',
      CONTENT_FIXED: 'content-fixed',
      SIDEBAR_FOCUSED: 'sidebar-focused',
      LAYOUT_FIXED: 'layout-fixed',
      NAVBAR_FIXED: 'layout-navbar-fixed',
      FOOTER_FIXED: 'layout-footer-fixed'
    };
    var Default = {
      scrollbarTheme: 'os-theme-light',
      scrollbarAutoHide: 'l'
      /**
       * Class Definition
       * ====================================================
       */

    };

    var Layout =
    /*#__PURE__*/
    function () {
      function Layout(element, config) {
        this._config = config;
        this._element = element;

        this._init();
      } // Public


      var _proto = Layout.prototype;

      _proto.fixLayoutHeight = function fixLayoutHeight() {
        var heights = {
          window: $(window).height(),
          header: $(Selector.HEADER).outerHeight(),
          footer: $(Selector.FOOTER).outerHeight(),
          sidebar: $(Selector.SIDEBAR).height()
        };

        var max = this._max(heights);

        if ($('body').hasClass(ClassName.LAYOUT_FIXED)) {
          $(Selector.CONTENT).css('min-height', max - heights.header - heights.footer); // $(Selector.SIDEBAR).css('min-height', max - heights.header)

          $(Selector.CONTROL_SIDEBAR + ' .control-sidebar-content').css('height', max - heights.header);

          if (typeof $.fn.overlayScrollbars !== 'undefined') {
            $(Selector.SIDEBAR).overlayScrollbars({
              className: this._config.scrollbarTheme,
              sizeAutoCapable: true,
              scrollbars: {
                autoHide: this._config.scrollbarAutoHide,
                clickScrolling: true
              }
            });
            $(Selector.CONTROL_SIDEBAR + ' .control-sidebar-content').overlayScrollbars({
              className: this._config.scrollbarTheme,
              sizeAutoCapable: true,
              scrollbars: {
                autoHide: this._config.scrollbarAutoHide,
                clickScrolling: true
              }
            });
          }
        } else {
          if (heights.window > heights.sidebar) {
            $(Selector.CONTENT).css('min-height', heights.window - heights.header - heights.footer);
          } else {
            $(Selector.CONTENT).css('min-height', heights.sidebar - heights.header);
          }
        }
      } // Private
      ;

      _proto._init = function _init() {
        var _this = this;

        // Enable transitions
        $('body').removeClass(ClassName.HOLD); // Activate layout height watcher

        this.fixLayoutHeight();
        $(Selector.SIDEBAR).on('collapsed.lte.treeview expanded.lte.treeview collapsed.lte.pushmenu expanded.lte.pushmenu', function () {
          _this.fixLayoutHeight();
        });
        $(window).resize(function () {
          _this.fixLayoutHeight();
        });
        $('body, html').css('height', 'auto');
      };

      _proto._max = function _max(numbers) {
        // Calculate the maximum number in a list
        var max = 0;
        Object.keys(numbers).forEach(function (key) {
          if (numbers[key] > max) {
            max = numbers[key];
          }
        });
        return max;
      } // Static
      ;

      Layout._jQueryInterface = function _jQueryInterface(config) {
        return this.each(function () {
          var data = $(this).data(DATA_KEY);

          var _config = $.extend({}, Default, $(this).data());

          if (!data) {
            data = new Layout($(this), _config);
            $(this).data(DATA_KEY, data);
          }

          if (config === 'init') {
            data[config]();
          }
        });
      };

      return Layout;
    }();
    /**
     * Data API
     * ====================================================
     */


    $(window).on('load', function () {
      Layout._jQueryInterface.call($('body'));
    });
    $(Selector.SIDEBAR + ' a').on('focusin', function () {
      $(Selector.MAIN_SIDEBAR).addClass(ClassName.SIDEBAR_FOCUSED);
    });
    $(Selector.SIDEBAR + ' a').on('focusout', function () {
      $(Selector.MAIN_SIDEBAR).removeClass(ClassName.SIDEBAR_FOCUSED);
    });
    /**
     * jQuery API
     * ====================================================
     */

    $.fn[NAME] = Layout._jQueryInterface;
    $.fn[NAME].Constructor = Layout;

    $.fn[NAME].noConflict = function () {
      $.fn[NAME] = JQUERY_NO_CONFLICT;
      return Layout._jQueryInterface;
    };

    return Layout;
  }(jQuery);
