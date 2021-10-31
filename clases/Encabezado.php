<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/headerEncabezado.css">
    <link rel="stylesheet" href="../css/encabezado.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <title>Document</title>
</head>

<body>
    <?php
    include '../reutilizar/headerEncabezado.php';
    ?>
    <main id="contenedor-main">
        <section class="section-1">
            <h2 class="color-azul bold">¿Cómo pueden contactarte los empleadores?</h2>
            <p id="color-p">Te recomendamos que incluyas un correo electrónico y un número de teléfono.</p>
        </section>
        <form action="Encabezado.php" method="post">
            <section class="flex">
                <div class="flex-columnas" id="contenedor-imagen">
                    <div>
                        <img id="imagen" src="../img/siluetaImg.jpeg" alt="Prototipo de imagen">
                    </div>
                    <div> <input type="file" value="Subir foto"></div>
                </div>
                <div class="flex-columnas">
                    <div class="flex">
                        <div class="max-width-11">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre">
                        </div>
                        <div class="max-width-11">
                            <label for="apellido">Apellido</label>
                            <input type="text" name="apellido">
                        </div>
                    </div>
                    <div class="flex">
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
            </section>
            <section class="flex-coumnas mgl-20-5">
                <div class="flex">
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
                <div class="flex">
                    <div class="max-width-11">
                        <label for="numero">Numero</label>
                        <input type="tel" name="numero">
                    </div>
                    <div class="max-width-11">
                        <label for="email">Correo electronico</label>
                        <input type="email" name="email">
                    </div>
                </div>
            </section>
            <section class="flex mgl-20-5 mgt-1 ">
                <fieldset>
                    <legend>Contenido adcional</legend>
                    <select name="estado">
                        <option value="casado">Casado</option>
                        <option value="soltero" selected>Soltero</option>
                        <option value="divorciado">Divorciado</option>
                        <option value="noviazgo">Noviazgo</option>
                    </select>
                    <label for="nacimiento">Fecha nacimiento</label>
                    <input type="date" name="nacimiento">
                    <label for="dni">DNI</label>
                    <input type="password" name="dni">

                    <label for="genero">Género</label>
                    <input type="radio" name="genero" value="hombre"> Hombre
                    <input type="radio" name="genero" value="mujer"> Mujer
                    <input type="radio" name="genero" value="otro"> Otro

                </fieldset>
            </section>
            <section>
                <input type="reset" value="Borrar" id="reset">
                <input type="submit" value="Enviar" id="submit">
                <div id="btn-a" class="mgt-1">
                <a href="http://192.168.64.2/php/cv/clases/Laboral.php">
                    Siguiente: Historial laboral
                </a>
                </div>
            </section>
        </form>
    </main>
</body>

</html>