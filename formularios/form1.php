<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>CVIdeal</title>

</head>

<body>
    <header id="header">
        <h1 id="titulo">CV<span id="color-red">Ideal</span></h1>
    </header>
    <section class="mostrar section">
        <form action="form2.php" method="post">
            <fieldset class="fieldset">
                <h2>¿Cómo pueden contactarte los empleadores?</h2>
                <p>Te recomendamos que incluyas un correo electrónico y un número de teléfono.</p>
                <legend class="legend">Información personal</legend>
                <div>
                    <img id="imagen" src="../img/siluetaImg.jpeg" alt="Prototipo de imagen">
                </div>
                <div class="mg-btm-1"> <input type="file" name="img" value="Subir foto"></div>
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
            </fieldset>
        </form>
    </section>

</body>

</html>