<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <style>
        .remove-btn:hover {
            color: red;
        }
    </style>
</head>

<body class="bg-gray-100">
    <?php include './Components/Nav.php' ?>

    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Shopping Cart</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white shadow-md rounded-md p-4" id="cart-items">
                <!-- Cart items will be dynamically added here -->
            </div>
        </div>

        <div class="flex justify-between items-center mt-8">
            <span class="text-xl font-semibold">Total: ₹<span id="cart-total">0</span></span>
            <div>
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 mr-2 rounded shadow">
                    Checkout (COD)
                </button>
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded shadow">
                    Checkout (Online)
                </button>
            </div>
        </div>
    </div>

    <script>
        function renderCartItems() {
            var cartItems = localStorage.getItem('cartItems');
            var cart = cartItems ? JSON.parse(cartItems) : {};
            var cartContainer = document.getElementById('cart-items');
            cartContainer.innerHTML = '';

            if (Object.keys(cart).length === 0) {
                var emptyCartMessage = document.createElement('p');
                emptyCartMessage.textContent = 'Add items to your cart';
                cartContainer.appendChild(emptyCartMessage);
                return;
            }

            var total = 0;

            for (var productId in cart) {
                var product = cart[productId];
                var itemContainer = document.createElement('div');
                itemContainer.className = 'flex justify-between items-center py-2 border-b border-gray-200';

                var itemDetailsContainer = document.createElement('div');
                itemDetailsContainer.className = 'flex flex-col';

                var itemName = document.createElement('span');
                itemName.className = 'font-semibold';
                itemName.textContent = product.name;

                var itemQuantityContainer = document.createElement('div');
                itemQuantityContainer.className = 'flex items-center';

                var decreaseQtyBtn = document.createElement('button');
                decreaseQtyBtn.className = 'text-gray-500 focus:outline-none';
                decreaseQtyBtn.innerHTML = '<i class="fas fa-minus"></i>';
                decreaseQtyBtn.addEventListener('click', decreaseQuantity.bind(null, productId));

                var itemQuantity = document.createElement('span');
                itemQuantity.className = 'text-gray-500 mx-2';
                itemQuantity.textContent = product.quantity;

                var increaseQtyBtn = document.createElement('button');
                increaseQtyBtn.className = 'text-gray-500 focus:outline-none';
                increaseQtyBtn.innerHTML = '<i class="fas fa-plus"></i>';
                increaseQtyBtn.addEventListener('click', increaseQuantity.bind(null, productId));

                itemQuantityContainer.appendChild(decreaseQtyBtn);
                itemQuantityContainer.appendChild(itemQuantity);
                itemQuantityContainer.appendChild(increaseQtyBtn);

                var itemPrice = document.createElement('span');
                itemPrice.className = 'font-semibold';
                itemPrice.textContent = 'Price: ₹' + product.price;

                var itemSubtotal = document.createElement('span');
                itemSubtotal.className = 'text-gray-500';
                var subtotal = parseFloat(product.price) * product.quantity;
                itemSubtotal.textContent = 'Subtotal: ₹' + subtotal.toFixed(2);

                itemDetailsContainer.appendChild(itemName);
                itemDetailsContainer.appendChild(itemQuantityContainer);
                itemDetailsContainer.appendChild(itemPrice);
                itemDetailsContainer.appendChild(itemSubtotal);

                var removeBtn = document.createElement('button');
                removeBtn.className = 'remove-btn hover:text-red-500 transition-colors duration-300 ml-4';
                removeBtn.innerHTML = '<i class="fas fa-trash"></i>';
                removeBtn.addEventListener('click', removeItem.bind(null, productId));

                itemContainer.appendChild(itemDetailsContainer);
                itemContainer.appendChild(removeBtn);

                cartContainer.appendChild(itemContainer);

                total += subtotal;
            }

            var totalElement = document.getElementById('cart-total');
            totalElement.textContent = total.toFixed(2);
        }

        function decreaseQuantity(productId) {
            var cartItems = localStorage.getItem('cartItems');
            var cart = cartItems ? JSON.parse(cartItems) : {};

            if (cart.hasOwnProperty(productId)) {
                if (cart[productId].quantity > 1) {
                    cart[productId].quantity--;
                    localStorage.setItem('cartItems', JSON.stringify(cart));
                    renderCartItems();
                }
            }
        }

        function increaseQuantity(productId) {
            var cartItems = localStorage.getItem('cartItems');
            var cart = cartItems ? JSON.parse(cartItems) : {};

            if (cart.hasOwnProperty(productId)) {
                cart[productId].quantity++;
                localStorage.setItem('cartItems', JSON.stringify(cart));
                renderCartItems();
            }
        }

        function removeItem(productId) {
            var cartItems = localStorage.getItem('cartItems');
            var cart = cartItems ? JSON.parse(cartItems) : {};

            if (cart.hasOwnProperty(productId)) {
                delete cart[productId];
                localStorage.setItem('cartItems', JSON.stringify(cart));
                renderCartItems();
            }
        }

        // Render the cart items on page load
        document.addEventListener('DOMContentLoaded', renderCartItems);
    </script>
</body>
</html>
