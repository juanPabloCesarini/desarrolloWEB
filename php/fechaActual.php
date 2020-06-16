<?php
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $d = date("j");
    $m = date("M");
    $a = date("Y");
    switch ($m) {
        case 'Jan':
            echo "$d de Enero de $a";
            break;
        case 'Feb':
            echo "$d de Febrero de $a";
            break;
        case 'Mar':
            echo "$d de Marzo de $a";
            break;
        case 'Apr':
            echo "$d de Abril de $a";
            break;
        case 'May':
            echo "$d de Mayo de $a";
            break;
        case 'Jun':
            echo "$d de Junio de $a";
            break;
        case 'Jul':
            echo "$d de Julio de $a";
            break;
        case 'Aug':
            echo "$d de Agosto de $a";
            break;
        case 'Sep':
            echo "$d de Septiembre de $a";
            break;
        case 'Oct':
            echo "$d de Octubre de $a";
            break;
        case 'Nov':
            echo "$d de Noviembre de $a";
            break;
        case 'Dec':
            echo "$d de Diciembre de $a";
            break;
    }
    

?>