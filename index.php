<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Creaer tu CV</title>
</head>

<body>
<header id="header">
    <h1 id="titulo">CV<span id="color-red">Ideal</span></h1>
</header>
    <main>
        <section class="mostrar section" >
            <form action="index.php" method="post">
                <fieldset class="fieldset">
                    <h2>¿Cómo pueden contactarte los empleadores?</h2>
                    <p>Te recomendamos que incluyas un correo electrónico y un número de teléfono.</p>
                    <legend class="legend">Información personal</legend>
                    <div>
                        <img id="imagen" src="./img/siluetaImg.jpeg" alt="Prototipo de imagen">
                    </div>
                    <div> <input type="file" value="Subir foto"></div>
                    <div class="flex">
                        <div>
                            <div class="max-width-11">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre">
                            </div>
                            <div class="max-width-11">
                                <label for="apellido">Apellido</label>
                                <input type="text" name="apellido">
                            </div>
                        </div>
                        <div>
                            <div class="max-width-11">
                                <label for="calle">Calle</label>
                                <input type="text" name="calle">
                            </div>
                            <div class="max-width-11">
                                <label for="urb">Urb (opcional)</label>
                                <input type="text" name="urb">
                            </div>
                        </div>
                    </div>

                    <div class="flex">
                        <div>
                            <div class="max-width-11">
                                <label for="postal">Código postal</label>
                                <input type="number" name="postal">
                            </div>
                            <div class="max-width-11">
                                <label for="ciudad">Ciudad</label>
                                <input type="text" name="ciudad">
                            </div>
                            <div class="max-width-11">
                                <label for="ccaa">Comunidad autonoma</label>
                                <input type="text" name="ccaa">
                            </div>
                        </div>
                        <div>
                            <div class="max-width-11">
                                <label for="numero">Numero</label>
                                <input type="tel" name="numero">
                            </div>
                            <div class="max-width-11">
                                <label for="email">Correo electronico</label>
                                <input type="email" name="email">
                            </div>
                            <div class="max-width-11">
                                <label for="dni">DNI</label>
                                <input type="password" name="dni">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="max-width-9">
                            <label for="nacimiento">Estado civil</label>
                            <select name="estado">
                                <option value="casado">Casado</option>
                                <option value="soltero" selected>Soltero</option>
                                <option value="divorciado">Divorciado</option>
                                <option value="noviazgo">Noviazgo</option>
                            </select>
                        </div>
                        <div class="max-width-11">
                            <label for="nacimiento">Fecha nacimiento</label>
                            <input type="date" name="nacimiento">
                        </div>
                        <div>
                            <label for="genero">Genero</label>
                            <input type="radio" name="genero" value="hombre"> Hombre
                            <input type="radio" name="genero" value="mujer"> Mujer
                            <input type="radio" name="genero" value="otro"> Otro
                        </div>
                    </div>
                    <input type="reset" value="Borrar" id="reset">
                    <input type="submit" value="Enviar" class="submit" id="formulario1">
                </fieldset>
            </form>
        </section>
        <section class="ocultar">
            <form action="index.php" method="post">
                <fieldset>
                    <h2>Añade tu historial laboral</h2>
                    <p>Comienza por el trabajo más reciente y termina con el más antiguo.</p>
                    <legend>Historial laboral</legend>
                    <div class="flex">
                        <div>
                            <div class="max-width-11">
                                <label for="oficio">Puesto de trabajo</label>
                                <input type="text" name="oficio">
                            </div>
                            <div class="max-width-11">
                                <label for="ciudad">Ciudad</label>
                                <input type="text" name="ciudad">
                            </div>
                        </div>
                        <div>
                            <div class="max-width-11">
                                <label for="empleador">Empleador</label>
                                <input type="text" name="empleador">
                            </div>
                            <div class="max-width-11">
                                <label for="direccion">Dirección </label>
                                <input type="text" name="direccion">
                            </div>
                        </div>
                    </div>

                    <div class="flex">
                        <div>
                            <div class="max-width-11">
                                <label for="mesInicio">Mes de inicio</label>
                                <input type="month" name="mesInicio">
                            </div>
                            <div class="max-width-11">
                                <label for="entrada">Hora de entrada</label>
                                <input type="time" name="entrada">
                            </div>
                        </div>
                        <div>
                            <div class="max-width-11 mgl-2">
                                <label for="mesFin">Mes de finalización</label>
                                <input type="month" name="mesFin">
                            </div>
                            <div class="max-width-11">
                                <label for="salida">Hora de salida</label>
                                <input type="time" name="salida">
                            </div>
                        </div>
                    </div>
                    <div class="flex-columnas">
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" rows="10" cols="10"></textarea>
                        <div><label for="estudiando">Sigo trabajando</label>
                            <input type="checkbox" name="estudiando">
                        </div>
                    </div>
                    <input type="reset" value="Borrar" id="reset">
                    <input type="submit" value="Enviar" class="submit" id="formulario2">
                </fieldset>
            </form>
        </section>
        <section class="ocultar">
            <form action="index.php" method="post">
                <fieldset>
                    <h2>Descríbenos tu formación</h2>
                    <p>Incluye todos los centros, aunque todavía estés allí o no te hayas graduado..</p>
                    <legend>Formación</legend>
                    <div class="flex">
                        <div>
                            <div class="max-width-11">
                                <label for="centro">Nombre del centro</label>
                                <input type="text" name="centro">
                            </div>
                            <div class="max-width-11">
                                <label for="titulo">Título</label>
                                <input type="text" name="titulo">
                            </div>
                        </div>
                        <div>
                            <div class="max-width-11">
                                <label for="ubicacio">Ubicación del centro</label>
                                <input type="text" name="ubicacio">
                            </div>
                            <div class="max-width-11">
                                <label for="direccion">Dirección </label>
                                <input type="text" name="direccion">
                            </div>
                        </div>
                    </div>

                    <div class="flex">
                        <div>
                            <div class="max-width-11">
                                <label for="campoEstudio">Campo de estudio</label>
                                <input type="text" name="campoEstudio">
                            </div>
                        </div>
                        <div>
                            <div class="max-width-12">
                                <label for="titulo">Fecha de obtención del curso</label>
                                <input type="date" name="titulo">
                            </div>

                        </div>
                    </div>
                    <div class="max-width-11">
                        <label for="estudiando">Sigo estudiando</label>
                        <input type="checkbox" name="estudiando">
                    </div>
                    <input type="reset" value="Borrar" id="reset">
                    <input type="submit" value="Enviar" class="submit" id="formulario3">
                </fieldset>
            </form>
        </section>
        <section class="ocultar">
            <form action="index.php" method="post">
                <fieldset>
                    <legend>Aptitudes</legend>
                    <h2>¿Qué aptitudes quieres destacar?</h2>
                    <p>Utiliza las recomendaciones de nuestros expertos, que encontrarás más abajo para comenzar.</p>
                    <div class="max-width-11">
                        <label for="aptitudes">Detalla tus aptitudes</label>
                        <textarea name="aptitudes" id="" cols="30" rows="10"></textarea>
                    </div>
                    <input type="reset" value="Borrar" id="reset">
                    <input type="submit" value="Enviar" class="submit" id="formulario4">
                </fieldset>
            </form>
        </section>
        <section class="ocultar">
            <form action="index.php" method="post">
                <fieldset>
                    <legend>Información adicional</legend>
                    <h2>¿Tienes algo más que añadir?</h2>
                    <p>Estas secciones son opcionales..</p>
                    <div>
                        <label for="diplomas">Diplomas</label>
                        <input type="checkbox" name="diplomas">
                    </div>
                    <div>
                        <label for="idiomas">Idiomas</label>
                        <input type="checkbox" name="idiomas">
                    </div>
                    <div class="max-width-11">
                        <label for="aficiones">Aficiones</label>
                        <textarea name="aficiones" cols="30" rows="10"></textarea>
                    </div>
                    <input type="reset" value="Borrar" id="reset">
                    <input type="submit" value="Enviar" class="submit" id="formulario5">
                </fieldset>
            </form>
        </section>
        <section class="ocultar">
            <button id="btn-crear">Crear Curriculum</button>
        </section>
    </main>

</body>

<script src="https://kit.fontawesome.com/e8d624c6fb.js" crossorigin="anonymous"></script>
<script type="application/javascript" src="./js/cv.js"></script>

</html>