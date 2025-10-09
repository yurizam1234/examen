<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contacto - TECBA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Segoe UI', sans-serif;
      background-color: #ffffff; /* fondo blanco */
      color: #333;
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1; /* ocupa todo el espacio disponible */
      padding: 30px;
    }

    h1 {
      color: #134747;
      text-align: center;
      margin-bottom: 40px;
      font-weight: 700;
    }

    .contact-info, .form-contacto {
      background: #f8f9fa;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }



    .btn-enviar:hover {
      background-color: #205f5a;
      transform: translateY(-2px);
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
      background-color: #000;
      color: #ffffff;
      padding: 15px 0;
      width: 100%;
      text-align: center;
      font-size: 0.9rem;
      flex-shrink: 0; /* evita que se reduzca */
      margin-top: auto; /* fuerza al footer al final */
    }

    footer a {
      color: #00cfff;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    .form-contacto {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <main>
    <h1>Contáctanos</h1>

    <div class="container">
      <div class="row g-4">
        <div class="col-md-5">
          <div class="contact-info">
            <h5>📍 Dirección</h5>
            <p>Calle Pasteur #260, Cochabamba</p>

            <h5>📞 Teléfono</h5>
            <p>+591 67408813</p>

            <h5>📧 Correo electrónico</h5>
            <p>veterinaria.salud@patitasfelices.com</p>

            <h5>🕒 Horarios</h5>
            <p>Lunes a Viernes: 8:00 AM – 7:00 PM<br>Sábados y Domingos: Cerrado</p>
          </div>
        </div>

        <div class="col-md-7">
          <div class="form-contacto">
            <form id="formContacto">
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre completo</label>
                <input type="text" class="form-control" id="nombre" placeholder="Tu nombre" required>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="Correo..@gmail.com" required>
              </div>

              <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" rows="5" placeholder="Escribe tu consulta..." required></textarea>
              </div>

              <button type="submit" class="btn-enviar">Enviar mensaje</button>
            </form>
          </div>
        </div>
      </div>

      <div class="text-center">
        <a href="http://127.0.0.1:8000/" class="btn-patitas">Volver</a>
      </div>
    </div>
  </main>

  <footer>
    &copy; 2025 veterinaria Patitas Felices 🐾. Todos los derechos reservados. <br>
    📧 <a href="mailto:contacto@patitasfelices.com">contacto@tecba.com</a> | ☎️ +591 123 456 789
  </footer>

  <script>
    document.getElementById("formContacto").addEventListener("submit", function(e) {
      e.preventDefault();

      const nombre = document.getElementById("nombre").value.trim();
      const email = document.getElementById("email").value.trim();
      const mensaje = document.getElementById("mensaje").value.trim();

      if (!nombre || !email || !mensaje) {
        alert("⚠️ Por favor, completa todos los campos.");
        return;
      }

      alert("✅ ¡Gracias por contactarte con TECBA! Te responderemos pronto.");
      this.reset();
    });
  </script>
</body>
</html>
