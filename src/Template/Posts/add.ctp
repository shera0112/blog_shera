<h1>Add New Post</h1>

<?php

      echo $this->Form->create();

      echo $this->Form->control('title'),
           $this->Form->control('body'),
           $this->Form->control('status'),
           $this->Form->control('user_id',['options'=>$users]),
           $this->Form->button('Submit');

      echo $this->Form->end();

  ?>
