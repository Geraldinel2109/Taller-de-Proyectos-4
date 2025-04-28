<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Factura</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 20px; }
    h1 { text-align: center; margin-bottom: 30px; }
    table { width: 100%; border-collapse: collapse; }
    th, td {
      border: 1px solid #444;
      padding: 8px;
      text-align: left;
    }
    th { background: #f0f0f0; }
    .total {
      margin-top: 20px;
      text-align: right;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <h1>Factura de Productos de Salud</h1>

  <table class="invoice-table">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Descripción</th>
      </tr>
    </thead>
    <tbody>
      @php $sum = 0; @endphp
      @foreach($products as $i => $product)
        <tr>
          <td>{{ $i+1 }}</td>
          <td>{{ $product->name }}</td>
          <td>${{ number_format($product->price, 2) }}</td>
          <td>{{ $product->description }}</td>
        </tr>
        @php $sum += $product->price; @endphp
      @endforeach
    </tbody>
  </table>

  <p class="total">Total: ${{ number_format($sum, 2) }}</p>

</body>
</html>

