(function($){
    $(document).ready(function(){
        $(document).on('keydown', function(e){
            if ($('#menu-content').hasClass('active') && e.which == 27) {
                $('#sidebar-checkbox-toggle').prop('checked', null);
                $('#menu-content').removeClass('active')
            }
        });

        menuScrollbarVisibility();

        $(window).on('resize', function(){
            //Delay to be sure all animations are done
            setTimeout(menuScrollbarVisibility, 200);
        });

        $(document).on('scroll', function(e){
            var scrolled = $(document).scrollTop();

            $('#menu-content a.menu-link').each(function(){
                var section = $(this.hash);
                var lastSection = $('#content > section:last-of-type');

                if (section.length == 1) {
                    if (Math.ceil(scrolled) >= Math.floor($('body').height() - lastSection.outerHeight()) ) {
                        $('#menu-content ul.menu li').removeClass('active');
                        $('#menu-content ul.menu li:last-of-type').addClass('active');

                        return false;
                    } else if( (section.offset().top + section.outerHeight()) > scrolled){
                        $('#menu-content ul.menu li').removeClass('active');
                        $(this).parent().addClass('active');

                        return false;
                    }
                }
            });
        });

        $('.menu-toggle').on('click', function(){
            $('#menu-content').toggleClass('active');
        });

        $('#content').on('click', function(e){
            if ($('#menu-content').hasClass('active')) {
                e.preventDefault();

                $('#sidebar-checkbox-toggle').prop('checked', null);
                $('#menu-content').removeClass('active')
            }
        });

        $('a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            var target = this.hash,

            $target = $(target);

            $('html,body').animate({
                'scrollTop': $target.offset().top
            }, 'fast', function(){
                $('#sidebar-checkbox-toggle').prop('checked', null);
                $('#menu-content').removeClass('active');
            });

        });

        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 200,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 2,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.2,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 1.5,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": true,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "retina_detect": true
        });

        /*
        Easteregg
        var keyCodes = [], code = "66,85,78,68,83,71,65,65,82,68"; //bundsgaard - So you don't have to look up an ASCII table ;)
        $(document).keydown(function(e) {
            keyCodes.push( e.keyCode );

            if (keyCodes.toString().indexOf(code) >= 0){
                keyCodes = [];
                //$(document).unbind('keydown',arguments.callee);

                $('#app').addClass('easter-active');
            }
        });*/


        function menuScrollbarVisibility(){
            var maxHeight = $('#menu-content').outerHeight();
            var menuHeight = $('#menu-content .menu').prop('scrollHeight') + 50;

            if (menuHeight > maxHeight) {
                $('#menu-content .menu').addClass('scrollbar');
            } else {
                $('#menu-content .menu').removeClass('scrollbar');
            }
        }
    });
})(jQuery);


console.log('👋👋👋👋👋👋👋👋👋👋👋👋👋👋👋👋👋');
console.log('Nysgerrig?');
console.log('Skriv til mig på rasmus@it-lease.dk');
console.log('--');
console.log('Ver: 1.0.0');
console.log('Dependencies: jQuery, FontAwesome 5, Bootstrap 4, Particles.js, Google Fonts');
