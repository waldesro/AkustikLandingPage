<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Akustik</title>
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/utiles.js"></script>
        <style>
            @import "css/base.css";
            @import "css/navbar.css";              
        </style>      
        <link rel="icon" href="img/logo_caracol.png" type="image/png"/>
    </head>
    <body>      
        <div id="wrap">
            <?php
                include_once 'include/navbar.php';
            ?>
            <div class="separador"></div>
            <div id="viewer">
                <?php
                    include_once 'main.php';
                ?>
            </div>
        </div>
    </body>
</html>
