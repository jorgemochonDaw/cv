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
    if (isset($_POST['informacionPersonal'])) {
        $_SESSION['informacionPersonal']  =
            array(
                $_POST['img'],
               $_POST['nombre'],
               $_POST['apellido'],
                $_POST['calle'],
                $_POST['urb'],
                $_POST['postal'],
                $_POST['ciudad'],
                $_POST['ccaa'],
                $_POST['numero'],
                $_POST['email'],
                $_POST['dni'],
                $_POST['estado'],
                $_POST['nacimiento'],
                $_POST['genero'],
            );
    }
    ?>
</head>

<body>
    <section class=" section">
        <form action="form3.php" method="post">
            <fieldset class="fieldset2">
                <h2>Añade tu historial laboral</h2>
                <p>Comienza por el trabajo más reciente y termina con el más antiguo.</p>
                <legend class="legend">Historial laboral</legend>
                <div class="flex">
                    <div>
                        <div class="max-width-11 mg-btm-1">
                            <label for="oficio">Puesto de trabajo</label>
                            <input type="text" name="oficio">
                        </div>
                        <div class="max-width-11 mg-btm-1">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" name="ciudad">
                        </div>
                    </div>
                    <div>
                        <div class="max-width-11 mg-btm-1">
                            <label for="empleador">Empleador</label>
                            <input type="text" name="empleador">
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
                            <label for="mesInicio">Mes de inicio</label>
                            <input type="month" name="mesInicio">
                        </div>
                        <div class="max-width-11 mg-btm-1">
                            <label for="entrada">Hora de entrada</label>
                            <input type="time" name="entrada">
                        </div>
                    </div>
                    <div>
                        <div class="max-width-11 mgl-2 mg-btm-1">
                            <label for="mesFin">Mes de finalización</label>
                            <input type="month" name="mesFin">
                        </div>
                        <div class="max-width-11 mg-btm-1">
                            <label for="salida">Hora de salida</label><br>
                            <input type="time" name="salida">
                        </div>
                    </div>
                </div>
                <div class="flex-columnas">
                    <div class="mg-btm-1">
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" rows="15" cols="60"></textarea>
                    </div>
                    <div class="mg-btm-1"><label for="estudiando">Sigo trabajando</label>
                        <input type="checkbox" name="estudiando">
                    </div>
                </div>
                <input type="reset" value="Borrar" class="reset">
                <input type="submit" value="Enviar" class="submit" name="informacionLaboral">
            </fieldset>
        </form>
    </section>
</body>

</html>