  /**
   * --------------------------------------------
   * AdminLTE ControlSidebar.js
   * License MIT
   * --------------------------------------------
   */
  var ControlSidebar = function ($) {
    /**
     * Constants
     * ====================================================
     */
    var NAME = 'ControlSidebar';
    var DATA_KEY = 'lte.control.sidebar';
    var JQUERY_NO_CONFLICT = $.fn[NAME];
    var Selector = {
      CONTROL_SIDEBAR: '.control-sidebar',
      DATA_TOGGLE: '[data-widget="control-sidebar"]',
      MAIN_HEADER: '.main-header'
    };
    var ClassName = {
      CONTROL_SIDEBAR_ANIMATE: 'control-sidebar-animate',
      CONTROL_SIDEBAR_OPEN: 'control-sidebar-open',
      CONTROL_SIDEBAR_SLIDE: 'control-sidebar-slide-open'
    };
    var Default = {
      slide: true
      /**
       * Class Definition
       * ====================================================
       */

    };

    var ControlSidebar =
    /*#__PURE__*/
    function () {
      function ControlSidebar(element, config) {
        this._element = element;
        this._config = this._getConfig(config);
      } // Public


      var _proto = ControlSidebar.prototype;

      _proto.show = function show() {
        // Show the control sidebar
        if (this._config.slide) {
          $('html').addClass(ClassName.CONTROL_SIDEBAR_ANIMATE);
          $('body').removeClass(ClassName.CONTROL_SIDEBAR_SLIDE).delay(300).queue(function () {
            $(Selector.CONTROL_SIDEBAR).hide();
            $('html').removeClass(ClassName.CONTROL_SIDEBAR_ANIMATE);
            $(this).dequeue();
          });
        } else {
          $('body').removeClass(ClassName.CONTROL_SIDEBAR_OPEN);
        }
      };

      _proto.collapse = function collapse() {
        // Collapse the control sidebar
        if (this._config.slide) {
          $('html').addClass(ClassName.CONTROL_SIDEBAR_ANIMATE);
          $(Selector.CONTROL_SIDEBAR).show().delay(100).queue(function () {
            $('body').addClass(ClassName.CONTROL_SIDEBAR_SLIDE).delay(300).queue(function () {
              $('html').removeClass(ClassName.CONTROL_SIDEBAR_ANIMATE);
              $(this).dequeue();
            });
            $(this).dequeue();
          });
        } else {
          $('body').addClass(ClassName.CONTROL_SIDEBAR_OPEN);
        }
      };

      _proto.toggle = function toggle() {
        this._setMargin();

        var shouldOpen = $('body').hasClass(ClassName.CONTROL_SIDEBAR_OPEN) || $('body').hasClass(ClassName.CONTROL_SIDEBAR_SLIDE);

        if (shouldOpen) {
          // Open the control sidebar
          this.show();
        } else {
          // Close the control sidebar
          this.collapse();
        }
      } // Private
      ;

      _proto._getConfig = function _getConfig(config) {
        return $.extend({}, Default, config);
      };

      _proto._setMargin = function _setMargin() {
        $(Selector.CONTROL_SIDEBAR).css({
          top: $(Selector.MAIN_HEADER).innerHeight()
        });
      } // Static
      ;

      ControlSidebar._jQueryInterface = function _jQueryInterface(operation) {
        return this.each(function () {
          var data = $(this).data(DATA_KEY);

          if (!data) {
            data = new ControlSidebar(this, $(this).data());
            $(this).data(DATA_KEY, data);
          }

          if (data[operation] === 'undefined') {
            throw new Error(operation + " is not a function");
          }

          data[operation]();
        });
      };

      return ControlSidebar;
    }();
    /**
     *
     * Data Api implementation
     * ====================================================
     */


    $(document).on('click', Selector.DATA_TOGGLE, function (event) {
      event.preventDefault();

      ControlSidebar._jQueryInterface.call($(this), 'toggle');
    });
    /**
     * jQuery API
     * ====================================================
     */

    $.fn[NAME] = ControlSidebar._jQueryInterface;
    $.fn[NAME].Constructor = ControlSidebar;

    $.fn[NAME].noConflict = function () {
      $.fn[NAME] = JQUERY_NO_CONFLICT;
      return ControlSidebar._jQueryInterface;
    };

    return ControlSidebar;
  }(jQuery);
