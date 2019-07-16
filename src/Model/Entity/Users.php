<?php
// src/Model/Entity/Users.php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHarsher
use Cake\ORM\Entity;

class Users extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slug' => false,
    ];

    // protected function _setPassword($password)
    // {
    //     // code...
    //     if (strlen($password)>0) {
    //         // code...
    //         return (new DefaultPasswordHarsher)->hash($password)
    //     }
    // }
}
