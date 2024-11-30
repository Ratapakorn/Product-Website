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
</head>
<body>
  <div class="container">
    <nav class="vertnavbar">
      <ul>
          <li class="logo"><img src="../images/AbhiGmbh_Logo.png" alt="Abhi_GMbH"/></li>
          <li><a href="../index.php"><i class="fa fa-home"></i>Home</a></li>
          <div class="dropdownfunctionality">
              <li><a class="dropdownbutton" href="product_landing_page.php"><i class="fa fa-archive"></i>Products</a></li>
              <div class="dropdowncontent">
                  <a href="product_landing_page.php">Toys</a>
                  <a href="product_landing_page.php">Decorations</a>
              </div>
          </div>
          <li><a href="../content/customer.php"><i class="fa fa-user"></i>User Information</a></li>
          <li><a href="../content/about.php"><i class="fa fa-building"></i>About</a></li>
          <li><a href=""><i class="fa fa-phone"></i>Contact</a></li> <!-- we don't have a contact page yet -->
          <li class="loginregis"><a href="../content/login.php">Login / Registration</a></li>
      </ul>
  </nav>
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