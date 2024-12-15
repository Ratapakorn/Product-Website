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
        <div id="navbar-container"></div>

    </div>
    <form id="loginForm">
    <div class="mainContainer">
        <i class="fas fa-headset fa-3x" style=" margin-bottom: 10px;"></i>
        <h1 style="font-family: cursive;">Login to Abhi GmbH!</h1>
        
        <div class="input-container">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Enter Login ID" class="input-field" required />
        </div>
        
        <div class="input-container">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Enter Password" class="input-field" required />
        </div>
        
        <button class="btn" type="submit">Log In</button>
        <br>
        <a href="registration.php" class="register">Not a user?<span> register!</span></a>
        <div class="topFooter">
            <div class="footer-item">
                <i class="fas fa-clock"></i>
                <span>Time and Resource Efficiency</span>
            </div>
            <div class="footer-item">
                <i class="fas fa-thumbs-up"></i>
                <span>Enhanced Quality and Consistency</span>
            </div>
            <div class="footer-item">
                <i class="fas fa-cogs"></i>
                <span>Versatility and Adaptability</span>
            </div>
        </div>
    </div>
</form>

    
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
    <script>
document.getElementById('loginForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);
    try {
        const response = await fetch('loggin.php', {
            method: 'POST',
            body: formData,
        });
        const result = await response.json();
        alert(result.message);
        if (result.status === 'success') {
            window.location.href = 'about.php'; // Redirect on success
        }
    } catch (error) {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
    }
});

</script>
</body>
</html>