<?php

function dd($var)
{
    echo '<code>';
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    echo '</code>';
//    die();
}

define('__URI__', "http://" . $_SERVER['HTTP_HOST'] . "/MNAOUERFatimaezzahra_ticket_manager/");

$db = mysqli_connect('localhost', 'root', '', 'ticket_db');
