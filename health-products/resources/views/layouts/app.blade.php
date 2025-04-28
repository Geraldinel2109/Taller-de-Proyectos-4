<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Productos Salud')</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { padding-top: 5rem; background: #f8f9fa; }
    .navbar-brand { font-weight: 600; }
    .card { border: none; border-radius: .75rem; }
    .invoice-header { margin-bottom: 2rem; text-align: center; }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="{{ route('products.index') }}">🩺 SaludApp</a>
    </div>
  </nav>

  <main class="container my-4">
    @yield('content')
  </main>

  <footer class="text-center py-4 text-muted">
    &copy; {{ date('Y') }} SaludApp. Todos los derechos reservados.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

