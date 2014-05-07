<?php get_header(); ?>

<style>
    #content-area {
        min-height: 510px;
    }
    .box{
        position: absolute;
        left: 50%;
        top: 50%;
        text-align: center;
        margin-left: -170px;
        margin-top: -50px;
    }
    h1 {
    color: #F8E026;
    font-size: 36px;
    text-transform: uppercase;
    margin-bottom: 5px;
    }
    h2 {
    font-size: 20px;
    text-transform: uppercase;
    color: #FFF;
    margin-bottom: 40px;
    }
    a {
    color: #FFF;
    padding: 10px;
    font-size: 14px;
    }
    #top, #footer{
        display: none;
    }
</style>

<div id="content-full">
    <div class="container">

        <div id="content-area" class="clearfix">

            <div class="box">
                <h1>Obrigado!</h1>
                <h2>Sua mensagem foi enviada com sucesso!</h2>
                <a href="<?php echo home_url(); ?>/contato/" title="Voltar ao site">Voltar ao site</a>
            </div>

        </div> <!-- end #content-area -->

    </div> <!-- end .container -->

    <?php get_footer(); ?>