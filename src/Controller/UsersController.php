<?php
// src/Controller/UsersController.php

namespace App\Controller;

class UsersController extends AppController
{
    public function index()
    {
        $this->set('users',$this->Users->find('all'));
    }
}
?>
