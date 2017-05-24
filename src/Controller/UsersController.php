<?php
namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController{
  //nak dapatkan senarai user
  public function index(){
    $users = $this->paginate('Users');

    //pr($users);
    //hantar data ke template
    $this->set('users',$users);
  }

  public function view($id=null){
    //check id
      if($id==null){
        die('No ID. Please Try Again!');
      }

      //query ke db based on selected id
      $user = $this->Users->get($id);

      //hantar variable ke template
      $this->set('user',$user);
      //pr($user);
  }

  public function add(){
    $user = $this->Users->newEntity();
      if($this->request->is('post')){
        //pr($this->request->data);exit;


        $user = $this->Users->patchEntity($user,$this->request->data());

        //save dalam table
        if($this->Users->save($user)){
          //message berjaya save
          $this->Flash->success('Record Saved!');

          //redirect ke page index
          return $this->redirect(['action'=>'index']);
        }
      }
  }

  public function edit($id=null){

    $user = $this->Users->get($id);

    if($this->request->is(['post','put','patch'])){
      //pr($this->request->data());exit;

      //assign edited data pada data asal
      $user = $this->Users->patchEntity($user,$this->request->data());

      if($this->Users->save($user)){
          $this->Flash->success('Record Edited!');

          return $this->redirect(['action'=>'index']);
      }
    }

    $this->set('user',$user);
  }

  public function delete($id=null){
    $user = $this->Users->get($id);

    if($this->Users->delete($user)){
      $this->Flash->success('Data Deleted!');

      $this->redirect(['action'=>'index']);
    }
  }
}


 ?>
