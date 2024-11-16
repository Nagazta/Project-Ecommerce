<?php
$products = [
    ["name" => "Product 1", "price" => 19.99, "image" => "product1.jpg"],
    ["name" => "Product 2", "price" => 29.99, "image" => "product2.jpg"],
    ["name" => "Product 3", "price" => 39.99, "image" => "product3.jpg"],
];

$baseUrl = "http://localhost/ecommerce/images/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }

        header nav a {
            color: #fff;
            margin: 0 10px;
            text-decoration: none;
        }

        main {
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .product-list {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .product {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
            width: 200px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .product:hover {
            transform: scale(1.05);
        }

        .product img {
            max-width: 100%;
            height: auto;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }

        .product h3 {
            font-size: 18px;
            color: #333;
            margin: 10px 0;
        }

        .product p {
            font-size: 16px;
            color: #888;
        }

        .product button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 8px 15px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        .product button:hover {
            background-color: #555;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to Our E-Commerce Site</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="products.php">Products</a>
        <a href="contact.php">Contact Us</a>
    </nav>
</header>

<main>
    <h2>Featured Products</h2>
    <div class="product-list">
        <?php foreach ($products as $product): ?>
            <div class="product">
                <img src="<?php echo $baseUrl . $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                <h3><?php echo $product['name']; ?></h3>
                <p>Price: $<?php echo number_format($product['price'], 2); ?></p>
                <button>Add to Cart</button>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> E-Commerce Site. All rights reserved.</p>
</footer>

</body>
</html>
