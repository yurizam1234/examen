<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio - Patitas Felices</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Segoe UI', sans-serif;
      background-color: #ffffff; /* fondo plomo */
      color: #000000; /* letras blancas */
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    main {
      flex: 1; /* ocupa todo el espacio disponible */
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 20px;
    }

    h1 {
      color: #10404d;
      margin-bottom: 1rem;
      font-size: 2.2rem;
      font-weight: 700;
    }

    p {
      color: #2c2c2c;
      margin-bottom: 1.5rem;
      font-size: 1.1rem;
    }

    img {
      max-width: 150px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.2);
      margin-bottom: 1.5rem;
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

    footer {
      text-align: center;
      color: #ccc;
      background-color: #000000;
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
  <img src="{{ asset('imagenes/bienvenido.jpg') }}"  width="400">
  <h1>Bienvenido a Patitas Felices</h1>
  <p>Has ingresado correctamente. Aquí puedes explorar nuestros servicios, conocer a nuestro equipo y descubrir cómo cuidamos a tus mascotas.</p>
  <a href="http://127.0.0.1:8000/" class="btn-volver">Volver</a>
  </main>

  <footer>
  &copy; 2025 Patitas Felices. Todos los derechos reservados. <br>
  📧 <a href="mailto:contacto@patitasfelices.com">contacto@patitasfelices.com</a> | ☎️ +591 123 456 789
  </footer>
</body>
</html>
