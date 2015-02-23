jQuery(window).load(function() {

    if(jQuery().ColorPicker) {		
        doColors();
    }	
});

var doColors = function()
{
    var title_color = jQuery('#colorTitleSelector').next('input').first().attr('value');
    var title_description_color = jQuery('#colorTitleDescriptionSelector').next('input').first().attr('value');
    var background_color = jQuery('#colorBackgroundSelector').next('input').first().attr('value');

    if(title_color == ''){
        title_color = '#ffffff'
    }
    if(title_description_color == ''){
        title_description_color = '#ffffff'
    }
    if(background_color == ''){
        background_color = '#D82546'
    }    

    jQuery('#colorTitleSelector').find('div').first().css('background-color', title_color);
    jQuery('#colorTitleDescriptionSelector').find('div').first().css('background-color', title_description_color);
    jQuery('#colorBackgroundSelector').find('div').first().css('background-color', background_color);

    jQuery('#colorTitleSelector').ColorPicker({
        color: title_color,
        onShow: function (colpkr) {
            jQuery(colpkr).fadeIn(500);
            return false;
        },
        onHide: function (colpkr) {
            jQuery(colpkr).fadeOut(500);
            return false;
        },
        onChange: function (hsb, hex, rgb) {
            jQuery('#colorTitleSelector div').css('backgroundColor', '#' + hex);
            jQuery('#colorTitleSelector').next('input').first().attr('value','#' + hex);
        }
    });
    
    jQuery('#colorTitleDescriptionSelector').ColorPicker({
        color: title_description_color,
        onShow: function (colpkr) {
            jQuery(colpkr).fadeIn(500);
            return false;
        },
        onHide: function (colpkr) {
            jQuery(colpkr).fadeOut(500);
            return false;
        },
        onChange: function (hsb, hex, rgb) {
            jQuery('#colorTitleDescriptionSelector div').css('backgroundColor', '#' + hex);
            jQuery('#colorTitleDescriptionSelector').next('input').first().attr('value','#' + hex);
        }
    });


    jQuery('#colorBackgroundSelector').ColorPicker({
        color: background_color,
        onShow: function (colpkr) {
            jQuery(colpkr).fadeIn(500);
            return false;
        },
        onHide: function (colpkr) {
            jQuery(colpkr).fadeOut(500);
            return false;
        },
        onChange: function (hsb, hex, rgb) {
            jQuery('#colorBackgroundSelector div').css('backgroundColor', '#' + hex);
            jQuery('#colorBackgroundSelector').next('input').first().attr('value','#' + hex);
        }
    });  
}