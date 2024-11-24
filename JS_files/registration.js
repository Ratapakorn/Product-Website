document.addEventListener("DOMContentLoaded", () =>{
    // the whole registration form:
    const form = document.getElementById("registrationForm")

    // inputs from registration form:
    const username = document.getElementById("username");
    const password1 = document.getElementById("password1");
    const password2 = document.getElementById("password2");
    const email1 = document.getElementById("email1");
    const email2 = document.getElementById("email2");
    const birth_date = document.getElementById("birth_date");
    const gender = document.getElementById("gender");

    // error messages:
    const userNameCharError = document.getElementById("userNameCharError");
    const userNameLenError = document.getElementById("userNameLenError");
    const passwordMatchError = document.getElementById("passwordMatchError");
    const passwordLenError = document.getElementById("passwordLenError");
    const emailMatchError = document.getElementById("emailMatchError");
    const emailEmptyError = document.getElementById("emailEmptyError");
    const emailValidError = document.getElementById("emailValidError");
    const birthDateError = document.getElementById("birthDateError");
    const genderError = document.getElementById("genderError");

    form.addEventListener("submit", (event) =>{
        let isValid = true;
        event.preventDefault(); // prevent default form submission

    // reset all previous errors
   document.querySelectorAll(".error-message").forEach(element => {
        element.textContent = "";
   });

        // inputs validation:
        // username length check:__________________
        if (username.value.trim().length < 5){
            username.classList.add("invalid");
            username.classList.remove("valid");
            userNameLenError.textContent = "Username must be at least 5 characters!";
            isValid = false;
        } else{
            // username chars check:__________________________
            if (!/[a-z]/.test(username.value) || !/[A-Z]/.test(username.value)){
                username.classList.add("invalid");
                username.classList.remove("valid");
                userNameCharError.textContent += "Username should contain at least one capital and lowercase letter!";
                isValid = false;
            } else{
                username.classList.add("valid");
                username.classList.remove("invalid");
            }
            username.classList.add("valid");
            username.classList.remove("invalid");
        }

        // password length check:_____________________
        if (password1.value.length < 10){
            password1.classList.remove("valid");
            password1.classList.add("invalid");
            passwordLenError.textContent += "Password should be at least 10 characters!";
            isValid = false;
        }else{
                    // password match check:_______________________
        if (password1.value !== password2.value){
            password1.classList.add("invalid");
            password2.classList.add("invalid");
            password1.classList.remove("valid");
            password2.classList.remove("valid");
            passwordMatchError.textContent += "Passwords do not match!";
            isValid = false;
        }else{
            password1.classList.add("valid");
            password2.classList.add("valid");
            password1.classList.remove("invalid");
            password2.classList.remove("invalid");
        }}

        // email match check:_______________
        if (email1.value === ""){
            email1.classList.add("invalid");
            email1.classList.remove("valid");
            emailEmptyError.textContent += "This field is required!";
            isValid = false;
        }else{
         if(email1.value!==email2.value){
                email1.classList.add("invalid");
                email2.classList.add("invalid");
                email1.classList.remove("valid");
                email2.classList.remove("valid");
                emailMatchError.textContent += "Emails do not match!";
                isValid = false;

         }
        // email validity check:___________________
        else if (!/.+@.+\..+/.test(email1.value)){
            email1.classList.add("invalid");
            email1.classList.remove("valid");
            emailValidError.textContent += "Invalid email!";
            isValid = false;
        }else{
            email1.classList.add("valid");
            email2.classList.add("valid");
            email1.classList.remove("invalid");
            email2.classList.remove("invalid");
        }
        }

        // birthdate check:_____________________
        if(!birth_date.value){
            birth_date.classList.add("invalid");
            birth_date.classList.remove("valid");
            birthDateError.textContent += "Birthdate is missing!";
            isValid = false;
        }else{
            birth_date.classList.add("valid");
            birth_date.classList.remove("invalid");
        }

        // gender check:__________________________
        if(gender.value == 0){
            gender.classList.add("invalid");
            gender.classList.remove("valid");
            genderError.textContent += "Gender is missing!";
            isValid = false;
        }else{
            gender.classList.add("valid");
            gender.classList.remove("invalid");
        }

        if (isValid) {
            // for debugging, to be deleted before deployment
            console.log("Username:", username.value);
            console.log("Password1:", password1.value);
            console.log("Password2:", password2.value);
            console.log("email1:", email1.value);
            console.log("email2:", email2.value);
            console.log("Birth date:", birth_date.value)

            //Store the registration data:
            localStorage.setItem("username", username.value)
            localStorage.setItem("password1", password1.value)
            localStorage.setItem("password2", password2.value)
            localStorage.setItem("email1", email1.value)
            localStorage.setItem("email2", email2.value)
            localStorage.setItem("birth_date", birth_date.value)

            alert("Thank you for registration!")
        }
    });
});