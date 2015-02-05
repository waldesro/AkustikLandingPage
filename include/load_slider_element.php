<?php

$dir = "./theme";
$dh  = opendir($dir);
while (false !== ($filename = readdir($dh))) {
    if ($filename !== '.' && $filename !== '..') {
        echo "<li><img src='./theme/$filename'/></li>";       
    }
}