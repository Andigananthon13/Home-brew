let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    // searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    // searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    cartItem.classList.remove('active');
}

let cartItem = document.querySelector('.cart-items-container');

document.querySelector('#cart-btn').onclick = () =>{
    cartItem.classList.toggle('active');
    navbar.classList.remove('active');
    // searchForm.classList.remove('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}

// Function to add product to cart
// Function to add item to cart
function addToCart(event) {
    const button = event.target;
    const product = {
        id: button.getAttribute('data-id'),
        name: button.getAttribute('data-name'),
        price: button.getAttribute('data-price'),   
        image: button.getAttribute('data-image'),
        quantity: 1
    };

    let cart = localStorage.getItem('cart');
    cart = cart ? JSON.parse(cart) : [];

    // Check if product already exists in the cart
    const existingProduct = cart.find(item => item.id === product.id);
    if (existingProduct) {
        existingProduct.quantity += 1;
    } else {
        cart.push(product);
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    document.getElementById('cart-count').innerHTML = cart.length;
    displayCart();
}

// Add event listeners to all add-to-cart buttons
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', addToCart);
});

// Function to remove item from cart
function remove(id) {
    let cart = localStorage.getItem('cart');
    cart = cart ? JSON.parse(cart) : [];

    // Filter out the item to be removed
    cart = cart.filter(item => item.id != id);

    // Update local storage with the new cart array
    localStorage.setItem('cart', JSON.stringify(cart));
    
    // Update cart display
    displayCart();
}

// Function to increase quantity
function plus(id) {
    let cart = localStorage.getItem('cart');
    cart = cart ? JSON.parse(cart) : [];

    const product = cart.find(item => item.id === id);
    if (product) {
        product.quantity += 1;
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    displayCart();
}

// Function to decrease quantity
function minus(id) {
    let cart = localStorage.getItem('cart');
    cart = cart ? JSON.parse(cart) : [];

    const product = cart.find(item => item.id === id);
    if (product && product.quantity > 1) {
        product.quantity -= 1;
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    displayCart();
}

// Function to display cart
function displayCart() {
    let cart = localStorage.getItem('cart');
    cart = cart ? JSON.parse(cart) : [];

    const cartContainer = document.querySelector("#cart1");
    cartContainer.innerHTML = '';

    cart.forEach(item => {
        const { image, name, price, id, quantity } = item;
        const box = document.createElement('div');
        box.classList.add('box');
        box.innerHTML = `
            <img src="./images/${image}" alt="">
            <div class="content">
                <h3>${name}</h3>
                <div class="price">₱${price}</div>
                <span class="minus" onclick='minus("${id}")'>-</span>
                <span class="num">${quantity}</span>
                <span class="plus" onclick='plus("${id}")'>+</span>
            </div>
            <span class='remove-item' onclick='remove("${id}")'>x</span>
        `;
        cartContainer.appendChild(box);
    });

    document.getElementById('cart-count').innerHTML = cart.length;
}

// Initial call to display cart items on page load
document.addEventListener('DOMContentLoaded', displayCart);

