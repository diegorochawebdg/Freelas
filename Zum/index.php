<?php 
    include('header.php');
    $title = "Zum - Comida fresca e rápida";
    $output = str_replace('%TITLE%', $title, $output);
    echo $output;
?>

<link rel="stylesheet" href="css/home.css">

<!--Content-->
<div id="content">
    
    <!--Main | Slider-->
    <div id="main-slider" class="animate">
        <div class="content-center">
            <h1>zum fast fresh food</h1>
            <div id="slider">
                <ul class="the-slider">
                    <li><div class="slide-height"><img src="images/home/slider/slide01.png" width="344" height="558" alt="" title=""></div></li>
                    <li><div class="slide-height"><img src="images/home/slider/slide02.png" width="494" height="357" alt="" title=""></div></li>
                </ul>
            </div>
            <h2>zum comida fesca e rápida</h2>
        </div>
    </div>
    <!--End of Main | Slider-->
    
    <!--Produtos-->
    <div id="produtos">
        <div class="content-center">
            <div class="left">
                <h2>zum <br>é tudo <br>de bom!</h2>
                <a href="/produtos" title="Ver produtos">ver produtos</a>
            </div>
            <img src="images/home/produtos.jpg" width="344" height="305" alt="Produtos Zum" title="Nossos produtos">
            <div class="right">
                <h2>pro<br>du<br>tos</h2>
                <a href="/produtos" title="Conheça nossos produtos!">Clique e conheça a nossa exclusiva linha de produtos</a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!--End of Produtos-->
    
    <!--Onde encontrar-->
    <div id="onde-encontrar">
        <div class="content-center">
            <div class="left">
                <h2>onde encontrar zum</h2>
                <a href="/onde-encontrar" title="Onde encontrar?">Clique e conheça a nossa exclusiva linha de produtos</a>
            </div>
            <img src="images/home/onde-encontrar.jpg" alt="Onde encontrar" title="Onde encontrar Zum?" width="272" height="360">
            <div class="right">
                <a href="/onde-encontrar" title="Onde encontrar?">onde encontrar?<i class="fa fa-arrow-right"></i></a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!--End of Onde encontrar-->
    
    <!--Cardápio-->
    <div id="cardapio">
        <div class="content-center">
            <div class="left">
                <a href="/cardapio" title="Veja o nosso cardápio!">ver cardápio</a>
            </div>
            <img src="images/home/cardapio.jpg" width="329" height="301" alt="Cardápio" title="Veja nosso cardápio!">
            <div class="right">
                <h2>nosso cardápio é variado</h2>
                <a href="/cardapio" title="Veja o nosso cardápio!">Clique e conheça a nossa exclusiva linha de produtos</a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!--End of Cardápio-->
</div>
<!--End of Content-->
        
<?php include('footer.php'); ?>

<link rel="stylesheet" href="css/jquery.bxslider.css">
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(e){
        //The slider
        $('.the-slider').bxSlider({
            slideWidth:     494,
            auto:           true,
            mode:           'fade',
            onSlideBefore: function(currentSlideNumber, totalSlideQty, currentSlideHtmlObject){
                if(currentSlideHtmlObject == 0){
                    $('#main-slider').css("background-color","#008eb3");
                }
                if(currentSlideHtmlObject == 1){
                    $('#main-slider').css("background-color","#20baa5");
                }
            }

        });
    });
</script>