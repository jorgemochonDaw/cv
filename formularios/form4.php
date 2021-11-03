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
    if (isset($_POST['informacionFormacion'])) {
        error_reporting(0);
        $_SESSION['informacionFormacion']  =
            array(
                $_POST['centro'],
                $_POST['titulo'],
                $_POST['ubicacion'],
                $_POST['direccion'],
                $_POST['campoEstudio'],
                $_POST['fechaTitulo'],
                $_POST['seguirEstudiando'],
            );

        if (!$_POST['centro']) {
            $errores[] = "Debes designar donde estudiaste";
        }
        if (!$_POST['titulo']) {
            $errores[] = "Debes escribir que titulo obteniste";
        }
        if (!$_POST['ubicacion']) {
            $errores[] = "Debes escribir donde estudiaste";
        }
        if (!$_POST['direccion']) {
            $errores[] = "Debes escribir la calle en la que estudiaste";
        }
        if (!$_POST['campoEstudio']) {
            $errores[] = "Debes escribir en que te especializaste";
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
                <a class="a-volver" href="form3.php">Volver a informacion personal</a>
            </div>
        </div>
    <?php
    } else {
    ?>
        <section class="section">
            <form action="form5.php" method="post">
                <fieldset class="fieldset">
                    <legend class="legend">Aptitudes</legend>
                    <h2>¿Qué aptitudes quieres destacar?</h2>
                    <label for="linkedin">Linkedin</label><br>
                     <input type="url" name="linkedin">
                    <div class="max-width-11 mg-btm-1">
                        <label for="aptitudes">Detalla tus aptitudes</label>
                        <textarea name="aptitudes" id="" cols="30" rows="10"></textarea>
                    </div>
                    <input type="reset" value="Borrar" class="reset">
                    <input type="submit" value="Guardar datos" class="submit" name="informacionAptitudes">
                </fieldset>
            </form>
        </section>
    <?php
    }
    ?>
</body>

</html>