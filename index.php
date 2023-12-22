<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
</head>
<body>
<?php if (!empty($cart_contents)) : ?>
    <h2>Carrito de Compras</h2>
    <ul>
        <?php foreach ($cart_contents as $item) : ?>
            <li>
                <strong><?php echo $item['name']; ?></strong>
                <br>
                Cantidad: <?php echo $item['qty']; ?>
                <br>
                Precio: $<?php echo $item['price']; ?>
                <!-- Agrega más detalles según sea necesario -->
            </li>
        <?php endforeach; ?>
    </ul>
<?php else : ?>
    <p>El carrito está vacío.</p>
<?php endif; ?>
</body>
</html>
