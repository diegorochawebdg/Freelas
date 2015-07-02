$(document).ready(function()
{
	$('input[id*=ddd]').mask("99");
	$('input[id*=tel], input[id*=cel]').mask("99999999?9");

    if($("a.fancy").length > 0)
    {
        $("a.fancy").fancybox({
            type: 'iframe',
            padding: 0,
            width: 835,
            height: 580,
            fitToView: false,
            autoSize: false,
        });
    }

    if($("a.fancy4").length > 0)
    {
        $("a.fancy4").fancybox({
            type: 'iframe',
            padding: 0,
            width: 655,
            height: 450,
            fitToView: false,
            autoSize: false,
        });
    }
    if($("a.fancy-corretor").length > 0)
    {
        $("a.fancy-corretor").fancybox({
            type: 'iframe',
            padding: 0,
            width: 550,
            height: 550,
            fitToView: false,
            autoSize: false,
        });
    }

    if($(".fancy-gal").length > 0)
    {
        $(".fancy-gal").fancybox({
            helpers: {
                title: {type: 'over'}
            },
            afterShow: function()
            {
                var imageWidth = $(".fancybox-image").width();
                $(".fancybox-title-over-wrap").css({
                    "width": imageWidth,
                    "paddingLeft": 0,
                    "paddingRight": 0,
                    "textAlign": "center"
                });
            }
        });
    }

	$('.abas li').click(function()
    {
    	if(!$(this).parent().hasClass('break'))
    	{
    		var holder = $(this).parent().parent();
    	
	    	holder.find('.abas li').removeClass('ativo');
	    	$(this).addClass('ativo');
	    	
	    	holder.find('.target-aba').removeClass('ativo');
	    	holder.find('.target-aba').eq($(this).index()).addClass('ativo');
    	}    	
    });
    
    $("a.mapico").click(function()
	{
		var tag = $('.localizacao');
		var time = 1200;
		$('html,body').animate({scrollTop: tag.offset().top},time);
		return false;
	});
	    
});

function popup(pagina, wid, h, s)
{
    if (self.screen)
    {
        sw = screen.width;
        sh = screen.height;
        cx = (.5 * sw) - (wid * .5);
        cy = (.5 * sh) - (h * .5);

        var dimentions_and_such = 'width=' + wid + ',' + 'height=' + h + ',' + 'screenX=' + cx + ',' + 'screenY=' + cy + ',' + 'left=' + cx + ',' + 'top=' + cy + ',scrollbars=' + s;
    }

    return window.open(pagina, "cipasa", dimentions_and_such);
}