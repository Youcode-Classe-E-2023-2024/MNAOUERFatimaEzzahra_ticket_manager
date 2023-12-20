<?php

class User
{
    private $id;
    public $username;
    private $password;

    function __construct()
    {

    }

    function select_users(){
        global $db;
        $result= $db->query("SELECT * FROM users;");
        return $result->fetch_all(1);
    }

    function register($username, $email, $pwd)
    {
        global $db;

        return $db->query("INSERT INTO users (users_username, users_email, users_password) VALUES ('$username', '$email', '$pwd');");
    }

    function login($email, $password)
    {
        global $db;

        //les points sont la liason entre string email et adresse email et password et pwd
        $result = $db->query('SELECT * FROM users WHERE users_email ="' . $email . '"  and users_password = "' . $password . '";');

        return $result->fetch_assoc();
    }

    function logout()
    {
        session_destroy();
    }
}
