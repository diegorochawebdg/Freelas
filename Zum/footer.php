    <!--Footer-->
    <div id="footer">
        <div class="footer-bg"></div>
        <div class="content-center">
            <span class="foodright">Foodright - Todos os direitos de uma
alimentação saudável você encontrará na Zum.</span>
            <div class="social">
                <a href="#" title="Interaja com Facebook"><i class="fa fa-facebook-square fa-lg"></i>interaja com facebook</a>
                <a href="#" title="Siga-nos no twitter"><i class="fa fa-instagram fa-lg"></i>siga-nos no instagram</a>
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
                var menu = $('#menu');
                if($(this).scrollTop() > 100){
                    menu.addClass('contract');
                } else{
                    menu.removeClass('contract');
                }
            });
        });
    </script>
    <!--End of Scripts-->
    
</body>
</html>
