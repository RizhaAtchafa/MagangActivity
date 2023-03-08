<?php
    echo date("l, d-M-Y <br>");

    echo time();

    echo date("l", time()+60*60*24*4);

    echo date("l", strtotime("24 nov 2001"));


?>
