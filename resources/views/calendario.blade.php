<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Calendario de Citas - Patitas Felices</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f9f9;
      font-family: 'Segoe UI', sans-serif;
    }

    h1 {
      text-align: center;
      color: #2a7a78;
      font-weight: bold;
      margin: 30px 0;
    }

    #calendar {
      max-width: 900px;
      margin: 0 auto;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      padding: 20px;
    }

    .btn-volver {
      display: block;
      margin: 30px auto;
      background-color: #26b0b4;
      color: white;
      padding: 10px 25px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s;
      width: fit-content;
    }

    .btn-volver:hover {
      background-color: #2a7a78;
    }
  </style>
</head>
<body>
  <h1>📅 Calendario de Citas - Patitas Felices</h1>
  <div id="calendar"></div>
  <a href="http://127.0.0.1:8000/" class="btn-volver">Volver</a>
  
  

  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Recuperar citas almacenadas
      const citas = JSON.parse(localStorage.getItem("citasPatitas")) || [];

      // Transformar las citas a eventos del calendario
      const eventos = citas.map(cita => ({
        title: `${cita.nombre} - ${cita.especialidad}`,
        start: `${cita.fecha}T${cita.hora}`,
        extendedProps: {
          contacto: cita.contacto
        }
      }));

      // Crear el calendario
      const calendarEl = document.getElementById('calendar');
      const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'es',
        height: 650,
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: eventos,
        eventClick: function(info) {
          alert(`🐾 Cita con: ${info.event.title}\n📅 Fecha y hora: ${info.event.start.toLocaleString()}\n📞 Contacto: ${info.event.extendedProps.contacto}`);
        }
      });

      calendar.render();
    });
  </script>
</body>
</html>
    