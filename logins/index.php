<?php
include("config.php");
visits();
?>
<!doctype html>
<html lang="en">
<head>
    <?php include("common/head.php");?>
</head>
<body>
<?php include("common/header.php"); ?>
<?php if(!$_SESSION["isAuth"]) { ?>
<form method="post" action="logins/login.php">
    Login: <input type="text" name="login">
    Password: <input type="password" name="password">
    <input type="submit" value="Войти">
</form>
<?php } else { ?>
    <h1>Колчиество посещений: <?php echo $_SESSION["visits"];?></h1>
    <a href="exit.php">Выход</a>
<?php } ?>
<?php include("common/footer.php"); ?>
</body>
</html>