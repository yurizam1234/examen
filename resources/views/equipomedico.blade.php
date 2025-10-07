<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Equipo Médico - TECBA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #1ca44e66;
      color: #333;
      padding: 20px;
    }

    h1 {
      color: #2a7a78;
      margin-bottom: 40px;
      text-align: center;
    }

    .doctor-card {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
      padding: 20px;
      text-align: center;
      transition: transform 0.3s;
      height: 100%;
    }

    .doctor-card:hover {
      transform: translateY(-5px);
    }

    .doctor-card img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
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
  <h1>Nuestro Equipo Médico</h1>

  <div class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="doctor-card">
          <img src="img/dra_wosniack.jpg" alt="Dra. Stephanie Wosniack">
          <h5>Dra. Stephanie Wosniack</h5>
          <p>Medicina General</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="doctor-card">
          <img src="img/DR. Andres.jpg" alt="Dr. Andrés Rodríguez">
          <h5>Dr. Andrés Rodríguez</h5>
          <p>Psicología Clínica</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="doctor-card">
          <img src="img/fisio.jpeg" alt="Dra. Carla Salgado">
          <h5>Dra. Carla Salgado</h5>
          <p>Fisioterapia y Rehabilitación</p>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center">
    <a href="index.html" class="btn-volver">← Volver a Inicio</a>
  </div>
</body>
</html>
