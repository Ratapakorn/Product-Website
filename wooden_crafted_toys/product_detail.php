<?php
// Retrieve the data passed via the URL
$pid = isset($_GET['pid']) ? $_GET['pid'] : '';
$name = isset($_GET['name']) ? $_GET['name'] : 'Product Name';
$price = isset($_GET['price']) ? $_GET['price'] : '0.00';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content="Product1, Abhi, Abhi GMbH" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?></title>
    <link rel="icon" href="images/AbhiGmbh_Logo.png">
    <link rel="stylesheet" href="../styles/mystyles.css">
    <link rel="stylesheet" href="../styles/oneproducts.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="../JS_files/navbar.js" defer></script>
</head>
<body>
    <div class="container">
        <div id="navbar-container"></div>
        <div class="content">
            <p class="breadcrumb"><a href="product_landing_page.php" style="text-decoration:underline">Toys</a> > <?php echo $name; ?></p>

            <div class="product-container">
                <!-- Left Side: Product Image -->
                <div class="product-image">
                    <img src="../images/product_wt_1.png" alt="Product Image">
                </div>
        
                <!-- Right Side: Product Details -->
                <div class="product-details">
                    <h1 class="product-title"><?php echo $name; ?></h1>
                    <p class="product-price">€<?php echo $price; ?></p>
                    <div class="rating">★★★★★ <span class="reviews">(0 Reviews)</span></div>
        
                    <!-- Size Selector -->
                    <div class="quantity-selector">
                        <label for="amount">Quantity:</label>
                        <select id="amount">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
        
                    <!-- Add to Cart Button -->
                    <button class="add-to-cart">Add to Cart</button>
        
                    <!-- Delivery Info -->
                    <p class="delivery-info">Delivery in 4-5 business years</p>
        
                    <!-- Product Description -->
                    <div class="product-description">
                        <h3>Description</h3>
                        <p>Best Product Ever</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
