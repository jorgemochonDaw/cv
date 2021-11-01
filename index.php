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
    <main id="contenedor-main">
        <section class="section-1">
            <h2 class="color-azul bold">¿Cómo pueden contactarte los empleadores?</h2>
            <p id="color-p">Te recomendamos que incluyas un correo electrónico y un número de teléfono.</p>
        </section>
        <section class="flex">
            <form action="Encabezado.php" method="post">
                <div class="flex-columnas" id="contenedor-imagen">
                    <div>
                        <img id="imagen" src="./img/siluetaImg.jpeg" alt="Prototipo de imagen">
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
                <div class="flex flex-coumnas mgl-20-5"">
                <div class=" max-width-11">
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
                <fieldset class="flex mgl-20-5 mgt-1 ">
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
                <input type="reset" value="Borrar" id="reset">
                <input type="submit" value="Enviar" id="submit">
            </form>
        </section>
        <section class="section-1">
            <h2 class="color-azul bold">Añade tu historial laboral</h2>
            <p id="color-p">Comienza por el trabajo más reciente y termina con el más antiguo.</p>
        </section>
        <section>
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
                            <input type="text" name="empleador">
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
                <input type="reset" value="Borrar" id="reset">
                <input type="submit" name="experiencia" value="Enviar" id="submit">
            </form>
        </section>
    </main>

</body>

<script src="https://kit.fontawesome.com/e8d624c6fb.js" crossorigin="anonymous"></script>

</html>