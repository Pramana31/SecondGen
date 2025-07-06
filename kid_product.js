import cart from "./cart.js";
import cloth from "./kid_cloth.js";

const app = document.getElementById('app');
const tempContent = document.getElementById('temporaryContent');

const loadTemplate = () => {
  fetch('women.html')
    .then(response => response.text())
    .then(html => {
      app.innerHTML = html;

      setTimeout(() => {
        const contentTab = document.querySelector('.contentTab');
        contentTab.innerHTML = tempContent.innerHTML;
        tempContent.innerHTML = '';

        cart();
        initApp();
      }, 50);
    });
};

const initApp = () => {
  const listProduct = document.querySelector('.ListProduct');
  listProduct.innerHTML = '';

  cloth.forEach(item => {
    const newProduct = document.createElement('div');
    newProduct.classList.add('item');

    newProduct.innerHTML = `
      <img src="${item.image}" alt="${item.name}" style="height:200px;width:auto;"/>
      <h3>${item.name}</h3>
      <p class="description">${item.description}</p>
      <p><strong>₹${item.price}</strong></p>
      <button class="add-to-cart-btn">Add to Cart</button>
    `;

    // Add click handler for Add to Cart
    const button = newProduct.querySelector('.add-to-cart-btn');
    button.addEventListener('click', () => {
      window.addToCart(item);
    });

    listProduct.appendChild(newProduct);
  });
};

loadTemplate();
