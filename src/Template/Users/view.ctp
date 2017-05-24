

<table>
  <tr>
    <td>Nama :</td>
    <td><?php echo $user->name ?></td>
  </tr>
  <tr>
    <td>Username :</td>
    <td><?php echo $user->username ?></td>
  </tr>
  <tr>
    <td>Email :</td>
    <td><?php echo $user->email ?></td>
  </tr>
  <tr>
    <td>Status :</td>
    <td><?php echo $user->status ?></td>
  </tr>
  <tr>
    <td colspan="2">
      
      <?php echo $this->Html->link('View',['action'=>'view',$user->id]) ?>
      <?php echo $this->Html->link('Edit',['action'=>'edit',$user->id]) ?>
      <?php echo $this->Html->link('Delete',['action'=>'delete',$user->id]) ?>
    </td>
  </tr>



</table>
