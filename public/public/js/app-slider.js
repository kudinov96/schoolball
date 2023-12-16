




$('.slider--services_slide_service_info_more').on('click', function () {
    var back = $(this).parents('.slider--services_slide').find('.slider--services_slide_service--back');
    back.addClass('slider--services_slide_service--back--active');
    $('.slider--services_slide_service--back').not(back).removeClass('slider--services_slide_service--back--active');
    var front = $(this).parents('.slider--services_slide').find('.slider--services_slide_service--front');
    front.addClass('slider--services_slide_service--front--active');
    $('.slider--services_slide_service--front').not(front).removeClass('slider--services_slide_service--front--active');
    return false;
});





if (window.innerWidth < 50000) {
    jQuery(".text_review").each(function () {
        var review_full = jQuery(this).html();
        var review = review_full;
        if (review.length > 50000) {
            review = review.substring(0, 50000);
            jQuery(this).html(review + '<div class="read_more" style="cursor: pointer;"> <p><b>Читать полностью ...</b></p></div>');
        }
        jQuery(this).append('<div class="full_text" style="display: none;">' + review_full + '</div>');
    });
    jQuery(".read_more").click(function () {
        jQuery(this).parent().html(jQuery(this).parent().find(".full_text").html());
    });
}

function mobilecheck() {
    var check = false;
    (function (a) {
        if (/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true
    })(navigator.userAgent || navigator.vendor || window.opera);
    return check;
}

var SidebarMenuEffects = (function () {
    function hasParentClass(e, classname) {
        if (e === document) return false;
        if (classie.has(e, classname)) {
            return true;
        }
        return e.parentNode && hasParentClass(e.parentNode, classname);
    }

    function init() {
        var container = document.getElementById('container'),
            buttons = Array.prototype.slice.call(document.querySelectorAll('#st-trigger-effects > button')),
            eventtype = mobilecheck() ? 'touchstart' : 'click', resetMenu = function () {
                classie.remove(container, 'st-menu-open');
            }, bodyClickFn = function (evt) {
                if (!hasParentClass(evt.target, 'st-menu')) {
                    resetMenu();
                    document.getElementById('btnCls').classList.toggle('hide');
                    document.getElementById('btnOpn').classList.toggle('hide');
                    document.removeEventListener(eventtype, bodyClickFn);
                }
            };
        buttons.forEach(function (el, i) {
            var effect = el.getAttribute('data-effect');
            el.addEventListener(eventtype, function (ev) {
                ev.stopPropagation();
                ev.preventDefault();
                document.getElementById('btnCls').classList.toggle('hide');
                document.getElementById('btnOpn').classList.toggle('hide');
                classie.toggle(container, effect);
                setTimeout(function () {
                    classie.toggle(container, 'st-menu-open');
                }, 25);
            });
        });
    }

    init();
})();

function openbox(id) {
    display = document.getElementById(id).style.display;
    if (display == 'none') {
        document.getElementById(id).style.display = 'block';
    } else {
        document.getElementById(id).style.display = 'none';
    }
}

+function ($) {
    'use strict';
    var Tab = function (element) {
        this.element = $(element)
    }
    Tab.VERSION = '3.3.5'
    Tab.TRANSITION_DURATION = 150
    Tab.prototype.show = function () {
        var $this = this.element
        var $ul = $this.closest('ul:not(.dropdown-menu)')
        var selector = $this.data('target')
        if (!selector) {
            selector = $this.attr('href')
            selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '')
        }
        if ($this.parent('li').hasClass('active')) return
        var $previous = $ul.find('.active:last a')
        var hideEvent = $.Event('hide.bs.tab', {relatedTarget: $this[0]})
        var showEvent = $.Event('show.bs.tab', {relatedTarget: $previous[0]})
        $previous.trigger(hideEvent)
        $this.trigger(showEvent)
        if (showEvent.isDefaultPrevented() || hideEvent.isDefaultPrevented()) return
        var $target = $(selector)
        this.activate($this.closest('li'), $ul)
        this.activate($target, $target.parent(), function () {
            $previous.trigger({type: 'hidden.bs.tab', relatedTarget: $this[0]})
            $this.trigger({type: 'shown.bs.tab', relatedTarget: $previous[0]})
        })
    }
    Tab.prototype.activate = function (element, container, callback) {
        var $active = container.find('> .active')
        var transition = callback && $.support.transition && ($active.length && $active.hasClass('fade') || !!container.find('> .fade').length)

        function next() {
            $active.removeClass('active').find('> .dropdown-menu > .active').removeClass('active').end().find('[data-toggle="tab"]').attr('aria-expanded', false)
            element.addClass('active').find('[data-toggle="tab"]').attr('aria-expanded', true)
            if (transition) {
                element[0].offsetWidth
                element.addClass('in')
            } else {
                element.removeClass('fade')
            }
            if (element.parent('.dropdown-menu').length) {
                element.closest('li.dropdown').addClass('active').end().find('[data-toggle="tab"]').attr('aria-expanded', true)
            }
            callback && callback()
        }

        $active.length && transition ? $active.one('bsTransitionEnd', next).emulateTransitionEnd(Tab.TRANSITION_DURATION) : next()
        $active.removeClass('in')
    }

    function Plugin(option) {
        return this.each(function () {
            var $this = $(this)
            var data = $this.data('bs.tab')
            if (!data) $this.data('bs.tab', (data = new Tab(this)))
            if (typeof option == 'string') data[option]()
        })
    }

    var old = $.fn.tab
    $.fn.tab = Plugin
    $.fn.tab.Constructor = Tab
    $.fn.tab.noConflict = function () {
        $.fn.tab = old
        return this
    }
    var clickHandler = function (e) {
        e.preventDefault()
        Plugin.call($(this), 'show')
    }
    $(document).on('click.bs.tab.data-api', '[data-toggle="tab"]', clickHandler).on('click.bs.tab.data-api', '[data-toggle="pill"]', clickHandler)
}(jQuery);
