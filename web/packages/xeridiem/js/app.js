(function(){

    var cmsToolbarVisible   = document.documentElement.classList.contains('cms-admin'),
        $parallaxBackdrops  = document.querySelectorAll('.parallax > .backdrop');

    if( ! cmsToolbarVisible ){
        console.log('Initializing Parallax');

        (function _draw( lastScrollLocation ){
            // Has scroll position changed?
            if( lastScrollLocation !== window.pageYOffset ){
                lastScrollLocation = window.pageYOffset;
                var scrollPercent = (window.pageYOffset / (document.body.clientHeight - window.innerHeight));
                for(var i = 0; i < $parallaxBackdrops.length; i++){
                    $parallaxBackdrops[i].style.top = '-' + (0.6 * scrollPercent) * 100 + '%';
                }
            }
            // Repeat the loop
            requestAnimationFrame(_draw.bind(null, lastScrollLocation));
        })( window.pageYOffset );
    }


})();