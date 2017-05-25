<?php
namespace App\Controller;

use App\Controller\AppController;

class PostsController extends AppController{

  public function index(){
    $posts = $this->paginate('Posts', ['contain'=>['Users']]);

    //pr($users);
    //hantar data ke template
    $this->set('posts',$posts);
    $this->set('_serialize', ['post']);
  }

  public function view($id=null){
    //check id
      if($id==null){
        die('No ID. Please Try Again!');
      }

      //query ke db based on selected id
      $post = $this->Posts->get($id, [
        'contain' => ['Users']
      ]);

      //hantar variable ke template

      $this->set('post',$post);
      $this->set('_serialize', ['post']);
      //pr($user);
  }

  public function add(){
    $post = $this->Posts->newEntity();
      if($this->request->is('post')){
        //pr($this->request->data);exit;

        $post = $this->Posts->patchEntity($post,$this->request->data());

        //save dalam table
        if($this->Posts->save($post)){
          //message berjaya save
          $this->Flash->success('Record Saved!');

          //redirect ke page index
          return $this->redirect(['action'=>'index']);
        }
      }
      $users = $this->Posts->Users->find('list',['limit'=>200]);
      //pr($users->toArray());exit;
      $this->set(compact('post','users'));
      $this->set('_serialize',['post']);
  }

  public function edit($id=null){

    $post = $this->Posts->get($id);

    if($this->request->is(['post','put','patch'])){
    //  pr($this->request->data());exit;

      //assign edited data pada data asal
      $post = $this->Posts->patchEntity($post,$this->request->data());

      if($this->Posts->save($post)){
          $this->Flash->success('Record Edited!');

          return $this->redirect(['action'=>'index']);
      }
    }
    $users = $this->Posts->Users->find('list',['limit'=>200]);
    //pr($users->toArray());exit;
    $this->set(compact('post','users'));
    $this->set('_serialize',['post']);
  //  $this->set('post',$post);
    }

    public function delete($id=null){
      $post = $this->Posts->get($id);

      if($this->Posts->delete($post)){
        $this->Flash->success('Data Deleted!');

        $this->redirect(['action'=>'index']);
      }
    }
}



?>
