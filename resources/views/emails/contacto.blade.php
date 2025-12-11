<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Contacto</title>
</head>
<body>
    <h1>Nuevo mensaje desde el sitio web PestControl</h1>
    <p><strong>Nombre:</strong> {{ $contacto['nombre'] }}</p>
    <p><strong>Correo:</strong> {{ $contacto['email'] }}</p>
    <p><strong>Mensaje:</strong></p>
    <p>{{ $contacto['mensaje'] }}</p>
</body>
</html>