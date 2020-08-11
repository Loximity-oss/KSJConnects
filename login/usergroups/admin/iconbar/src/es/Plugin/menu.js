import Plugin from 'Plugin';

const NAME = 'menu';

class Menu extends Plugin {
  constructor(...args) {
    super(...args);
    this.folded = true;
    this.foldAlt = true;
    this.outerHeight = 0;
  }

  getName() {
    return NAME;
  }

  render() {
    this.bindEvents();
    this.$el.data('menuApi', this);
  }

  bindEvents() {
    let self = this;

    this.$el.on('mouseenter.site.menu', '.site-menu-item', function() {

      let $item = $(this);
      if ($item.is('.has-sub') && $item.parent('.site-menu').length > 0) {
        let $sub = $item.children('.site-menu-sub');
        self.position($item, $sub);
      }
      $item.addClass('hover');
    }).on('mouseleave.site.menu', '.site-menu-item', function() {
      let $item = $(this);
      if ($item.is('.has-sub') && $item.parent('.site-menu').length > 0) {
        $item.children('.site-menu-sub').css('max-height', '');
      }
      $item.removeClass('hover');
    }).on('open.site.menu', '.site-menu-item', function(e) {
      let $item = $(this);

      self.expand($item, () => {
        $item.addClass('open');
      });

      $item.siblings('.open').trigger('close.site.menu');

      e.stopPropagation();
    }).on('close.site.menu', '.site-menu-item.open', function(e) {
      let $item = $(this);

      self.collapse($item, () => {
        $item.removeClass('open');
      });

      e.stopPropagation();
    }).on('click.site.menu ', '.site-menu-item', function(e) {
      let $item = $(this);

      if ($item.parent('.site-menu').length === 0 && $item.is('.has-sub') && $(e.target).closest('.site-menu-item').is(this)) {
        if ($item.is('.open')) {
          $item.trigger('close.site.menu');
        } else {
          $item.trigger('open.site.menu');
        }
      }

      e.stopPropagation();
    }).on('touchstart.site.menu', '.site-menu-item', function() {

      $(this).one('touchend.site.menu', function() {
        let $item = $(this);
        $item.off("touchmove.site.menu");
        if ($item.is('.has-sub') && $item.parent('.site-menu').length > 0) {
          $item.siblings('.hover').each(function() {
            let $item = $(this);
            if ($item.is('.has-sub') && $item.parent('.site-menu').length > 0) {
              $item.children('.site-menu-sub').css('max-height', '');
            }

            $item.removeClass('hover');
          });

          if ($item.is('.hover')) {
            if ($item.is('.has-sub') && $item.parent('.site-menu').length > 0) {
              $item.children('.site-menu-sub').css('max-height', '');
            }
            $item.removeClass('hover');
          } else {
            if ($item.is('.has-sub') && $item.parent('.site-menu').length > 0) {
              let $sub = $item.children('.site-menu-sub');
              self.position($item, $sub);
            }
            $item.addClass('hover');
          }
        }

      }).one('touchmove.site.menu', function() {
        $(this).off('touchend.site.menu');
      });
    }).on('scroll.site.menu', '.site-menu-sub', (e) => {
      e.stopPropagation();
    });
  }

  collapse($item, callback) {
    let self = this;
    let $sub = $item.children('.site-menu-sub');

    $sub.show().slideUp(this.options.speed, function() {
      $(this).css('display', '');

      $(this).find('> .site-menu-item').removeClass('is-shown');

      if (callback) {
        callback();
      }

      self.$el.trigger('collapsed.site.menu');
    });
  }

  expand($item, callback) {
    let self = this;
    let $sub = $item.children('.site-menu-sub');
    let $children = $sub.children('.site-menu-item').addClass('is-hidden');

    $sub.hide().slideDown(this.options.speed, function() {
      $(this).css('display', '');

      if (callback) {
        callback();
      }

      self.$el.trigger('expanded.site.menu');
    });

    setTimeout(() => {
      $children.addClass('is-shown');
      $children.removeClass('is-hidden');
    }, 0);
  }

  refresh() {
    this.$el.find('.open').filter(':not(.active)').removeClass('open');
  }

  position($item, $dropdown) {
    let itemHeight = $item.find('> a').outerHeight(),
      menubarHeight = this.outerHeight,
      offsetTop = $item.position().top;

    $dropdown.removeClass('site-menu-sub-up').css('max-height', '');

    if (offsetTop > menubarHeight / 2) {
      $dropdown.addClass('site-menu-sub-up');

      if (this.foldAlt) {
        offsetTop -= itemHeight;
      }
      $dropdown.css('max-height', offsetTop + itemHeight);
    } else {
      if (this.foldAlt) {
        offsetTop += itemHeight;
      }
      $dropdown.removeClass('site-menu-sub-up');
      $dropdown.css('max-height', menubarHeight - offsetTop);
    }
  }
  static getDefaults() {
    return {
      speed: 250
    };
  }
}

Plugin.register(NAME, Menu);
