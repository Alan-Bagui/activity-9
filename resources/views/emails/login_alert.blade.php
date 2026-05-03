<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        .container { background-color: #ffffff; padding: 30px; border-radius: 10px; max-width: 600px; margin: auto; }
        .header { background-color: #e53e3e; color: white; padding: 20px; border-radius: 10px 10px 0 0; text-align: center; }
        .content { padding: 20px; color: #333; }
        .footer { text-align: center; color: #999; font-size: 12px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Alerta de Inicio de Sesión</h1>
        </div>
        <div class="content">
            <h2>Hola, {{ $user->name }}!</h2>
            <p>Se ha detectado un inicio de sesión en tu cuenta.</p>
            <p><strong>Fecha y hora:</strong> {{ now()->format('d/m/Y H:i:s') }}</p>
            <p>Si no fuiste tú, cambia tu contraseña inmediatamente.</p>
        </div>
        <div class="footer">
            <p>© 2024 Activity 9 — Este es un email automático.</p>
        </div>
    </div>
</body>
</html>