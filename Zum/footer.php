    <!--Footer-->
    <div id="footer">
        <div class="footer-bg"></div>
        <div class="content-center">
            <span class="foodright">Foodright - Todos os direitos de uma<br> alimentação saudável você encontrará na Zum.</span>
            <div class="social">
                <a href="#" title="Interaja com Facebook"><i class="fa fa-facebook-square fa-2x"></i>interaja com <br>facebook</a>
                <a href="#" title="Siga-nos no twitter"><i class="fa fa-instagram fa-2x"></i>siga-nos <br>no instagram</a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!--End of Footer-->

    </div>
    <!--End of Container-->
    
    <!--Scripts-->
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(e){
            $(window).scroll(function(e){
                var menu         = $('#menu');
                var menuContract = $('.menu-complement')
                if($(this).scrollTop() > 100){
                    menu.addClass('contract');
                    menuContract.addClass('contract');
                } else{
                    menu.removeClass('contract');
                    menuContract.removeClass('contract');
                }
            });
            $(window).resize(function(e){
                if($(this).width() < 1203){
                    $('#menu').addClass('resize2');
                } else{
                    $('#menu').removeClass('resize2');
                }
            });
        });
    </script>
    <!--End of Scripts-->
    
</body>
</html>
