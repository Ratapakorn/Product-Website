<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords"
        content="Abhi, Abhi GMbH, Abhi registration"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abhi GmbH</title>
    <link rel="stylesheet" href="../styles/mystyles.css">
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="../styles/registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <script
            src="../JS_files/registration.js" defer>
    </script>
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


    <div>
        <button id="themebutton" onclick="toggleMode()">test</button>
        <form id="registrationForm">
        <div class="mainContainer">
        
        <i id="titleIcon" class="fas fa-handshake fa-3x" style=" margin-bottom: 10px;"></i>
        <h1 id="title" style="font-family: cursive;">Register to Abhi GmbH!</h1>

        <div class="input-container">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" class="input-field" id="username"/>
        </div>
        <p id="userNameLenError" class="error-message" style="font-size: x-small;margin-top: -2%; text-align: left; margin-left: 5%; margin-bottom: 4%;"></p>
        <p id="userNameCharError" class="error-message"style="font-size: x-small;margin-top: -2%; text-align: left; margin-left: 5%;"></p>



        <div class="input-container">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" class="input-field" id="password1"/>
        </div>
        <p id="passwordLenError" class="error-message" style="font-size: x-small;margin-top: -2%; text-align: left; margin-left: 5%;"></p>

        <div class="input-container">
            <i class="fas fa-regular fa-eye"></i>
            <input type="password" placeholder="Repeat Password" name="password2" name="email" class="input-field" id="password2" />
        </div>
        <p id="passwordMatchError" class="error-message" style="font-size: x-small;margin-top: -2%; text-align: left; margin-left: 5%;"></p>

        <div class="input-container">
            <i class="fas fa-regular fa-envelope"></i>
            <input type="email" placeholder="Email" class="input-field" id="email1"/>
        </div>
        <p id="emailValidError" class="error-message" style="font-size: x-small;margin-top: -2%; text-align: left; margin-left: 5%; margin-bottom: 4%;"></p>
        <p id="emailEmptyError" class="error-message" style="font-size: x-small;margin-top: -2%; text-align: left; margin-left: 5%;"></p>

         <div class="input-container">
            <i class="fas fa-regular fa-envelope"></i>
            <input type="email" placeholder="Repeat Email" class="input-field" id="email2"/>
        </div>
        <p id="emailMatchError" class="error-message" style="font-size: x-small;margin-top: -2%; text-align: left; margin-left: 5%;"></p>

        <div class="input-container">
            <i class="fas fa-calendar"></i>
            <input type="date" placeholder="Date of Birth" class="input-field" id="birth_date"/>
        </div>
        <p id="birthDateError" class="error-message"style="font-size: x-small;margin-top: -2%; text-align: left; margin-left: 5%;"></p>

        <div class="input-container">
            <!-- <i class="fas fa-lock"></i> -->
            <select id="gender">
                <option selected value="0">Gender</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
                <option value="3">Mentally ill</option>
            </select>
        </div>
        <p id="genderError" class="error-message"style="font-size: x-small;margin-top: -2%; text-align: left; margin-left: 5%;" ></p>

        <button type="submit" class="btn" >Register</button>
        <br>
        <a href="login.php" class="register">Already a user?<span> login!</span></a>
        <div class="topFooter">
            <div class="footer-item">
                <i class="fas fa-cart-shopping" style="color: #333;"></i>
                <span>Handcrafted products</span>
            </div>
            <div class="footer-item">
                <i class="fas fa-thumbs-up" style="color: #333;"></i>
                <span>Enhanced Quality</span>
            </div>
            <div class="footer-item">
                <i class="fas fa-truck" style="color: #333;"></i>
                <span>Free delivery</span>
            </div>
        </div>
    </div>
    </form>
    <!-- footer icons  -->

    <footer class="mainContainer">
        <div class="icons">
            <i class="cls fa-brands fa-instagram"></i>
            <i class="cls fa-brands fa-facebook"></i>
            <i class="cls fa-brands fa-twitter"></i>
            <i class="cls fa-solid fa-envelope"></i>
        </div>
        Abhi GMbH &#8226 Esplanade 10, Ingolstadt &nbsp;85049 &#8226 704-555-1151
    </footer>
</div>
<script>
document.getElementById('registrationForm').addEventListener('submit', async (e) => {
    e.preventDefault(); // Prevent the default form submission

    // Collect the form data
    const formData = new FormData(e.target);

    try {
        const response = await fetch('register.php', {
            method: 'POST',
            body: formData,
        });

        const result = await response.json(); // Parse the JSON response
        alert(result.message); // Display the server message
    } catch (error) {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
    }
});

    </script>
</body>
</html>
