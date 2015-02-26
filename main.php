<html>
    <head>
        <script src="js/jquery.flexslider-min.js"></script>
        <style> 
            @import "css/flexslider.css";
        </style>
        <script>
            $(function () {
                $('#flexslider').flexslider({
                    animation: "slide"
                });
            });
        </script>
    </head>
    <body>
        <div class="flexslider" id='flexslider'>
            <ul class="slides">
                <?php
                include_once 'include/load_slider_element.php';
                ?>
            </ul>
        </div>
    </body>
</html>