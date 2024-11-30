<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" 
          content="Abhi, Abhi GMbH" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="images/AbhiGmbh_Logo.png">
    <link rel="stylesheet" href="../styles/mystyles.css">
    <link rel="stylesheet" href="../styles/products.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/themeButton.css">
    <script
        src="../JS_files/darkmode.js" defer>
    </script>
    <script
    src="../JS_files/shoppingList.js" defer>
</script>
<script
        src="../JS_files/navbar.js" defer>
    </script>
</head>
<body>
  <div class="container">
  <div id="navbar-container"></div>
    <div class="content">
      <button id="themebutton", onclick="toggleMode()">test</button>
      <h1>Products</h1>
      <div class="grid-container">
        <div class="grid-item">
            <img class="prodimg" src="../images/product_wt_1.png" alt="img no available">
            <p>Decorations</p>
            <a href="Product1_page.php"><p class="producttitle">Product 0</p></a>
            <p class="productprice">€10.348.692</h3>
            <br>
            <br>
            <div class="setCenter">
              <button class="AddProd", onclick="addItem('Product 0', '€10.348.692','desc')">ADD TO CART</button>
            </div>
        </div>
        <div class="grid-item">
          <img class="prodimg" src="../images/product_wt_1.png" alt="img no available">
          <p>Decorations</p>
          <a href="Product1_page.php"><p class="producttitle">Product 1</p></a>
          <p class="productprice">€59.000</h3>
                      

          <!-- <?php
// Reading the JSON file
// $jsonData = file_get_contents("productsData/product.json");
 
// Decoding JSON data to PHP array
// $products = json_decode($jsonData, true);
 
// Displaying each user's details
// foreach ($products as $product) {
//     echo "Name: " . $product['name'] . "<br>";
//     echo "Price: " . $product['price'] . "<br><br>";
// }
?> -->
          <br>
          <br>
          <div class="setCenter">
            <button class="AddProd", onclick="addItem('Product 1', '€59.000','desc')">ADD TO CART</button>
          </div>
      </div>
      <div class="grid-item">
        <img class="prodimg" src="../images/product_wt_1.png" alt="img no available">
        <p>Decorations</p>
        <a href="Product1_page.php"><p class="producttitle">Product 2</p></a>
        <p class="productprice">€10.348.692</h3>
        <br>
        <br>
        <div class="setCenter">
          <button class="AddProd", onclick="addItem('Product 2', '€10.348.692','desc')">ADD TO CART</button>
        </div>
    </div>
    <div class="grid-item">
      <img class="prodimg" src="../images/product_wt_1.png" alt="img no available">
      <p>Decorations</p>
      <a href="Product1_page.php"><p class="producttitle">Product 3</p></a>
      <p class="productprice">€10.348.692</h3>
      <br>
      <br>
      <div class="setCenter">
        <button class="AddProd", onclick="addItem('Product 3', '€10.348.692','desc')">ADD TO CART</button>
      </div>
  </div>
      </div>
    <ul id="itemList"></ul>
    <button onclick="getPrice()">Calculate Price</button>
    <div id="price"></div>
    </div>
    
  </div>
  
</body>
</html>