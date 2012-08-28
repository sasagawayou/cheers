<!DOCTYPE html>
<html>
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php use_stylesheet('slide.css') ?>
    <?php include_stylesheets() ?>
    <?php use_javascript('slide.js') ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="fb-root"></div>

    <!-- Panel -->
    <div id="toppanel">
      <div id="panel">
        <div class="content clearfix">
          <div class="left">
            <h1></h1>
            <h2></h2>		
            <p class="grey"></p>
            <h2></h2>
            <p class="grey"></p>
          </div>
          <div class="left">
            <!-- Login Form -->
              <form class="clearfix"  action="<?php echo url_for('login/submit') ?>" method="POST">
              <h1></h1>
              <label class="grey" for="user_name"></label>
              
              <label class="grey" for="show_name"></label>
              
              <label class="grey" for="password"></label>
             
              <label></label>
              <div class="clear"></div>
              
              <a class="lost-pwd" href="#"></a>
            </form>
          </div>
          <div class="left right">			
            <!-- Register Form -->
            <form action="#" method="post">
              <h1></h1>				
              <label class="grey" for="signup"></label>
              
              <label class="grey" for="email"></label>
              
              <label></label>
              
            </form>
          </div>
        </div>
      </div> <!-- /login -->	

      <!-- The tab on top -->	
      <div class="tab">
        <ul class="login">
          <li class="left">&nbsp;</li>
          <li>Hello <?php $sf_user->getName();?></li>
          <li class="sep">|</li>
          <li id="toggle">
            <a id="open" class="open" href="#">Near friends</a>
            <a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
          </li>
          <li class="right">&nbsp;</li>
            <div class="fb-login-button" data-show-faces="true" data-width="200" data-max-rows="1"></div>
        </ul> 
      </div> <!-- / top -->

    </div> <!--panel -->
  </body>
</html>
