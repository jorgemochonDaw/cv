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
if (isset($_POST['informacionLaboral'])) {
    $_SESSION['informacionLaboral']  =
        array(
            $_POST['oficio'],
            $_POST['ciudad'],
            $_POST['empleador'],
            $_POST['direccion'],
            $_POST['mesInicio'],
            $_POST['entrada'],
            $_POST['mesFin'],
            $_POST['salida'],
            $_POST['descripcion'],
            $_POST['estudiando'],         
        );
}
?>
</head>

<body>
<section class="section">
    <form action="form4.php" method="post">
        <fieldset class="fieldset">
            <h2>Descríbenos tu formación</h2>
            <p>Incluye todos los centros, aunque todavía estés allí o no te hayas graduado..</p>
            <legend class="legend">Formación</legend>
            <div class="flex">
                <div>
                    <div class="max-width-11 mg-btm-1">
                        <label for="centro">Nombre del centro</label>
                        <input type="text" name="centro">
                    </div>
                    <div class="max-width-11 mg-btm-1">
                        <label for="titulo">Título</label>
                        <input type="text" name="titulo">
                    </div>
                </div>
                <div>
                    <div class="max-width-11 mg-btm-1">
                        <label for="ubicacion">Ubicación del centro</label>
                        <input type="text" name="ubicacion">
                    </div>
                    <div class="max-width-11 mg-btm-1">
                        <label for="direccion">Dirección </label>
                        <input type="text" name="direccion">
                    </div>
                </div>
            </div>
            <div class="flex">
                <div>
                    <div class="max-width-11 mg-btm-1">
                        <label for="campoEstudio">Campo de estudio</label>
                        <input type="text" name="campoEstudio">
                    </div>
                </div>
                <div>
                    <div class="max-width-12 mg-btm-1">
                        <label for="fechaTitulo">Fecha de obtención del curso</label>
                        <input type="date" name="fechaTitulo">
                    </div>
                </div>
            </div>
            <div class="max-width-11 mg-btm-1">
                <label for="seguirEstudiando">Sigo estudiando</label>
                <input type="checkbox" name="seguirEstudiando">
            </div>
            <input type="reset" value="Borrar" class="reset">
            <input type="submit" value="Enviar" class="submit" name="informacionFormacion">
        </fieldset>
    </form>
</section>
</body>

</html>