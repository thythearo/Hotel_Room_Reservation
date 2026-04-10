<?php
  require ('inc/Link.php');
?>
<div class="col-lg-2 text-dark" id="dashboard-menu" style="background-color: white;">
    <div class="row">
    <nav class="navbar navbar-expand-lg navbar-light">
      
      <div class="flex-lg-column align-items-stretch w-100">

        <!-- Brand -->
        <div class="text-center mt-2">
          <h6 class="mb-0">HotelPro</h6>
          <small>Management Suite</small>
          <hr>
        </div>

        <!-- Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#adminDropdown" aria-controls="adminDropdown"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
          <ul class="nav nav-pills flex-column">

            
         

            <li class="nav-item">
              <a class="nav-link text-dark" href="rooms.php">
                <i class="px-2 bi bi-device-ssd-fill"></i>Rooms
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="feature_facilities.php">
                <i class="px-2 bi bi-device-ssd-fill"></i>Facilities
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-dark" href="user_queries.php">
                <i class="px-2 bi bi-person-fill-add"></i>User Contacts
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-dark" href="carousel.php">
                <i class="px-2 bi bi-people-fill"></i>Carousel
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-dark" href="analytics.php">
                <i class="px-2 bi bi-bar-chart-line-fill"></i>Analytics
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-dark" href="setting.php">
                <i class="px-2 bi bi-gear-wide"></i>Setting
              </a>
            </li>

          </ul>
          <hr>
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link text-dark" href="logout.php">
                <i class="px-2 bi bi-box-arrow-right"></i>Logout
              </a>
            </li>
          </ul>

        </div>
      </div>

    </nav>
  </div>
</div>