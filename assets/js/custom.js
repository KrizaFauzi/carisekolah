"use strict";

function custom_template_style(){
    var boxed = false; // true to boxed version, false = deafault
    var hide_palette = false; // true to hide Customizer, false show
    var colorTopBar = false ; // true if color top bar
    if(boxed) {
        $('.custom-palette-box input[name="type-site"][value="boxed"]').attr('checked','checked');
        $('body').addClass('boxed');
    }
    
    if(colorTopBar) {
        $('.top-bar').removeClass('t-overflow')
                                   .removeClass('overflow')
                                   .addClass('top-bar-white')
                                   .addClass('top-bar-color');
        $('#color-top-bar-bg').closest('.custom-palette-color').removeClass('hidden')
    }

    if(hide_palette) {
        $('.custom-palette').css('cssText', 'display: none !important;');
    }

}