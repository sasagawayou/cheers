<h1>Vote shops List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Ita</th>
      <th>Url</th>
      <th>Name</th>
      <th>Address</th>
      <th>Votes</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($vote_shops as $vote_shop): ?>
    <tr>
      <td><a href="<?php echo url_for('tavern/edit?id='.$vote_shop->getId()) ?>"><?php echo $vote_shop->getId() ?></a></td>
      <td><?php echo $vote_shop->getItaId() ?></td>
      <td><?php echo $vote_shop->getUrl() ?></td>
      <td><?php echo $vote_shop->getName() ?></td>
      <td><?php echo $vote_shop->getAddress() ?></td>
      <td><?php echo $vote_shop->getVotes() ?></td>
      <td><?php echo $vote_shop->getCreatedAt() ?></td>
      <td><?php echo $vote_shop->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tavern/new') ?>">New</a>
