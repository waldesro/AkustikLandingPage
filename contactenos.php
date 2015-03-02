<html>
    <head>
        <style type="text/css">
            @import "css/webformp.css";
        </style>

        <script src="js/webform.js"></script>

        <script>
            $(function () {
                $("#nombre").on("input", function () {
                    check_required_input("nombre");
                });
                $("#telefono").on("input", function () {
                    check_required_telephone("telefono");
                });
                $("#correo").on("input", function () {
                    check_required_email("correo");
                });
                $("#enviar").click(function (event) {
                    check_required_input_form("informacion", "contactenos", event);
                });
            });
        </script>
    </head>
    <body>
        <?php
        include_once 'include/webform.php';
        ?>
    </body>
</html>
