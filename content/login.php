<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" 
        content="Abhi, Abhi GMbH, Abhi login"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/mystyles.css">
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="../styles/abouts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Abhi GmbH</title>
    <link rel="stylesheet" href="../styles/themeButton.css">
    <script
        src="../JS_files/darkmode.js" defer>
    </script>
<script
        src="../JS_files/navbar.js" defer>
    </script>
</head>
<body>

    <!--    Navigation bar-->
    <div class="container">
        
        <!-- <nav class="vertnavbar">
            <ul>
                <li class="logo"><img src="../images/AbhiGmbh_Logo.png" alt="Abhi_GMbH" /></li>
                <li><a href="../index.php"><i class="fa fa-home"></i>Home</a></li>
                <div class="dropdownfunctionality">
                    <li><a class="dropdownbutton" href="../wooden_crafted_toys/product_landing_page.php"><i
                                class="fa fa-archive"></i>Products</a></li>
                    <div class="dropdowncontent">
                        <a href="../wooden_crafted_toys/product_landing_page.php">Toys</a>
                        <a href="../wooden_crafted_decorations/product_landing_page.php">Decorations</a>
                    </div>
                </div>
                <li><a href="about.php"><i class="fa fa-building"></i>About</a></li>
                <li><a href="contacts.php"><i class="fa fa-phone"></i>Contact</a></li> 
                <li class="loginregis"><a href="login.php">Login / Registration</a></li>
            </ul>
        </nav> -->
        <div id="navbar-container"></div>

    </div>

    <div class="mainContainer">
        <!-- <button id="themebutton", onclick="toggleMode()">test</button> -->
        <i class="fas fa-headset fa-3x" style=" margin-bottom: 10px;"></i>
        <h1 style="font-family: cursive;">Login to Abhi GmbH!</h1>
        
        <div class="input-container">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Enter Login ID" class="input-field" />
        </div>
        
        <div class="input-container">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Enter Password" class="input-field" />
        </div>
        
        <button class="btn">Log In</button>
        <br>
        <a href="registration.php" class="register">Not a user?<span> register!</span></a>
        <div class="topFooter">
            <div class="footer-item">
                <i class="fas fa-clock" style=""></i>
                <span>Time and Resource Efficiency</span>
            </div>
            <div class="footer-item">
                <i class="fas fa-thumbs-up" style=""></i>
                <span>Enhanced Quality and Consistency</span>
            </div>
            <div class="footer-item">
                <i class="fas fa-cogs" style=""></i>
                <span>Versatility and Adaptability</span>
            </div>
        </div>
    </div>
    
    
    <!-- footer icons  -->
    <div class="icons">
        <i class="cls fa-brands fa-instagram"></i>
        <i class="cls fa-brands fa-facebook"></i>
        <i class="cls fa-brands fa-twitter"></i>
        <i class="cls fa-solid fa-envelope"></i>
    </div>
    <footer>
        Abhi GMbH &#8226 Esplanade 10, Ingolstadt &nbsp;85049 &#8226 704-555-1151
    </footer>

</body>
</html>