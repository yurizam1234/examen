<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Equipo Médico - TECBA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Segoe UI', sans-serif;
      background-color: #ffffff66;
      color: #333;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    main {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center; /* centra verticalmente */
      align-items: center;    /* centra horizontalmente */
      text-align: center;
      padding: 20px;
      
    }

    h1 {
      color: #144b4a;
      text-align: center;
      margin-bottom: 40px;
      font-weight: 700;
    }

    .doctor-card {
      background-color: #9edcf856;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      padding: 25px 15px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
      height: 100%;
    }

    .doctor-card:hover {
      transform: translateY(-7px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .doctor-card img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
      border: 3px solid #2a7a78;
    }

    .doctor-card h5 {
      margin-top: 10px;
      color: #2a7a78;
      font-weight: 600;
    }

    .doctor-card p {
      color: #555;
      font-size: 0.95rem;
      margin-top: 5px;
    }

    .btn-patitas {
      background-color: #2a7a78; /* azul Patitas */
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 6px;
      font-weight: bold;
      transition: background 0.3s, transform 0.2s;
    }
    .btn-patitas:hover {
      background-color: #00aac8;
      transform: translateY(-2px);
    }
      .container {
        max-width: 1200px;
        margin: 0 auto;
      }

    footer {
      text-align: center;
      color: #fff;
      background-color: #000;
      padding: 1.5rem 0;
      font-size: 0.9rem;
      width: 100%;
    }

    footer a {
      color: #00cfff;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    

  </style>
</head>
<body>
  <main>
  <h1>Nuestro Equipo Veterinario</h1>

<div class="container">
  <div class="row g-4 justify-content-center">
    
    <div class="col-md-4">
      <div class="doctor-card">
        <img src="{{ asset('imagenes/dra.1.jpg') }}"  width="300">
        <h5>Dra. Stephanie Wosniack</h5>
        <p>Medicina Veterinaria General</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="doctor-card">
      <img src="{{ asset('imagenes/dr.2.jpg') }}"  width="300">
        <h5>Dr. Andrés Rodríguez</h5>
        <p>Cirugía Veterinaria</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="doctor-card">
        <img src="{{ asset('imagenes/dra.3.jpg') }}"  width="300">
        <h5>Dra. Carla Salgado</h5>
        <p>Fisioterapia y Rehabilitación Animal</p>
      </div>
    </div>

  </div>
</div>


    <div class="text-center">
      <a href="http://127.0.0.1:8000/" class="btn-patitas">Volver</a>
    </div>
  </main>

  <footer>
    &copy; 2025 TECBA. Todos los derechos reservados. <br>
    📧 <a href="mailto:contacto@tecba.com">contacto@tecba.com</a> | ☎️ +591 123 456 789
  </footer>
</body>
</html>
