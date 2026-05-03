<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        .container { background-color: #ffffff; padding: 30px; border-radius: 10px; max-width: 600px; margin: auto; }
        .header { background-color: #6c63ff; color: white; padding: 20px; border-radius: 10px 10px 0 0; text-align: center; }
        .content { padding: 20px; color: #333; }
        .footer { text-align: center; color: #999; font-size: 12px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>¡Bienvenido a Activity 9! 🎉</h1>
        </div>
        <div class="content">
            <h2>Hola, {{ $user->name }}!</h2>
            <p>Tu cuenta ha sido creada exitosamente.</p>
            <p>Ya puedes iniciar sesión y acceder al Dashboard.</p>
            <p>Gracias por registrarte.</p>
        </div>
        <div class="footer">
            <p>© 2024 Activity 9 — Este es un email automático.</p>
        </div>
    </div>
</body>
</html>