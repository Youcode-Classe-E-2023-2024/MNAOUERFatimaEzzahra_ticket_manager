<?php

if (isset($_POST['tickets_title']) && !empty($_POST['tickets_title']) && isset($_POST['tickets_desc']) && !empty($_POST['tickets_desc']) && isset($_POST['tickets_status']) && !empty($_POST['tickets_status']) && isset($_POST['tickets_priority']) && !empty($_POST['tickets_priority'])) {
    // Instantier la classe utilisateur
    include_once 'models/Ticket.php';
    $ticket = new Ticket();

    $result = $ticket->create($_POST['tickets_title'], $_POST['tickets_desc'], $_POST['tickets_status'], $_POST['tickets_priority']);

    if ($result) {
        header("Location:" . __URI__ . "index.php?page=home");
    } else {
        header("Location:" . __URI__ . "index.php?page=ticket_form");
    }
}