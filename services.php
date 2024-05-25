<?php
if(isset($_POST['order now'])){
    $name=$_POST['name'];
    $foodName=$_POST['foodName'];
    $orderDetails=$_POST['orderDetails'];
    $address=$_POST['address'];
    $people=$_POST['people'];
    $quantity=$_POST['quantity'];
    $date=$_POST['date'];
    $contact=$_POST['contact'];


    $host='localhost';
    $user='root';
    $pass='';
    $dbname='oel';

    $conn = mysqli_connect($host,$user,$pass,$dbname);
    $sql= "INSERT INTO order(name,foodName, orderDetails, address,people,quantity,date,contact) values ('$name','$foodName', '$orderDetails', '$address','$people','$quantity','$date','$contact') ";
    mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Fast Food Website</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./styles/style.css">

</head>
<body>
   
<!-- header section starts     -->

<section class="header">

   <a href="#" class="logo"> <i class="fas fa-utensils"></i> food. </a>

   <nav class="navbar">
      <a href="#home">home</a>
      <a href="#about">about</a>
      <a href="#food">food</a>
      <a href="#gallery">gallery</a>
      <a href="#menu">menu</a>
      <a href="#order">order</a>
      <a href="#blogs">our team</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends    -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background: url(./images/jollof.jpg) no-repeat;">
            <div class="content">
               <span>outstanding food</span>
               <h3>delicious cooking</h3>
               <a href="#" class="btn">get started</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background: url(./images/bread.jpg) no-repeat;">
            <div class="content">
               <span>outstanding food</span>
               <h3>morning moment</h3>
               <a href="#" class="btn">get started</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background: url(./images/egusi.jpg) no-repeat;">
            <div class="content">
               <span>outstanding food</span>
               <h3>authentic kitchen</h3>
               <a href="#" class="btn">get started</a>
            </div>
         </div>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->
<!-- About section start -->


<section class="about" id="about">

<div class="image">
   <img src="./images/about-img.png" alt="">
</div>

<div class="content">
   <h3 class="title">Welcome to our Restaurant</h3>
   <p>Lorem ipsum dolor, sit amet consectetur
       adipisicing elit. Nostrum excepturi, quis natus commodi aliquid aperiam ipsam nihil veritatis vel nobis blanditiis q
      aliquam laboriosam possimus eaque esse dolorum quidem fuga?</p>
      <a href="#" class="btn">read more</a>
      <div class="icons-container">
         <div class="icons">
            <img src="./images/about-icon-1.png" alt="">
            <h3>quality food</h3>
         </div>
         <div class="icons">
            <img src="./images/about-icon-2.png" alt="">
            <h3>food and drinks</h3>
         </div>
         <div class="icons">
            <img src="./images/about-icon-3.png" alt="">
            <h3>expert chef</h3>
         </div>
      </div>
</div>

</section>


<!-- About section ends -->
<!-- food section starts -->

<section class="food" id="food">

   <div class="heading">
   <span>popular dishes</span>
   <h3>our delicious food</h3>
   </div>

   <div class="swiper food-slider">

     <div class="swiper-wrapper">

      <div class="swiper-slide slide" data-name="food-1">
         <img src="./images/food-img-1.png" alt="">
         <h3>delicious food</h3>
         <div class="price">$49.99</div>
      </div>

      <div class="swiper-slide slide" data-name="food-2">
         <img src="./images/food-img-2.png" alt="">
         <h3>delicious food</h3>
         <div class="price">$49.99</div>
      </div>

      <div class="swiper-slide slide" data-name="food-3">
         <img src="./images/food-img-3.png" alt="">
         <h3>delicious food</h3>
         <div class="price">$49.99</div>
      </div>
      <div class="swiper-slide slide" data-name="food-4">
         <img src="./images/food-img-4.png" alt="">
         <h3>delicious food</h3>
         <div class="price">$49.99</div>
      </div>
      <div class="swiper-slide slide" data-name="food-5">
         <img src="./images/food-img-5.png" alt="">
         <h3>delicious food</h3>
         <div class="price">$49.99</div>
      </div>
</div>

   <div class="swiper-pagination"></div>

</div>

</section>

<!-- food section ends -->
<!-- food preview section starts -->


<section class="food-preview-container">

   <div id="close-preview" class="fas fa-times"></div>

   <div class="food-preview" data-target="food-1">
      <img src="./images/food-img-1.png" alt="">
      <h3>delicious food</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, exercitationem?</p>
      <div class="price">$49.99</div>
      <a href="#" class="btn">Buy now</a>
   </div>
   <div class="food-preview" data-target="food-2">
      <img src="./images/food-img-2.png" alt="">
      <h3>delicious food</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, exercitationem?</p>
      <div class="price">$49.99</div>
      <a href="#" class="btn">Buy now</a>
   </div>
   <div class="food-preview" data-target="food-3">
      <img src="./images/food-img-3.png" alt="">
      <h3>delicious food</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, exercitationem?</p>
      <div class="price">$49.99</div>
      <a href="#" class="btn">Buy now</a>
   </div>
   <div class="food-preview" data-target="food-4">
      <img src="./images/food-img-4.png" alt="">
      <h3>delicious food</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, exercitationem?</p>
      <div class="price">$49.99</div>
      <a href="#" class="btn">Buy now</a>
   </div>
   <div class="food-preview" data-target="food-5">
      <img src="./images/food-img-5.png" alt="">
      <h3>delicious food</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, exercitationem?</p>
      <div class="price">$49.99</div>
      <a href="#" class="btn">Buy now</a>
   </div>

</section>


<!-- food preview section ends -->
<!-- Gallery section starts -->

<section class="gallery" id="gallery">

   <div class="heading">
      <span>our gallery</span>
      <h3>our untold stories</h3>
   </div>

   <div class="gallery-container">

      <a href="food-galler-img-1.jpg" class="box">
         <img src="./images/food-galler-img-1.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i></div>
      </a>

      <a href="food-galler-img-2.jpg" class="box">
         <img src="./images/food-galler-img-2.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i></div>
      </a>
      
      <a href="food-galler-img-3.jpg" class="box">
         <img src="./images/food-galler-img-3.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i></div>
      </a>
      
      <a href="food-galler-img-4.jpg" class="box">
         <img src="./images/food-galler-img-4.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i></div>
      </a>
      
      <a href="food-galler-img-5.jpg" class="box">
         <img src="./images/food-galler-img-5.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i></div>
      </a>
      
      <a href="food-galler-img-6.jpg" class="box">
         <img src="./images/food-galler-img-6.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i></div>
      </a>

   </div>

</section>

<!-- Gallery section ends -->
<!-- Menu section starts -->

<section class="menu" id="menu">

   <div class="heading">
      <span>our menu</span>
      <h3>our popular dishes</h3>
   </div>

   <div class="swiper menu-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <h3 class="title">
               breakfast
            </h3>

            <div class="box-container">
               <div class="box">
                  <div class="info">
                     <h3>morning breakfast</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>morning breakfast</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>morning breakfast</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>morning breakfast</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>morning breakfast</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>morning breakfast</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <h3 class="title">lunch</h3>

            <div class="box-container">
               <div class="box">
                  <div class="info">
                     <h3>delicious lunch</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>delicious lunch</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>delicious lunch</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>delicious lunch</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <h3 class="title">dinner</h3>

            <div class="box-container">
               <div class="box">
                  <div class="info">
                     <h3>delicious dinner</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>delicious dinner</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>delicious dinner</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>delicious dinner</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>delicious dinner</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <h3 class="title">drinks</h3>

            <div class="box-container">
               <div class="box">
                  <div class="info">
                     <h3>cold drinks</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>cold drinks</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>cold drinks</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>cold drinks</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>cold drinks</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <h3 class="title">deserts</h3>

            <div class="box-container">
               <div class="box">
                  <div class="info">
                     <h3>sweet deserts</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>sweet deserts</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>sweet deserts</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>sweet deserts</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea?</p>
                  </div>
                  <div class="price">$49.99</div>
               </div>
            </div>
         </div>
      </div>
      

      <div class="swiper-pagination"></div>

   </div>
   

</section>


<!-- Menu section ends -->
<!-- order section starts -->

<section id="order" class="order">
   <div class="heading">
      <span>order now</span>
      <h3>fast home delivery</h3>
   </div>

   <form action=# method="post">
      <div class="box-container">
         <div class="box">
            <div class="inputBox">
               <span>full name</span>
               <input type="text" placeholder="enter your name">
            </div>
            <div class="inputBox">
               <span>food name</span>
               <input type="text" placeholder="food you want">
            </div>
            <div class="inputBox">
               <span>order details</span>
               <input type="text" placeholder="specifics with food">
            </div>
            <div class="inputBox">
               <span>your address</span>
               <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
            </div>
         </div>
         <div class="box">
            <div class="inputBox">
               <span>number</span>
               <input type="number" placeholder="enter your number">
            </div>
            <div class="inputBox">
               <span>how much</span>
               <input type="number" placeholder="how many you want">
            </div>
            <div class="inputBox">
               <span>when you want</span>
               <input type="datetime-local">
            </div>
            <div class="inputBox">
               <span>Phone No.</span>
               <input type="tel" placeholder=" enter phone no here">
            </div>
         </div>
      </div>
      <input type="submit" value="order now" class="btn">
   </form>
</section>

<!-- order section ends-->
<!-- blog section starts-->

<section class="blogs" id="blogs">

   <div class="heading">
      <span>our blogs</span>
      <h3>our latest posts</h3>
   </div>

   <div class="swiper blogs-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="image">
               <img src="./images/blog-img-1.jpg" alt="">
               <span>burger</span>
            </div>
            <div class="content">
               <div class="icon">
                  <a href="#"> <i class="fas fa-calendar"></i> 28th January, 2022 </a>
                  <a href="#"> <i class="fas fa-user"></i> by admin </a>
               </div>
               <a href="#" class="title">blog title goes here</a>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, ab?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="./images/blog-img-2.jpg" alt="">
               <span>sandwich</span>
            </div>
            <div class="content">
               <div class="icon">
                  <a href="#"> <i class="fas fa-calendar"></i> 28th January, 2022 </a>
                  <a href="#"> <i class="fas fa-user"></i> by admin </a>
               </div>
               <a href="#" class="title">blog title goes here</a>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, ab?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="./images/blog-img-3.jpg" alt="">
               <span>chicken</span>
            </div>
            <div class="content">
               <div class="icon">
                  <a href="#"> <i class="fas fa-calendar"></i> 28th January, 2022 </a>
                  <a href="#"> <i class="fas fa-user"></i> by admin </a>
               </div>
               <a href="#" class="title">blog title goes here</a>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, ab?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="./images/blog-img-4.jpg" alt="">
               <span>ice-cream</span>
            </div>
            <div class="content">
               <div class="icon">
                  <a href="#"> <i class="fas fa-calendar"></i> 9th January, 2022 </a>
                  <a href="#"> <i class="fas fa-user"></i> by admin </a>
               </div>
               <a href="#" class="title">blog title goes here</a>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, ab?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="./images/blog-img-5.jpg" alt="">
               <span>pizza</span>
            </div>
            <div class="content">
               <div class="icon">
                  <a href="#"> <i class="fas fa-calendar"></i> 9th June, 2023 </a>
                  <a href="#"> <i class="fas fa-user"></i> by admin </a>
               </div>
               <a href="#" class="title">blog title goes here</a>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, ab?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="./images/blog-img-6.jpg" alt="">
               <span>coffee</span>
            </div> 
            <div class="content">
               <div class="icon">
                  <a href="#"> <i class="fas fa-calendar"></i> 9th June, 2023 </a>
                  <a href="#"> <i class="fas fa-user"></i> by admin </a>
               </div>
               <a href="#" class="title">blog title goes here</a>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, ab?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>






<!-- blog section ends-->
<!-- footer section starts-->


<section class="footer">

   <div class="icons-container">

      <div class="icons">
         <i class="fas fa-clock"></i>
            <h3>opening hour</h3>
            <p>07:00am to 10:00pm</p>
      </div>

      <div class="icons">
         <i class="fas fa-phone"></i>
            <h3>phone</h3>
            <p>+92470899861</p>
            <p>+92496069808</p>
      </div>

      <div class="icons">
         <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>rabialatif@gmail.com</p>
            <p>codewithmide@gmail.com</p>
      </div>

      <div class="icons">
         <i class="fas fa-map"></i>
            <h3>address</h3>
            <p>Taxila, Pakistan</p>
      </div>

   </div>

   <div class="share">
      <a href="https://web.facebook.com/olumide.micheal.733" target="_blank" class="fab fa-facebook-f"></a>
      <a href="https://twitter.com/OlumideMicheal_" target="_blank" class="fab fa-twitter"></a>
      <a href="https://www.instagram.com/olumidemicheal_/?hl=en" target="_blank" class="fab fa-instagram"></a>
      <a href="https://www.linkedin.com/in/olumide-micheal-650b001b2/" target="_blank" class="fab fa-linkedin"></a>
   </div>

   <div class="credit">created by <span>Rabia Latif</span> | all rights reserved.</div>

</section>


<!-- footer section ends-->






<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<!-- custom js file link  -->
<script src="./js/script.js"></script>

<script>
   lightGallery(document.querySelector('.gallery .gallery-container'));
</script>

</body>
</html>