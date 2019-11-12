<?php
include('encabezado.php');
?>


<h1>Ejemplo Login</h1>
<form action="validar-login.php" method="POST">
    <label>Username</label>
    <input type="text" name="username">
    <label>Password</label>
    <input type="password" name="password">
    <button tpe="submit">Enviar</button>
    
</form>


<?php
include('pie.php');
?>

