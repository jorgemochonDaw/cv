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
    }

    ?>
</head>

<body>
    <section class="section">
        <form action="form5.php" method="post">
            <fieldset class="fieldset">
                <legend class="legend">Aptitudes</legend>
                <h2>¿Qué aptitudes quieres destacar?</h2>
                <p>Utiliza las recomendaciones de nuestros expertos, que encontrarás más abajo para comenzar.</p>
                <div class="max-width-11 mg-btm-1">
                    <label for="aptitudes">Detalla tus aptitudes</label>
                    <textarea name="aptitudes" id="" cols="30" rows="10"></textarea>
                </div>
                <input type="reset" value="Borrar" class="reset">
                <input type="submit" value="Enviar" class="submit" name="informacionAptitudes">
            </fieldset>
        </form>
    </section>

</body>

</html>