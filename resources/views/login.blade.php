<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Iniciar sesión - Patitas Felices</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Nunito', sans-serif;
      background-color: #f6f6f6;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      width: 360px;
      padding: 2rem;
      text-align: center;
    }

    .login-container img {
      width: 80px;
      margin-bottom: 1rem;
    }

    .login-container h1 {
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 0.3rem;
      color: #202124;
    }

    .login-container p {
      color: #5f6368;
      font-size: 0.9rem;
      margin-bottom: 1.5rem;
    }

    .form-control {
      border-radius: 6px;
      padding: 10px 12px;
      font-size: 0.95rem;
    }

    .form-label {
      text-align: left;
      width: 100%;
      color: #3c4043;
      font-weight: 600;
      font-size: 0.9rem;
    }

    .btn-login {
      background-color: #1a73e8;
      color: white;
      font-weight: 600;
      border: none;
      border-radius: 6px;
      padding: 10px;
      width: 100%;
      margin-top: 1rem;
      transition: 0.3s;
    }

    .btn-login:hover {
      background-color: #1765c4;
    }

    .link {
      margin-top: 1rem;
      display: block;
      font-size: 0.9rem;
      color: #1a73e8;
      text-decoration: none;
    }

    .link:hover {
      text-decoration: underline;
    }

    .footer-text {
      font-size: 0.8rem;
      color: #777;
      margin-top: 1.5rem;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <img src="{{ asset('imagenes/bienvenido.jpg') }}"  width="100">
    <h1>Iniciar sesión</h1>
    <p>Usa tu cuenta de Patitas Felices</p>

    <form action="{{ url('/inicio') }}" method="POST">
      @csrf
      <div class="mb-3 text-start">
        <label for="email" class="form-label">Correo electrónico o usuario</label>
        <input type="text" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3 text-start">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>

      <button type="submit" class="btn-login">Iniciar sesión</button>
    </form>

    <a href="https://accounts.google.com/v3/signin/confirmidentifier?authuser=0&continue=https%3A%2F%2Fmyaccount.google.com%2Frecovery%2Femail&dsh=S855874269%3A1759983653111827&emr=1&followup=https%3A%2F%2Fmyaccount.google.com%2Frecovery%2Femail&ifkv=AfYwgwV84lacmWI6UQVZoeHcVSww_lEjgZ-uPhMLhwvmHSHtzfLX6aUYX_fW4f_Zxl-bDnWph8VXUw&mrp=security&osid=1&passive=1209600&rart=ANgoxcccpP1pzKEztLHZQxdLMmVjOAebtXkX48-8eqRTWAvr4EGHoJ9iFgC12qOHpK3CivqIRFfkuGhu4AhdQSHlHYBuz-6gk2TUAWbBWVhQg04SPFdDie8&service=accountsettings&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="link">¿Has olvidado tu contraseña?</a>
    <a href="https://accounts.google.com/lifecycle/steps/signup/name?checkedDomains=youtube&continue=https://accounts.google.com/ManageAccount?nc%3D1&dsh=S-1425173058:1759983940979102&flowEntry=SignUp&flowName=GlifWebSignIn&hl=es&ifkv=AfYwgwWJBCCJaje4uL1WHZU0B84-xEvHDKeruxIzQ3us-97usbfdAoyiQluTLASVHq6In2RscVD8fA&pstMsg=1&TL=AMbiOOTF_Bs0rrTabxLW7r9J0hoDcDzl07psMh2g1uAo43HVJBay5f4dmAPhnmsP" class="link">Crear cuenta nueva</a>

    <p class="footer-text">&copy; 2025 Patitas Felices</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
