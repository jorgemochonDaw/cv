<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creaer tu CV</title>
</head>

<body>
    <header>
        <h1>Curriculum</h1>
    </header>
    <main>
        <section>
            <form action="index.php">
                <fieldset>
                    <legend>Información personal</legend>

                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre">

                    <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido">

                    <label for="email">Email:</label>
                    <input type="text" name="email">

                    <label for="numero">Numero:</label>
                    <input type="text" name="numero">

                    <label for="dni">DNI:</label>
                    <input type="password" name="dni">

                    <label for="genero">Seleccione el genero
                        <input type="radio" name="hombre" value="hombre">
                        <label for="hombre">Hombre</label>

                        <input type="radio" name="mujer" value="mujer">
                        <label for="mujer">Mujer</label>

                        <input type="radio" name="otro" value="otro">
                        <label for="otro">Otro</label>
                    </label>

                    <label for="img">Foto:</label>
                    <input type="file" name="img">
                </fieldset>


            </form>
        </section>
    </main>
</body>

</html>