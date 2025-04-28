<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Factura de Productos</title>
  <style>
    body { font-family: Helvetica, Arial, sans-serif; color: #333; }
    .header { text-align: center; margin-bottom: 30px; }
    .header h1 { color: #0d6efd; margin-bottom: 0; }
    .header small { font-size: .9rem; color: #555; }

    table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
    th, td {
      padding: 8px 12px;
      border: 1px solid #ccc;
    }
    th {
      background-color: #0d6efd;
      color: #fff;
      text-transform: uppercase;
      font-size: .85rem;
    }
    tbody tr:nth-child(even) { background: #f2f2f2; }
    .total {
      text-align: right;
      font-size: 1.1rem;
      font-weight: bold;
      margin-top: 10px;
    }
  </style>
</head>
<body>

  <div class="header">
    <h1>SaludApp</h1>
    <small>Factura de Productos de Salud</small>
  </div>

  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Precio (USD)</th>
        <th>Descripción</th>
      </tr>
    </thead>
    <tbody>
      @php $sum = 0; @endphp
      @foreach($products as $i => $product)
        <tr>
          <td>{{ $i + 1 }}</td>
          <td>{{ $product->name }}</td>
          <td style="text-align:right;">{{ number_format($product->price, 2) }}</td>
          <td>{{ $product->description }}</td>
        </tr>
        @php $sum += $product->price; @endphp
      @endforeach
    </tbody>
  </table>

  <p class="total">Total: USD {{ number_format($sum, 2) }}</p>

</body>
</html>
