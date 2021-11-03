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
    $errores = [];
    session_start();
    if (isset($_POST['informacionLaboral'])) {
        error_reporting(0);
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
                $_POST['trabajando'],
            );
        if (!$_POST['oficio']) {
            $errores[] = "Debes designar tu oficio";
        }
        if (!$_POST['ciudad']) {
            $errores[] = "Debes escribir donde trabajas";
        }
        if (!$_POST['empleador']) {
            $errores[] = "Debes escribir que empresa te contrató";
        }
        if (!$_POST['direccion']) {
            $errores[] = "Debes escribir la calle en la que trabajas";
        }
        if (!$_POST['mesInicio']) {
            $errores[] = "Debes escribir que mes empezaste a trabajar";
        }
        if (!$_POST['entrada']) {
            $errores[] = "Debes escribir a que hora entras a trabajar";
        }
        if (!$_POST['salida']) {
            $errores[] = "Debes escribir a que hora sales de trabajar";
        }
        if (!$_POST['descripcion']) {
            $errores[] = "Debes redactar las funciones desempeñadas";
        }
    }
    ?>
</head>

<body>
<header id="header">
        <h1 id="titulo">CV<span id="color-red">Ideal</span></h1>
    </header>
    <?php
    if (!empty($errores)) {
    ?>
        <div id="error">
            <h1>Error Información personal</h1>
            <hr class="hr-rojo">
            <?php
            foreach ($errores as $error) {
            ?>
                <p class="color-rojo"><?php echo $error; ?></p>
            <?php
            }
            ?>
            <div class="contenedor-volver">
                <a class="a-volver" href="form2.php">Volver a informacion personal</a>
            </div>
        </div>
    <?php
    } else {
    ?>
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
                    <input type="submit" value="Guardar datos" class="submit" name="informacionFormacion">
                </fieldset>
            </form>
        </section>
    <?php
    }
    ?>
</body>

</html>