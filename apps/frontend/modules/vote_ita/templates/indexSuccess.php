<h1>Vote itas List</h1>
<div align="center">
<table>
  <thead>
    <tr>
      <th></th>
      <th>Title</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($vote_itas as $vote_ita): ?>
    <tr>
      <td><a href="<?php echo url_for('vote_ita/edit?id='.$vote_ita->getId()) ?>">編集</a></td>
      <td><a href="<?php echo url_for('vote/index?ita_id='.$vote_ita->getId()) ?>"><?php echo $vote_ita->getTitle() ?></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  </div>

  <a href="<?php echo url_for('vote_ita/new') ?>">New</a>
