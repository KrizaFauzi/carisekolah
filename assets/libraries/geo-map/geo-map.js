"use strict";

/*
 * 
 * @param {type} $
 * @returns {undefined}
 * 
 * 

    bind:
    geomap.on('clickArea.geo_map', function (event) {
        return event.location
    })

 * 
 * 
 */


(function ($) {

    var self;
    var support_maps = {
        'usa': {
            'map_name': 'usa.svg'
        },
        'croatia': {
            'map_name': 'hr.svg'
        },
        'germany': {
            'map_name': 'de.svg'
        },
    }

    var settings;

    var methods = {
        init: function (options) {
            settings = $.extend({
                'color_hover': '#c5434d',
                'color_active': '#c5434d',
                'color_default': '#F9F9F9',
                'color_border': '#404040',
            }, options);
            return self;
        },

        generate_map: function (map) {
            self.trigger({
                type: 'clickArea',
                location: ''
            });
            if (typeof map === 'undefined') {
                console.log('Map "' + map + '" doesn`t exists');
                return false;
            }
            self = this;
            map = map.toLowerCase();
            if (support_maps[map]) {
                var html = '<object  data="assets/libraries/geo-map/svg_maps/' + support_maps[map].map_name + '" type="image/svg+xml" id="svgmap" width="500" height="360"></object> ';
                $(this).html(html)

                $('#svgmap').load(function () {
                    var svgobject = document.getElementById('svgmap');
                    if ('contentDocument' in svgobject) {
                        var svgdom = jQuery(svgobject.contentDocument);
                    }

                    /* start hint */
                    $('*[data-name]', svgdom).hover(function (e) {
                        var textHint = '';
                        $(this).css('cursor', 'pointer');
                        if ($(this).attr('data-name')) {
                            textHint = $(this).attr('data-name');
                        } else if ($(this).attr('title-hint')) {
                            textHint = $(this).attr('title-hint');
                        } else {
                            return false;
                        }

                        $('body').append('<div id="map-geo-tooltip">' + textHint + '</div>')

                        var mapCoord = document.getElementById("svgmap").getBoundingClientRect();
                        $(this).mouseover(function () {
                            $('#map-geo-tooltip').css({opacity: 0.8, display: "none"}).fadeIn(200);
                        }).mousemove(function (kmouse) {

                            $('#map-geo-tooltip').css({left: mapCoord.left + kmouse.pageX + 10, top: mapCoord.top + kmouse.pageY + 10});
                        });

                    }, function () {
                        $('#map-geo-tooltip').fadeOut(100).remove();
                    })
                    /* end hint */

                    /* colors */
                    $('*[data-name]', svgdom).not('.area').css('fill', settings.color_default);
                    $('*', svgdom).css('stroke', settings.color_border);

                    $('*[data-name]', svgdom).hover(function () {
                        $(this).css('fill', settings.color_hover);
                    }, function () {
                        if (!$(this).svgHasClass('active'))
                            $(this).css('fill', settings.color_default);
                    }
                    )
                    /* end colors */

                    /* action */
                    $('*[data-name]', svgdom).click(function (e) {
                        self.trigger({
                            type: 'clickArea',
                            location: $(this).attr('data-name')
                        });
                    })
                    /* action */

                    /* start selected area */
                    $('*[data-name]', svgdom).click(function () {

                        if ($(this).svgHasClass('active')) {
                            $('*[data-name]', svgdom).svgRemoveClass('active');
                            $('*[data-name]', svgdom).css('fill', settings.color_default);
                            self.trigger({
                                type: 'clickArea',
                                location: ''
                            });
                            return false;
                        }

                        $('*[data-name]', svgdom).svgRemoveClass('active');
                        $('*[data-name]', svgdom).css('fill', settings.color_default);
                        $(this).svgAddClass('active')
                                .css('fill', settings.color_active);
                        self.trigger({
                            type: 'clickArea',
                            location: $(this).attr('data-name')
                        });
                        return false;
                    })

                    /* end selected area */
                });
            } else {
                console.log('Map "' + map + '" doesn`t exists');
                return false;
            }

        },
        update: function (content) {

        }
    };

    var actions = function () {
        return {
            test: function () {
            }
        }
    }

    $.fn.geo_map = function (method) {
        self = this;
        var container = $(this);
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || !method) {

            if (!container.data('geo_map')) {
                container.data('geo_map', actions());
                return methods.init.apply(this, arguments);
            } else {
                return container.data('geo_map');
            }

        } else {
            $.error('Метод с именем ' + method + ' не существует для jQuery.tooltip');
        }
    };

    /* additional methds for svg map */
    $.fn.svgAddClass = function (classTitle) {
        return this.each(function () {
            var oldClass = jQuery(this).attr("class") || '';
            oldClass = oldClass ? oldClass : '';
            jQuery(this).attr("class", (oldClass + " " + classTitle).trim());
        });
    }
    $.fn.svgRemoveClass = function (classTitle) {
        return this.each(function () {
            var oldClass = $(this).attr("class") || '';
            var newClass = oldClass.replace(classTitle, '');
            $(this).attr("class", newClass.trim());
        });
    }
    $.fn.svgHasClass = function (classTitle) {
        var current_class = $(this).attr("class") || '';

        if (current_class.indexOf(classTitle) == '-1') {
            return false;
        } else {
            return true;
        }
    }

})(jQuery);