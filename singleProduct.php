<?php
require './Components/header.php';
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
    <?php include './Components/Nav.php' ?>

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
            <div class="flex flex-col lg:flex-row md:flex-row justify-around items-center bg-white shadow-lg rounded-lg p-6 relative overflow-hidden">
                <div class="carousel relative">
                    <?php foreach ($productImage as $key => $image) { ?>
                        <img src="./Admin/<?php echo $image; ?>" alt="Product Image"
                             class="<?php echo $key === 0 ? 'block' : 'hidden'; ?> transition duration-500 lg:w-96 md:w-96">
                    <?php } ?>
                    <button class="carousel-btn carousel-prev" onclick="carouselPrevious()">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="carousel-btn carousel-next" onclick="carouselNext()">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
                <div class="mt-4 flex flex-col justify-around items-center">
                    <h2 class="text-2xl font-bold mb-10"><?php echo $productName; ?></h2>
                    <div class="flex items-center mt-2">
                        <p class="text-lg mr-2">Qty: </p>
                        <button class="text-blue-500 hover:text-blue-600 transition-colors duration-300"
                                onclick="decreaseWeight()">
                            <i class="fas fa-minus"></i>
                        </button>
                        <p class="text-lg wightop mx-2">1</p>
                        <button class="text-blue-500 hover:text-blue-600 transition-colors duration-300"
                                onclick="increaseWeight()">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <span class="text-gray-600">
                        <i class="fas fa-rupee-sign"></i> <span class="product-price"><?php echo $productPrice; ?></span>
                    </span>
                    <?php
                    // Check if $packging_type is not empty
                    if (!empty($packging_type)) {
                        // Explode the comma-separated string into an array
                        $packaging_types = explode(',', $packging_type);
                        ?>
                        <div class="flex flex-col justify-around items-center mt-4 gap-y-5">
                            <?php foreach ($packaging_types as $type) { ?>
                                <div>
                                    <input type="radio" name="packaging_type" value="<?php echo $type; ?>"
                                           id="<?php echo $type; ?>">
                                    <label for="<?php echo $type; ?>"><?php echo $type; ?></label>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>

                    <button onclick="addToCart('<?php echo $productID; ?>', '<?php echo $productName; ?>', '<?php echo $productPrice; ?>','<?php echo $productWeight; ?>');"
                            class="text-white rounded-lg p-4 transition-colors duration-300 flex flex-row justify-between w-40"
                            style="background-color: rgb(101 163 13);" title="Add to Cart">
                        <span> Add To Cart</span><i class="fas fa-shopping-cart text-2xl "></i>
                    </button>
                </div>
            </div>

            <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
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

                    // Update the price based on the new weight
                    updatePrice(weight);
                }

                function decreaseWeight() {
                    var weightElement = document.querySelector('.wightop');
                    var weight = parseInt(weightElement.textContent);

                    if (weight > 1) {
                        weight--;

                        weightElement.textContent = weight;

                        // Update the price based on the new weight
                        updatePrice(weight);
                    }
                }

                function updatePrice(weight) {
    var priceElement = document.querySelector('.product-price');
    var originalPrice = parseFloat(priceElement.textContent);

    // Assuming the price is calculated based on weight
    var unitPrice = originalPrice / parseFloat(productWeight);
    var newPrice = unitPrice * weight;

    // Update the price with 2 decimal places
    priceElement.textContent = newPrice.toFixed(2);
}


                function addToCart(productId, productName, productPrice, productWeight) {
                    // Get the selected packaging type
                    var packagingTypeElement = document.querySelector('input[name="packaging_type"]:checked');
                    var packagingType = packagingTypeElement ? packagingTypeElement.value : '';

                    // Get the quantity (weight)
                    var weightElement = document.querySelector('.wightop');
                    var weight = parseInt(weightElement.textContent);

                    // Prepare the data to be sent to the server
                    var data = {
                        id: productId,
                        name: productName,
                        price: productPrice,
                        weight: productWeight * weight,
                        packagingType: packagingType
                    };

                    // Assuming you are using jQuery for the AJAX request
                    $.ajax({
                        url: 'add_to_cart.php',
                        type: 'POST',
                        data: data,
                        success: function (response) {
                            alert('Product added to cart successfully!');
                        },
                        error: function (xhr, status, error) {
                            alert('Error adding product to cart. Please try again.');
                        }
                    });
                }
            </script>

    <?php
        } else {
            echo "No product found!";
        }
    }
    ?>

</body>

</html>
