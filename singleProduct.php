<?php 
require './Components/header.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
include('dbconnection.php');

// Initialize the $productName variable
$productName = '';

// Assuming the product ID is passed as a URL parameter named 'id'
if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    
    // Fetch the single product based on the ID
    $query = "SELECT * FROM categories WHERE id = $productId";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

      
        $productName = $row['product_name'];
      
        
        // The rest of your code to display the product details goes here
        
        ?>
        <title><?php echo $productName; ?></title>
        <?php
    }
}
        ?>
    <link rel="shortcut icon" href="./assets/Logo/Favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            color: #000;
            font-size: 24px;
            cursor: pointer;
            
  
        }

        .carousel-prev {
            left: 10px;
        }

        .carousel-next {
            right: 10px;
        }
    </style>
</head>
<body>
<?php include './Components/Nav.php'?>

<?php
// Assuming the product ID is passed as a URL parameter named 'id'
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Fetch the single product based on the ID
    $query = "SELECT * FROM categories WHERE id = $productId";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $productID = $row['id'];
        $productName = $row['product_name'];
        $productImage = explode(',', $row['product_images']);
        $productStock = $row['product_stock'];
        $productWeight = $row['product_weight'];
        $product_category = $row['product_category'];
        $packging_type = $row['packging_type'];
        $productPrice = $row['product_price'];

        ?>

        <!-- HTML and PHP code for displaying the single product -->
<div class="flex flex-col lg:flex-row md:flex-row justify-around gap-x-2 items-center bg-white shadow-lg rounded-lg p-6 relative overflow-hidden">
    <div class="carousel relative">
        <?php foreach ($productImage as $key => $image) { ?>
            <img src="./Admin/<?php echo $image; ?>" alt="Product Image"
                 class="<?php echo $key === 0 ? 'block' : 'hidden'; ?> transition duration-500 h-96 hover:scale-150">
        <?php } ?>
        <button class="carousel-btn carousel-prev" onclick="carouselPrevious()">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="carousel-btn carousel-next" onclick="carouselNext()">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
    <div class="mt-4 flex flex-col  justify-around items-center">
        <h2 class="text-2xl font-bold mb-10"><?php echo $productName; ?></h2>
        <div class="flex items-center mt-2">
            <p class="text-lg mr-2">Qty: </p>
            <button class="text-blue-500 hover:text-blue-600 transition-colors duration-300" onclick="decreaseWeight()">
                <i class="fas fa-minus"></i>
            </button>
            <p class="text-lg wightop mx-2">1</p>
            <button class="text-blue-500 hover:text-blue-600 transition-colors duration-300" onclick="increaseWeight()">
                <i class="fas fa-plus"></i>
            </button>
        </div>
        <span class="text-gray-600">
            <i class="fas fa-rupee-sign"></i><p id="price"> <?php echo $productPrice; ?></p>
        </span>
        <div class="flex flex-col justify-between items-center mt-4 gap-y-5">
        <div class="flex flex-col justify-between items-center mt-4 gap-y-5">
    
    <button onclick="addToCart('<?php echo $productID; ?>', '<?php echo $productName; ?>', '<?php echo $productPrice; ?>','<?php echo $productWeight; ?>');" class="text-white rounded-lg p-4 transition-colors duration-300 flex flex-row justify-between w-40" style="background-color: rgb(101 163 13);" title="Add to Cart">
        <span> Add To Cart</span><i class="fas fa-shopping-cart text-2xl "></i>
    </button>
</div>

</div>


    </div>
</div>

<script>
        var currentIndex = 0;
        var carouselImages = document.querySelectorAll('.carousel img');
        var totalImages = carouselImages.length;

        function showImage(index) {
            if (index >= 0 && index < totalImages) {
                carouselImages.forEach(function (image) {
                    image.style.display = 'none';
                });
                carouselImages[index].style.display = 'block';
            }
        }

        function carouselPrevious() {
            currentIndex--;
            if (currentIndex < 0) {
                currentIndex = totalImages - 1;
            }
            showImage(currentIndex);
        }

        function carouselNext() {
            currentIndex++;
            if (currentIndex >= totalImages) {
                currentIndex = 0;
            }
            showImage(currentIndex);
        }

        showImage(currentIndex);

        function increaseWeight() {
    var weightElement = document.querySelector('.wightop');
    var weight = parseInt(weightElement.textContent);

    weight++;
    weightElement.textContent = weight;
    updatePrice(weight);
}

function decreaseWeight() {
    var weightElement = document.querySelector('.wightop');
    var weight = parseInt(weightElement.textContent);

    if (weight === 1) {
        alert("Minimum order should be 1 kg");
        return;
    } else {
        weight--;
        weightElement.textContent = weight;
        updatePrice(weight);
    }
}

function updatePrice(weight) {
    var priceElement = document.getElementById('price');
    var basePrice = <?php echo $productPrice; ?>;
    var totalPrice = basePrice * weight;
    priceElement.textContent = totalPrice;
}

function addToCart(productId, productName, productPrice,productWeight) {
    var weightElement = document.querySelector('.wightop');
    var weight = parseInt(weightElement.textContent);
  var cartItems = localStorage.getItem('cartItems');
  var cart = cartItems ? JSON.parse(cartItems) : {};

  if (cart.hasOwnProperty(productId)) {
    // Product already exists, increase the quantity by 1
    cart[productId].quantity += weight;
} else {
    // Product doesn't exist, add it with quantity 1
    cart[productId] = {
        name: productName,
        price: productPrice,
        weight:productWeight,
        quantity: weight
    };
}
alert("Add To Cart")

  // Save the updated cart in local storage
  localStorage.setItem('cartItems', JSON.stringify(cart));
}
</script>
        

           
    <?php
} else {
    echo "Product not found.";
}
} else {
    echo "Invalid product ID.";
    }
    ?>
    
    </body>
    </html>