// Toggle dark mode on page load if it's enabled in localStorage
window.onload = function () {
    
    if (localStorage.getItem('darkMode') === 'true') {
        document.body.classList.toggle('dark-background');
    }
};

function toggleMode() {
    document.body.classList.toggle('dark-background');
    // Save the current state to localStorage
    if(localStorage.getItem('darkMode') === 'null' || localStorage.getItem('darkMode') === 'false'){
        localStorage.setItem('darkMode', 'true');
    }else{
        localStorage.setItem('darkMode', 'false');
    }
}

