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
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=181163071922804";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!-- Panel -->
    <div id="toppanel">
      <div id="panel">
        <div class="content clearfix">
          <div class="left">
            <h1>Welcome to Web-Kreation</h1>
            <h2>Sliding login panel Demo with jQuery</h2>		
            <p class="grey">You can put anything you want in this sliding panel: videos, audio, images, forms... The only limit is your imagination!</p>
            <h2>Download</h2>
            <p class="grey">To download this script go back to <a href="http://web-kreation.com/index.php/tutorials/nice-clean-sliding-login-panel-built-with-jquery" title="Download">article &raquo;</a></p>
          </div>
          <div class="left">
            <!-- Login Form -->
              <form class="clearfix"  action="<?php echo url_for('login/submit') ?>" method="POST">
              <h1>Member Login</h1>
              <label class="grey" for="log">Username:</label>
              <input class="field" type="text" name="log" id="log" value="" size="23" />
              <label class="grey" for="pwd">Password:</label>
              <input class="field" type="password" name="pwd" id="pwd" size="23" />
              <label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
              <div class="clear"></div>
              <input type="submit" name="submit" value="Login" class="bt_login" />
              <a class="lost-pwd" href="#">Lost your password?</a>
            </form>
          </div>
          <div class="left right">			
            <!-- Register Form -->
            <form action="#" method="post">
              <h1>Not a member yet? Sign Up!</h1>				
              <label class="grey" for="signup">Username:</label>
              <input class="field" type="text" name="signup" id="signup" value="" size="23" />
              <label class="grey" for="email">Email:</label>
              <input class="field" type="text" name="email" id="email" size="23" />
              <label>A password will be e-mailed to you.</label>
              <input type="submit" name="submit" value="Register" class="bt_register" />
            </form>
          </div>
        </div>
      </div> <!-- /login -->	

      <!-- The tab on top -->	
      <div class="tab">
        <ul class="login">
          <li class="left">&nbsp;</li>
          <li>Hello Guest!</li>
          <li class="sep">|</li>
          <li id="toggle">
            <a id="open" class="open" href="#">Log In | Register</a>
            <a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
          </li>
          <li class="right">&nbsp;</li>
            <div class="fb-login-button" data-show-faces="true" data-width="200" data-max-rows="1"></div>
        </ul> 
      </div> <!-- / top -->

    </div> <!--panel -->
  </body>
</html>
