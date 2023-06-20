<?php 
require './Components/header.php'
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Nordic Shop: Tailwind Toolbox</title>
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">
    
   

    <style>
        .work-sans {
            font-family: 'Work Sans', sans-serif;
        }
                
        #menu-toggle:checked + #menu {
            display: block;
        }
        
        .hover{
            transition: all 0.3s;
            transform: scale(1);
        }
        
        .hover\:grow:hover {
            transform: scale(1.02);
        }
        
        .carousel-open:checked + .carousel-item {
            position: static;
            opacity: 100;
        }
        
        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }
        
        #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3 {
            display: block;
        }
        
        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }
        
        #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }
    </style>

</head>
<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
    <section class="grid grid-cols-2 lg:grid-cols-4">
        <?php
        $sql = "SELECT * FROM categories LIMIT 4"; // Fetch only the first four products
        $result = $conn->query($sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $productID = $row['id'];
            $productName = $row['product_name'];
            $productImage = explode(',', $row['product_images']);
            $productStock = $row['product_stock'];
            $productWeight = $row['product_weight'];
            $productDesc = $row['product_desc'];
            $product_category = $row['product_category'];
            $productPrice = $row['product_price'];
        ?>
            <div class="w-full  p-3 flex flex-col hover:grow hover:shadow-lg">
                <a href="#">
                    <?php if (!empty($productImage[0])) { ?>
                        <a href="singleProduct.php?id=<?php echo $productID; ?>">
                            <img class="hover:grow hover:shadow-lg" src="./Admin/<?php echo $productImage[0]; ?>" alt="Product Image">
                        </a>
                    <?php } ?>
                    <div class="pt-3 flex items-center justify-between">
                        <p class=""><?php echo $productName; ?></p>
                    </div>
                    <p class="pt-1 text-gray-900"><?php echo $productPrice; ?></p>
                </a>
            </div>
        <?php
        }
            mysqli_free_result($result);
            mysqli_close($conn);
        ?>
    </section>
</body>

</html>