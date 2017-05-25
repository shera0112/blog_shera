<h1>Edit Post</h1>

<?php

      echo $this->Form->create($post);

      echo $this->Form->control('title'),
           $this->Form->control('body'),
           $this->Form->control('status'),
           $this->Form->control('user_id',['options'=>$users]),
           $this->Form->button('Submit');

      echo $this->Form->end();

  ?>
