<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/indexcss.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="shortcut icon" href="https://www.linkpicture.com/q/logo1_25.png">
    <title>MamaMart</title>
  
</head>

<body>

    <header class="text-gray-600 body-font bg-gray-900">
        <div class="navbar container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">

                <img src="https://www.linkpicture.com/q/logo1_25.png" style="height: 60px;" class="-ml-6">
                <span class="ml-3 text-3xl text-green-400">MamaMart</span>
            </a>
            <nav class="md:mr-auto md:ml-6 md:py-1 md:pl-4 md:border-l md:border-gray-400 flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-gray-900">Home</a>

                <div class="dropdown">
                    <button class="dropbtn">Dropdown 
                <i class="fa fa-caret-down"></i>
              </button>
                    <div class="dropdown-content">
                        <a href="categories.html">Grocery & Staples</a>
                        <a href="categories.html">Snacks & Beverages</a>
                        <a href="categories.html">Packaged Food</a>
                        <a href="categories.html">Houshold Care</a>
                        <a href="categories.html">Edible Oil</a>
                        <a href="categories.html">Masala & Spices</a>
                    </div>
                </div>
                <a href="cart.php" class="ml-2 mr-5 hover:text-gray-900">Wish List</a>
                <a class="mr-5 hover:text-gray-900">Let's Re-sell</a>
                <a class="mr-5 hover:text-gray-900 " href="login.php"><button>Login</button></a>
            </nav>

            <div class=" search-box">

                <input class="search-bar" type="text" placeholder="Search.." name="search">
                <button class="search-icon" type="submit"><a href="categories.html"><i class="fa fa-search"></i></button></a>
            </div>

            <a href="cart.php"><button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-20 md:mt-0 -ml-20">My Cart  

            <i  class="fa fa-shopping-cart" style="font-size:20px"></i></a>
  
        </button>
        </div>
    </header>


    <!--Slider-->

    <div class="m-8 rounded-l-3xl rounded-r-3xl carousel relative shadow-2xl bg-black">
        <div class="rounded-l-3xl rounded-r-3xl   carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="absolute -mt-16  carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="absolute carousel-item  opacity-0" style="height:80vh;">
                <img src="https://www.linkpicture.com/q/img1_15.jpg" class="block w-full h-full" alt="Wild Landscape" />
                <div class=" border-none rounded-full  bg-white  text-lg -mt-40 m-20 absolute  text-black ">
                    <label class="pl-3"> <i style="font-size:24px;color:gray" class="fa">&#xf1d9;</i>
                    <input class="border-none rounded-full  py-2 px-3 text-gray-700 focus:border-none focus:outline-none focus:shadow-outline " id="email" type="email" placeholder="Your Email Address" required>
                </label>

                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-5 rounded-full">
                        Subscribe
                      </button>
                </div>
            </div>

            <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-green-500 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 2-->
            <input class="absolute carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="absolute carousel-item absolute opacity-0" style="height:80vh;">

                <img src="https://www.linkpicture.com/q/img2_21.jpg" class=" block w-full h-full " alt="Wild Landscape" />
                <div class=" border rounded-full  bg-white  text-lg -mt-40 m-20 absolute  text-black">
                    <label class="pl-3"> <i style="font-size:24px;color:gray" class="fa">&#xf1d9;</i>
                    <input class="border-none rounded-full  py-2 px-3 text-gray-700  focus:outline-none focus:shadow-outline " id="email" type="email" placeholder="Your Email Address" required>
                </label>
                    <!--"-mt-16-->
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-5 rounded-full">
                        Subscribe
                      </button>
                </div>
            </div>
            <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-green-500 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>

            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-green-700">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-green-700">•</label>
                </li>
            </ol>

        </div>
    </div>

   


    <!--Featured Categories-->


    <h1 class="mt-20 ml-8 mb-8  text-3xl font-bold text-gray-800">Featured Categories</h1>


    <div class="flex flex-wrap  ">

        <div class=" bg-orange-200 box-border border h-56 w-48 p-4  rounded-lg   m-8 mt-4 hover:text-green-600  hover:shadow-2xl hover:border-green-300">
            <a href="categories.html">
                <img src="https://www.linkpicture.com/q/c1_1.png" class="  p-2 w-50 h-50 " alt="Wild Landscape" />
                <h1 class=" p-1 ml-4"> Grocery & Staples</h1>
            </a>
        </div>

        <div class="box-border border h-56 w-48 p-4 rounded-lg  bg-red-200 m-4 hover:text-green-600  hover:shadow-2xl hover:border-green-300">
            <a href="categories.html">
                <img src="https://www.linkpicture.com/q/c2_4.png" class="  p-2 w-50 h-50 " alt="Wild Landscape" />
                <h1 class=" p-1 ml-2"> Snacks & Beverages</h1>
            </a>
        </div>
        <div class="box-border border h-56 w-48 p-4 rounded-lg  bg-blue-200 m-4 hover:text-green-600  hover:shadow-2xl hover:border-green-300">
            <a href="categories.html">
                <img src="https://www.linkpicture.com/q/c2_5.png" class="  p-2 w-50 h-50 " alt="Wild Landscape" />
                <h1 class=" p-1 ml-6"> Packaged Food</h1>
            </a>
        </div>
        <div class="box-border border h-56 w-48 p-4 rounded-lg bg-yellow-200 m-4 hover:text-green-600  hover:shadow-2xl hover:border-green-300">
            <a href="categories.html">
                <img src="https://www.linkpicture.com/q/c2_6.png" class="  p-2 w-50 h-50 " alt="Wild Landscape" />
                <h1 class=" p-1 ml-5"> Household Care</h1>
            </a>
        </div>
        <div class="box-border border h-56 w-48 p-4 rounded-lg  bg-pink-200 m-4 hover:text-green-600  hover:shadow-2xl hover:border-green-300">
            <a href="categories.html">
                <img src="https://www.linkpicture.com/q/c2_7.png" class="  p-2 w-50 h-50 " alt="Wild Landscape" />
                <h1 class=" p-1 ml-10"> Edible Oils</h1>
            </a>
        </div>
        <div class="box-border border h-56 w-48 p-4 rounded-lg  bg-gray-200 m-4 hover:text-green-600  hover:shadow-2xl hover:border-green-300">
            <a href="categories.html">
                <img src="https://www.linkpicture.com/q/c2_8.png" class="  p-2 w-50 h-50 " alt="Wild Landscape" />
                <h1 class="p-1 ml-4"> Masalas & Spices</h1>
            </a>
        </div>
    </div>

    <div>

        <div class="">
            <img src="https://www.linkpicture.com/q/bg1_11.png" class="img1" alt="Wild Landscape" style="margin-top: 70px;" />
            <div style="text-align: center; font-size: 28px; font-weight: 600;">
                <div style="margin-top: -144px;" class="title">
                    <h1 style="color: #002D62;" class="title-content">GET YOUR GROCERY</h1>
                    <h1 style="color: whitesmoke; " class="title-content title-second">SUPERFAST</h1>
                    <h1 style="color: #002D62; " class="title-content title-third">EVERYDAY</h1>
                </div>
            </div>
            <div>
                <img style="width: 500px; margin-top: -200px;" src="https://www.linkpicture.com/q/skip2.png" alt="">
                <img style="width: 250px; margin-left: 1150px; margin-top: -298px;" src="https://www.linkpicture.com/q/c4_2.png" alt="">
                <img style="width: 250px; margin-left: 850px; margin-top: -232px;" src="https://www.linkpicture.com/q/t1_1.png" alt="">
            </div>

        </div>

    </div>

    <div class="flex flex-wrap  ">

        <div class="offer  box-border border rounded-3xl mr-2 ml-8 mt-4   ">
            <a href="">
                <img src="https://www.linkpicture.com/q/c4_1.png" class="rounded-3xl w-full h-full" alt="Wild Landscape" />

            </a>
        </div>
        <div class="offer box-border border rounded-3xl   m-2 mt-4 ">
            <a href="">
                <img src="https://www.linkpicture.com/q/temp1.jpg" class="rounded-3xl w-full h-full" alt="Wild Landscape" />

            </a>
        </div>
        <div class="offer  box-border border rounded-3xl   m-2 mt-4 ">
            <a href="">
                <img src="https://www.linkpicture.com/q/temp2_1.jpg" class="rounded-3xl   w-full h-full " alt="Wild Landscape" />

            </a>
        </div>
    </div>

    <!--banner-->
    <br>
    <img src="https://www.linkpicture.com/q/banner-main.jpg" class=" block w-full h-full " alt="Wild Landscape" />
    <div class=" border rounded-full  bg-white  text-lg -mt-32 m-32 absolute  text-black">
        <label class="pl-3"> <i style="font-size:24px;color:gray" class="fa">&#xf1d9;</i>
            <input class="border-none rounded-full  py-2 px-3 text-gray-700  focus:outline-none focus:shadow-outline " id="email" type="email" placeholder="Your Email Address" required>
        </label>
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-5 rounded-full">Subscribe</button>
    </div> <br>

    <!--Incentive-->

    <div class="flex flex-wrap font-semibold ">

        <div class=" bg-gray-200 box-border border h-32 w-64 p-4  rounded-lg   m-2 ml-6 ">     
            <div ><img  src="https://www.linkpicture.com/q/icon-1.png" class=" p-2 w-20 h-20 transform transition-all hover:-translate-y-2" alt="Wild Landscape" /></div>
            <h1 class=" p-1 ml-20 -mt-20 text-xl"> Best prices & Offers</h1>
            <h1 class=" p-1 ml-20 text-sm text-gray-800"> Orders ₹150 or more</h1>         
        </div>

        <div class="bg-gray-200 box-border border h-32 w-64 p-4 rounded-lg  m-2">
            <img src="https://www.linkpicture.com/q/icon-2_2.png" class="  p-2 w-20 h-20 transform transition-all hover:-translate-y-2" alt="Wild Landscape" />
            <h1 class=" p-1 ml-20 -mt-20 text-xl"> Free Delivery</h1>
            <h1 class=" p-1 ml-20 text-sm text-gray-800">24/7 amazing services</h1>   
        </div>
        <div class="bg-gray-200 box-border border h-32 w-64 p-4 rounded-lg  m-2">
            <img src="https://www.linkpicture.com/q/icon-3_1.png" class="  p-2 w-20 h-20 transform transition-all hover:-translate-y-2" alt="Wild Landscape" />
            <h1 class=" p-1 ml-20 -mt-20 text-xl"> Great daily deal</h1>
            <h1 class=" p-1 ml-20 text-sm text-gray-800"> When you sign up</h1>
        </div>
        <div class="bg-gray-200 box-border border h-32 w-64 p-4 rounded-lg m-2">
                <img src="https://www.linkpicture.com/q/icon-4.png" class="  p-2 w-20 h-20 transform transition-all hover:-translate-y-2" alt="Wild Landscape" />
                <h1 class=" p-1 ml-20 -mt-20 text-xl"> Wide assortment</h1>
                <h1 class=" p-1 ml-20 text-sm text-gray-800"> Mega Discounts</h1>
        </div>
        <div class=" bg-gray-200 box-border border h-32 w-64 p-4 rounded-lg  m-2">
                <img src="https://www.linkpicture.com/q/icon-5.png" class="  p-2 w-20 h-20 transform transition-all hover:-translate-y-2" alt="Wild Landscape" />
                <h1 class=" p-1 ml-20 -mt-20 text-xl"> Easy returns</h1>
                <h1 class=" p-1 ml-20 text-sm text-gray-800"> Within 30 days</h1>
        </div>
        
    </div>
    <br>

    <!--Footer-->

    <footer class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-2 py-12 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
                    <img src="Images/logo1.png" style="height: 60px;">
                    <span class="ml-3  text-3xl  text-gray-50 font-bold">MamaMart</span>
                </a>
                <p class="mt-2 text-sm text-gray-500">Grocery store website</p>
            </div>
            <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-bold text-white tracking-widest text-sm mb-3">ABOUT</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a href="main.php" class="text-gray-400 hover:text-white  hover:text-green-600">Contact Us</a>
                        </li>
                        <li>
                            <a href="main.php" class="text-gray-400  hover:text-green-600">About Us</a>
                        </li>
                        <li>
                            <a href="main.php" class="text-gray-400  hover:text-green-600">Press</a>
                        </li>
                        <li>
                            <a href="main.php" class="text-gray-400  hover:text-green-600">Information</a>
                        </li>
                        <li>
                            <a href="main.php" class="text-gray-400 hover:text-green-600">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="main.php" class="text-gray-400  hover:text-green-600">Terms & Conditions</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-bold text-white tracking-widest text-sm mb-3">POPULAR</h2>
                    <nav class="list-none mb-10">
                    <li>
                            <a href="categories.html" class="text-gray-400 hover:text-green-600">Grocery & Staples</a>
                        </li>
                        <li>
                            <a href="categories.html" class="text-gray-400 hover:text-green-600">Snacks & Beverages</a>
                        </li>
                        <li>
                            <a href="categories.html" class="text-gray-400 hover:text-green-600">Packaged Food</a>
                        </li>
                        <li>
                            <a href="categories.html" class="text-gray-400 hover:text-green-600">Household Care</a>
                        </li>
                        <li>
                            <a href="categories.html" class="text-gray-400 hover:text-green-600">Edible Oil</a>
                        </li>
                        <li>
                            <a href="categories.html" class="text-gray-400 hover:text-green-600">Masalas & Spices</a>
                        </li>
                    </nav>
                </div>
                <p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.7444027387596!2d77.15992201500777!3d28.577436982439515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1d7d89b904f9%3A0xb60c49d133cb8752!2sRam%20Lal%20Anand%20College%2C%20University%20of%20Delhi!5e0!3m2!1sen!2sin!4v1650954343965!5m2!1sen!2sin" 
                        width="460" height="300" style="border:0; margin-top:-40px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </p>
               
            </div>
        </div>
        <div class="bg-gray-800 bg-opacity-75">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-400 text-sm text-center sm:text-left">©️ 2022 MamaMart 
                    
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
              <a class="text-gray-400">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-400">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-400">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-400">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                  <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                  <circle cx="4" cy="4" r="2" stroke="none"></circle>
                </svg>
              </a>
            </span>
            </div>
        </div>
    </footer>



</body>

</html>