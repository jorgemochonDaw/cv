<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Creaer tu CV</title>
    <?php

    if (isset($_POST['informacionLaboral'])) {
        $oficio = $_POST['oficio'];
        $ciudad = $_POST['ciudad'];
        $empleador = $_POST['empleador'];
        $direccion = $_POST['direccion'];
        $mesInicio = $_POST['mesInicio'];
        $entrada = $_POST['entrada'];
        $mesFin = $_POST['mesFin'];
        $salida = $_POST['salida'];
        $descripcion = $_POST['descripcion'];
        $estudiando = $_POST['estudiando'];
    }

    if (isset($_POST['informacionAptitudes'])) {
        $centro = $_POST['centro'];
        $titulo = $_POST['titulo'];
        $ubicacion = $_POST['ubicacion'];
        $direccion = $_POST['direccion'];
        $campoEstudio = $_POST['campoEstudio'];
        $fechaTitulo = $_POST['fechaTitulo'];
        $seguirEstudiando = $_POST['seguirEstudiando'];
    }

    if (isset($_POST['informacionFormacion'])) {
        $aptitudes = $_POST['aptitudes'];
    }

    if (isset($_POST['informacionAdicional'])) {
        $diplomas = $_POST['diplomas'];
        $idiomas = $_POST['idiomas'];
        $aficiones = $_POST['aficiones'];
    }
    ?>
</head>

<body>
    <header id="header">
        <h1 id="titulo">CV<span id="color-red">Ideal</span></h1>
    </header>
    <main>
        <section class="mostrar section">
            <form action="index.php" method="post">
                <fieldset class="fieldset">
                    <h2>¿Cómo pueden contactarte los empleadores?</h2>
                    <p>Te recomendamos que incluyas un correo electrónico y un número de teléfono.</p>
                    <legend class="legend">Información personal</legend>
                    <div>
                        <img id="imagen" src="./img/siluetaImg.jpeg" alt="Prototipo de imagen">
                    </div>
                    <div class="mg-btm-1"> <input type="file" value="Subir foto"></div>
                    <div class="flex">
                        <div>
                            <div class="max-width-11 mg-btm-1">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre">
                            </div>
                            <div class="max-width-11 mg-btm-1">
                                <label for="apellido">Apellido</label>
                                <input type="text" name="apellido">
                            </div>
                        </div>
                        <div>
                            <div class="max-width-11 mg-btm-1">
                                <label for="calle">Calle</label>
                                <input type="text" name="calle">
                            </div>
                            <div class="max-width-11 mg-btm-1">
                                <label for="urb">Urb (opcional)</label>
                                <input type="text" name="urb">
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                            <div class="max-width-11 mg-btm-1">
                                <label for="postal">Código postal</label>
                                <input type="number" name="postal">
                            </div>
                            <div class="max-width-11 mg-btm-1">
                                <label for="ciudad">Ciudad</label>
                                <input type="text" name="ciudad">
                            </div>
                            <div class="max-width-11 mg-btm-1">
                                <label for="ccaa">Comunidad autonoma</label>
                                <input type="text" name="ccaa">
                            </div>
                        </div>
                        <div>
                            <div class="max-width-11 mg-btm-1">
                                <label for="numero">Numero</label>
                                <input type="tel" name="numero">
                            </div>
                            <div class="max-width-11 mg-btm-1">
                                <label for="email">Correo electronico</label>
                                <input type="email" name="email">
                            </div>
                            <div class="max-width-11 mg-btm-1">
                                <label for="dni">DNI</label>
                                <input type="password" name="dni">
                            </div>
                        </div>
                    </div>
                    <div class="max-width-9 mg-btm-1 flex">
                        <div>
                            <label for="nacimiento">Estado civil</label>
                            <select name="estado">
                                <option value="casado">Casado</option>
                                <option value="soltero" selected>Soltero</option>
                                <option value="divorciado">Divorciado</option>
                                <option value="noviazgo">Noviazgo</option>
                            </select>
                        </div>
                        <div class="max-width-11 mg-btm-1 mgl-2">
                            <label for="nacimiento">Fecha nacimiento</label>
                            <input type="date" name="nacimiento">
                        </div>
                    </div>
                    <div class="mg-btm-1">
                        <label for="genero">Genero</label>
                        <input type="radio" name="genero" value="hombre"> Hombre
                        <input type="radio" name="genero" value="mujer"> Mujer
                        <input type="radio" name="genero" value="otro"> Otro
                    </div>
                    <input type="reset" value="Borrar" class="reset">
                    <input type="submit" value="Guardar datos" class="submit" name="informacionPersonal">
                    <button class="submit" id="formulario1">Continuar</button>
                </fieldset>
            </form>
        </section>
        <section class="ocultar section">
            <form action="index.php" method="post">
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
                    <button class="submit" id="formulario2">Continuar</button>
                </fieldset>
            </form>
        </section>
        <section class="ocultar section">
            <form action="index.php" method="post">
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
                    <button class="submit" id="formulario3">Continuar</button>
                </fieldset>
            </form>
        </section>
        <section class="ocultar section">
            <form action="index.php" method="post">
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
                    <button class="submit" id="formulario4">Continuar</button>
                </fieldset>
            </form>
        </section>
        <section class="ocultar section">
            <form action="index.php" method="post">
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
                    <button class="submit" id="formulario5">Continuar</button>
                </fieldset>
            </form>
        </section>
        <section class="ocultar">
            <button id="btn-crear">Generar CV</button>
        </section>
        <section class="ocultar" id="sectionShow">
            <?php
            if (isset($_POST['informacionPersonal'])) {
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $calle = $_POST['calle'];
                $urb = $_POST['urb'];
                $postal = $_POST['postal'];
                $ciudad = $_POST['ciudad'];
                $ccaa = $_POST['ccaa'];
                $numero = $_POST['numero'];
                $email = $_POST['email'];
                $dni = $_POST['dni'];
                $estado = $_POST['estado'];
                $nacimiento = $_POST['nacimiento'];
                $genero = $_POST['genero'];
            ?>
                <h2><?php echo $nombre ?></h2>
                <p><?php echo $apellido ?></p>
                <p><?php echo $calle ?></p>
                <p><?php echo $urb ?></p>
                <p><?php echo $postal ?></p>
                <p><?php echo $ciudad ?></p>
                <p><?php echo $ccaa ?></p>
                <p><?php echo $numero ?></p>
                <p><?php echo $email ?></p>
                <p><?php echo $dni ?></p>
                <p><?php echo $estado ?></p>
                <p><?php echo $nacimiento ?></p>
                <p><?php echo $genero ?></p>
            <?php
            }
            ?>
        </section>
    </main>

</body>

<script src="https://kit.fontawesome.com/e8d624c6fb.js" crossorigin="anonymous"></script>
<script type="application/javascript" src="./js/cv.js"></script>

</html>