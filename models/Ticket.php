<?php

class Ticket
{
    private $id;
    public $detail;
    public $status;
    public $priority;
    public $createBy;

    function __construct()
    {

    }

    function create()
    {
        echo 'create';
    }

    function assign()
    {
        echo 'assign';
    }

}
