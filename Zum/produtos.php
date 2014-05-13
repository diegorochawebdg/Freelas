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
        // initialize Masonry after all images have loaded  
        $produtos.imagesLoaded( function() {
          $produtos.masonry({
              columnWidth: 1,
              itemSelector: '.item'
          });
        });
        /*$('#content .produtos').masonry({
          columnWidth: 1,
          itemSelector: '.item'
        });*/
    });
</script>