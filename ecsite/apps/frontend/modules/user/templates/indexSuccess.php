<h1>Users List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Last name</th>
      <th>First name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Password</th>
      <th>Address</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user): ?>
    <tr>
      <td><a href="<?php echo url_for('user/show?id=' . $user->getId()); ?>"><?php echo $user->getId(); ?></a></td>
      <td><?php echo $user->getLastName(); ?></td>
      <td><?php echo $user->getFirstName(); ?></td>
      <td><?php echo $user->getEmail(); ?></td>
      <td><?php echo $user->getPhone(); ?></td>
      <td><?php echo $user->getPassword(); ?></td>
      <td><?php echo $user->getAddress(); ?></td>
      <td><?php echo $user->getCreatedAt(); ?></td>
      <td><?php echo $user->getUpdatedAt(); ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('user/new'); ?>">New</a>
