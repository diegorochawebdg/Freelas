<?php 
    include('header.php');
    $title = "Zum fast fresh food";
    $output = str_replace('%TITLE%', $title, $output);
    echo $output;
?>

<link rel="stylesheet" href="css/zum.css">

<!--Content-->
<div id="content">
    <div class="content-center">
        <!--Titles-->
        <div class="titles">
            <h1>zum fast fresh food</h1>
            <img src="images/zum/zum-fast-fresh-food.png" width="146" height="71" alt="Zum fast fresh food" title="Zum fast fresh food">
            <div class="clear"></div>
        </div>
        <!--End of Titles-->
        
        <!--Text-->
        <div class="left">
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum sodales convallis. Sed id vestibulum justo. Ut ac velit pretium, eleifend mi a, pulvinar ligula. Phasellus volutpat at turpis vel luctus.</p>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum sodales convallis. Sed id vestibulum justo. Ut ac velit pretium, eleifend mi a, pulvinar ligula. Phasellus volutpat at turpis vel luctus.</p>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum sodales convallis. Sed id vestibulum justo. Ut ac velit pretium, eleifend mi a, pulvinar ligula. Phasellus volutpat at turpis vel luctus.</p>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum sodales convallis. Sed id vestibulum justo. Ut ac velit pretium, eleifend mi a, pulvinar ligula. Phasellus volutpat at turpis vel luctus.</p>
        </div>
        <!--End of Text-->
        
        <!--Gallery-->
        <div class="right">
            <div id="slideshow">
                <a class="foto" href="images/zum/large-img-gallery.jpg">
                    <img src="images/zum/img-gallery.jpg" width="500" height="340" alt="" title="" />
                    <span class="title">Fachada Zum</span>
                    <div class="lupa"></div>
                </a>
                <a class="foto" href="images/zum/large-img-gallery.jpg">
                    <img src="images/zum/img-gallery.jpg" width="500" height="340" alt="" title="" />
                    <span class="title">Fachada Zum2</span>
                    <div class="lupa"></div>
                </a>
                <a class="foto" href="images/zum/large-img-gallery.jpg">
                    <img src="images/zum/img-gallery.jpg" width="500" height="340" alt="" title="" />
                    <span class="title">Fachada Zum3</span>
                    <div class="lupa"></div>
                </a>
                <a class="foto" href="images/zum/large-img-gallery.jpg">
                    <img src="images/zum/img-gallery.jpg" width="500" height="340" alt="" title="" />
                    <span class="title">Fachada Zum4</span>
                    <div class="lupa"></div>
                </a>
                <a class="foto" href="images/zum/large-img-gallery.jpg">
                    <img src="images/zum/img-gallery.jpg" width="500" height="340" alt="" title="" />
                    <span class="title">Fachada Zum5</span>
                    <div class="lupa"></div>
                </a>
                <a class="foto" href="images/zum/large-img-gallery.jpg">
                    <img src="images/zum/img-gallery.jpg" width="500" height="340" alt="" title="" />
                    <span class="title">Fachada Zum6</span>
                    <div class="lupa"></div>
                </a>
                <a class="foto" href="images/zum/large-img-gallery.jpg">
                    <img src="images/zum/img-gallery.jpg" width="500" height="340" alt="" title="" />
                    <span class="title">Fachada Zum7</span>
                    <div class="lupa"></div>
                </a>
            </div>
            <div id="thumbs"> 
                <ul id="nav">
                    <li>
                        <a href="#">
                            <img src="images/zum/thumb-img-gallery.jpg" width="98" height="67" alt="" />
                            <div class="hover animate2"></div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/zum/thumb-img-gallery.jpg" width="98" height="67" alt="" />
                            <div class="hover animate2"></div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/zum/thumb-img-gallery.jpg" width="98" height="67" alt="" />
                            <div class="hover animate2"></div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/zum/thumb-img-gallery.jpg" width="98" height="67" alt="" />
                            <div class="hover animate2"></div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/zum/thumb-img-gallery.jpg" width="98" height="67" alt="" />
                            <div class="hover animate2"></div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/zum/thumb-img-gallery.jpg" width="98" height="67" alt="" />
                            <div class="hover animate2"></div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/zum/thumb-img-gallery.jpg" width="98" height="67" alt="" />
                            <div class="hover animate2"></div>
                        </a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <!--End of Gallery-->
        <div class="clear"></div>
        
    </div>
</div>
<!--End of Content-->
        
<?php include('footer.php'); ?>

<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css" media="screen" />
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#slideshow').cycle({ 
			fx:     'turnDown', 
			speed:  'fast', 
			timeout: 0, 
			pager:  '#nav', 
			pagerAnchorBuilder: function(idx, slide) { 
				return '#nav li:eq(' + idx + ') a'; 
			}     
		}); 
		
		$("a.foto").fancybox();
	
	});

</script>