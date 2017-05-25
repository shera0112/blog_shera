<table>
  <tr>
    <td width='80px;'>Title :</td>
    <td><?php echo $post->title ?></td>
  </tr>
  <tr>
    <td>Body :</td>
    <td><?php echo $post->body ?></td>
  </tr>
  <tr>
    <td>Status :</td>
    <td><?php echo $post->status ?></td>
  </tr>
  <tr>
    <td>User :</td>
    <td><?php echo $post->user->name ?></td>
  </tr>

  <tr>
    <td colspan="2">
      <?php echo $this->Html->link('View',['action'=>'view',$post->id]) ?>
      <?php echo $this->Html->link('Edit',['action'=>'edit',$post->id]) ?>
      <?php echo $this->Html->link('Delete',['action'=>'delete',$post->id]) ?>
    </td>
  </tr>
</table>
