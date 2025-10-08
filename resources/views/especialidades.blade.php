<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Especialidades - Patitas Felices</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #ffffff; /* fondo blanco */
      color: #2a7a78; /* letras celestes */
      display: flex;
      flex-direction: column;
      text-align: center;
    }

    main {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center; /* centra verticalmente */
      align-items: center; /* centra horizontalmente */
      padding: 40px 20px;
    }

    h1 {
      color:#1c6362;
      margin-bottom: 40px;
      font-weight: 700;
    }

    .especialidad-card {
      background: #f8f9fa;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      padding: 25px 15px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .especialidad-card:hover {
      transform: translateY(-7px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .especialidad-card img {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 15px;
      border: 3px solid #2a7a78;
    }

    .especialidad-card h5 {
      margin-top: 10px;
      color: #2a7a78;
      font-weight: 600;
    }

    .especialidad-card p {
      color: #555;
      font-size: 0.95rem;
      margin-top: 5px;
    }


    .container {
      max-width: 1100px;
    }

    footer {
      background-color: #000000; /* fondo claro */
      color: #feffff; /* letras celestes */
      font-size: 0.9rem;
      padding: 20px 0;
      text-align: center;
    }

    footer a {
      color: #00cfff;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
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

  </style>
</head>
<body>

  <main>
    <h1>Especialidades de Patitas Felices</h1>

    <div class="container">
      <div class="row g-4 justify-content-center">
        <div class="col-md-4">
          <div class="especialidad-card">
            <img src="{{ asset('imagenes/general.jpg') }}"  width="100">
            <h5>Medicina General</h5>
            <p>Consulta integral para todas las mascotas.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="especialidad-card">
            <img src="{{ asset('imagenes/mental.jpg') }}"  width="100">
            <h5>Salud Mental</h5>
            <p>Apoyo emocional y bienestar psicológico para tus mascotas.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="especialidad-card">
            <img src="{{ asset('imagenes/reabilitacion.jpg') }}"  width="100">
            <h5>Rehabilitación</h5>
            <p>Fisioterapia, nutrición y terapias alternativas.</p>
          </div>
        </div>
      </div>
    </div>
<br> <br>
    <a href="http://127.0.0.1:8000/" class="btn-patitas">Volver</a>
  </main>

  <footer>
    &copy; 2025 Patitas Felices. Todos los derechos reservados. <br>
    📧 <a href="mailto:contacto@patitasfelices.com">contacto@patitasfelices.com</a> | ☎️ +591 123 456 789
  </footer>

</body>
</html>
