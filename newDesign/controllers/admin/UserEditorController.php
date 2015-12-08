<?php

/**
 * Created by PhpStorm.
 * User: Matus
 * Date: 8. 12. 2015
 * Time: 19:09
 */


include_once (ROOT . 'API/Database.php');

class UserEditorController
{

    private $handlerDB;

    public function __construct() {
        $this->handlerDB = new DBHandler();
    }

    public function getUsers() {
        $this->handlerDB->beginTransaction();
        $this->handlerDB->query('SELECT * FROM users');
        $results = $this->handlerDB->resultSet();
        $this->handlerDB->endTransaction();

        return $results;
    }

    public function displayUsers($users, $displayFrom, $displayTo) {

        echo '<ul class="users">';

        for($i = $displayFrom; $i <= $displayTo; $i++) {
            echo '<li>';
            echo '<span class="username">' . $users[$i]['name'] . ' ' . $users[$i]['surname'] . '</span>';
            echo '<span class="email">' . $users[$i]['email'] . '</span>';
            echo '<span class="user-controls"><a href="">View</a> <a href="">Edit</a> <a href="">Delete</a></span>';
            echo '</li>';
        }

        echo '</ul>';
    }
}