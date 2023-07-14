<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <!-- Include Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
  <!-- Include Animate.css for animations -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  <!-- Custom styles -->
  <style>
    /* Add your custom styles here */
  </style>
</head>

<body class="bg-gray-200">
  <header >
    
    <?php require './Components/Nav.php' ?>
   
  </header>
  <style>
    /* Add your custom styles here */
    .bg-image {
      position: relative;
      width: 100%;
      height: 100%;
    }

    .bg-image::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      filter: brightness(60%);
    }

    .content {
      position: relative;
      z-index: 1;
    }

    @keyframes highlightAnimation {
      0% {
        color: #000; /* Start with black color */
      }
      50% {
        color: #00ff00; /* Change color to green at 50% of animation */
      }
      100% {
        color: #000; /* Revert back to black color at the end of animation */
      }
    }

    @media (max-width: 767px) {
      .bg-image::before {
        background-image: url('./Admin/Founder/vadipic-mobile.jpg');
      }
    }

    @media (min-width: 768px) {
      .bg-image::before {
        background-image: url('./Admin/Founder/vadipic.jpg');
      }
    }
  </style>

    <div class=" bg-image">
    <section class="pt-44" >
        <div class="container bbg-black bg-opacity-50  mx-auto px-4">
            <div class="flex flex-col items-center mt-48">
        <h1 class="text-4xl text-white font-bold text-center mb-8 animate__animated animate__fadeInDown">welcome to our organic store jay ho village!</h1>
        <p class="text-white text-center mb-8 animate__animated animate__fadeInUp text-xl">At Jay Ho Village, we are passionate about promoting good health and well-being through the production of organic food. We believe that what you put into your body matters and can have a profound impact on your overall health and vitality. That's why we have dedicated ourselves to providing high-quality, organic food options that nourish both your body and the planet.</p>
        
    </div>
</div>
</section>

</div>
  <section class="bg-white py-16">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="flex flex-col justify-center items-center md:order-1">
          
        <img src='./Admin/Founder/founderpic.png' alt="About Us" class="w-70 rounded shadow-lg animate__animated animate__fadeInLeft" />
        <div class="font-bold text-2xl mt-4">Mr.Darshakbhai Kathrotiya </div>
        <div class="font-bold text-1.5xl">Founder of Jay Ho Village!</div>
    </div>
        <div class="md:order-2">
          <h2 class="text-3xl font-bold mb-4 animate__animated animate__fadeInRight">Our Mission</h2>
          <p class="text-gray-600 mb-8 animate__animated animate__fadeInRight">Our mission is to empower individuals to make healthier choices by offering a wide range of delicious, nutritious, and sustainably sourced organic food products. We strive to create a positive impact on the health of our customers and the environment by promoting organic farming practices and sustainable agriculture</p>
          <p class="text-gray-600 mb-8 animate__animated animate__fadeInRight">Commitment to Organic: We are committed to the organic movement and adhere to stringent organic farming practices. Our organic food is free from harmful pesticides, synthetic fertilizers, and genetically modified organisms (GMOs). By choosing our products, you can be confident that you are consuming food in its purest and most natural form.</p>
          <h2 class="text-3xl font-bold mb-4 animate__animated animate__fadeInRight">Our Vision</h2>
          <p class="text-gray-600 animate__animated animate__fadeInRight">Our vision is to create a healthier world by offering organic food that not only nourishes the body but also protects the environment. We strive to be at the forefront of the organic farming movement, leading the way in sustainable and eco-friendly practices.We aim to save the Earth from harmful chemicals by using natural farming methods.</p>
          <p class="text-gray-600 animate__animated animate__fadeInRight">Join us on this journey towards better health and a greener planet. Together, we can make a positive impact on our well-being and the future of generations to come.</p>
          <p class="text-gray-600 animate__animated animate__fadeInRight">We hope you find inspiration and purpose in our mission to save the Earth from harmful chemicals and keep you healthy. Thank you for being a part of our community!</p>
        </div>
      </div>
    </div>
  </section>
  <div class="relative text-center">
  <h2 class="animate-highlight text-white " style="background-color: #65A30D " >Choose organic. Choose wellness. Choose Jay Ho Village!</h2>
</div>

  <section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-8 animate__animated animate__fadeIn">Our Team</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white rounded shadow-lg p-6 flex flex-col items-center animate__animated animate__fadeIn">
          <img src="./Admin/Founder/teammate1.jpg" alt="Team Member" class="w-48  mb-4">
          <h3 class="text-xl font-semibold mb-2">Mrs.Kinjal Kathrotiya</h3>
          <p class="text-gray-600">Co-Founder</p>
        </div>
        <div class="bg-white rounded shadow-lg p-6 flex flex-col items-center animate__animated animate__fadeIn">
          <img src="./Admin/Founder/teammate2.jpg" alt="Team Member" class="w-48  mb-4">
          <h3 class="text-xl font-semibold mb-2">Mr.Darshakbhai Kathrotiya</h3>
          <p class="text-gray-600">Marketing Director</p>
        </div>
        <div class="bg-white rounded shadow-lg p-6 flex flex-col items-center animate__animated animate__fadeIn">
          <img src="team-member3.jpg" alt="Team Member" class="w-32 h-32 rounded-full mb-4">
          <h3 class="text-xl font-semibold mb-2">Mr.Ghanshyambhai Kathrotiya</h3>
          <p class="text-gray-600">Product Manager</p>
        </div>
      </div>
    </div>
  </section>

  
    
  <?php 
   include "./Components/footer.php"

   ?>
  

  <!-- Include the necessary scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.2/alpine.min.js"></script>
  <!-- Add your custom JavaScript here -->

</body>

</html>
