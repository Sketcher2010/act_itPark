<?php
session_start();

if(isset($_SESSION["isAuth"]) and $_SESSION["isAuth"] == true) {
    echo $_SESSION["user"]["login"];
    ?>
<a href='/logout.php'>Выход</a>
<?php
} else {
    echo "<a href='/login.html'>Вход</a>";
}
