<?php
include('dbconnection.php');

// Get sorting and filtering options from the query parameters
$sort = isset($_GET['sort']) ? $_GET['sort'] : ''; // Sorting option: price_htl, price_lth, weight_htl, weight_lth
$product_category = isset($_GET['product_category']) ? $_GET['product_category'] : ''; // Filtering option: product_category

// Construct the SQL query based on the sorting and filtering options
$sql = "SELECT * FROM categories";
if ($product_category !== '') {
    $sql .= " WHERE product_category = '$product_category'";
}

$order = '';
if ($sort === 'price_htl') {
    $order = 'ORDER BY product_price DESC';
} elseif ($sort === 'price_lth') {
    $order = 'ORDER BY product_price ASC';
} elseif ($sort === 'weight_htl') {
    $order = 'ORDER BY product_weight DESC';
} elseif ($sort === 'weight_lth') {
    $order = 'ORDER BY product_weight ASC';
}

if ($order !== '') {
    $sql .= " $order";
}

$result = $conn->query($sql);
?>
<?php 
require './Components/header.php'
?>
<!DOCTYPE html>
<html>
<head>
    <title>Products Page</title>
    <link rel="shortcut icon" href="./assets/Logo/Favicon.ico" type="image/x-icon">
</head>
<body>
    <?php include './components/Nav.php'?>
    
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Products</h1>

        <div class="flex mb-4">
            <div class="mr-2">
                <label for="sort">Sort by:</label>
                <select id="sort" name="sort" onchange="location = this.value;">
                    <option value="">None</option>
                    <option value="?sort=price_htl">Price: High to Low</option>
                    <option value="?sort=price_lth">Price: Low to High</option>
                    <option value="?sort=weight_htl">Weight: High to Low</option>
                    <option value="?sort=weight_lth">Weight: Low to High</option>
                </select>
            </div>
            <div>
                <label for="product_category">Filter by Category:</label>
                <select id="product_category" name="product_category" onchange="location = this.value;">
                    <option value="">All</option>
                    <option value="?product_category=Agarbatti">summer</option>
                    <option value="?product_category=Cosmetic">winter</option>
                </select>
            </div>
        </div>

        <div class="container mx-auto grid gap-8 grid-cols-2 lg:grid-cols-4">
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $productID = $row['id'];
        $productName = $row['product_name'];
        $productImage = explode(',', $row['product_images']);
        $productStock = $row['product_stock'];
        $productWeight = $row['product_weight'];
        $productDesc = $row['product_desc'];
        $product_category = $row['product_category'];
        $productPrice = $row['product_price'];

        // Check if the product is already in the wishlist
        ?>
                <div class="bg-white shadow-lg rounded-lg p-6 relative overflow-hidden">
            <?php if (!empty($productImage[0])) { ?>
                <a href="singleProduct.php?id=<?php echo $productID; ?>">
                    <img src="./Admin/<?php echo $productImage[0]; ?>" alt="Product Image">
                </a>
            <?php } ?>
            <div class="mt-4">
                <h2 class="text-xl font-semibold"><?php echo $productName; ?></h2>
                <p class="text-lg mt-2">Weight:<?php echo $productWeight; ?></p>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-gray-600">
                        <i class="fas fa-rupee-sign"></i> <?php echo $productPrice; ?>
                    </span>
                    
                    <button class=" hover:text-blue-600 transition-colors duration-300"
                        title="Add to Cart">
                        <i style="color:#F47F1F" class="fas fa-shopping-cart text-2xl "></i>
                    </button>
                </div>
            </div>
        </div>
    <?php
    }
    mysqli_free_result($result);
    mysqli_close($conn);
    ?>
    </div>
</div>
<?php include './components/Footer.php'?>

</body>
</html>
<script>
    function addToWishlist(productID, productName, productImage, productWeight, productPrice) {
        // Get the product details
        var productDetails = {
            id: productID,
            name: productName,
            image: productImage,
            weight: productWeight,
            price: productPrice
        };

        // Check if localStorage is available
        if (typeof (Storage) !== "undefined") {
            // Retrieve existing wishlist items from localStorage
            var wishlistItems = localStorage.getItem("wishlist");
            var wishlist = [];

            if (wishlistItems !== null) {
                wishlist = JSON.parse(wishlistItems);
            }

            // Check if the product is already in the wishlist
            var isProductInWishlist = wishlist.some(function (item) {
                return item.id === productID;
            });

            if (isProductInWishlist) {
                // Product already in wishlist, display message to the user
                alert("Product is already in the wishlist!");
            } else {
                // Add the product to the wishlist
                wishlist.push(productDetails);

                // Save the updated wishlist back to localStorage
                localStorage.setItem("wishlist", JSON.stringify(wishlist));

                // Provide feedback to the user
                alert("Product added to wishlist!");
            }
        } else {
            // localStorage is not available
            alert("Your browser does not support localStorage")
        }
    }

</script>
