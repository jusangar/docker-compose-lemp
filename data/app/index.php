<!doctype html>
<html lang="es">
<head>
    <title>Prueba reCAPTCHA</title>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("demo-form").submit();
        }
    </script>
</head>



<body>
<h2 class="text-center">Bienvenido de nuevo</h2>
<form id="demo-form" method="POST">
    <label for="email">Correo</label>
    <br>
    <input id="email" name="email"
           type="email"
           placeholder="Correo electrónico">
    <br><br>
    <label for="password">Contraseña</label>
    <br>
    <input id="password" name="password"
           type="password"
           placeholder="Contraseña">
    <br>
    <button class="g-recaptcha"
            data-sitekey="${RECAPTCHA}"
            data-callback='onSubmit'
            data-action='submit'>Submit</button>
</form>
</body>
</html>