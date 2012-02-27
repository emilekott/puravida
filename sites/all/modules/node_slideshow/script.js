(function($) {
    $(document).ready(function(){

        $('.content .field-name-field-slideshow .field-items')
        .after('<div id="slide-nav">')
        .cycle({ 
            fx:     'fade', 
            speed:  'fast', 
            pager:  '#slide-nav' 
        });
   
 
    });
    
    
})(jQuery);//the correct way of namespacing jquery