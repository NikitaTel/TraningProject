define([
    'jquery',
    'slick'
],function($){
    'use strict'

    $.widget('nikita.customSlider',{
        _create:function() {
            this.activeSlider = this.element;
            console.log(this.element)

            mediaCheck({
                media: '(max-width: 768px)',
                entry: ()=> {
                    this.initialize();
                } ,
                exit: ()=> {
                    this.destroy();
                }
            });
        },

        initialize: function() {
            $(this.activeSlider).slick({
                infinite: true,
                speed: 300,
                autoplay: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1
                        }
                    }]
            });
        },

        destroy: function() {
            $(this.activeSlider).slick('unslick');
        }
    });
    return $.nikita.customSlider;
})
