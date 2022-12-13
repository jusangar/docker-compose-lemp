<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
    <meta name="description" content="Formulario con reCAPTCHA v2 by
            parzibyte">
    <meta name="author" content="Parzibyte">
    <title>Formulario con reCAPTCHA v2 by parzibyte</title>
    <!-- No olvides cargar el script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
<h2 class="text-center">Bienvenido de nuevo</h2>
<form action="formvalidator.php" method="POST">
    <label for="correo">Correo</label>
    <br>
    <input id="correo" name="correo"
           type="email"
           placeholder="Correo electrónico">
    <br><br>
    <label for="palabraSecreta">Contraseña</label>
    <br>
    <input id="palabraSecreta" name="palabraSecreta"
           type="password"
           placeholder="Contraseña">
    <br>
    <br>
    <!--
                    A continuación colocamos el div en donde será
                    inyectado el input
                -->
    <div
            class="g-recaptcha"
            data-sitekey="$CLAVEWEB">
    </div>
    <br>
    <button type="submit" class="btn btn-primary mb-2">
        Entrar
    </button>
</form>
</body>
</html>