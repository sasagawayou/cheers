<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php echo $form ?>
<form action="<?php echo url_for('login/submit') ?>" method="POST">
<form id="login">
    <h1>Log In</h1>
    <fieldset id="inputs">
        <input id="username" type="text" placeholder="Username" autofocus required>   
        <input id="password" type="password" placeholder="Password" required>
    </fieldset>
    <fieldset id="actions">
        <input type="submit" id="submit" value="Log in">
        <a href="">Forgot your password?</a><a href="">Register</a>
    </fieldset>
</form>
<?php echo $form ?>
</body>
</html>