<?php
    require('dbconfig.php');
    /* er wordt gechecked met de $_GET en in_array of een page bestaat */
    if(isset($_GET['page']) && $_GET['page'] != ''){
        $pages = ['home', 'formulier', 'login', 'yj3n7dCFAuHJEcS5hFL5L9Mc1mQeoLWaJJGpy4vzhPA=', 'test'];
        if(in_array($_GET['page'], $pages)){
            include_once($_GET['page'].'.php');
        } else {
            include_once('404.php'); // bestaat een page niet wordt de 404 gegeven
        }
    } else {
        include_once('home.php');
    }
?>
