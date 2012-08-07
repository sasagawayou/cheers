<!DOCTYPE html>
<html>
<head>
  <?php include_http_metas() ?>
  <?php include_metas() ?>
  <?php include_title() ?>
  <link rel="shortcut icon" href="/favicon.ico" />
  <?php include_stylesheets() ?>
  <?php include_javascripts() ?>
  
</head>

 <body>
  <?php include_partial('login/login') ?>

<header>
  <hgroup>
    <h1>Ampersand Solutions</h1>
    <h2>Very catchy Strapline</h2>
  </hgroup>
  
  <nav>
    <ul>
      <li><?php echo link_to('トップページ', 'Page/Show')?></li>
      <li><a href="#">Example 1</a></li>
      <li><a href="#">Example 2</a></li>
      <li><a href="#">Example 3</a></li>
    </ul>
  </nav>

  <a href="#" title="Ampersand Solutions homepage"><img src="logo.gif"
    alt="Ampersand Solutions" /> </a>
</header>

<section>
  <aside>
    <h1>Categories</h1>
    <ul>
      <li><?php echo link_to('timeline', '/frontend_dev.php/page/top')?></li>
      <li><?php echo link_to('login', '/frontend_dev.php/login')?></li>
      <li><?php echo link_to('classmate', '/frontend_dev.php/page/classmate')?></li>
      <li><?php echo link_to('vote', '/frontend_dev.php/vote')?></li>
      <li><?php echo link_to('tavern', '/frontend_dev.php/page/tavern')?></li>
      <li><?php echo link_to('distance', '/frontend_dev.php/distance')?></li>
      <li><?php echo link_to('link', '/frontend_dev.php/page/link')?></li>
      <li><?php echo link_to('personal', '/frontend_dev.php/page/personal')?></li>
      <li><?php echo link_to('setting', '/frontend_dev.php/page/setting')?></li>
    </ul>
  </aside>
  <article>
    <?php echo $sf_content ?>
  </article>

</section>
<footer>
  <p>
    &copy; 2010 Ampersand Solutions - <a href="#">Sitemap</a> | <a
      href="#">Privacy policy</a> almost <a href="#">valid HTML5</a> and <a
      href="#">valid <abbr title="Cascading Style Sheet">CSS</abbr>3</a>
    design by <a href="#" title="web design london">Webdezign</a>
  </p>
</footer>
</body>
</html>
