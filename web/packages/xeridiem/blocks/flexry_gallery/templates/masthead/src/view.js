(function( $ ){

    function MastheadSlider( $selector, _configs ){

        var $nodes      = $('.node', $selector),
            $arrows     = $('.arrow', $selector),
            $markers    = $('.markers', $selector),
            _settings   = $.extend({}, {
                autoPlay:       false,
                autoPlaySpeed:  3500,
                pauseMouseOver: true
            }, _configs);

        function currentIndex(){
            return $nodes.filter('.active').index();;
        }

        function activateByIndex( indexTo ){
            $nodes.filter('.active').removeClass('active');
            $nodes.filter(':eq('+indexTo+')').addClass('active');
            $('.fa-circle', $markers).removeClass('fa-circle');
            $('.marker', $markers).filter(':eq('+indexTo+')').find('i').addClass('fa-circle');
        }

        function previous(){
            var _index = currentIndex();
            activateByIndex( (_index == 0) ? $nodes.length-1 : _index - 1 );
        }

        function next(){
            var _index = currentIndex();
            activateByIndex( (_index == $nodes.length-1) ? 0 : _index + 1 );
        }

        /**
         * Arrow handler
         */
        $arrows.on('click', function(){
            if( $(this).hasClass('arrow-left') ){
                previous();
            }else{
                next();
            }
        });

        /**
         * Marker indicators handler
         */
        $('.marker', $markers).on('click', function(){
            activateByIndex( $(this).index() );
        });

        /**
         * Autoplay?
         */
        if( _settings.autoPlay ){
            var _hovered = false;

            /**
             * Iterator
             */
            (function _loop( _time ){
                setTimeout(function(){
                    if( _settings.pauseMouseOver ){
                        if( !_hovered ){
                            next();
                        }
                    }else{
                        next();
                    }
                    _loop(_time);
                }, _time);
            })(_settings.autoPlaySpeed);

            /**
             * Pause on mouseover handlers
             */
            $selector
                .on('mouseenter', function(){ _hovered = true; })
                .on('mouseleave', function(){ _hovered = false; });
        }
    }

    $.fn.mastheadSlider = function( _settings ){
        return this.each(function(idx, _element){
            var $selector = $(_element);
            if( ! ($selector.data('mastheadSlider')) ){
                $selector.data('mastheadSlider', new MastheadSlider($selector, _settings));
            }
        });
    };

})( jQuery );