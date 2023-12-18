<?php
session_start();
include_once 'config.php';

// si la pagina est vuota mandami alla pagina di casa si no mandami alla pagina domandata
if (isset($_GET['page'])){
    include_once 'controllers/' . $_GET['page'] . '_controller.php';
    include_once 'views/' . $_GET['page'] . '.php';
} else {
    include_once 'controllers/home_controller.php';
    include_once 'views/home.php';
}
