<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>My Product</h1>
    <ul>
        <li><?php echo $product->getId() ?></li>
        <li><?php echo $product->getNama() ?></li>
        <li><?php echo $product->getHarga() ?></li>
    </ul>
</body>
</html>