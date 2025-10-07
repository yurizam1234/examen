<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>TECBA Salud y Bienestar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: url('img/hero-bg.jpg') center/cover no-repeat;
      color: white;
      height: 100vh;
      position: relative;
    }

    .overlay {
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.6);
    }

    .contenido {
      position: relative;
      z-index: 1;
      text-align: center;
      top: 30%;
      padding: 20px;
    }

    .btn-tecba {
      background-color: #ff6f00;
      color: white;
      font-weight: bold;
      padding: 10px 20px;
      border-radius: 6px;
      text-decoration: none;
    }

    .btn-tecba:hover {
      background-color: #cc5900;
    }
  </style>
</head>
<body>
  <div class="overlay"></div>

  <div class="contenido">
    <img src="img/logo-tecba.jpeg" alt="TECBA" width="150"><br><br>
    <h1>Bienvenido a TECBA Salud y Bienestar</h1>
    <p>Impulsamos tu bienestar físico, emocional y educativo.</p>
    <a href="index.html" class="btn-tecba">Volver al Inicio </a>
    
  </div>
</body>
</html>
    