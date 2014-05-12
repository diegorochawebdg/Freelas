<?php 
    include('header.php');
    $title = "Fale conosco - Zum";
    $output = str_replace('%TITLE%', $title, $output);
    echo $output;
?>

<link rel="stylesheet" href="css/fale-conosco.css">

<!--Content-->
<div id="content">
    <div class="content-center">
        <!--Titles-->
        <div class="titles">
            <h1>fale conosco</h1>
            <h2><i class="fa fa-envelope fa-2x"></i>contatos zum</h2>
            <div class="clear"></div>
        </div>
        <!--End of Titles-->
        
        <!--Left-->
        <div class="left">
            <form>
                <label>nome</label>
                <input type="text" name="nome" id="nome">
                
                <label>e-mail</label>
                <input type="email" name="email" id="email">
                
                <label>telefone</label>
                <input type="tel" name="tel" id="tel">
                
                <label>mensagem</label>
                <textarea name="mensage" id="mensagem"></textarea>
                <button type="submit" name="enviar" id="enviar" class="animate">enviar</button>
            </form>
            <div class="clear"></div>
        </div>
        <!--End of Left-->
        <!--Right-->
        <div class="right">
            <ul>
                <li>
                    <h2>Loja Sorocaba X</h2>
                    <address>Rua Oswaldo Antunes, 340 Sorocaba / SP</address>
                    <a href="tel:01523456789" title="Ligue para nós!">15 2345 6789</a> - <a href="mailto:e-mail@zum.com.br" title="Mande um email para nós!">e-mail@zum.com.br</a>
                </li>
                <li>
                    <h2>Loja Sorocaba X</h2>
                    <address>Rua Oswaldo Antunes, 340 Sorocaba / SP</address>
                    <a href="tel:01523456789" title="Ligue para nós!">15 2345 6789</a> - <a href="mailto:e-mail@zum.com.br" title="Mande um email para nós!">e-mail@zum.com.br</a>
                </li>
                <li>
                    <h2>Loja Sorocaba X</h2>
                    <address>Rua Oswaldo Antunes, 340 Sorocaba / SP</address>
                    <a href="tel:01523456789" title="Ligue para nós!">15 2345 6789</a> - <a href="mailto:e-mail@zum.com.br" title="Mande um email para nós!">e-mail@zum.com.br</a>
                </li>
                <li>
                    <h2>Loja Sorocaba X</h2>
                    <address>Rua Oswaldo Antunes, 340 Sorocaba / SP</address>
                    <a href="tel:01523456789" title="Ligue para nós!">15 2345 6789</a> - <a href="mailto:e-mail@zum.com.br" title="Mande um email para nós!">e-mail@zum.com.br</a>
                </li>
            </ul>
        </div>
        <!--End of Right-->
        <div class="clear"></div>
    </div>
</div>
<!--End of Content-->
        
<?php include('footer.php'); ?>