<?php 
    include('header.php');
    $title = "Onde encontrar - Zum";
    $output = str_replace('%TITLE%', $title, $output);
    echo $output;
?>

<link rel="stylesheet" href="css/onde-encontrar.css">

<!--Content-->
<div id="content">
    <div class="content-center">
        <!--Titles-->
        <div class="titles">
            <h1>onde encontrar</h1>
            <h2>é zum, encontre <br>a mais próxima</h2>
            <div class="clear"></div>
        </div>
        <!--End of Titles-->
        
        <!--Unidades-->
        <div class="unidades">
            <!--Loja 1-->
            <div class="loja">
                <img src="images/onde-encontrar/loja-zum-1.jpg" width="300" height="150" alt="Loja Zum" title="Loja Zum">
                <div class="details">
                    <h3>Loja Sorocaba X</h3>
                    <address>Rua Oswaldo Antunes</address>
                    <a href="tel:01523456789" title="ligue para nós!">15 2345 6789</a>
                    <span>Seg a Sábado 10h00 as 20h00</span>
                    <span>Domingo 14h00 as 20h00</span>
                </div>
                <div class="the-map animate">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.18237072462!2d-0.10159865000001353!3d51.52864164999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondres!5e0!3m2!1spt-BR!2s!4v1399857610178" width="300" height="300" frameborder="0" style="border:0"></iframe>
                </div>
                <a href="#" title="Ver mapa" class="map">ver mapa</a>
            </div>
            <!--End of Loja 1-->
            
            <!--Loja 2-->
            <div class="loja">
                <img src="images/onde-encontrar/loja-zum-2.jpg" width="300" height="150" alt="Loja Zum" title="Loja Zum">
                <div class="details">
                    <h3>Loja Sorocaba X</h3>
                    <address>Rua Oswaldo Antunes</address>
                    <a href="tel:01523456789" title="ligue para nós!">15 2345 6789</a>
                    <span>Seg a Sábado 10h00 as 20h00</span>
                    <span>Domingo 14h00 as 20h00</span>
                </div>
                <div class="the-map animate">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.18237072462!2d-0.10159865000001353!3d51.52864164999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondres!5e0!3m2!1spt-BR!2s!4v1399857610178" width="300" height="300" frameborder="0" style="border:0"></iframe>
                </div>
                <a href="#" title="Ver mapa" class="map">ver mapa</a>
            </div>
            <!--End of Loja 2-->
            
            <!--Loja 3-->
            <div class="loja last">
                <img src="images/onde-encontrar/loja-zum-3.jpg" width="300" height="150" alt="Loja Zum" title="Loja Zum">
                <div class="details">
                    <h3>Loja Sorocaba X</h3>
                    <address>Rua Oswaldo Antunes</address>
                    <a href="tel:01523456789" title="ligue para nós!">15 2345 6789</a>
                    <span>Seg a Sábado 10h00 as 20h00</span>
                    <span>Domingo 14h00 as 20h00</span>
                </div>
                <div class="the-map animate">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.18237072462!2d-0.10159865000001353!3d51.52864164999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondres!5e0!3m2!1spt-BR!2s!4v1399857610178" width="300" height="300" frameborder="0" style="border:0"></iframe>
                </div>
                <a href="#" title="Ver mapa" class="map">ver mapa</a>
            </div>
            <!--End of Loja 3-->
        </div>
        <!--End of Unidades-->
        
        
        <div class="clear"></div>
    </div>
</div>
<!--End of Content-->
        
<?php include('footer.php'); ?>

<script type="text/javascript">
    $(document).ready(function(e){
        $('a.map').click(function(e){
            e.preventDefault();
            $(this).parent().children('.the-map').toggleClass('active');
        });
    });
</script>