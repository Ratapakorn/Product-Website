<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" 
        content="Abhi, Abhi GMbH"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="images/AbhiGmbh_Logo.png">
    <link rel="stylesheet" href="styles/mystyles.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles/themeButton.css">
    <script
        src="./JS_files/darkmode.js" defer>
    </script>
    <script
        src="./JS_files/navbar.js" defer>
    </script>
</head>
<body>

    <div class="container">
                <!-- <nav class="navbar">
            <ul>
                <li class="logo"><img src="images/AbhiGmbh_Logo.png" alt="Abhi_GMbH"/></li>
                <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                <li><a class="dropdownbutton" href="wooden_crafted_toys/product_landing_page.php"><i class="fa fa-archive"></i>Products</a></li>
                <li><a href="./content/customerDetails.php"><i class="fa fa-user"></i>User Information</a></li>
                <li><a href="./content/about.php"><i class="fa fa-building"></i>About</a></li>
                <li><a href="./content/contacts.php"><i class="fa fa-phone"></i>Contact</a></li> 
                <li class="loginregis"><a href="./content/login.php">Login / Registration</a></li>
            </ul>
        </nav> -->
        <div id="navbar-container"></div>

        <div class="content">
        <?php
        // Start Buffer
        ob_start();

        // Include before
        include 'about.php'; 
        ?>

        <p>Lorem ipsum</p>

        <?php
        // Include after
        include 'after.php';

        // Get buffered output
        $page = ob_get_clean();

        echo $page;
        ?>
        <button id="themebutton", onclick="toggleMode()">test</button>
        <h2>Abhi GmbH</h2>
        <h2>Your right choice!!</h2>
        <p>Welcome to Abhi GmbH, your destination for unique, 
            hand-crafted items made with care and creativity. 
            Our collection offers one-of-a-kind pieces, perfect 
            for adding a personal touch to your home or giving 
            as thoughtful gifts. Each item is crafted by skilled 
            artisans, ensuring high quality and attention to detail. 
            At Abhi GmbH, we take pride in offering products that 
            are both beautiful and original, making sure you find 
            something truly special. Shop with us today and 
            experience the charm of hand-made craftsmanship, backed 
            by fast shipping and excellent customer service.
            <h3>Login to explore more!!</h3>
            <a href="login.php">
                <button>Login</button>
            </a>
        </p>
        
        <hr>
        <footer>
            Abhi GMbH &#8226 Esplanade 10, Ingolstadt &nbsp;85049 &#8226 704-555-1151
       </footer>
        </div>
        
    </div>

    
</body>
</html>
