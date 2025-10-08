<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Verificación de Citas - Patitas Felices</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Flex para sticky footer */
    html, body {
      height: 100%;
      margin: 0;
    }
    body {
      display: flex;
      flex-direction: column;
      font-family: 'Segoe UI', sans-serif;
      background-color: #ffffff;
      color: #333;
    }

    main {
      flex: 1; /* ocupa todo el espacio disponible */
      padding: 40px 20px;
      text-align: center;
    }

    h1 {
      color: #2a7a78;
      margin-bottom: 20px;
      font-weight: 700;
    }

    #busqueda {
      max-width: 400px;
      margin: 0 auto 20px auto;
      display: block;
    }

    .table-responsive {
      max-width: 900px;
      margin: 0 auto 20px auto;
    }

    .btn-volver {
      background-color: #26b0b4;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 6px;
      font-weight: bold;
      transition: background 0.3s, transform 0.2s;
      display: inline-block;
      margin-top: 20px;
    }

    .btn-volver:hover {
      background-color: #2a7a78;
      transform: translateY(-2px);
    }

    .btn-danger {
      margin-top: 10px;
      background-color: #ff4444;
      border: none;
      color: white;
      transition: background 0.3s, transform 0.2s;
    }

    .btn-danger:hover {
      background-color: #cc0000;
      transform: translateY(-2px);
    }

    .btn-warning {
      background-color: #ffaa00;
      border: none;
      color: #ffffff;
      transition: background 0.3s;
    }

    .btn-warning:hover {
      background-color: #cc8800;
    }

    .btn-agregar {
      background-color: #26b0b4;
      border: none;
      color: #fff;
      padding: 8px 16px;
      margin-bottom: 20px;
      border-radius: 6px;
      font-weight: bold;
      transition: background 0.3s, transform 0.2s;
    }

    .btn-agregar:hover {
      background-color: #2a7a78;
      transform: translateY(-2px);
    }

    #contador {
      display: inline-block;
      margin-left: 5px;
      font-weight: bold;
      color: #2a7a78;
    }

    footer {
      background-color: #000000;
      color: #ffffff;
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

    /* Formulario agregado */
    #formAgregar {
      max-width: 500px;
      margin: 0 auto 20px auto;
      display: flex;
      flex-direction: column;
      gap: 10px;
      text-align: left;
    }

    #formAgregar input {
      padding: 8px 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      width: 100%;
    }
    
    .btn-volver {
      background-color: #2a7a78; /* azul Patitas */
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 6px;
      font-weight: bold;
      transition: background 0.3s, transform 0.2s;
    }

    .btn-volver:hover {
      background-color: #00aac8;
      transform: translateY(-2px);
    }
  </style>
</head>
<body>

  <main>
    <h1>Registros de Citas Agendadas</h1>

    <!-- Formulario para agregar contacto -->
    <form id="formAgregar">
      <input type="text" id="nombre" placeholder="Nombre" required>
      <input type="text" id="especialidad" placeholder="Especialidad" required>
      <input type="date" id="fecha" required>
      <input type="time" id="hora" required>
      <input type="text" id="contacto" placeholder="Contacto" required>
      <button type="submit" class="btn-agregar">Agregar Cita</button>
    </form>

    <input type="text" id="busqueda" class="form-control" placeholder="Buscar por nombre o fecha">

    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead class="table-info">
          <tr>
            <th>Nombre</th>
            <th>Especialidad</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Contacto</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody id="tablaCitas"></tbody>
      </table>
    </div>

    <div>
      <strong>Total de registros: <span id="contador">0</span></strong>
    </div>

    <button onclick="eliminarTodo()" class="btn btn-danger">Eliminar todos los registros</button><br>
    <a href="http://127.0.0.1:8000/" class="btn-volver">Volver</a>
  </main>

  <footer>
    &copy; 2025 Patitas Felices. Todos los derechos reservados. <br>
    📧 <a href="mailto:contacto@patitasfelices.com">contacto@patitasfelices.com</a> | ☎️ +591 123 456 789
  </footer>

  <script>
    let citas = JSON.parse(localStorage.getItem("citasPatitas")) || [];

    function cargarTabla(filtro = "") {
      const tabla = document.getElementById("tablaCitas");
      tabla.innerHTML = "";

      const filtradas = citas.filter(cita =>
        cita.nombre.toLowerCase().includes(filtro.toLowerCase()) ||
        cita.fecha.includes(filtro)
      );

      document.getElementById("contador").textContent = filtradas.length;

      if (filtradas.length === 0) {
        tabla.innerHTML = `<tr><td colspan="6" class="text-center text-muted">No hay resultados</td></tr>`;
        return;
      }

      filtradas.forEach((cita, index) => {
        tabla.innerHTML += `
          <tr>
            <td>${cita.nombre}</td>
            <td>${cita.especialidad}</td>
            <td>${cita.fecha}</td>
            <td>${cita.hora}</td>
            <td>${cita.contacto}</td>
            <td>
              <button class="btn btn-sm btn-warning" onclick="editarCita(${index})">Editar</button>
              <button class="btn btn-sm btn-danger" onclick="eliminarCita(${index})">Eliminar</button>
            </td>
          </tr>
        `;
      });
    }

    // Agregar nueva cita desde el formulario
    document.getElementById("formAgregar").addEventListener("submit", function(e) {
      e.preventDefault();
      const nombre = document.getElementById("nombre").value.trim();
      const especialidad = document.getElementById("especialidad").value.trim();
      const fecha = document.getElementById("fecha").value;
      const hora = document.getElementById("hora").value;
      const contacto = document.getElementById("contacto").value.trim();

      if(nombre && especialidad && fecha && hora && contacto) {
        citas.push({ nombre, especialidad, fecha, hora, contacto });
        localStorage.setItem("citasPatitas", JSON.stringify(citas));
        cargarTabla();
        this.reset(); // Limpiar formulario
      }
    });

    function eliminarCita(index) {
      if (confirm("¿Deseas eliminar este registro?")) {
        citas.splice(index, 1);
        localStorage.setItem("citasPatitas", JSON.stringify(citas));
        cargarTabla(document.getElementById("busqueda").value);
      }
    }

    function eliminarTodo() {
      if (confirm("¿Estás seguro de eliminar todos los registros?")) {
        localStorage.removeItem("citasPatitas");
        citas = [];
        cargarTabla();
      }
    }

    function editarCita(index) {
      const cita = citas[index];
      const nuevoNombre = prompt("Editar nombre:", cita.nombre);
      const nuevaEspecialidad = prompt("Editar especialidad:", cita.especialidad);
      const nuevaFecha = prompt("Editar fecha:", cita.fecha);
      const nuevaHora = prompt("Editar hora:", cita.hora);
      const nuevoContacto = prompt("Editar contacto:", cita.contacto);

      if (nuevoNombre) cita.nombre = nuevoNombre;
      if (nuevaEspecialidad) cita.especialidad = nuevaEspecialidad;
      if (nuevaFecha) cita.fecha = nuevaFecha;
      if (nuevaHora) cita.hora = nuevaHora;
      if (nuevoContacto) cita.contacto = nuevoContacto;

      localStorage.setItem("citasPatitas", JSON.stringify(citas));
      cargarTabla(document.getElementById("busqueda").value);
    }

    document.getElementById("busqueda").addEventListener("input", (e) => {
      cargarTabla(e.target.value);
    });

    cargarTabla();
  </script>

</body>
</html>
