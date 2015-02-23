<html>
    <head>
        <title>Contactenos</title>
        <style>
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
                $("#informacion_submit button").click(function (event) {
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
