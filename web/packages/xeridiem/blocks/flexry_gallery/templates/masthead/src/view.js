(function( $ ){

    function MastheadSlider( $selector, _settings ){

        var $nodes   = $('.node', $selector),
            $arrows  = $('.arrow', $selector),
            $markers = $('.markers', $selector);

        function activateByIndex( indexTo ){
            $nodes.filter('.active').removeClass('active');
            $nodes.filter(':eq('+indexTo+')').addClass('active');
            $('.fa-circle', $markers).removeClass('fa-circle');
            $('.marker', $markers).filter(':eq('+indexTo+')').find('i').addClass('fa-circle');
        }

        $arrows.on('click', function(){
            var indexActive = $nodes.filter('.active').index();
            if( $(this).hasClass('arrow-left') ){
                activateByIndex( (indexActive == 0) ? $nodes.length-1 : indexActive - 1 );
            }else{
                activateByIndex( (indexActive == $nodes.length-1) ? 0 : indexActive + 1 );
            }
        });

        $('.marker', $markers).on('click', function(){
            activateByIndex( $(this).index() );
        });
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