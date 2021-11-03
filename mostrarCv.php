<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/cv.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Creaer tu CV</title>
    <?php
    session_start();
    if (isset($_POST['informacionAdicional'])) {
        error_reporting(0);
        $_SESSION['informacionAdicional']  =
            array(
                $_POST['diplomas'],
                $_POST['idiomas'],
                $_POST['aficiones'],
            );
    }
    ?>
</head>

<body>
    <header id="header">
        <h1 id="titulo">CV<span id="color-red">Ideal</span></h1>
    </header>
    <main id="contenedor-main">
        <h2>Experiencia</h2>
        <hr>
        <section class="grid">
            <section>
                <h3>Empresa</h3>
                <p>Trabajo: <?php echo $_SESSION['informacionLaboral'][0] ?></p>
                <p>Empleador: <?php echo $_SESSION['informacionLaboral'][2] ?></p>
            </section>
            <section>
                <h3>Mes de inicio y fin del trabajo</h3>
                <p>Mes inicio: <?php echo $_SESSION['informacionLaboral'][4] ?></p>
                <p>Mes finalizado: <?php echo $_SESSION['informacionLaboral'][6] ?></p>
            </section>
            <section>
                <h3>Horario</h3>
                <p>Hora de entrada: <?php echo $_SESSION['informacionLaboral'][5] ?></p>
                <p>Hora de salida: <?php echo $_SESSION['informacionLaboral'][7] ?></p>
            </section>
            <section>
                <h3>Desempeño realizado</h3>
                <p>Descipcion de las tareas: <?php echo $_SESSION['informacionLaboral'][8] ?></p>
                <p>Actualmente trabajo aqui: <?php echo $_SESSION['informacionLaboral'][9] ?></p>
            </section>
        </section>
        <hr>
        <h2>Fomación</h2>
        <hr>
        <section class="grid">
            <section>
                <h3>Centro</h3>
                <p>Centro: <?php echo $_SESSION['informacionFormacion'][0] ?></p>
            </section>
            <section>
                <h3>Dirección</h3>
                <p>Ubicación: <?php echo $_SESSION['informacionFormacion'][2] ?></p>
                <p>Dirección: <?php echo $_SESSION['informacionFormacion'][3] ?></p>
            </section>
            <section>
                <h3>Estudios</h3>
                <p>Titulo: <?php echo $_SESSION['informacionFormacion'][1] ?></p>
                <p>Campo de estudio: <?php echo $_SESSION['informacionFormacion'][4] ?></p>
            </section>
            <section>
                <h3>Obtencion del titulo</h3>
                <p>Titulo: <?php echo $_SESSION['informacionFormacion'][5] ?></p>
            </section>
        </section>
        <section>
            <hr>
            <h2>Apitutdes</h2>
            <hr>
            <p><?php echo $_SESSION['informacionAptitudes'][0] ?></p>
        </section>
        <hr>
        <h2>Información adicional</h2>
        <hr>
        <section class="flex">
            <section>
                <h3>Diplomas</h3>
            </section>
            <section>
                <h3>Iomas</h3>
            </section>
            <section>
                <h3>Aficiones</h3>
            </section>
        </section>
    </main>

    <aside id="contenedor-aside">
        <h1><?php echo $_SESSION['informacionPersonal'][1]  . " " . $_SESSION['informacionPersonal'][2]  ?></h1>
        <?php echo $_SESSION['informacionPersonal'][0] ?>
        <section>
            <h3>Datos de personales</h3>
            <p>Fecha de nacimiento: <?php echo $_SESSION['informacionPersonal'][12] ?></p>
            <p>Género: <?php echo $_SESSION['informacionPersonal'][13] ?></p>
        </section>
        <section>
            <h3>Dirección:</h3>
            <p>Ciudad: <?php echo $_SESSION['informacionPersonal'][7] ?></p>
            <p>Calle: <?php echo $_SESSION['informacionPersonal'][3] ?></p>
            <p>Codigo postal: <?php echo $_SESSION['informacionPersonal'][5] ?></p>
            <p>Urb: <?php echo $_SESSION['informacionPersonal'][4] ?></p>
        </section>
        <section>
            <h3>Contacto:</h3>
            <p>Correo: <?php echo $_SESSION['informacionPersonal'][9] ?></p>
            <p>Numero: <?php echo $_SESSION['informacionPersonal'][8] ?></p>
        </section>
        <section>
            <h3>Datos de interés</h3>
            <p>Estado civil: <?php echo $_SESSION['informacionPersonal'][11] ?></p>
            <p>DNI: <?php echo $_SESSION['informacionPersonal'][10] ?></p>
        </section>
    </aside>

</body>


</html>