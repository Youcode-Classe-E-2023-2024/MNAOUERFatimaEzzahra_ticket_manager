<?php

class User
{
    private $id;
    public $username;
    private $password;

    function __construct()
    {

    }

    function register($username, $email, $pwd)
    {
        global $db;

        $result = $db->query("INSERT INTO users (users_username, users_email, users_password) VALUES ('$username', '$email', '$pwd');");

        if (!$result) {
            header("Location:" . __URI__ . "index.php?page=register");
        } else {
            header("Location:" . __URI__ . "index.php?page=home");
        }
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
