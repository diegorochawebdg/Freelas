jQuery(document).ready(function() {

    //Comments pagination

    jQuery('.comments-holder #comments-pagination').prepend(jQuery('.comments-pagination-wrapper').html());

    jQuery('.comments-pagination-wrapper').remove();

});

jQuery(window).load(function(){
    jQuery('.carousel_pagination').each(function(){
        var pagination_width = jQuery(this).width();                   
        var window_width = jQuery('.caroufredsel_wrapper').width();      
        jQuery(this).css("margin-left", (window_width-pagination_width)/2);        
    });
});

jQuery(window).resize(function(){
    jQuery('.carousel_pagination').each(function(){
        var pagination_width = jQuery(this).width();                   
        var window_width = jQuery('.caroufredsel_wrapper').width();                		
        jQuery(this).css("margin-left", (window_width-pagination_width)/2);
    });   
});