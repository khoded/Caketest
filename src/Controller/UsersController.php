<?php
// src/Controller/UsersController.php

namespace App\Controller;

class UsersController extends AppController
{
    public function index()
    {
        $this->set('users',$this->Users->find('all'));
    }

    public function add()
    {
        $post = $this->Users->newEntity();
            if($this->request->is('post')){
                $post = $this->Users->patchEntity($post, $this->request->getData());
                if($this->Users->save($post)){
                    $this->Flash->success('Post Added successfully', ['key'=>'message']);
                    return $this->redirect(['action'=>'index']);
                }
                $this->Flash->error(__("unable to add your post"));
            }
            $this->set('users', $post);
    }

    public function view($id= Null){
        // code...
            $post = $this->Users->get(;)
    }

}
?>
