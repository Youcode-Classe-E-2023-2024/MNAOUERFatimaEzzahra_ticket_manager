<?php

class Ticket
{
    function __construct()
    {

    }

    function listAll() {
        global $db;

        $result= $db->query("SELECT * FROM tickets");
        return $result->fetch_assoc();
    }

    function selectById($id)
    {
        global $db;
        $result= $db->query("SELECT tickets_id, tickets_title, tickets_desc FROM tickets WHERE tickets_id='$id'");
        return $result->fetch_all(1);
    }

    function create($tickets_title, $tickets_desc, $tickets_status, $tickets_priority)
    {
        global $db;

        $user_id = $_SESSION['user_id'];

        return $db->query("INSERT INTO tickets (tickets_title, tickets_desc, tickets_status, tickets_priority, tickets_created_by) VALUES ('$tickets_title', '$tickets_desc', '$tickets_status', '$tickets_priority', '$user_id');");
    }

    function assign()
    {
        echo 'assign';
    }

}
