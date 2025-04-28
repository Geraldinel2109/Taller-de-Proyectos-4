<!-- resources/views/products/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agregar Producto</title>
</head>
<body>
    <h1>Registrar un Producto</h1>
    <form action="{{ url('/products') }}" method="POST">
        @csrf
        <label for="name">Nombre del Producto:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="price">Precio:</label>
        <input type="text" name="price" id="price" required><br><br>

        <label for="description">Descripción:</label>
        <textarea name="description" id="description"></textarea><br><br>

        <button type="submit">Guardar Producto</button>
    </form>

    <a href="{{ url('/generate-invoice') }}">Generar Factura PDF</a>
</body>
</html>
