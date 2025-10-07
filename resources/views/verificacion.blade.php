<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Verificación de Citas - TECBA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      padding: 30px;
      background-color: #f0f0f0;
      font-family: 'Segoe UI', sans-serif;
    }

    h1 {
      text-align: center;
      color: #2a7a78;
      margin-bottom: 20px;
    }

    #busqueda {
      max-width: 400px;
      margin: 0 auto 20px auto;
    }

    .btn-volver {
      background-color: #2a7a78;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
    }

    .btn-volver:hover {
      background-color: #205f5a;
    }

    .btn-danger {
      margin-top: 20px;
    }
  </style>
</head>
<body>

  <h1>Registros de Citas Agendadas</h1>
  <input type="text" id="busqueda" class="form-control" placeholder="Buscar por nombre o fecha">

  <div class="table-responsive mt-3">
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

  <div class="text-center">
    <button onclick="eliminarTodo()" class="btn btn-danger">Eliminar todos los registros</button><br><br>
    <a href="Agenda.html" class="btn-volver">← Volver a Agendar</a>
  </div>

  <script>
    let citas = JSON.parse(localStorage.getItem("citasTecba")) || [];

    function cargarTabla(filtro = "") {
      const tabla = document.getElementById("tablaCitas");
      tabla.innerHTML = "";

      const filtradas = citas.filter(cita =>
        cita.nombre.toLowerCase().includes(filtro.toLowerCase()) ||
        cita.fecha.includes(filtro)
      );

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
            </td>
          </tr>
        `;
      });
    }

    function eliminarTodo() {
      if (confirm("¿Estás seguro de eliminar todos los registros?")) {
        localStorage.removeItem("citasTecba");
        citas = [];
        cargarTabla();
      }
    }

    function editarCita(index) {
      const cita = citas[index];
      const nuevoNombre = prompt("Editar nombre:", cita.nombre);
      const nuevaFecha = prompt("Editar fecha:", cita.fecha);
      const nuevaHora = prompt("Editar hora:", cita.hora);

      if (nuevoNombre) cita.nombre = nuevoNombre;
      if (nuevaFecha) cita.fecha = nuevaFecha;
      if (nuevaHora) cita.hora = nuevaHora;

      localStorage.setItem("citasTecba", JSON.stringify(citas));
      cargarTabla(document.getElementById("busqueda").value);
    }

    document.getElementById("busqueda").addEventListener("input", (e) => {
      cargarTabla(e.target.value);
    });

    cargarTabla();
  </script>

</body>
</html>
