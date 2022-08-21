<?php
require_once 'includes.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = (new Login())->logout();
    die;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="loginform cf">
    <center>
        <br>
        <?php
        if (!isset($_SESSION['is_auth'])) :
            echo '<b>¡Necesario iniciar sesión! será redirigido a la página de inicio de sesiónVs</b>';
            header("refresh:3; url=login.php");
            die;
        else:
            $r = '<b>' . 'Bienvenidas ' . $_SESSION['username'] . ' al tablero </b>';
            $r .= '
        <form action='. $_SERVER['PHP_SELF'] .' method="post" accept-charset="utf-8">
            <input type="submit" value="Haga clic aquí para cerrar sesión">
        </form>';
            echo $r;
        endif;
        ?>
        <br>
    </center>
</section>
</body>
</html>