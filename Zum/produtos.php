<?php 
    include('header.php');
    $title = "Produtos - Zum";
    $output = str_replace('%TITLE%', $title, $output);
    echo $output;
?>

<link rel="stylesheet" href="css/produtos.css">

<!--Content-->
<div id="content">
    <div class="content-center">
        <!--Titles-->
        <div class="titles">
            <h1>produtos</h1>
            <img src="images/produtos/produtos.png" alt="Ilustração de uma refeição" title="Veja nossos produtos!">
            <div class="clear"></div>
        </div>
        <!--End of Titles-->
        
        <!--Submenu-->
        <div class="submenu">
            <a href="#" title="todos" class="active">todos <span>65</span></a>
            <a href="#" title="naturais">naturais <span>3</span></a>
            <a href="#" title="sucos">sucos <span>4</span></a>
            <a href="#" title="lanches">lanches <span>2</span></a>
            <a href="#" title="bolos">bolos <span>5</span></a>
            <a href="#" title="pastas">pastas <span>4</span></a>
            <a href="#" title="molhos">molhos <span>5</span></a>
            <a href="#" title="sorvetes">sorvetes <span>7</span></a>
            <a href="#" title="cafés">cafés <span>4</span></a>
            <a href="#" title="vitaminas">vitaminas <span>3</span></a>
            <a href="#" title="verdes">verdes <span>1</span></a>
        </div>
        <!--End of Submenu-->
        
        <!--Produtos-->
        <div class="produtos">
            <div class="item big">
                <a href="#" title="">
                    <img src="images/produtos/item-big.jpg" width="650" height="434" alt="" title="">
                    <div class="description">
                        <h2>Sanduiche Natural</h2>
                        <h3>Ingredientes</h3>
                        <p>Pão integral, presunto, queijo, alface molho especial e tomate.</p>
                    </div>
                </a>
            </div>
            
            <div class="item">
                <a href="#" title="">
                    <img src="images/produtos/item.jpg" width="300" height="150" alt="" title="">
                    <div class="description">
                        <h2>Sanduiche Natural</h2>
                        <h3>Ingredientes</h3>
                        <p>Pão integral, presunto, queijo, alface molho especial e tomate.</p>
                    </div>
                </a>
            </div>
            
            <div class="item">
                <a href="#" title="">
                    <img src="images/produtos/item.jpg" width="300" height="150" alt="" title="">
                    <div class="description">
                        <h2>Sanduiche Natural</h2>
                        <h3>Ingredientes</h3>
                        <p>Pão integral, presunto, queijo, alface molho especial e tomate.</p>
                    </div>
                </a>
            </div>
            
            <div class="item">
                <a href="#" title="">
                    <img src="images/produtos/item.jpg" width="300" height="150" alt="" title="">
                    <div class="description">
                        <h2>Sanduiche Natural</h2>
                        <h3>Ingredientes</h3>
                        <p>Pão integral, presunto, queijo, alface molho especial e tomate.</p>
                    </div>
                </a>
            </div>
            
            <div class="item">
                <a href="#" title="">
                    <img src="images/produtos/item.jpg" width="300" height="150" alt="" title="">
                    <div class="description">
                        <h2>Sanduiche Natural</h2>
                        <h3>Ingredientes</h3>
                        <p>Pão integral, presunto, queijo, alface molho especial e tomate.</p>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#" title="">
                    <img src="images/produtos/item.jpg" width="300" height="150" alt="" title="">
                    <div class="description">
                        <h2>Sanduiche Natural</h2>
                        <h3>Ingredientes</h3>
                        <p>Pão integral, presunto, queijo, alface molho especial e tomate.</p>
                    </div>
                </a>
            </div>
            
            <div class="item">
                <a href="#" title="">
                    <img src="images/produtos/item.jpg" width="300" height="150" alt="" title="">
                    <div class="description">
                        <h2>Sanduiche Natural</h2>
                        <h3>Ingredientes</h3>
                        <p>Pão integral, presunto, queijo, alface molho especial e tomate.</p>
                    </div>
                </a>
            </div>
            
            <div class="item big">
                <a href="#" title="">
                    <img src="images/produtos/item-big.jpg" width="650" height="434" alt="" title="">
                    <div class="description">
                        <h2>Sanduiche Natural</h2>
                        <h3>Ingredientes</h3>
                        <p>Pão integral, presunto, queijo, alface molho especial e tomate.</p>
                    </div>
                </a>
            </div>
            <div class="clear"></div>
        </div>
        <!--End of Produtos-->
        
    </div>
</div>
<!--End of Content-->

<!--Lightbox-->
<div id="lightbox">
    <div class="lightbox-content">
        <!--Menu-->
        <div id="menu-lightbox">
                <a href="/" title="Voltar para a página inicial" id="home-link" class="link-padding animate">Zum</a>
                <a href="#" class="fechar-lightbox">fechar <i class="fa fa-plus"></i></a>
        </div>
        <!--End of Menu-->
        
        <!--The Image-->
        <div class="the-image">
            <div class="image-relative">
                <img src="images/produtos/imagem-ampliada.jpg" width="788" height="788" alt="Sanduiche natural" title="Sanduiche natural">
            </div>
        </div>
         <!--End of The Image-->
        
        <!--Text-->
        <div class="text">
            <h2>Sanduiche Natural</h2>
            <p>Lorem ipsum dolor sit amet consecteruer adiscipling elit, orem ipsum ecteruer adiscipling elit, Lorem ipsum dolor sit amet consecteruum dolor sit amet consecteruer adiscipling elit</p>
            <h3>Ingredientes</h3>
            <p>Lorem ipsum dolor sit amet consecteruer adiscipling elit, orem ipsum ecteruer adiscipling elit</p>
            <a href="#" title="Compartilhar">compartilhar <i class="fa fa-share-square"></i></a>
            
            <!--Links-->
            <div class="links">
                <a href="#" title="anterior" class="next">próximo <i class="fa fa-arrow-right"></i></a>
                <a href="#" title="anterior" class="prev"><i class="fa fa-arrow-left"></i> anterior</a>
            </div>
            <!--End of Links-->
            <div class="clear"></div>
        </div>
        <!--End of Text-->
        
    </div>
</div>
<!--End of Lightbox-->
        
<?php include('footer.php'); ?>

<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(e){
        //Submenu
        $('.submenu a').click(function(e){
            $('.submenu a').removeClass('active');
            $(this).addClass('active');
        });
        
        //Columns
        var $produtos = $('#content .produtos');
        $produtos.imagesLoaded( function() {
          $produtos.masonry({
              columnWidth: 1,
              itemSelector: '.item'
          });
        });
        
        //Lightbox - Example only
        $('.item a').click(function(e){
            e.preventDefault();
            $('#lightbox').fadeIn(300);
        });
        $('#lightbox a.fechar-lightbox').click(function(e){
            e.preventDefault();
            $('#lightbox').fadeOut(300);
        });
    });
</script>