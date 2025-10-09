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
      justify-content: center;
      align-items: center;
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
      position: relative;
      overflow: hidden;
      height: 260px;
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
      margin-bottom: 10px;
      border: 3px solid #2c3636;
      transition: transform 0.3s;
    }

    .doctor-card:hover img {
      transform: scale(1.1);
    }

    .doctor-card h5 {
      margin-top: 10px;
      color: #2a7a78;
      font-weight: 600;
    }

    /* Ocultar descripción hasta pasar el mouse */
    .doctor-card p {
      color: #555;
      font-size: 0.95rem;
      opacity: 0;
      max-height: 0;
      overflow: hidden;
      transition: opacity 0.4s ease, max-height 0.4s ease;
    }

    .doctor-card:hover p {
      opacity: 1;
      max-height: 100px;
      margin-top: 8px;
    }

    .btn-patitas {
      background-color: #2a7a78;
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
            <img src="{{ asset('imagenes/dra.1.jpg') }}" alt="Dra. Stephanie Wosniack">
            <h5>Dra. Stephanie Wosniack</h5>
            <p>Medicina Veterinaria General y cuidado integral de pequeños animales.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="doctor-card">
            <img src="{{ asset('imagenes/dr.2.jpg') }}" alt="Dr. Andrés Rodríguez">
            <h5>Dr. Andrés Rodríguez</h5>
            <p>Especialista en Cirugía Veterinaria y anestesia avanzada.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="doctor-card">
            <img src="{{ asset('imagenes/dra.3.jpg') }}" alt="Dra. Carla Salgado">
            <h5>Dra. Carla Salgado</h5>
            <p>Experta en Fisioterapia y Rehabilitación Animal postoperatoria.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="doctor-card">
            <img src="{{ asset('imagenes/dr.4.jpg') }}" alt="Dr. Pablo Gutiérrez">
            <h5>Dr. Pablo Gutiérrez</h5>
            <p>Cardiólogo veterinario con experiencia en diagnóstico por ecocardiografía.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="doctor-card">
            <img src="{{ asset('imagenes/dra.5.jpg') }}" alt="Dra. Valeria Quispe">
            <h5>Dra. Valeria Quispe</h5>
            <p>Dermatóloga veterinaria especializada en alergias y problemas cutáneos.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="doctor-card">
            <img src="{{ asset('imagenes/dr.6.jpg') }}" alt="Dr. Daniel Suárez">
            <h5>Dr. Daniel Suárez</h5>
            <p>Odontólogo veterinario, experto en limpieza dental y salud bucal animal.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="doctor-card">
            <img src="{{ asset('imagenes/dra.7.jpg') }}" alt="Dra. Fernanda Ríos">
            <h5>Dra. Fernanda Ríos</h5>
            <p>Oftalmóloga veterinaria dedicada al cuidado visual de perros y gatos.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="doctor-card">
            <img src="{{ asset('imagenes/dr.8.jpg') }}" alt="Dr. Jorge Medina">
            <h5>Dr. Jorge Medina</h5>
            <p>Especialista en comportamiento y bienestar emocional animal.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="doctor-card">
            <img src="{{ asset('imagenes/dra.9.jpg') }}" alt="Dra. Camila Navarro">
            <h5>Dra. Camila Navarro</h5>
            <p>Nutricionista veterinaria, crea dietas personalizadas para cada mascota.</p>
          </div>
        </div>

      </div>
    </div>

    <br><br>
    <div class="text-center">
      <a href="http://127.0.0.1:8000/" class="btn-patitas">Volver</a>
    </div>
  </main>

  <footer>
    &copy; 2025 Veterinaria Patitas Felices 🐾 . Todos los derechos reservados. <br>
    📧 <a href="mailto:contacto@tecba.com">contacto@tecba.com</a> | ☎️ +591 123 456 789
  </footer>

</body>
</html>
