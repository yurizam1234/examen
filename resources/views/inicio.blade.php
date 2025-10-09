<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Patitas Felices - Refugio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Segoe UI', sans-serif;
      background-color: #ffffff; /* fondo blanco */
      color: #1e1f1f; /* letras celestes */
    }

    body {
      display: flex;
      flex-direction: column;
      justify-content: center; /* centra verticalmente */
      align-items: center; /* centra horizontalmente */
      text-align: center;
    }

    .contenido {
      flex: 1; /* ocupa espacio disponible para centrar */
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    h1 {
      margin-bottom: 1rem;
      color: #144b4a;
      font-weight: 700;
    }

    p {
      color: #232424;
      margin-bottom: 2rem;
      font-size: 1.1rem;
    }

    img {
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.2);
      margin-bottom: 20px;
    }


    .nav-link {
      color: #2a7a78;
      font-weight: bold;
      margin-left: 15px;
      text-decoration: none;
    }
    .btn-nav:hover {
      color: #00aac8;
      text-decoration: underline;
    }
    .btn-nav {
      background-color: #2a7a78; 
      color: white;
      font-weight: bold;
      padding: 10px 20px;
      border-radius: 6px;
      text-decoration: none;
      transition: background 0.3s;
      margin-left: 15px;
    }

    footer {
      background-color: #000000;
      color: #ffffff;
      padding: 15px 0;
      width: 100%;
      text-align: center;
      font-size: 0.9rem;
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

  <div class="contenido">
    <img src="{{ asset('imagenes/confianza.jpg') }}"  width="400">
    <h1>Somos tu Refugio de Confianza</h1>
    <p>Descubre cómo cuidamos a tus mascotas con amor y dedicación</p>
    <a class="nav-link" href="{{ url('/conocemas') }}">Mayor informacion</a>
    <a href="http://127.0.0.1:8000/" class="btn-patitas">Volver</a>
  </div> 

  <footer>
    &copy; 2025 veterinaria Patitas Felices 🐾. Todos los derechos reservados. <br>
    📧 <a href="mailto:contacto@patitasfelices.com">contacto@patitasfelices.com</a> | ☎️ +591 123 456 789
  </footer>

</body>
</html>
