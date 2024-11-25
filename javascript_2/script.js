// 1. Centralize JavaScript Management (all code inside this file)

// 2. Work with constants for reliability
const highlightColor = 'yellow';  // Named constant

// 3. Modify web pages for interaction
// Use elements by ID, class name, and tag name
const title = document.getElementById('main-title');
const navItems = document.getElementsByClassName('nav-item');
const logo = document.querySelector('.logo');

// 4. Direct code flow for logic (using else if statement)
function checkUserRole(role) {
    if (role === 'admin') {
        console.log('Welcome Admin');
    } else if (role === 'user') {
        console.log('Welcome User');
    } else {
        console.log('Role not recognized');
    }
}

// 5. React to user actions for engagement
// Onclick event for the logo
logo.onclick = function() {
    alert("Logo clicked!");
};

// Onload event for when the page is fully loaded
window.onload = function() {
    alert("Welcome to VerseVibe!");
};

// Onmouseover event for text highlighting
function highlightText(element) {
    element.style.backgroundColor = highlightColor;  // Change element appearance
}

// 6. Modularize and organize your code with reusable functions
// Function that accepts multiple arguments and returns a result
function calculateDiscount(price, discount) {
    return price - (price * (discount / 100));
}

// 7. Automate repetition for simplicity (using a loop)
for (let i = 0; i < products.length; i++) {
    navItems[i].style.color = 'blue'; // change nav item color 
}

// 8. Organize data for efficiency (using an array)
const products = ['T-Shirts', 'Sweatshirts', 'Pants & Shorts'];
for (let i = 0; i < products.length; i++) {
    console.log('Product:', products[i]); // Access array elements
} 

// 9. Schedule tasks for interactive experiences (using setTimeout)
let timeoutId = setTimeout(function(){
    alert("Time's up!");
}, 5000); // Alerts after 5 seconds 

// Optional: Clear timeout if needed 
// clearTimeout(timeoutId);