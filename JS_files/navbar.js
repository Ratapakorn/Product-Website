// JavaScript to create and insert the navbar
document.addEventListener("DOMContentLoaded", function () {
    // Determine the current base path (relative to the root or subdirectory)
    const basePath = window.location.pathname.split('/')[1] ? window.location.pathname.split('/')[1] : '';

    // Adjust image and link paths based on the current location
    const imagePath = basePath ? `/${basePath}/images/AbhiGmbh_Logo.png` : '/images/AbhiGmbh_Logo.png';
    const productLink = basePath ? `/${basePath}/wooden_crafted_toys/product_landing_page.php` : '/wooden_crafted_toys/product_landing_page.php';
    const aboutLink = basePath ? `/${basePath}/content/about.php` : '/content/about.php';
    const contactLink = basePath ? `/${basePath}/content/contacts.php` : '/content/contacts.php';
    const loginLink = basePath ? `/${basePath}/content/login.php` : '/content/login.php';

    // Adjust Home link (if inside content folder, point to the parent index.php)
    const homeLink = basePath ? `/${basePath}/index.php` : 'index.php';


    const navbarHTML = `
        <nav class="navbar">
            <ul>
                <li class="logo">
                    <img src="${imagePath}" alt="Abhi_GMbH" />
                </li>
                <li><a href="${homeLink}"><i class="fa fa-home"></i>Home</a></li>
                <li><a class="dropdownbutton" href="${productLink}"><i class="fa fa-archive"></i>Products</a></li>
                <li><a href="${aboutLink}"><i class="fa fa-building"></i>About</a></li>
                <li><a href="${contactLink}"><i class="fa fa-phone"></i>Contact</a></li>
                <li class="loginregis"><a href="${loginLink}">Login / Registration</a></li>
            </ul>
        </nav>
    `;

    // Insert the navbar into the body
    const navbarContainer = document.getElementById("navbar-container");
    navbarContainer.innerHTML = navbarHTML;
});