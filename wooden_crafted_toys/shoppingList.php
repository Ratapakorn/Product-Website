<?php
session_start(); // Start the session to access cart items

// Remove item from the cart when 'remove_item' is clicked
if (isset($_POST['remove_item'])) {
    $removeId = $_POST['remove_item'];
    
    // Loop through the cart and remove the item with the matching ID
    foreach ($_SESSION['cart'] as $index => $item) {
        if ($item['id'] == $removeId) {
            unset($_SESSION['cart'][$index]); // Remove item from the cart
            break; // Exit loop after removing the item
        }
    }

    // Reindex the session array after unsetting an item
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}

// If cart is empty, show a message
if (empty($_SESSION['cart'])) {
    $message = "Your cart is empty!";
} else {
    $message = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="../styles/mystyles.css">
    <link rel="stylesheet" href="../styles/products.css">
    <script src="../JS_files/navbar.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div id="navbar-container"></div>
    <div class="content">
      <h1>Your Shopping Cart</h1>
      <?php if ($message): ?>
        <p><?php echo $message; ?></p>
      <?php else: ?>
        <ul>
          <?php
          $totalPrice = 0;
          $count = 0;
          foreach ($_SESSION['cart'] as $item) {
              echo '
              <li>
                  ' . htmlspecialchars($item['name']) . ' - $' . number_format($item['price'], 2) . '
                  <form method="POST" action="" style="display:inline;">
                      <input type="hidden" name="remove_item" value="' . $item['id'] . '">
                      <button type="submit" class="remove-btn">Remove</button>
                  </form>
              </li>';
              $totalPrice += $item['price'];
              $count=$count+1;
          }
          ?>
        </ul>
        <p><strong>Price: $<?php echo number_format($totalPrice, 2); ?></strong></p>
        <p><strong>Discount Price: $<?php 
        $d=0;
        if($count>=10 & $count<20){
          $d=$totalPrice*0.1;
        }
        if($count>=20){
          $d=$totalPrice*0.2;
        }
        $totalPrice=$totalPrice-$d;
        echo number_format($d, 2);?></strong></p>
         <p><strong>Total Price: $<?php   echo number_format($totalPrice, 2); ?></strong></p>
        <!-- <button onclick="window.location.href='checkout.php'">Proceed to Checkout</button> -->
        
      <?php endif; ?>
    </div>
    
  </div>
  
</body>
</html>