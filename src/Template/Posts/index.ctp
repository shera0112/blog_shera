<h1>Posts List</h1>

<table>
  <tr>
    <th>Bil.</th>
    <th>Title</th>
    <th>Body</th>
    <th>User</th>
    <th>Action</th>
  </tr>
  <?php
      $bil = 1;
      foreach($posts as $post):
  ?>
  <tr>
    <td><?php echo $bil; ?></td>
    <td><?php echo $post->title ?></td>
    <td><?php echo $post->body ?></td>
    <td><?php echo $post->user->name ?></td>
    <td>
        <?php echo $this->Html->link('View',['action'=>'view',$post->id]) ?>
        <?php echo $this->Html->link('Edit',['action'=>'edit',$post->id]) ?>
        <?php echo $this->Html->link('Delete',['action'=>'delete',$post->id],['confirm'=>'Are You Sure']) ?>
    </td>
  </tr>
  <?php
       $bil++;
       endforeach;
   ?>

</table>
<?php echo $this->Html->link('New Post',['action'=>'add']) ?>
