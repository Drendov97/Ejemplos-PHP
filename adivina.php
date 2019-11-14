<?php 
session_start();


if(isset($_SESSION['aleatorio']) === false) {

    $aleatorio = random_int(1,10);
    echo $aleatorio .'<br>';

    $_SESSION['aleatorio'] =$aleatorio;
} else {
    $aleatorio = $_SESSION['aleatorio'];
}

/*
var_dump($aleatorio);
var_dump($_POST);*/
if(isset($_POST['numero'])){ 

if($aleatorio== $_POST['numero']){
    echo 'Felicidades has adivinado!!!';
} else if($aleatorio<$_POST['numero'])
{
    echo 'El numero secreto es menor';

} else {
    echo 'El número secreto es mayor';
}


}

?>
<?php include('encabezado.php'); ?>

<h1>Adivina el numero</h1>

<form action="adivina.php" method="POST">

<label>Numero</label>
<input type="number" name="numero">
<button type="submit">Adivinar</button>

</form>

<?php include('pie.php'); ?>