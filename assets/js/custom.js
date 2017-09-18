

/*=============================================================
    SOME JAVASCRIPT HERE... JQUERY IS USED
    ========================================================  */


(function ($) {
    "use strict";
    var mainApp = {

        main_fun: function () {
            /*====================================
              CUSTOM LINKS SCROLLING FUNCTION 
             ======================================*/

            $('.navbar a[href*=#]').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
               && location.hostname == this.hostname) {
                    var $target = $(this.hash);
                    $target = $target.length && $target
                    || $('[name=' + this.hash.slice(1) + ']');
                    if ($target.length) {
                        var targetOffset = $target.offset().top;
                        $('html,body')
                        .animate({ scrollTop: targetOffset }, 800); //set scroll speed here
                        return false;
                    }
                }
            });

       
            // CAROUSEL FUNCTION 

            $('.carousel').carousel({
                interval: 2000 //TIME IN MILLI SECONDS
            })

          
            /*====================================
               PLACE FOR OTHER SCRIPTS
               I WILL FILL IT LATER...
           ======================================*/


        },

        initialization: function () {
            mainApp.main_fun();

        }

    }
    // Initializing ///

    $(document).ready(function () {
        mainApp.main_fun();
    });

}(jQuery));



