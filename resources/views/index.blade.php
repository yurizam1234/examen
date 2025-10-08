<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Patitas Felices</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      font-family: 'Nunito', sans-serif;
      color: #ffffff;
      background-image: url('{{ asset("imagenes/fondo.jpg") }}');
     
    }

    /* Navbar */
    .navbar-custom {
      background-color: #000000;
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
      color: #6cc7c5;
    }

    /* Hero */
    .hero {
      position: relative;
      background: url('{{ asset("imagenes/mascotas.jpg") }}') no-repeat center center;
      background-size: cover;
      height: 80vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 0 20px;
    }

    .hero-content {
      z-index: 2;
      max-width: 800px;
      color: white;
      text-shadow: 0 2px 8px rgba(0,0,0,0.6);
    }

    .hero-content img {
      max-width: 140px;
      margin-bottom: 1rem;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    }

    .hero-content h1 {
      font-weight: 900;
      font-size: 2.5rem;
      margin-bottom: 1rem;
      letter-spacing: 1px;
    }

    .hero-content p {
      font-size: 1.2rem;
      color: #f0f0f0;
      margin-bottom: 2rem;
    }

    .btn-primary {
      background-color: #229fbb;
      border: none;
      font-weight: 300;
    }

    .btn-primary:hover {
      background-color: #0a8499;
    }

    .btn-outline-light {
      border-color: #06e2e2;
      color: #ffffff;
    }

    .btn-outline-light:hover {
      background-color: #fcfcfcd8;
      color: #505050;
    }

    /* Footer */
    footer {
      background-color: #000000;
      color: #ffffff;
      padding: 1.5rem 0;
      text-align: center;
    }

    @media (max-width: 768px) {
      .hero-content h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">Patitas Felices</a>
      <button class="navbar-toggler btn btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPatitas">
        ☰
      </button>
      <div class="collapse navbar-collapse" id="navbarPatitas">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/especialidades') }}">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/equipomedico') }}">Nuestro Equipo</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/agenda') }}">Agendar Cita</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/contacto') }}">Contáctanos</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/inicio') }}">Informacion</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero">
    <div class="hero-content">
      <img src="{{ asset('imagenes/fondo.jpg') }}" alt="Perro y gato" width="300">
      <h1>Bienvenido a Patitas Felices</h1>
      <p>Cuidamos a tus mascotas con amor y profesionalismo</p>
      <a href="{{ url('/verificacion') }}" class="btn btn-primary me-2">Citas Agendadas</a>
      <a href="{{ url('/listadocontacto') }}" class="btn btn-outline-light">Buscar contacto</a>
    </div>
    
  </section>

  <!-- Footer -->
  <footer>
    &copy; 2025 Patitas Felices. Todos los derechos reservados.
  </footer>
</section>
</style>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
