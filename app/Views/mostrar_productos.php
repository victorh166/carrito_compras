<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
</head>
<body>
    <h2>Lista de Productos</h2>
    <ul>
    <?php foreach ($productos as $producto): ?>
        <li>
            <?= $producto->name ?> - $<?= $producto->price ?>
            <!-- Formulario para agregar al carrito -->
            <form action="<?= base_url('carrito/agregar_al_carrito/' . $producto->id . '/' . urlencode($producto->name) . '/' . $producto->price); ?>" method="post">
                <input type="submit" value="Agregar al carrito">
            </form>
            <?php if($this->cart->total_items() > 0): ?>
          <?php else: ?>
         <p>El carrito está vacío</p>
         <?php endif; ?>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>

