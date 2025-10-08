<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Sobre Nosotros - Patitas Felices</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html, body {
      margin: 0;
      padding: 0;
      min-height: 100%;
      font-family: 'Segoe UI', sans-serif;
      background-color: #ffffff; /* fondo blanco */
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
      padding: 30px;
      max-width: 900px;
      margin: auto;
    }

    h1 {
      color: #19525f;
      margin-bottom: 40px;
      text-align: center;
      font-weight: 700;
    }

    h2 {
      color: #2a7a78;
      margin-bottom: 15px;
    }

    .section {
      margin-bottom: 30px;
      background: #f8f9fa;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .btn-volver {
      background-color: #256270;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 6px;
      display: inline-block;
      margin-top: 20px;
      font-weight: bold;
      transition: background 0.3s, transform 0.2s;
    }

    .btn-volver:hover {
      background-color: #2a7a78;
      transform: translateY(-2px);
    }

    ul {
      padding-left: 20px;
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

    .btn-patitas:active {
      transform: translateY(1px);
    }
  </style>
</head>
<body>

<main>
  <h1>Sobre Nosotros</h1>

  <div class="section">
    <h2>¿Quiénes somos?</h2>
    <p><strong>Patitas Felices</strong> es un refugio y clínica veterinaria dedicada al cuidado integral de mascotas. Brindamos atención con amor, profesionalismo y compromiso hacia su bienestar físico y emocional.</p>
  </div>

  <div class="section">
    <h2>Misión</h2>
    <p>Proporcionar atención veterinaria de calidad, promoviendo la salud, la felicidad y el bienestar de cada mascota, con un enfoque preventivo y personalizado.</p>
  </div>

  <div class="section">
    <h2>Visión</h2>
    <p>Ser el refugio y clínica veterinaria de referencia en Cochabamba, reconocidos por nuestro cuidado integral, ética profesional y compromiso con la comunidad y sus mascotas.</p>
  </div>

  <div class="section">
    <h2>Valores</h2>
    <ul>
      <li><strong>Compromiso:</strong> Cuidamos de cada mascota como si fuera propia.</li>
      <li><strong>Empatía:</strong> Entendemos las necesidades de los animales y sus dueños.</li>
      <li><strong>Calidad:</strong> Brindamos servicios veterinarios profesionales y seguros.</li>
      <li><strong>Accesibilidad:</strong> Atención a todas las mascotas, sin barreras.</li>
      <li><strong>Confianza:</strong> Transparencia y dedicación en cada consulta y tratamiento.</li>
    </ul>
  </div>

  <div class="section">
    <h2>¿Por qué elegirnos?</h2>
    <ul>
      <li>Equipo veterinario altamente capacitado.</li>
      <li>Consultas presenciales y emergencias.</li>
      <li>Precios justos y programas de adopción.</li>
      <li>Enfoque preventivo y cuidado integral.</li>
    </ul>
  </div>

  <div class="section">
    <h2>Servicios principales</h2>
    <ul>
      <li>Medicina General y Vacunación</li>
      <li>Consultas de Comportamiento Animal</li>
      <li>Fisioterapia y Rehabilitación</li>
      <li>Nutrición y Dietas Especiales</li>
      <li>Programas de Adopción y Bienestar</li>
    </ul>
  </div>

  <div class="text-center">
    <a href="http://127.0.0.1:8000/" class="btn-patitas">Volver</a>
  </div>
</main>

<footer>
  &copy; 2025 Patitas Felices. Todos los derechos reservados. <br>
  📧 <a href="mailto:contacto@patitasfelices.com">contacto@patitasfelices.com</a> | ☎️ +591 123 456 789
</footer>

</body>
</html>
