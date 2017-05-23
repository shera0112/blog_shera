<h1>User Index</h1>



<table>
  <tr>
    <th>Nama</th>
    <th>Username</th>
    <th>Email</th>
    <th>Status</th>
  </tr>
  <?php foreach($users as $user): ?>
  <tr>
    <td><?php echo $user->name ?></td>
    <td><?php echo $user->username ?></td>
    <td><?php echo $user->email ?></td>
    <td><?php echo $user->status ?></td>
  </tr>
<?php endforeach; ?>
</table>
