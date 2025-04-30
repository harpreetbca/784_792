// Initialize an empty cart array
let cart = [];

// Add product to the cart
function addToCart(productName, productPrice) {
  // Add item to cart array
  cart.push({ name: productName, price: productPrice });

  // Save the cart to localStorage so it persists between pages
  localStorage.setItem('cart', JSON.stringify(cart));

  alert(`${productName} added to your cart!`);
}

// Display cart items
function displayCart() {
  const cartDiv = document.getElementById('cart');
  if (!cartDiv) return; // Only run this on the cart page

  // Retrieve the cart from localStorage
  cart = JSON.parse(localStorage.getItem('cart')) || [];

  cartDiv.innerHTML = ''; // Clear previous cart display
  let total = 0;

  cart.forEach((item, index) => {
    const product = document.createElement('p');
    product.innerText = `${item.name} - ₹${item.price}`;
    const removeBtn = document.createElement('button');
    removeBtn.innerText = 'Remove';
    removeBtn.onclick = () => removeFromCart(index);

    cartDiv.appendChild(product);
    cartDiv.appendChild(removeBtn);

    total += item.price;
  });

  const totalDisplay = document.createElement('p');
  totalDisplay.innerText = `Total: ₹${total}`;
  cartDiv.appendChild(totalDisplay);
}

// Remove an item from the cart
function removeFromCart(index) {
  cart.splice(index, 1); // Remove item from array
  localStorage.setItem('cart', JSON.stringify(cart)); // Update localStorage
  displayCart(); // Refresh the cart display
}

// Place the order
function placeOrder() {
  alert('Order placed successfully!');
  cart = []; // Clear the cart
  localStorage.setItem('cart', JSON.stringify(cart)); // Clear localStorage
  displayCart(); // Refresh the cart display
}

// Automatically display cart if on the cart page
displayCart();
