<?php

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php?page=login');
    die();
}

// Instantier la classe Ticket

// Assigner a $result la method listAll
include_once 'models/Ticket.php';
$ticket = new Ticket();

$result = $ticket->listAll();
// Debug
//dd($result);