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

  
    
<footer class="bg-white dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="" class="flex items-center">
                  <img src="./Admin/logo/logo.jpg" class="h-20 mr-3"  />
                  
              </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                  <ul class="text-gray-600 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                      </li>
                      <li>
                          <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                  <ul class="text-gray-600 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                      </li>
                      <li>
                          <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                  <ul class="text-gray-600 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">Privacy Policy</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Jay Ho Village</a>. All Rights Reserved.
          </span>
          <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                  <span class="sr-only">Facebook page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                  <span class="sr-only">Instagram page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                  <span class="sr-only">Twitter page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                  <span class="sr-only">GitHub account</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                  <span class="sr-only">Dribbble account</span>
              </a>
          </div>
      </div>
    </div>
</footer>

  

  <!-- Include the necessary scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.2/alpine.min.js"></script>
  <!-- Add your custom JavaScript here -->

</body>

</html>
