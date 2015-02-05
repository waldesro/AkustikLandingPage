<html>
    <head>
        <script src="js/jquery.flexslider-min.js"></script>
        <style> 
            @import "css/flexslider.css";
        </style>
        <script>
            $(function() {
              $('.flexslider').flexslider({
                  controlsContainer: '.flex-container'
              });
            });
        </script>
    </head>
    <body>
        <div class="flex-container">
            <div class="flexslider">
                <ul class="slides">
                    <?php
                    include_once 'include/load_slider_element.php';
                    ?>
                </ul>
            </div>
        </div>
    </body>
</html>