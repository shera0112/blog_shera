<h1>User List</h1>



<div class="row">
  <div class="col-md-2">
    <?php echo $this->Html->link('New User',['action'=>'add']) ?>
    <span class="label label-primary">New Label</span>
  </div>
  <div class="col-md-10">
    <table class="table table-striped">
      <tr>
        <th width="50px;">Bil</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Email</th>
        <th width="100px;">Status</th>
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
            <?php echo $this->Html->link('View',['action'=>'view',$user->id], ['class'=>'btn btn-primary btn-xs']) ?>
            <?php echo $this->Html->link('Edit',['action'=>'edit',$user->id], ['class'=>'btn btn-success btn-xs']) ?>
            <?php echo $this->Html->link('Delete',['action'=>'delete',$user->id],['confirm'=>'Are You Sure', 'class'=>'btn btn-danger btn-xs']) ?>
        </td>
      </tr>
    <?php
         $bil++;
         endforeach;
     ?>

    </table>
  </div>
</div>
