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
}


 ?>
