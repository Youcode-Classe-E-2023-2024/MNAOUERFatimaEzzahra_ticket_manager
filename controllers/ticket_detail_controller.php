<?php
//dd($_GET);

if (isset($_POST['comment']) && !empty($_POST['comment'])) {
    // Instantier la classe utilisateur
    include_once 'models/Ticket.php';
    $ticket = new Ticket();

    $result = $ticket->comment($_SESSION['user_id'], $_GET['id'], $_POST['comment']);

    header("Location:" . __URI__ . "index.php?page=ticket_detail&id=" . $_GET['id']);
}

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
$comments = $ticket->selectCommentById($id);
//dd($users);