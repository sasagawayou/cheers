<!DOCTYPE html>
<html>
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <?php
    ini_set('default_charset', 'UTF-8');
    ini_set('mbstring.http_input', 'auto');
    ini_set('mbstring.http_output', 'UTF-8');
    ini_set('mbstring.internal_encoding', 'UTF-8');
    ?>
    <div align="center">
      <table>
        <tr>
          <?php $i = 1;
          foreach ($vote_shops as $vote_shop) { ?>
            <td>
  <?php if ($vote_shop->getUrl()) { ?>

                <a href="<?php echo $vote_shop->getUrl() ?>"><h1><?php echo voteActions::getPageTitle($vote_shop->getUrl()) ?></h1></a>
                <a href="<?php echo url_for('tavern/edit?id=' . $vote_shop->getId()) ?>">
    <?php echo "<img src=\"http://capture.heartrails.com/free?" . $vote_shop->getUrl() . "\"/></a>"; ?></a>

                <form action="/frontend_dev.php/vote/delete" method="post">
                  <input type="hidden" name="id" id="id" value="<?php echo $vote_shop->getId() ?>">
                  <input type="submit" value="削除">
                </form>
                <form action="/frontend_dev.php/vote/votes" method="post">
                  <input type="hidden" name="vote" id="vote" value="<?php echo $vote_shop->getVotes() + 1 ?>">
                  <input type="hidden" name="id" id="id" value="<?php echo $vote_shop->getId() ?>">
                  <input type="submit" value="投票<?php echo $vote_shop->getVotes() ?>" >
                </form></td>
            <?php } ?>

            <?php
            if ($i == 3) {
              echo "</tr><br />\n<tr>";
              $i = 0;
            }$i = $i + 1;
          }
          ?> 
        </tr>
      </table>

      <a href="<?php echo url_for('tavern/new?ita_id=' . $sf_params->get('ita_id')) ?>">New</a>
      <article><?php echo nl2br($description); ?></article>
    </div>

    <?php foreach ($vote_comments as $vote_comment) {
      if ($sf_user->getName() == $vote_comment->getUser()) { ?>
        <div  align="left"><?php echo $vote_comment->getUser(); ?>::<?php echo nl2br($vote_comment->getComment()); ?>
          <form action="/frontend_dev.php/vote/deletecomment" method="POST">
            <input type="hidden" name="id" id="id" value="<?php echo $vote_comment->getId(); ?>">
            <input type="submit" value ="削除" />
          </form></div>
      <?php } else { ?>
        <div  align="light"><article><?php echo nl2br($vote_comment->getComment()); ?></article></div>
      <?php }
    }; ?>

    <form action="/frontend_dev.php/vote/insertcomment" method="POST">
      <table>
        <tr>
          <th>please into your comment</th>
          <th><input type="text" name="comment" id="comment" size="128" value=""></th>
          <th><input type="hidden" name="ita_id" id="ita_id" value="<?php echo $sf_params->get('ita_id'); ?>"></th>
          <th><input type="hidden" name="user" id="user" value="<?php echo $sf_user->getName(); ?>"></th>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" />
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>