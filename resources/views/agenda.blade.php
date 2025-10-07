<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agendar Cita - TECBA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f7f7f7;
      padding: 30px;
    }

    h1 {
      color: #2a7a78;
      margin-bottom: 30px;
      text-align: center;
    }

    .form-container {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      max-width: 600px;
      margin: auto;
    }

    .btn-agendar {
      background-color: #2a7a78;
      color: white;
    }

    .btn-agendar:hover {
      background-color: #205f5a;
    }

    .btn-volver {
      background-color: #ccc;
      color: black;
      text-decoration: none;
      padding: 10px 20px;
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

  <h1>Agendar una Cita Médica</h1>

  <div class="form-container">
    <form id="formCita">
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre completo</label>
        <input type="text" class="form-control" id="nombre" placeholder="Tu nombre" required>
      </div>

      <div class="mb-3">
        <label for="especialidad" class="form-label">Especialidad</label>
        <select class="form-select" id="especialidad" required>
          <option selected disabled value="">Selecciona una opción</option>
          <option>Medicina General</option>
          <option>Psicología</option>
          <option>Fisioterapia</option>
          <option>Nutrición</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="fecha" class="form-label">Fecha</label>
        <input type="date" class="form-control" id="fecha" required>
      </div>

      <div class="mb-3">
        <label for="hora" class="form-label">Hora</label>
        <input type="time" class="form-control" id="hora" required>
      </div>

      <div class="mb-3">
        <label for="contacto" class="form-label">Teléfono o correo</label>
        <input type="text" class="form-control" id="contacto" placeholder="Ej: 77712345 o ejemplo@email.com" required>
      </div>

      <button type="submit" class="btn btn-agendar">Agendar Cita</button>
    </form>
  </div>

  <div class="text-center">
    <a href="index.html" class="btn-volver mt-4">← Volver a Inicio</a>
  </div>

  <script>
    const formulario = document.getElementById("formCita");

    formulario.addEventListener("submit", function (e) {
      e.preventDefault();

      const nombre = document.getElementById("nombre").value;
      const especialidad = document.getElementById("especialidad").value;
      const fecha = document.getElementById("fecha").value;
      const hora = document.getElementById("hora").value;
      const contacto = document.getElementById("contacto").value;

      if (!nombre || !especialidad || !fecha || !hora || !contacto) {
        alert("Por favor, completa todos los campos.");
        return;
      }

      const nuevaCita = {
        nombre,
        especialidad,
        fecha,
        hora,
        contacto
      };

      let citas = JSON.parse(localStorage.getItem("citasTecba")) || [];
      citas.push(nuevaCita);
      localStorage.setItem("citasTecba", JSON.stringify(citas));

      alert("✅ ¡Cita registrada correctamente!");
      formulario.reset();
    });
  </script>

</body>
</html>
