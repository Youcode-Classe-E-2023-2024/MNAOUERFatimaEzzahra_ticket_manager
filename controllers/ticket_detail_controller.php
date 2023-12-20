<?php
//dd($_GET);


//if (!isset($_SESSION['user_id'])) {
//    header('Location: index.php?page=login');
//    die();
//}

// Instantier la classe Ticket

// Assigner a $result la method listAll
include_once 'models/Ticket.php';
$ticket = new Ticket();
$id = $_GET['id'];

$result = $ticket->selectById($id);

//print_r($ticket['tickets_id']);
// Debug
//dd($result);

$tags = $ticket->selectTagsById($id);
$users = $ticket->selectUsersById($id);
//dd($users);