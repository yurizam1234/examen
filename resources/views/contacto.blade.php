<!DOCTYPE html> 
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contacto - TECBA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #0b95d0;
      padding: 30px;
    }

    h1 {
      color: #ffffff;
      margin-bottom: 30px;
      text-align: center;
    }

    .contact-info {
      margin-bottom: 40px;
      background: white;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .form-contacto {
      background: white;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .btn-enviar {
      background-color: #2a7a78;
      color: white;
    }

    .btn-enviar:hover {
      background-color: #205f5a;
    }

    .btn-volver {
      background-color: #ccc;
      color: black;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      display: inline-block;
      margin-top: 30px;
    }

    .btn-volver:hover {
      background-color: #aaa;
    }
  </style>
</head>
<body>

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
          <p>tecba.salud@gmail.com</p>

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
              <input type="email" class="form-control" id="email" placeholder="tu@email.com" required>
            </div>

            <div class="mb-3">
              <label for="mensaje" class="form-label">Mensaje</label>
              <textarea class="form-control" id="mensaje" rows="5" placeholder="Escribe tu consulta..." required></textarea>
            </div>

            <button type="submit" class="btn btn-enviar">Enviar mensaje</button>
          </form>
        </div>
      </div>
    </div>

    <div class="text-center">
      <a href="index.html" class="btn-volver">← Volver a Inicio</a>
    </div>
  </div>

  <script>
    document.getElementById("formContacto").addEventListener("submit", function(e) {
      e.preventDefault(); // evitar recarga de la página

      const nombre = document.getElementById("nombre").value.trim();
      const email = document.getElementById("email").value.trim();
      const mensaje = document.getElementById("mensaje").value.trim();

      if (!nombre || !email || !mensaje) {
        alert("⚠️ Por favor, completa todos los campos.");
        return;
      }

      alert("✅ ¡Gracias por contactarte con TECBA! Te responderemos pronto.");

      this.reset(); // limpiar el formulario
    });
  </script>

</body>
</html>
