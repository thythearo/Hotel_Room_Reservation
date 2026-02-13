<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ai HOTEL -Home</title>
   

  <!-- Swiper js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>

  <!-- new font add -->
  <?php
    require('inc/Link.php');
  ?>
  <style>
    .pop:hover{
      border-top-color: var(--teal) !important;transition: all 0.3s;
      transform: scale(1.03);
      transition: all 0.3s;
    }
    .box{
      border-top-color: var(--teal) !important;
    }
  </style>
    
</head>
<body class="bg-light">
  <?php require('inc/header.php'); ?>
  <div class="my-5 px-4">
    <h2 class="fw-bold text-center">
      ABOUT US
    </h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae neque expedita 
      asperiores earum dolorem dolorum aut inventore ipsa architecto nihil.
    </p>
  </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3">Lorem ipsum dolor sit</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing 
          elit. Accusamus enim nostrum consectetur, architecto molestiae dolores explicabo?
        </p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
        <img src="/hotel_room_reservation/images/about/mt-1w.jpg" class="w-100">
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow text-center p-4 border-top border-4 box">
          <img src="/hotel_room_reservation/images/about/hotel-1.png" width="100px">
          <h4 class="mt-3">100+ ROOMS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow text-center p-4 border-top border-4 box">
          <img src="/hotel_room_reservation/images/about/customer.png" width="100px">
          <h4 class="mt-3">100+ CUSTOMERS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow text-center p-4 border-top border-4 box">
          <img src="/hotel_room_reservation/images/about/review.png" width="100px">
          <h4 class="mt-3">150+ REVIEWS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow text-center p-4 border-top border-4 box">
          <img src="/hotel_room_reservation/images/about/staff.png" width="100px">
          <h4 class="mt-3">50+ STAFFS</h4>
        </div>
      </div>
    </div>
  </div>

  <h3 class="my-5 fw-bold text-center">Owner Hotel</h3>


  <!-- swiper js -->
  <div class="container px-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="/hotel_room_reservation/images/about/mt-2.jpg" class="w-100">
          <h5 class="mt-2">THY THEARO</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="/hotel_room_reservation/images/about/kimran1.jpg" class="w-100" height="235px">
          <h5 class="mt-2">HEAK KIMRANN</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="/hotel_room_reservation/images/about/san.jpg" class="w-100">
          <h5 class="mt-2">SAEN SAN</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="/hotel_room_reservation/images/about/meas.png" class="w-100">
          <h5 class="mt-2">MAB MEAS</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="/hotel_room_reservation/images/about/sophea1.jpg" width="155px">
          <h5 class="mt-2">PHOUEN SOPHEA</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="/hotel_room_reservation/images/about/dery.jpg" class="w-100">
          <h5 class="mt-2">VOEY DOEY</h5>
        </div>
        
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <?php
    require('inc/footer.php');
  ?>


    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 6,
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
      // breakpoints: {
      //   320: {
      //     slidesPerView: 1,
      //   },
      //   640: {
      //     slidesPerView: 1,
      //   },
      //   768: {
      //     slidesPerView: 2,
      //   },
      //   1024: {
      //     slidesPerView: 3,
      //   },
      // }
    });
  </script>
</body>
</html>
l