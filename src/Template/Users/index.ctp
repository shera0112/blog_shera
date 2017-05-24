<h1>User Index</h1>



<table>
  <tr>
    <th>Bil</th>
    <th>Nama</th>
    <th>Username</th>
    <th>Email</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  <?php
      $bil = 1;
      foreach($users as $user):
  ?>
  <tr>
    <td><?php echo $bil; ?></td>
    <td><?php echo $user->name ?></td>
    <td><?php echo $user->username ?></td>
    <td><?php echo $user->email ?></td>
    <td><?php echo $user->status ?></td>
    <td>
        <?php echo $this->Html->link('View',['action'=>'view',$user->id]) ?>
        <?php echo $this->Html->link('Edit',['action'=>'edit',$user->id]) ?>
        <?php echo $this->Html->link('Delete',['action'=>'delete',$user->id],['confirm'=>'Are You Sure']) ?>
    </td>
  </tr>
<?php
     $bil++;
     endforeach;
 ?>

</table>
<?php echo $this->Html->link('Add New User',['action'=>'add']) ?>
