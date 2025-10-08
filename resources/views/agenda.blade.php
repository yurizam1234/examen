<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agendar Cita - TECBA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Segoe UI', sans-serif;
      background-color: #ffffff; /* fondo blanco */
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1; /* ocupa todo el espacio disponible */
      padding: 30px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
    }

    h1 {
      color: #10414d;
      text-align: center;
      margin-bottom: 30px;
      font-weight: 700;
    }

    .form-container {
      background: #f8f9fa;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      max-width: 600px;
      width: 100%;
      margin-bottom: 20px;
    }

    .btn-agendar {
      background-color: #2a7a78;
      color: white;
      border: none;
      font-weight: bold;
      transition: background 0.3s, transform 0.2s;
    }

    .btn-agendar:hover {
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
      text-align: center;
      color: #ffffff;
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

      <button type="submit" class="btn btn-agendar w-100">Agendar Cita</button>
    </form>
  </div>

  <a href="http://127.0.0.1:8000/" class="btn-patitas">Volver</a>
</main>

<footer>
  &copy; 2025 TECBA. Todos los derechos reservados. <br>
  📧 <a href="mailto:contacto@tecba.com">contacto@tecba.com</a> | ☎️ +591 123 456 789
</footer>

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

    const nuevaCita = { nombre, especialidad, fecha, hora, contacto };

    let citas = JSON.parse(localStorage.getItem("citasTecba")) || [];
    citas.push(nuevaCita);
    localStorage.setItem("citasTecba", JSON.stringify(citas));

    alert("✅ ¡Cita registrada correctamente!");
    formulario.reset();
  });
</script>

</body>
</html>
