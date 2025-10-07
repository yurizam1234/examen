<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Especialidades - TECBA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #0af5c65b;
      color: #333;
    }

    h1 {
      color: #2a7a78;
      margin-bottom: 30px;
    }

    .especialidad-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      padding: 20px;
      text-align: center;
      transition: transform 0.3s;
    }

    .especialidad-card:hover {
      transform: translateY(-5px);
    }

    .especialidad-card img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 15px;
      
    }

    .btn-volver {
      background-color: #2a7a78;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      display: inline-block;
      margin-top: 30px;
    }

    .btn-volver:hover {
      background-color: #205f5a;
    }
  </style>
</head>
<body>
  <h1>Especialidades Médicas TECBA</h1>

  <div class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="especialidad-card">
          <img src="img/medicina-general.jpg" alt="Medicina General">
          <h5>Medicina General</h5>
          <p>Consulta integral para todas las edades.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="especialidad-card">
          <img src="img/salud-mental.webp" alt="Salud Mental">
          <h5>Salud Mental</h5>
          <p>Psicología, psiquiatría y apoyo emocional.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="especialidad-card">
          <img src="img/logo-tecba.jpeg" alt="Rehabilitación">
          <h5>Rehabilitación</h5>
          <p>Fisioterapia, nutrición y terapias alternativas.</p>
        </div>
      </div>
    </div>
  </div>

  <a href="index.html" class="btn-volver">← Volver a Inicio</a>
</body>
</html>
