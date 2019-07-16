<?php
// src/Controller/UsersController.php

namespace App\Controller;

class UsersController extends AppController
{
    // public function login(){
    // if ($this->request->is(['post'])) {
    //     // code...
    //     $user = $this->Auth->identify();
    //     debug($user);
    // }
    // }
    //
    // public function logout(){
    //     return $this->redirect($this->Auth->logout());
    // }
    public function index()
    {
        $this->paginate=[
            'limit'=>'5'
        ];
        $paginate=$this->paginate($this->Users->find('all'));
        $this->set('users',$paginate);


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
            $users = $this->Users->get($id);
            $this->set('user', $users);
    }

    public function edit($id){
        // code..
        $users = $this->Users->get($id);
        if ($this->request->is(['post','put'])) {
            // code...
            $users = $this->Users->patchEntity($users, $this->request->getData());
            $users->modified = date('Y-m-d H:i:s');
            $this->Users->save($users);
            return $this->redirect(['action' =>'index']);
        }
        $this->set('user', $users);
        $this->Flash->success('User updated succesfully');
    }

    public  function delete($id = Null){
        // code...
        $this->request->is(['post','delete']);
        $user= $this->Users->get($id);
        if ($this->Users->delete($user)) {
            // code...
            $this->Flash->success('User deleted succesfully', ['key'=>'message']);
                return $this->redirect(['controller' => 'Users']);
        }
    }

    public function export()
    {
    $this->setResponse($this->getResponse()->withDownload('my-file.csv'));
    $_header = array('id', 'username','password','firstname','lastname','Phonenumber','Address','dob','gender','height','created','modified');
    $data = $this->Users->find('all');
    $_serialize = 'data';

    $this->viewBuilder()->setClassName('CsvView.Csv');
    $this->set(compact('data', '_serialize'));
    }


}
?>
