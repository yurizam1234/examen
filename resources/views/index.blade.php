<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>TECBA Salud y Bienestar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap" rel="stylesheet" />
  <style>
    body {
  margin: 0;
  font-family: 'Nunito', sans-serif;
  color: white;

  /* Fondo */
  background-image: url('img/rayos\ x.jpg');
  background-repeat: no-repeat;
  background-size: cover;       
  background-position: center;  
  background-attachment: fixed; 
}


    .navbar-custom {
      background-color: #0a0f16;
      padding: 1rem 2rem;
    }

    .navbar-custom .navbar-brand {
      color: white;
      font-weight: 700;
      font-size: 1.5rem;
    }

    .navbar-custom .nav-link {
      color: white;
      font-weight: 600;
      margin-left: 0.5rem;
      transition: color 0.3s;
    }

    .navbar-custom .nav-link:hover {
      color: #00cfff;
    }

.hero {
  position: relative;
  background: url(img/Logo-Principal.jpg) center center / cover no-repeat;
  min-height: 600px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 0 1rem;
  
    }

    .hero::after {
      content: '';
      position: absolute;
      inset: 0;
      background: rgba(13,17,23,0.7);
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 800px;
      color: white;
    }

    .hero-content img {
      max-width: 140px;
      margin-bottom: 1rem;
      border-radius: 12px;
      background-repeat:no-repeat 
      top center;
      background-size: cover;
      box-shadow: 0 4px 20px rgba(0,0,0,0.2);
    }

    .hero-content h1 {
      font-weight: 900;
      font-size: 2.5rem;
      margin-bottom: 1rem;
      letter-spacing: 2px;
    }

    .hero-content p {
      font-size: 1.2rem;
      color: #ccc;
      margin-bottom: 2rem;
    }

    .btn-primary {
      background-color: #00cfff;
      border: none;
      font-weight: 700;
    }

    .btn-primary:hover {
      background-color: #00aac8;
    }

    .bg-dark-section {
      background-color: #161b22;
    }

    h5 {
      font-weight: 700;
      color: #00cfff;
    }

    p {
      color: #ccc;
    }

    footer {
      background-color: #0a0f16;
      color: #aaa;
    }

    @media (max-width: 768px) {
      .hero-content h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
      <a class="navbar-brand" href="#">TECBA Salud</a>
      <button class="navbar-toggler btn btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTecba">
        ☰
      </button>
      <div class="collapse navbar-collapse" id="navbarTecba">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="contactos.html">Contactanos</a></li>
          <li class="nav-item"><a class="nav-link" href="inicio.html">Presentación</a></li>
          <li class="nav-item"><a class="nav-link" href="especialidades.html">Especialidades</a></li>
          <li class="nav-item"><a class="nav-link" href="Equipomedico.html">Equipo Médico</a></li>
          <li class="nav-item"><a class="nav-link" href="Agenda.html">Agendar Cita</a></li>
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero">
    <div class="hero-content">
      <img src="img/logo-tecba.jpeg" alt="Logo TECBA">
      <h1>Bienvenido a TECBA Salud y Bienestar</h1>
      <p>Servicios de salud física y emocional con atención profesional confiable.</p>
      <a href="verificacion.html" class="btn btn-primary me-2">Citas Agendadas</a>
      <a href="Conoce mas.html" class="btn btn-outline-light">Conoce Más</a>
    </div>
  </section>

  <!-- Características -->
  <section class="py-5 bg-dark-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5>👩‍⚕️ Profesionales</h5>
          <p>Especialistas calificados y dedicados.</p>
        </div>
        <div class="col-md-3">
          <h5>💰 Accesibilidad</h5>
          <p>Precios justos y servicios con seguros.</p>
        </div>
        <div class="col-md-3">
          <h5>📅 Agenda Fácil</h5>
          <p>Citas virtuales y presenciales rápidas.</p>
        </div>
        <div class="col-md-3">
          <h5>🧠 Salud Integral</h5>
          <p>Salud física, mental y emocional.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-4">
    &copy; 2025 TECBA Salud y Bienestar. Todos los derechos reservados.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
