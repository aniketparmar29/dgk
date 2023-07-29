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
        <h1 class="text-2xl font-bold mb-4 ">Products</h1>

        <div class="flex mb-4">
    <div class="mr-2">
        <label for="sort" class="text-green-600 font-bold">Sort by:</label>
        <select id="sort" name="sort" onchange="location = this.value;" class="border border-green-500 bg-white rounded-md px-2 py-1">
            <option value="">None</option>
            <option value="?sort=price_htl">Price: High to Low</option>
            <option value="?sort=price_lth">Price: Low to High</option>
            <option value="?sort=weight_htl">Weight: High to Low</option>
            <option value="?sort=weight_lth">Weight: Low to High</option>
        </select>
    </div>
    <div>
        <label for="product_category" class="text-green-600 font-bold">Filter by Category:</label>
        <select id="product_category" name="product_category" onchange="location = this.value;" class="border border-green-500 bg-white rounded-md px-2 py-1">
            <option value="">All</option>
            <option value="?product_category=Agarbatti">Summer</option>
            <option value="?product_category=Cosmetic">Winter</option>
        </select>
    </div>
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
                <div class="bg-white shadow-xl rounded-lg p-6 relative overflow-hidden hover:shadow-inner flex flex-col justify-between">
            <?php if (!empty($productImage[0])) { ?>
                <a href="singleProduct.php?id=<?php echo $productID; ?>">
                    <img src="./Admin/<?php echo $productImage[0]; ?>" alt="Product Image" class="w-full h-48 object-cover">
                </a>
            <?php } ?>
            <div class="mt-4">
                <h2 class="text-xl font-semibold"><?php echo $productName; ?></h2>
                <p class="text-lg mt-2">Weight: <?php echo $productWeight; ?></p>
                <p class="text-lg mt-2">Category: <?php echo $product_category; ?></p>
            </div>
            <div class="mt-auto flex justify-between pt-2">
                <span class="text-gray-600 font-bold text-xl">
                ₹<?php echo $productPrice; ?>
                </span>
                <button class="hover:text-blue-600 transition-colors duration-300" onclick="addToCart('<?php echo $productID; ?>', '<?php echo $productName; ?>', '<?php echo $productPrice; ?>','<?php echo $productWeight; ?>');" title="Add to Cart">
                    <i style="color:green" class="fas fa-shopping-cart text-2xl"></i>
                </button>
            </div>
        </div>
    <?php
    }
    mysqli_free_result($result);
    mysqli_close($conn);
    ?>
    </div>
</div>
<?php 
   include "./Components/footer.php"

   ?>
</body>
</html>
<script>
function addToCart(productId, productName, productPrice,productWeight) {
  var cartItems = localStorage.getItem('cartItems');
  var cart = cartItems ? JSON.parse(cartItems) : {};

  if (cart.hasOwnProperty(productId)) {
    // Product already exists, increase the quantity by 1
    cart[productId].quantity += 1;
} else {
    // Product doesn't exist, add it with quantity 1
    cart[productId] = {
        name: productName,
        price: productPrice,
        weight:productWeight,
        quantity: 1
    };
}
alert("Add To Cart")

  // Save the updated cart in local storage
  localStorage.setItem('cartItems', JSON.stringify(cart));
}
</script>
