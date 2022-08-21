<?php
    $nombre = $_POST['nombre'];

    setcookie("cliente","$nombre",time()+3600);
?>