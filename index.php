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
    
</head>
<body class="bg-light">
  <?php require('inc/header.php'); ?>

<!-- Swiper js -->
  <div class="container-fluid px-lg-4 mt-3">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="/hotel_room_reservation/images/hotel-1.jpg" class="img-fluid banner-img d-block mx-auto" />
        </div>
        <div class="swiper-slide">
          <img src="/hotel_room_reservation/images/hotel-2.jpg" class="img-fluid banner-img d-block mx-auto" />
        </div>
        <div class="swiper-slide">
          <img src="/hotel_room_reservation/images/hotel-3.jpg" class="img-fluid banner-img d-block mx-auto" />
        </div>
        <div class="swiper-slide">
          <img src="/hotel_room_reservation/images/hotel-4.jpg" class="img-fluid banner-img d-block mx-auto" />
        </div>
      </div>
    </div>
  </div>

  <!-- Check Availability Form -->
   <div class="container booking-box position-relative">
    <div class="row justify-content-center">
      <div class="col-lg-12 bg-white shadow p-4 rounded booking-card">
        <h5 class="mb-4">Check Booking Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check in</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check Out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Adult</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight: 500;">Children</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn text-white shadow-none custom-bg">submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
   </div>

   <!-- Our Room -->
  <h2 class="mt-1 pt-4 mb-4 text-center fw-bold">Our Rooms</h2>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto; ">
          <img src="/hotel_room_reservation/images/c-1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 mb-4>$ 1000 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                2 Bathrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                3 Sofa
              </span>
            </div> 
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                Karaoke
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                Room Heater
              </span>
            </div> 
            <div class="rating-mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2 mt-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none  ">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none  ">More Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto; ">
          <img src="/hotel_room_reservation/images/c-2.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 mb-4>$ 1000 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                2 Bathrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                3 Sofa
              </span>
            </div> 
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                Karaoke
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                Room Heater
              </span>
            </div> 
            <div class="rating-mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2 mt-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none  ">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none  ">More Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto; ">
          <img src="/hotel_room_reservation/images/c-3.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 mb-4>$ 1000 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                2 Bathrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                3 Sofa
              </span>
            </div> 
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                Karaoke
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                Room Heater
              </span>
            </div> 
            <div class="rating-mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2 mt-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none ">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none  ">More Details</a>
            </div>
          </div>
        </div>
      </div>
          <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>>></a>
          </div>
    </div>
  </div>

<!-- FACILITIES -->

  <h2 class="mt-1 pt-4 mb-4 text-center fw-bold">OUR FACILITIES</h2>
  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="/hotel_room_reservation/images/wifi-01.png" width = "80px";>
        <h5 class="mt-3">Wifi</h5>
      </div>
       <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="/hotel_room_reservation/images/Star.svg" width = "80px";>
        <h5 class="mt-3">Wifi</h5>
      </div>
       <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="/hotel_room_reservation/images/wifi-01.png" width = "80px";>
        <h5 class="mt-3">Wifi</h5>
      </div>
       <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="/hotel_room_reservation/images/wifi-01.png" width = "80px";>
        <h5 class="mt-3">Wifi</h5>
      </div>
       <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="/hotel_room_reservation/images/wifi-01.png" width = "80px";>
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>
      </div>
    </div>
  </div>

  <!-- Testimonials -->
  <h2 class="mt-1 pt-4 mb-4 text-center fw-bold">TESTIMONIALS</h2>
  
  <div class="container mt-5">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper">

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="/hotel_room_reservation/images/Star.svg" width= "30px">
            <h6 class="m-0 ms-2">ធី ធារ៉ូ</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et ad sapiente, voluptates porro, blanditiis illum sed eveniet architecto veritatis minus enim. Eligendi corrupti delectus pariatur itaque alias saepe, ea numquam.
          </p>
          <div class="Rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="/hotel_room_reservation/images/Star.svg" width= "30px">
            <h6 class="m-0 ms-2">ហ៊ាក់ គឹមរ៉ាន</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et ad sapiente, voluptates porro, blanditiis illum sed eveniet architecto veritatis minus enim. Eligendi corrupti delectus pariatur itaque alias saepe, ea numquam.
          </p>
          <div class="Rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="/hotel_room_reservation/images/Star.svg" width= "30px">
            <h6 class="m-0 ms-2">សែន សាន</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et ad sapiente, voluptates porro, blanditiis illum sed eveniet architecto veritatis minus enim. Eligendi corrupti delectus pariatur itaque alias saepe, ea numquam.
          </p>
          <div class="Rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More</a>
    </div>
  </div>

  <!-- REACH US -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold">REACH US</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100" height="320px" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d970.4908776449423!2d104.1659496266012!3d13.352545083563905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTPCsDIxJzA5LjEiTiAxMDTCsDA5JzU5LjAiRQ!5e0!3m2!1sen!2skh!4v1770796546416!5m2!1sen!2skh"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call Us</h5>
          <a href="tell: +885713074177"class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+885713074177
          </a>
          <br>
          <a href="tell: +885713074177"class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+885713074177
          </a>
        </div>
          <div class="bg-white p-4 rounded mb-4">
            <h5>Follow us</h5>
            <a href="#"class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-2 ">
                <i class="bi bi-twitter me-1"></i> Twitter
              </span>
            </a>
            <br>
            <a href="#"class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-2 ">
                <i class="bi bi-facebook me-1"></i> Facebook
              </span>
            </a>
            <br>
            <a href="#"class="d-inline-block">
              <span class="badge bg-light text-dark fs-6 p-2 ">
                <i class="bi bi-instagram me-1"></i> Instagram
              </span>
            </a>
          </div>
      </div>
    </div>
  </div>

  <?php
    require('inc/footer.php');
  ?>

    
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
          delay: 2000,
          disableOnInteraction: false,
        }
      });

      // Servey Message Swiper
      var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>
</body>
</html>
l