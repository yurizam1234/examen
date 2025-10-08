<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contactos - Patitas Felices</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
      color: #1e1f1f;
      min-height: 100vh;
    }

    main {
      max-width: 1000px;
      margin: 40px auto;
      padding: 20px;

    }

    h1 {
      text-align: center;
      color: #2a7a78;
      font-weight: 700;
      margin-bottom: 40px;
    }

    h2 {
      color: #26b0b4;
      margin-bottom: 20px;
      border-bottom: 2px solid #26b0b4;
      padding-bottom: 5px;
    }

    .table {
      background-color: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .table thead {
      background-color: #26b0b4;
      color: #fff;
    }

    .table th, .table td {
      text-align: center;
      vertical-align: middle;
    }

    .role-gerente {
      background-color: #ff7043;
      color: #fff;
      font-weight: bold;
      border-radius: 6px;
      padding: 2px 6px;
      display: inline-block;
    }

    .role-usuario {
      background-color: #26b0b4;
      color: #fff;
      font-weight: bold;
      border-radius: 6px;
      padding: 2px 6px;
      display: inline-block;
    }

    .role-asistente {
      background-color: #ffaa00;
      color: #fff;
      font-weight: bold;
      border-radius: 6px;
      padding: 2px 6px;
      display: inline-block;

    }

    footer {
        position: relative;
      background-color: #000;
      color: #fff;
      text-align: center;
      padding: 20px 0;
      margin-top: 40px;
      font-size: 0.9rem;
     
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


    footer a {
      color: #00cfff;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .table-responsive {
        font-size: 0.9rem;
      }
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
    <h1>Contactos - Patitas Felices</h1>

    <!-- Lista de Pacientes -->
    <section>
      <h2>Pacientes</h2>
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Nombre del Paciente</th>
              <th>Dueño</th>
              <th>Especie</th>
              <th>Contacto</th>
            </tr>
          </thead>
          <tbody id="tablaPacientes">
            <!-- Se llenará con JavaScript -->
          </tbody>
        </table>
      </div>
    </section>

    <!-- Lista de Personal -->
    <section>
      <h2>Personal de la Veterinaria</h2>
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Rol</th>
              <th>Contacto</th>
            </tr>
          </thead>
          <tbody id="tablaPersonal">
            <!-- Se llenará con JavaScript -->
          </tbody>
        </table>
      </div>
      <br> <br>
      <div>
        <a href="http://127.0.0.1:8000/" class="btn-volver">Volver</a>
      </div>
      <br> <br>
    </section>
  </main>


  <footer>
    &copy; 2025 Patitas Felices. Todos los derechos reservados. <br>
    📧 <a href="mailto:contacto@patitasfelices.com">contacto@patitasfelices.com</a> | ☎️ +591 123 456 789
  </footer>

  <script>
    // Datos de ejemplo
    const pacientes = [
      { nombre: "Firulais", dueño: "Juan Pérez", especie: "Perro", contacto: "+591 71234567" },
      { nombre: "Mimi", dueño: "Ana Gómez", especie: "Gato", contacto: "+591 79876543" },
      { nombre: "Bobby", dueño: "Carlos López", especie: "Perro", contacto: "+591 70123456" },
    ];

    const personal = [
      { nombre: "Laura Martínez", rol: "Gerente", contacto: "+591 77788899" },
      { nombre: "Pedro Sánchez", rol: "Usuario", contacto: "+591 71223344" },
      { nombre: "Lucía Flores", rol: "Asistente", contacto: "+591 79998877" },
    ];

    // Función para cargar pacientes
    function cargarPacientes() {
      const tabla = document.getElementById("tablaPacientes");
      tabla.innerHTML = "";
      pacientes.forEach(p => {
        tabla.innerHTML += `
          <tr>
            <td>${p.nombre}</td>
            <td>${p.dueño}</td>
            <td>${p.especie}</td>
            <td>${p.contacto}</td>
          </tr>
        `;
      });
    }

    // Función para cargar personal
    function cargarPersonal() {
      const tabla = document.getElementById("tablaPersonal");
      tabla.innerHTML = "";
      personal.forEach(p => {
        let roleClass = "";
        if(p.rol.toLowerCase() === "gerente") roleClass = "role-gerente";
        else if(p.rol.toLowerCase() === "usuario") roleClass = "role-usuario";
        else if(p.rol.toLowerCase() === "asistente") roleClass = "role-asistente";

        tabla.innerHTML += `
          <tr>
            <td>${p.nombre}</td>
            <td><span class="${roleClass}">${p.rol}</span></td>
            <td>${p.contacto}</td>
          </tr>
        `;
      });
    }

    // Inicializar tablas
    cargarPacientes();
    cargarPersonal();
  </script>
</body>
</html>
