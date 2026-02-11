<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Roboto+Flex:opsz,wght,XOPQ,XTRA,YOPQ,YTDE,YTFI,YTLC,YTUC@8..144,100..1000,96,468,79,-203,738,514,712&display=swap" rel="stylesheet">
  <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <!-- Swiper js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>

  <!-- new font add -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/hotel_room_reservation/Css/index.css">
    
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="DashboardLogin.php">Ai Hotel</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Rooms</a>
        </li class="nav-item">
          <a class="nav-link me-2" href="#">Facilities</a>
        </li class="nav-item">
          <a class="nav-link me-2" href="#">Contact Us</a>
        </li class="nav-item">
          <a class="nav-link me-2" href="#">About</a>
        </li>

      </ul>
      <div class="d-flex" class="menu-login">
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
          Login
          </button>
          <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registerModal">
          Register
          </button>
      </div>
    </div>
  </div>
</nav>


<div class="modal fade" id="loginModal" data-bs-backdrop= "static" data-bs-keyboard= "false" tabindex="-1" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title">
            <i class="bi bi-person-circle fs-3 me-2 "></i>
            User Login
          </h5>
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none">
          </div>
          <div class="mb-4">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none">
          </div>
          <div class="d-flex align-item-center justify-content-between mb-2">
            <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="registerModal"  data-bs-backdrop= "static" data-bs-keyboard= "false" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-lines-fill fs-3 me-2"></i>
            User Register
          </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
              Note  : Your Details  must much with your ID (Aadhar Card, Passport , Driving license, etc.)  That will be required during check-in
            </span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Picture</label>
                  <input type="file" class="form-control shadow-none">
                </div>
                 <div class="col-md-12 p-0 mb-3">
                  <label class="form-label">Address</label>
                  <textarea class="form-control shadow-none" rows="3"></textarea>
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Pincode</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Date of Birth</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Comfirm Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
              </div>
            </div>
            <div class="text-center my-1">
              <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
            </div>




       
         
          <!-- <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none">
          </div>
          <div class="mb-4">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none">
          </div>
          <div class="d-flex align-item-center justify-content-between mb-2">
            <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
          </div> -->
        </div>
      </form>
    </div>
  </div>
</div>

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

  <div class="container-fluid bg-white mt-5">
    <div class="row">
      <div class="col-lg-4 p-4">
        <h3 class="fw-bold fs-3 mb-2">Ai Hotel</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur officia dolores quam,
           molestiae harum, optio nesciunt suscipit modi aut sapiente in velit cupiditate voluptate assumenda
           officiis vel architecto dignissimos eligendi.
        </p>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Links</h5>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a> <br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a> <br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Follow us</h5>
        <a href="#"class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-twitter me-1"></i> Twitter
        </a> <br>
        <a href="#"class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-facebook me-1"></i> Facebook
        </a> <br>
        <a href="#"class="d-inline-block text-dark text-decoration-none">
          <i class="bi bi-instagram me-1"></i> Instagram
        </a> <br>
      </div>
    </div>
  </div>

  <h6 class="text-center bg-dark text-white p-3 m-0">
    THY THEARO <br>
    HEAK KIMRAAN <br>
    SAEN SAN <br>
    MAB MEAS <br>
    PHOUEN SOPHEA <br>
    VERY DOEY
  </h6>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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