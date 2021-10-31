<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/headerLaboral.css">
    <link rel="stylesheet" href="../css/laboral.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <title>Document</title>
</head>
<?php
if (isset($_POST['experiencia'])) {
    var_dump($_POST);
    $trabajo = $_POST['trabajo'];
    echo $trabajo;
    echo 'a';
}
?>

<body>
    <?php
    include '../reutilizar/headerLaboral.php';
    ?>
    <main id="contenedor-main">
        <section class="section-1">
            <h2 class="color-azul bold">Añade tu historial laboral</h2>
            <p id="color-p">Comienza por el trabajo más reciente y termina con el más antiguo.</p>
        </section>
        <form action="" method="post">
            <div class="grid">
                <div>
                    <div class="max-width-11 ">
                        <label for="trabajo">Puesto de trabajo</label>
                        <input type="text" name="trabajo">
                    </div>
                    <div class="max-width-11">
                        <label for="ciudad">Ciudad</label>
                        <input type="text" name="ciudad">
                    </div>
                    <div class="max-width-11">
                        <label for="inicioFecha">Mes de inicio</label>
                        <input type="month" name="inicioFecha">
                    </div>
                    <div class="max-width-11">
                        <label for="semanaInicio">Semana de inicio</label>
                        <input type="week" name="semanaInicio">
                    </div>
                </div>
                <div>
                    <div class="max-width-11">
                        <label for="empleador">Empleador</label>
                        <input type="text" name="trabajo">
                    </div>
                    <div class="max-width-11">
                        <label for="ccaa">Comunidad autonoma</label>
                        <input type="text" name="ccaa">
                    </div>
                    <div class="max-width-11">
                        <label for="finFecha">Mes de finalización</label>
                        <input type="month" name="finFecha">
                    </div>
                    <div class="max-width-11">
                        <label for="semanaFin">Semana de finalización</label>
                        <input type="week" name="semanaFin">
                    </div>
                    <div class="mgt-1">
                        <input type="checkbox" name="sinFinFecha">
                        <label for="sinFinFecha">Acutalmente trabajo aqui</label>
                    </div>
                </div>
            </div>
            <section class="flex mgl-20-5 mgt-1 ">
                <fieldset>
                    <legend>Contenido adcional</legend>
                    <label for="inicioTrabajo">Hora de entrada al trabajo</label>
                    <input type="time" name="inicioTrabajo">
                    <label for="finTrabajo">Hora de salida al trabajo</label>
                    <input type="time" name="finTrabajo">
                    <div class="mgt-1 max-width-15">
                        <label for="detalles">Describe las funciones que realizaste</label>
                        <textarea rows="10" cols="50" name="detalles"></textarea>
                    </div>
                </fieldset>
            </section>
            <section>
                <input type="reset" value="Borrar" id="reset">
                <input type="submit" name="experiencia" value="Enviar" id="submit">
                <div id="btn-a" class="mgt-1">
                    <a href="http://192.168.64.2/php/cv/clases/Laboral.php">
                        Siguiente: Guardar experiencia
                    </a>
                </div>
            </section>
        </form>
    </main>

</body>
<?php
if (isset($_POST['experiencia'])) {
    var_dump($_POST);
    $trabajo = $_POST["trabajo"];
    echo $trabajo;
    echo 'a';
}
?>

</html>