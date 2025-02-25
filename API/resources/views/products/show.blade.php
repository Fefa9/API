<!DOCTYPE html>
<html>
<head>
    <title>Détails du Produit</title>
</head>
<body>
    <h1>Détails du Produit</h1>
    <p>ID : {{ $product->id }}</p>
    <p>Nom : {{ $product->name }}</p>
    <p>Description : {{ $product->description }}</p>
    <p>Prix : {{ $product->price }}</p>
    <p>Quantité : {{ $product->quantity }}</p>
</body>
</html>
