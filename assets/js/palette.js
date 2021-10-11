"use strict";
/* Start Palette */
/*
 * Colorpicker http://mjolnic.com/bootstrap-colorpicker/
 * 
 * 
 */

function palette_init() {
    /* ini  colorpicker */
    
    var _head = $('head');
    var _body= $('body');
    var _colorPrimary = $('#color-primary');
    var _colorSecondary = $('#color-secondary');
    var _colorBackground = $('#color-background');
    var _colorBackground = $('#color-background');
    var _colorTitles = $('#color-titles');
    var _colorSubTitles = $('#color-subtitles');
    var _colorTitlesPrimary = $('#color-titles-primary');
    var _colorTitlesSecondary = $('#color-titles-secondary');
    var _colorContent = $('#color-content');
    var _colorPrimary_class = $('.color-primary');
    var _bColorPrimary_class = $('.border-color-primary');
    var _ColorTopBarBg = $('#color-top-bar-bg');
    var _colorPrimaryBtn = $('#color-primary-btn');
    var _colorPrimaryBtnhover= $('#color-primary-btnhover');
    var _ColorTopBarBg = $('#color-top-bar-bg');
    
    _colorPrimary.colorpicker();
    if (_colorPrimary_class.css('background-color')) {
        _colorPrimary.colorpicker('setValue', _colorPrimary_class.css('background-color'));
    } else {
        _colorPrimary.colorpicker('setValue', '#da3743');
    }

    _colorSecondary.colorpicker();
    if ($('.color-secondary').css('background-color')) {
        _colorSecondary.colorpicker('setValue', $('.color-secondary').css('background-color'));
    } else {
        _colorSecondary.colorpicker('setValue', 'rgb(0,137,195)');
    }

    _colorBackground.colorpicker();
    _colorBackground.colorpicker('setValue', '#F8F8F8');
    
    _colorTitles.colorpicker();
    _colorTitles.colorpicker('setValue', '#252525');
    _colorSubTitles.colorpicker();
    _colorSubTitles.colorpicker('setValue', '#7b7b7b');
    _colorTitlesPrimary.colorpicker();
    _colorTitlesPrimary.colorpicker('setValue', '#4285f4');
    _colorTitlesSecondary.colorpicker();
    _colorTitlesSecondary.colorpicker('setValue', '#252525');
    _colorContent.colorpicker();
    _colorContent.colorpicker('setValue', '#353535');
    _ColorTopBarBg.colorpicker();
    _ColorTopBarBg.colorpicker('setValue', '#DA3743');
    
    _colorPrimaryBtn.colorpicker();
    _colorPrimaryBtn.colorpicker('setValue', '#DA3743');
    _colorPrimaryBtnhover.colorpicker();
    _colorPrimaryBtnhover.colorpicker('setValue', '#C5434D');
    
    /* end ini  colorpicker */

    // close and open palette panel
    $('.custom-palette-btn').on('click', function () {
        $('.custom-palette').toggleClass('palette-closed');
    })

    // change primary color
    _colorPrimary.colorpicker().on('changeColor.colorpicker', function (event) {
        var color = event.color.toString();

        _colorPrimary_class.css('cssText', 'background-color: ' + color + ' !important');
        _bColorPrimary_class.css('cssText', 'border-color: ' + color + ' !important');
        $('.text-color-primary').css('cssText', 'color: ' + color + ' !important');

        var style = '';
        style += '  .owl-dots-local .owl-theme .owl-dots .owl-dot:hover span,\n\
                    .affix-menu.affix.top-bar .default-menu .dropdown-menu>li.dropdown-submenu:hover > a, .affix-menu.affix.top-bar .default-menu .dropdown-menu>li>a:hover,\n\
                    .infobox-big .title,\n\
                    .cluster div:after,\n\
                    .google_marker:before,\n\
                    .owl-carousel-items.owl-theme .owl-dots .owl-dot.active span,\n\
                    .owl-carousel-items.owl-theme .owl-dots .owl-dot:hover span,\n\
                    .hidden-subtitle,\n\
                    .btn-marker:hover .box,\n\
                    .affix-menu.affix.top-bar .default-menu .dropdown-menu>li>a:hover, .affix-menu.affix.top-bar .default-menu .dropdown-menu>li.active>a, .affix-menu.affix.top-bar .default-menu .dropdown-menu>li.dropdown.dropdown-submenu:hover > a,\n\
                    .owl-nav-local  .owl-theme .owl-nav [class*="owl-"]:hover,\n\
                    .color-mask:after,\n\
                    .owl-dots-local .owl-theme .owl-dots .owl-dot.active span{\n\
                        background-color: ' + color + ';\n\
                     }';
        
        style += ' @media (min-width: 768px){.top-bar.t-overflow:not(.affix) .default-menu .dropdown-menu>li>a:hover{\n\
                        color: ' + color + ' !important;\n\
                     }}';

        style += '.caption .date i,\n\
                    .invoice-intro.invoice-logo a,\n\
                    .commten-box .title a:hover,\n\
                    .commten-box .action a:hover,\n\
                    .author-card .name_surname a:hover,\n\
                    p.note:before,\n\
                    .location-box .location-box-content .title a:hover,\n\
                    .list-navigation li.return a,\n\
                    .filters .picker .pc-select .pc-list li:hover,\n\
                    .mark-c,\n\
                    .pagination>li a:hover, .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover,\n\
                    .infobox .content .title a:hover,\n\
                    .thumbnail.thumbnail-type .caption .title a:hover,\n\
                    .thumbnail.thumbnail-video .thumbnail-title a:hover,\n\
                    .card.card-category:hover .badget.b-icon i,\n\
                    .btn-marker:hover .title,\n\
                    .btn-marker .box,\n\
                    .thumbnail.thumbnail-property .thumbnail-title a:hover,\n\
                    .rating-action,\n\
                    .bootstrap-select  .dropdown-menu > li > a:hover .glyphicon,\n\
                    .grid-tile a:hover .title,\n\
                    .grid-tile .preview i,\n\
                    .lang-manu:hover .caret,  \n\
                    .lang-manu .dropdown-menu > li > a:hover,  \n\
                    .lang-manu.open .caret,  \n\
                    .top-bar .nav-items li.open>a >span, .top-bar .nav-items li> a:hover >span,\n\
                    .top-bar.t-overflow:not(.affix) .default-menu .dropdown-menu > li.active > a, .top-bar.t-overflow:not(.affix) .default-menu .dropdown-menu > li.active > a,\n\
                    .top-bar.t-overflow:not(.affix) .default-menu .dropdown-menu>li.active>a:hover,\n\
                    .top-bar.t-overflow:not(.affix) .default-menu .dropdown-menu>li>a:hover,\n\
                    body:not(.navigation-open) .top-bar.t-overflow:not(.affix) .default-menu .dropdown-menu > li.dropdown.dropdown-submenu.open > a, body:not(.navigation-open) .top-bar.t-overflow:not(.affix) .default-menu .dropdown-menu > li.dropdown.dropdown-submenu:hover > a,\n\
                    .top-bar .logo a, \n\
                    .default-menu .dropdown-menu>li.active>a, .default-menu .dropdown-menu>li>a:hover   \n\
                    {\n\
                    color: ' + color + ';\n\
                 }';

        style += '  .pagination>li a:hover, .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover,\n\
                    .infoBox > img, \n\
                    .infobox-big, \n\
                    .infobox:before,\n\
                    .infobox-big:before,\n\
                    .infobox{\n\
                    border-color: ' + color + ';\n\
                }';
        
        style += '.top-bar.t-overflow:not(.affix) .default-menu .dropdown-menu > li.active > a, .top-bar.t-overflow:not(.affix) .default-menu .dropdown-menu > li.active > a, \n\
                    [class*="icon-star-ratings"]:after{\n\
                    color: ' + color + ' !important;\n\
                 }';
        
        
        style += '.primary-color{\n\
                    background-color: ' + color + ';\n\
                 }';
        
        style += '.primary-text-color, .primary-link:hover {\n\
                    color: ' + color + ';\n\
                 }';
        
        var geomap = $('#geo-map');
        if (geomap && geomap.length) {
            geomap.geo_map('set_config',{
                   'color_hover': color,
                   'color_active': color
               })
        }
        
        if ($('#palette-styles-pr').length) {
            _head.find('#palette-styles-pr').html(style);
        } else {
            _head.append('<style id="palette-styles-pr">' + style + '</style>');
        }
    });

    // change secondary color
    _colorSecondary.colorpicker().on('changeColor.colorpicker', function (event) {
        var color = event.color.toString();
        var style = '';
        style += '  \n\
                    .btn-custom-primary {\n\
                        background: ' + color + ';\n\
                     }';
        style += ' .top-bar .nav-items > li> a.btn.btn-custom-primary, \n\
                    .btn-custom-primary \n\
                    {\n\
                       border-color: ' + color + ';\n\
                    }';
        style += ' .top-bar .nav-items > li> a.btn.btn-custom-primary:hover\n\
                    {\n\
                       color: ' + color + ';\n\
                    }';
        
        if ($('#palette-styles-colorSecondary').length) {
            _head.find('#palette-styles-colorSecondary').html(style);
        } else {
            _head.append('<style id="palette-styles-colorSecondary">' + style + '</style>');
        }
        
        
        $('.color-secondary').css('cssText', 'background-color: ' + color + ' !important');
        $('.border-color-secondary').css('cssText', 'border-color: ' + color + ' !important');
        $('.text-color-secondary').css('cssText', 'color: ' + color + ' !important');
    });

    // change _colorTitles color
    _colorPrimaryBtnhover.colorpicker().on('changeColor.colorpicker', function (event) {
        var color = event.color.toString();
        var style = '';
        style += '  \n\
                    .search-tabs li.active .btn-special-primary:hover,\n\
                    .btn-special-primary.fill:hover,\n\
                    .btn-custom-secondary:hover {\n\
                        background: ' + color + ';\n\
                     }';
        style += ' .search-tabs li.active .btn-special-primary:hove, .btn-special-primary.fill:hover \n\
             {\n\
                border-color: ' + color + ';\n\
             }';
        
        if ($('#palette-styles-colorPrBtnhover').length) {
            _head.find('#palette-styles-colorPrBtnhover').html(style);
        } else {
            _head.append('<style id="palette-styles-colorPrBtnhover">' + style + '</style>');
        }
    });
    
    // change _colorTitles color
    _colorPrimaryBtn.colorpicker().on('changeColor.colorpicker', function (event) {
        var color = event.color.toString();
        var style = '';
        style += '  .btn-special-primary:hover,.search-tabs li.active .btn-special-primary, .search-tabs li.active .btn-special-primary:hover, .btn-special-primary.fill, .btn-custom-secondary {\n\
                        background: ' + color + ';\n\
                     }';
        
        style += '  .btn-special-primary \n\
                     {\n\
                        color: ' + color + ';\n\
                     }';
        
        style += '  .btn-special-primary:hover,.search-tabs li.active .btn-special-primary,.search-tabs li.active .btn-special-primary:hover, .btn-special-primary.fill, .btn-special-primary \n\
                     {\n\
                        border-color: ' + color + ';\n\
                     }';
        
        if ($('#palette-styles-colorPrBtn').length) {
            _head.find('#palette-styles-colorPrBtn').html(style);
        } else {
            _head.append('<style id="palette-styles-colorPrBtn">' + style + '</style>');
        }
    });
    
    // change _colorTitles color
    _colorTitles.colorpicker().on('changeColor.colorpicker', function (event) {
        var color = event.color.toString();
        var style = '';
        style += '  .post-comments .post-comments-title,.reply-box .reply-title,.post-header .post-title .title,.widget-listing-title .options .options-body .title,\n\
                    .widget-styles .caption-title h2, .widget-styles .caption-title, .widget .widget-title, .widget-styles .header h2, .widget-styles .header,\n\
                    .header .title-location .location,.user-card .body .name,.section-title .title {\n\
                        color: ' + color + ';\n\
                     }';
        if ($('#palette-styles-colorTitles').length) {
            _head.find('#palette-styles-colorTitles').html(style);
        } else {
            _head.append('<style id="palette-styles-colorTitles">' + style + '</style>');
        }
    });
    
    // change _colorTitles color
    _ColorTopBarBg.colorpicker().on('changeColor.colorpicker', function (event) {
        var color = event.color.toString();
        var style = '';
        style += '  .top-bar.top-bar-color {\n\
                        background: ' + color + ';\n\
                     }';
        
        if ($('#palette-styles-colortopBar').length) {
            _head.find('#palette-styles-colortopBar').html(style);
        } else {
            _head.append('<style id="palette-styles-colortopBar">' + style + '</style>');
        }
    });

    // change _colorSubTitles color
    _colorSubTitles.colorpicker().on('changeColor.colorpicker', function (event) {
        var color = event.color.toString();
        var style = '';
        style += '  .thumbnail.thumbnail-video .type,.caption .date,.thumbnail.thumbnail-property-list .header .right .address,.thumbnail.thumbnail-property .type,\n\
                    .post-header .post-title .subtitle,.header .title-location .count,.section-title .subtitle {\n\
                        color: ' + color + ';\n\
                     }';
        if ($('#palette-styles-colorSubTitles').length) {
            _head.find('#palette-styles-colorSubTitles').html(style);
        } else {
            _head.append('<style id="palette-styles-colorSubTitles">' + style + '</style>');
        }
    });

    // change colorTitlesPrimary color
    _colorTitlesPrimary.colorpicker().on('changeColor.colorpicker', function (event) {
        var color = event.color.toString();
        var style = '';
        style += '  .post-social .hash-tags a,.user-card .body .contact .link,.thumbnail.thumbnail-property .thumbnail-title a {\n\
                        color: ' + color + ';\n\
                     }';
        if ($('#palette-styles-colorTitlesPrimary').length) {
            _head.find('#palette-styles-colorTitlesPrimary').html(style);
        } else {
            _head.append('<style id="palette-styles-colorTitlesPrimary">' + style + '</style>');
        }
    });

    // change _colorTitlesSecondary color
    _colorTitlesSecondary.colorpicker().on('changeColor.colorpicker', function (event) {
        var color = event.color.toString();
        var style = '';
        style += '  .caption.caption-blog .thumbnail-title a,.list-category-item .title, .list-category-item .title a,.grid-tile .title,.btn-marker .title,.commten-box .title a,\n\
                    .thumbnail.thumbnail-type .caption .title, .thumbnail.thumbnail-type .caption .title a, .author-card .name_surname a {\n\
                        color: ' + color + ';\n\
                     }';
        if ($('#palette-styles-colorTitlesSecondary').length) {
            _head.find('#palette-styles-colorTitlesSecondary').html(style);
        } else {
            _head.append('<style id="palette-styles-colorTitlesSecondary">' + style + '</style>');
        }
    });

    // change _colorContent color
    _colorContent.colorpicker().on('changeColor.colorpicker', function (event) {
        var color = event.color.toString();
        var style = '';
        style += '  .thumbnail .caption,.thumbnail.thumbnail-type .caption .description,.author-card .author-body, \n\
                    body,.author-card .author-body,.post-body,.thumbnail.thumbnail-type .caption .description {\n\
                        color: ' + color + ';\n\
                     }';
        if ($('#palette-styles-colorContent').length) {
            _head.find('#palette-styles-colorContent').html(style);
        } else {
            _head.append('<style id="palette-styles-colorContent">' + style + '</style>');
        }
    });
    
    // change font-family  color
    $('#font-family select').on('change', function (e) {
        var style = '';
        style += '  body {\n\
                        font-family: "' + $(this).val() + '";\n\
                     }';
        if ($('#palette-styles-font-family').length) {
            _head.find('#palette-styles-font-family').html(style);
        } else {
            _head.append('<style id="palette-styles-font-family">' + style + '</style>');
        }
    });
    
    //font-size
    $('#font-size select').on('change', function (e) {
        var c = 0;
        switch ($(this).val()) {
                case '+1': c = 2;
                         break;
                case '+2': c = 4;
                         break;
                case '+3': c = 5;
                         break;
                case '-1': c = -2;
                         break;
                case '-2': c = -2;
                         break;
                case '-3': c = -3;
                         break;

                default:
                        break;
            }
        var style = '';
        
        style += '  .owl-slider-content .item .title  {\n\
                        font-size: ' + (40+c) + 'px;\n\
                     }';
        
        style += '  .widget-geomap .geomap-title,.h-area .title  {\n\
                         font-size: ' + (36+c) + 'px;\n\
                     }';
        
        style += '  .widget-listing-title .options .options-body .title,.section-title .title  {\n\
                         font-size: ' + (32+c) + 'px;\n\
                     }';
        
        style += '  .footer .logo a,.top-bar .logo a  {\n\
                         font-size: ' + (30+c) + 'px;\n\
                     }';
        
        style += '  .h3, h3 {\n\
                         font-size: ' + (24+c) + 'px;\n\
                     }';
        
        style += '  .section-profile-box .content .title,.section.widget-recentproperties .header .title-location .location,.section-title.slim .title,.caption.caption-blog .thumbnail-title a {\n\
                         font-size: ' + (20+c) + 'px;\n\
                     }';
        
        style += '  .agent-box .title a, .thumbnail.thumbnail-offers .thumbnail-title a, .card.card-pricing .title, .list-category-item .title, .list-category-item .title a, .thumbnail.thumbnail-type .caption .title, .thumbnail.thumbnail-type .caption .title a, .owl-slider-content .item .subtitle, .thumbnail.thumbnail-property .thumbnail-title a, .thumbnail.thumbnail-type .caption .title, .thumbnail.thumbnail-type .caption .title a, .owl-slider-content .item .subtitle, .thumbnail.thumbnail-property .thumbnail-title a,\n\
                    .thumbnail.thumbnail-offers .thumbnail-title a, .card.card-pricing .title, .list-category-item .title, .list-category-item .title a,\n\
                    .thumbnail.thumbnail-type .caption .title, .thumbnail.thumbnail-type .caption .title a, .owl-slider-content .item .subtitle, .thumbnail.thumbnail-property .thumbnail-title a,\n\
                    .thumbnail.thumbnail-type .caption .title, .thumbnail.thumbnail-type .caption .title a, .owl-slider-content .item .subtitle, .thumbnail.thumbnail-property .thumbnail-title a {\n\
                         font-size: ' + (18+c) + 'px;\n\
                     }';
        
        style += '  .section-profile-box .content .options,.grid-tile .title,.h-area .subtitle,.f-box .title,.user-card .body .name,.section-title .subtitle {\n\
                         font-size: ' + (16+c) + 'px;\n\
                     }';
        
        style += '  .btn-custom,.header .title-location .location,.thumbnail.thumbnail-property-list .header .right .address {\n\
                         font-size: ' + (15+c) + 'px;\n\
                     }';
        
        style += '  .list-navigation li,.btn,body,.top-bar .nav-items li  {\n\
                         font-size: ' + (14+c) + 'px;\n\
                     }';
        
        style += '  .card.card-pricing .price-box .notice,.list-suggestions li,.thumbnail.thumbnail-property-list .list-comment p,.thumbnail.thumbnail-type .caption .description,.thumbnail.thumbnail-video .type,\n\
                    .section-search-area .tags ul li,.f-box .list-f a,.caption .date,.btn-marker .title,.thumbnail.thumbnail-property .typ {\n\
                         font-size: ' + (13+c) + 'px;\n\
                     }';
        
        if ($('#palette-styles-font-size').length) {
            _head.find('#palette-styles-font-size').html(style);
        } else {
            _head.append('<style id="palette-styles-font-size">' + style + '</style>');
        }
    });

    // chose prepared color
    $('#palette-colors-prepared a').on('click', function (e) {
        e.preventDefault();
        var backgroundtopbar = '';
        backgroundtopbar = $(this).closest('li').attr('data-backgroundtopbar');
        if (backgroundtopbar)
            _ColorTopBarBg.colorpicker('setValue', backgroundtopbar);
        
        var primary = '';
        primary = $(this).closest('li').attr('data-primary-color');
        if (primary)
            _colorPrimary.colorpicker('setValue', primary);

        var secondary = '';
        secondary = $(this).closest('li').attr('data-secondary-color');
        if (secondary)
            _colorSecondary.colorpicker('setValue', secondary);
        
        var btnprimary = '';
        btnprimary = $(this).closest('li').attr('data-btnprimary');
        if (btnprimary)
            _colorPrimaryBtn.colorpicker('setValue', btnprimary);

        var btnprimaryhover = '';
        btnprimaryhover = $(this).closest('li').attr('data-btnprimaryhover');
        if (btnprimaryhover)
            _colorPrimaryBtnhover.colorpicker('setValue', btnprimaryhover);

        var titlescolor = '';
        titlescolor = $(this).closest('li').attr('data-titlescolor');
        if (titlescolor)
            _colorTitles.colorpicker('setValue', titlescolor);

        var subtitlescolor = '';
        subtitlescolor = $(this).closest('li').attr('data-subtitlescolor');
        if (subtitlescolor)
            _colorSubTitles.colorpicker('setValue', subtitlescolor);

        var titlesprimary = '';
        titlesprimary = $(this).closest('li').attr('data-titlesprimary');
        if (titlesprimary)
            _colorTitlesPrimary.colorpicker('setValue', titlesprimary);

        var titlesecondary = '';
        titlesecondary = $(this).closest('li').attr('data-titlesecondary');
        if (titlesecondary)
            _colorTitlesSecondary.colorpicker('setValue', titlesecondary);

        var contentcolor = '';
        contentcolor = $(this).closest('li').attr('data-contentcolor');
        if (contentcolor)
            _colorContent.colorpicker('setValue', contentcolor);
    })

    // change background color
    _colorBackground.colorpicker().on('changeColor.colorpicker', function (event) {
        _body.removeClass('bg-image');
        var color = event.color.toString();
        _body.css('background', color);
    });

    // choose preperad bg-color boxed
    $('#palette-backgroundimage-prepared a').on('click', function (e) {
        e.preventDefault();
        var bg;
        var style;
        bg = $(this).closest('li').attr('data-backgroundimage') || '';
        style = $(this).closest('li').attr('data-backgroundimage-style') || '';

        $('#palette-backgroundimage-prepared a').removeClass('active');
        $(this).addClass('active');
        _body.addClass('bg-image');

        if (bg && style) {
            if (style == 'fixed') {
                _body.css('background', 'url(' + bg + ') no-repeat fixed');
                _body.css('background-size', 'cover');
            } else if (style == 'repeat') {
                _body.css('background', 'url(' + bg + ') repeat');
                _body.css('background-size', 'inherit');
            } else {
                _body.css('background', 'url(' + bg + ') no-repeat fixed');
            }
        } else if (bg) {
            _body.css('background', 'url(' + bg + ') no-repeat fixed');
        }
    })

    //type-site (full-width, wide)
    $('.custom-palette-box input[name="type-site"]').on('change',function (e) {
        e.preventDefault();
        _body.removeClass('full-width')
                .removeClass('boxed');
        _body.addClass($('.custom-palette-box input[name="type-site"]:checked').val());

        var _m = $('.widget-topmap');
        if ($(window).width() > 768 ){
            var _w;
            if($('body').hasClass('boxed')){
                _w = $('main.container .row-fluid .right-b.box').outerWidth();
            } else {
                _w = $('main.container .row-fluid .right-b.box').outerWidth()+(($(window).width() - $('main.container').outerWidth())/2)+15;
            }

            if(_w)
                _m.find('.flex .flex-right').attr('style','width: '+_w+'px;min-width:'+_w+'px');
        } else {
            _m.find('.flex .flex-right').attr('style','');
        }
        
        $(window).trigger('resize')
    })
    
    // top-bar type
    if($('.top-bar.top-bar-color').length) {
        $('.custom-palette-box #topbar-version select').val('color');
        $('.custom-palette-box #topbar-version select').selectpicker('refresh');
        $('#color-top-bar-bg').closest('.custom-palette-color').removeClass('hidden')
    }
    var defaultTopbarBg_classes ='';
    if($('.top-bar').length) {
        var defaultTopbarBg_classes = $('.top-bar').attr('class');
    }
    
    $('.custom-palette-box #topbar-version select').on('change', function (e) {
        $(this).val();
    
            switch ($(this).val()) {
                case 'white': $('.top-bar').removeClass('t-overflow')
                                           .removeClass('overflow')
                                           .removeClass('top-bar-white')
                                           .removeClass('top-bar-white')
                                           .removeClass('top-bar-color');
                              $('#color-top-bar-bg').closest('.custom-palette-color').addClass('hidden')
                                   
                         break;
                case 'color': $('.top-bar').removeClass('t-overflow')
                                           .removeClass('overflow')
                                           .addClass('top-bar-white')
                                           .addClass('top-bar-color');
                              $('#color-top-bar-bg').closest('.custom-palette-color').removeClass('hidden')
                         break;
                default:
                            $('.top-bar').attr('class', defaultTopbarBg_classes);
                            $('#color-top-bar-bg').closest('.custom-palette-color').addClass('hidden')
                        break;
            }
            
            $(window).trigger('resize');
    })

    //reset 
    $('#pallete-reset').on('click', function (e) {
        e.preventDefault();
        
    _body.attr('class', '');
    var type = $('input[name="type-site"]').last().val();
    _body.attr('class', type);

    _body.attr('style', '');
        
    _colorPrimary.colorpicker('setValue', '#da3743');
    _colorSecondary.colorpicker('setValue', 'rgb(0,137,195)');
    _colorBackground.colorpicker('setValue', '#F8F8F8');
    _colorTitles.colorpicker('setValue', '#252525');
    _colorSubTitles.colorpicker('setValue', '#7b7b7b');
    _colorTitlesPrimary.colorpicker('setValue', '#4285f4');
    _colorTitlesSecondary.colorpicker('setValue', '#252525');
    _colorContent.colorpicker('setValue', '#353535');
    _colorPrimaryBtn.colorpicker('setValue', '#DA3743');
    _colorPrimaryBtnhover.colorpicker('setValue', '#C5434D');
    
    $('#palette-backgroundimage-prepared a').removeClass('active');

    $('.custom-palette-box input[name="type-site"]').removeAttr('checked')
    $('.custom-palette-box input[name="type-site"][value=""]').attr('checked', 'checked');

    _body.css('background', 'white')
         .css('background-size', 'cover');
        
        $('#palette-styles-font-size,#palette-styles-font-size, #palette-styles-font-family,#palette-styles-colorContent,#palette-styles-colorTitlesSecondary,palette-styles-colorTitlesPrimary, #palette-styles-colorSubTitles, #palette-styles-colorTitles').remove()
   
    $('.top-bar').attr('class', defaultTopbarBg_classes);

    })
    
        
    if($('#palette-colors-prepared a.active').length) {
        $('#palette-colors-prepared a.active').trigger('click');
    }

    /* End Palette */

    /* Guid */
    _body.append(
            '<div id="load_popup_modal_show_id" class="modal fade" tabindex="-1">\n\
                <div id="load_popup_modal_contant" class="" role="dialog">\n\
                    <div class="modal-dialog modal-md">\n\
                            <div class="modal-content">\n\
                                    <div class="modal-header">\n\
                                            <button type="button" class="close" data-dismiss="modal">×</button>\n\
                                            <h4 class="modal-title">Guide Customizer</h4>\n\
                                    </div>\n\
                                    <div id="validation-error"></div>\n\
                                    <div class="cl"></div>\n\
                                    <div class="modal-body">\n\
                                            <span class="alert alert-info"> 1. Save new styles into "assets/css/custom.css" ( old styles from custom.css should be removed) </span>\n\
                                            <pre class="styles">\n\
                                            </pre>\n\
                                            <br/>\n\
                                            <span class="alert alert-info">2. Apply boxed or default version, in "assets/js/custom.js" add changed </span>\n\
                                            <img src="assets/img/guide_custom_template/boxed.jpg" alt="" />\n\
                                            <br/>\n\
                                            <span class="alert alert-info">3. Hide Customizer, in file "assets/js/custom.js"</span>\n\
                                            changed\n\
                                            <span class="alert alert-warning">var hide_palette = false;</span>\n\
                                            to \n\
                                            <span class="alert alert-warning">var hide_palette = true;</span>\n\
                                            <br>\n\
                                    </div>\n\
                                    <div class="modal-footer">\n\
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>\n\
                                    </div>\n\
                            </div>\n\
                    </div>\n\
                </div>\n\
            </div>');

    $('#pallete-save').on('click',
            function (e) {
                e.preventDefault();
                var $modal = $('#load_popup_modal_show_id');

                /* primary_color */
                var primary_color = $('#color-primary input').val();
                var styles = '';
                var style = '';

      style += '.owl-dots-local .owl-theme .owl-dots .owl-dot:hover span,\n\
                .affix-menu.affix.top-bar .default-menu .dropdown-menu>li.dropdown-submenu:hover > a, .affix-menu.affix.top-bar .default-menu .dropdown-menu>li>a:hover,\n\
                .infobox-big .title,\n\
                .cluster div:after,\n\
                .google_marker:before,\n\
                .owl-carousel-items.owl-theme .owl-dots .owl-dot.active span,\n\
                .owl-carousel-items.owl-theme .owl-dots .owl-dot:hover span,\n\
                .hidden-subtitle,\n\
                .btn-marker:hover .box,\n\
                .top-bar .default-menu .dropdown-menu>li>a:hover, .top-bar .default-menu .dropdown-menu>li.active>a, .top-bar .default-menu .dropdown-menu>li.dropdown.dropdown-submenu:hover > a,\n\
                .owl-nav-local  .owl-theme .owl-nav [class*="owl-"]:hover,\n\
                .owl-dots-local .owl-theme .owl-dots .owl-dot.active span{\n\
                    background-color: ' + primary_color + ';\n\
                 }\n\
                \n\
                ';
        style += ' @media (min-width: 768px){.top-bar.t-overflow:not(.affix) .default-menu .dropdown-menu>li>a:hover{\n\
                        color: ' + primary_color + ' !important;\n\
                     }}';
                styles += '.pagination>li a:hover, .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover,\n\
                    .infoBox > img, \n\
                    .infobox-big, \n\
                    .infobox:before,\n\
                    .infobox-big:before,\n\
                    .infobox {\n\
                    border-color: ' + primary_color + ' !important;\n\
                 }\n\
                \n\
                ';

                styles += '[class*="icon-star-ratings"]:after {\n\
                    color: ' + primary_color + ' !important;\n\
                 }\n\
                \n\
                 ';

                styles += '.primary-text-color, .primary-link:hover,.caption .date i,\n\
                    .invoice-intro.invoice-logo a,\n\
                    .commten-box .title a:hover,\n\
                    .commten-box .action a:hover,\n\
                    .author-card .name_surname a:hover,\n\
                    p.note:before,\n\
                    .location-box .location-box-content .title a:hover,\n\
                    .list-navigation li.return a,\n\
                    .mark-c,\n\
                    .filters .picker .pc-select .pc-list li:hover,\n\
                    .pagination>li a:hover, .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover,\n\
                    .infobox .content .title a:hover,\n\
                    .thumbnail.thumbnail-type .caption .title a:hover,\n\
                    .thumbnail.thumbnail-video .thumbnail-title a:hover,\n\
                    .card.card-category:hover .badget.b-icon i,\n\
                    .btn-marker:hover .title,\n\
                    .btn-marker .box,\n\
                    .bootstrap-select .dropdown-menu > li > a:hover .glyphicon,\n\
                    .grid-tile .preview i,\n\
                    .grid-tile a:hover .title,\n\
                    .thumbnail.thumbnail-property .thumbnail-title a:hover,\n\
                    .top-bar .logo a{\n\
                    color: ' + primary_color + ';\n\
                }\n\
                \n\
                ';
                styles += '#main-map-color .cluster div, .google_marker {\n\
                    border-color: ' + primary_color + ';\n\
                }';
                styles += '[class*="icon-star-ratings"]:after{\n\
                    color: ' + primary_color + ' !important;\n\
                 }\n\
                \n\
                ';
                styles += '.primary-color {\n\
                    background-color: ' + primary_color + ';\n\
                }\n\
                \n\
                ';


                /* secondary_color */
                var secondary_color = $('#color-secondary input').val();

                styles += '.color-secondary {\n\
                    background: ' + secondary_color + ' !important;\n\
                }\n\
                .border-color-secondary {\n\
                    border-color: ' + secondary_color + ' !important;\n\
                }\n\
                .text-color-secondary\n\
                    {color:' + secondary_color + ' !important;}\n\
                ';
                /* end secondary_color */

                /* _colorTitles */
                var _colorTitles = $('#color-titles').find('input').val();

                styles += '.post-comments .post-comments-title,.reply-box .reply-title,.post-header .post-title .title,.widget-listing-title .options .options-body .title,\n\
                    .widget-styles .caption-title h2, .widget-styles .caption-title, .widget .widget-title, .widget-styles .header h2, .widget-styles .header,\n\
                    .header .title-location .location,.user-card .body .name,.section-title .title {\n\
                        color: ' + _colorTitles + ';\n\
                     }\n\
                ';
                /* end _colorTitles */
                
                /* _colorSubTitles */
                var _colorSubTitles = $('#color-subtitles').find('input').val();

                styles += '.thumbnail.thumbnail-video .type,.caption .date,.thumbnail.thumbnail-property-list .header .right .address,.thumbnail.thumbnail-property .type,\n\
                    .post-header .post-title .subtitle,.header .title-location .count,.section-title .subtitle {\n\
                        color: ' + _colorSubTitles + ';\n\
                     }\n\
                ';
                /* end _colorSubTitles */
                
                /* _colorTitlesPrimary */
                var _colorTitlesPrimary = $('#color-titles-primary').find('input').val();

                styles += '.post-social .hash-tags a,.user-card .body .contact .link,.thumbnail.thumbnail-property .thumbnail-title a {\n\
                        color: ' + _colorTitlesPrimary + ';\n\
                     }\n\
                ';
                /* end _colorTitlesPrimary */
                
                /* _colorTitlesSecondary */
                var _colorTitlesSecondary =  $('#color-titles-secondary').find('input').val();

                styles += '.caption.caption-blog .thumbnail-title a,.list-category-item .title, .list-category-item .title a,.grid-tile .title,.btn-marker .title,.commten-box .title a,\n\
                    .thumbnail.thumbnail-type .caption .title, .thumbnail.thumbnail-type .caption .title a, .author-card .name_surname a {\n\
                        color: ' + _colorTitlesSecondary + ';\n\
                     }\n\
                ';
                /* end _colorTitlesSecondary */
                
                /* _colorContent */
                var _colorContent = $('#color-content').find('input').val();

                styles += '.thumbnail .caption,.thumbnail.thumbnail-type .caption .description,.author-card .author-body, \n\
                    body,.author-card .author-body,.post-body,.thumbnail.thumbnail-type .caption .description {\n\
                        color: ' + _colorContent + ';\n\
                     }\n\
                ';
                /* end _colorTitlesSecondary */
                
                /* _colorContent */
                var _colorPrimaryBtnhover = $('#color-primary-btnhover').find('input').val();

                styles += '.btn-custom-secondary:hover {\n\
                        background: ' + _colorPrimaryBtnhover + ';\n\
                     }\n\
                ';
                /* end _colorTitlesSecondary */
                
                /* _colorContent */
                var _colorPrimaryBtn = $('#color-primary-btn').find('input').val();

                styles += '.btn-custom-secondary {\n\
                        background: ' + _colorPrimaryBtn + ';\n\
                     }\n\
                ';
                /* end _colorTitlesSecondary */
                
                /* _font_family */
                var _font_family = $('#font-family select').val();

                styles += 'body {\n\
                        font-family: "' + _font_family + '";\n\
                     }\n\
                ';
                /* end _font_family */
                
                /* #font-size */
                if(_head.find('#palette-styles-font-size').length)
                    styles += _head.find('#palette-styles-font-size').html();
                /* end #font-size */

                /* bg_color */
                var bg_color = $('#color-background input').val();
                styles += 'body {\n\
                    background: ' + $("body").css("background") + ';\n\
                    background-size: ' + $("body").css("background-size") + ';\n\
                }\n\
                ';
                /* end bg_color */

                if (_body.hasClass('bg-image')) {
                    
                    
                        var bg;
                        var st;
                        bg = $('.palette-prepared-list-images a.active').closest('li').attr('data-backgroundimage') || '';
                        st = $('.palette-prepared-list-images a.active').closest('li').attr('data-backgroundimage-style') || '';
                        bg = bg.replace( /assets/i, ".." );;
                        $('#palette-backgroundimage-prepared a').removeClass('active');
                        $(this).addClass('active');
                        _body.addClass('bg-image');

                        if (bg && style) {
                            if (style == 'fixed') {
                                styles += 'body {\n\
                                        background:  url(' + bg + ') no-repeat fixed; \n\
                                        background-size: cover;\n\
                                    }';
                                
                            } else if (style == 'repeat') {
                                    styles += 'body {\n\
                                        background:  url(' + bg + ') repeat fixed; \n\
                                        background-size: inherit;\n\
                                    }';
                            } else {
                                  styles += 'body {\n\
                                        background:  url(' + bg + ') no-repeat fixed; \n\
                                    }';
                            }
                        } else if (bg) {
                            styles += 'body {\n\
                                        background:  url(' + bg + ') no-repeat fixed; \n\
                                    }';
                            _body.css('background', 'url(' + bg + ') no-repeat fixed');
                        }
                }

                $('#load_popup_modal_show_id .styles').html(styles);

                $modal.modal('show');
            });
            
}
/* End Guid */