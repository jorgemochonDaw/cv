<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Creaer tu CV</title>
<?php
session_start();
if (isset($_POST['informacionAptitudes'])) {
    $_SESSION['informacionAptitudes']  =
        array(
            $_POST['aptitudes'],  
        );
}
?>
</head>

<body>
<section class="section">
    <form action="../mostrarCv.php" method="post">
        <fieldset class="fieldset">
            <legend class="legend">Información adicional</legend>
            <h2>¿Tienes algo más que añadir?</h2>
            <p>Estas secciones son opcionales..</p>
            <div>
                <label for="diplomas">Diplomas</label>
                <input type="checkbox" name="diplomas">
            </div>
            <div class="mg-btm-1">
                <label for="idiomas">Idiomas</label>
                <input type="checkbox" name="idiomas">
            </div>
            <div class="max-width-11">
                <label for="aficiones">Aficiones</label>
                <textarea name="aficiones" cols="30" rows="10"></textarea>
            </div>
            <input type="reset" value="Borrar" class="reset">
            <input type="submit" value="Enviar" class="submit" name="informacionAdicional">
        </fieldset>
    </form>
</section>
</body>

</html>