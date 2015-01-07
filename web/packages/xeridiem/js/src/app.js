/* global Modernizr */
/* global FastClick */
(function(){

    // Bind FastClick
    FastClick.attach(document.body);

    /** requestAnimationFrame shim - use native/prefixed first, backup to setTimeout */
    window.requestAnimFrame = Modernizr.prefixed('requestAnimationFrame', window) || function(callback){
        window.setTimeout(callback, 1000/ 60);
    };

        /** @var bool c5Toolbar Is the user logged in? */
    var c5Toolbar   = (document.documentElement.className.indexOf('cms-admin') !== -1),
        /** @var nodeList parallaxers Any parallax elements on the page */
        parallaxers = document.querySelectorAll('.parallax');

    /**
     * If any parallax elements are present on the page, and user is not
     * logged into the CMS, then init loop.
     */
    if( !c5Toolbar && parallaxers.length ){
        (function _draw( lastScroll ){
            if( lastScroll !== window.pageYOffset ){
                lastScroll = window.pageYOffset;
                var scrollPercent = 100 * (window.pageYOffset / (document.body.clientHeight - window.innerHeight));
                scrollPercent = (scrollPercent > 100) ? 100 : scrollPercent;
                for(var i = 0; i < parallaxers.length; i++){
                    parallaxers[i].style.backgroundPosition = '50% ' + scrollPercent + '%';
                }
            }
            window.requestAnimFrame(_draw.bind(null, lastScroll));
        })( window.pageYOffset );
    }

    // Content tabs (if applicable)
    $('button', '.content-tabs').on('click', function(){
        var $li = $(this).parent('li'),
            idx = $li.index();
        $('.node', '.content-tab-nodes').hide().filter(':eq('+idx+')').show();
    });

    // Navigation menu
    $('.nav-trigger', 'header').on('click', function(){
        $('nav').toggleClass('active');
    });

    // Google Translate widget display
    (function _try(){
        var trans = document.querySelector('#google_translate_element'),
            span  = trans.querySelector('.goog-te-menu-value span:first-child');
        if( span ){
            setTimeout(function(){
                if( span.innerText.indexOf('Select') !== -1 ){
                    span.innerText = 'English';
                }
                trans.style.display = 'block';
            }, 250);
        }else{
            setTimeout(_try, 250);
        }
    })();

})();