<h1>Add New User</h1>

<?php

      echo $this->Form->create(); 

      echo $this->Form->control('name'),
           $this->Form->control('username'),
           $this->Form->control('password'),
           $this->Form->control('email'),
           $this->Form->control('status'),
           $this->Form->button('Submit');

      echo $this->Form->end();

  ?>
