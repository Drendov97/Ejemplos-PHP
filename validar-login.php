<?php

/*
    echo 'Username = '. $_POST['username'].'<br>';
    echo 'Password = '.$_POST['password'];

    CRUD = Create-Read-Update-Delete
*/
if($_POST['username']=='David' && $_POST['password']=='pepe'){
    echo '<h2>Bienvenido '.$_POST['username']. '</h2>';
} else {
    echo '<p>Nombre o contraseña incorrectos</p>';
}
?>