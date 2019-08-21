(function($){
    $(document).ready(function(){
        $(document).on('keydown', function(e){
            if ($('.navigation').hasClass('navigation--active') && e.which == 27) {
                $('#sidebar__menu-checkbox-toggle').prop('checked', null);
                $('.navigation').removeClass('navigation--active');
            }
        });

        menuScrollbarVisibility();
        setActiveMenuItem();

        $(window).on('resize', function(){
            //Delay to be sure all animations are done
            setTimeout(menuScrollbarVisibility, 200);
        });

        $(document).on('scroll', setActiveMenuItem);

        $('.menu__toggle').on('click', function(){
            $('.navigation').toggleClass('navigation--active');
        });

        $('.content').on('click', function(e){
            if ($('.navigation').hasClass('navigation--active')) {
                e.preventDefault();

                $('#sidebar__menu-checkbox-toggle').prop('checked', null);
                $('.navigation').removeClass('navigation--active')
            }
        });

        $('a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            var target = this.hash,

            $target = $(target);

            $('html,body').animate({
                'scrollTop': $target.offset().top
            }, 'fast', function(){
                $('#sidebar__menu-checkbox-toggle').prop('checked', null);
                $('.navigation').removeClass('navigation--active');
            });

        });

        function setActiveMenuItem() {
            var scrolled = $(document).scrollTop();

            $('.navigation .menu__link').each(function(){
                var section = $(this.hash);

                if (section.length != 1) {
                    return;
                }

                var lastSection = $('.content > .section:last-of-type');

                if (Math.ceil(scrolled) >= Math.floor($('body').height() - lastSection.outerHeight()) ) {
                    $('.navigation .menu__item').removeClass('menu__item--active');
                    $('.navigation .menu__item:last-of-type').addClass('menu__item--active');

                    return false;
                } else if( (section.offset().top + section.outerHeight()) > scrolled){
                    $('.navigation .menu__item').removeClass('menu__item--active');
                    $(this).parent().addClass('menu__item--active');

                    return false;
                }
            });
        }

        function menuScrollbarVisibility() {
            var maxHeight = $('.navigation').outerHeight();
            var menuHeight = $('.navigation .menu').prop('scrollHeight') + 50;

            if (menuHeight > maxHeight) {
                $('.navigation .menu').addClass('menu--scrollbar');
            } else {
                $('.navigation .menu').removeClass('menu--scrollbar');
            }
        }
    });
})(jQuery);


// console.log('👋👋👋👋👋👋👋👋👋👋👋👋👋👋👋👋👋');
// console.log('Nysgerrig?');
// console.log('Skriv til mig på rasmus@it-lease.dk');
// console.log('--');
// console.log('Ver: 1.0.0');
// console.log('Dependencies: jQuery, FontAwesome 5, Bootstrap 4, Particles.js, Google Fonts');
