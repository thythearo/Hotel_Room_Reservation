<?php
    require "inc/essiontials.php";
    admin_login();
    session_regenerate_id(true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>setting panel</title>
    <link rel="stylesheet" href="Css/index.css">
    <style>
  
    </style>
      
    <?php
        require "inc/Link.php";
    ?>
</head>
<body class="bg-light">
    <?php
      require "inc/header.php";
    ?>
    <div class="container-fluid" id="main content">
        <div class="row">
            <div class="col-lg-10 ms-auto overflow-hidden p-3">
                <h3 class="mb-4">Carousel</h3>

                <!-- Carousel Section -->
                 <div class="card mt-5 border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-item-center justify-content-between mb-3">
                            <p class="card-title m-0">
                                Images
                            </p>
                            <button type="button" class="btn btn-primary btn-sm shadow-none" data-bs-dismiss="modal"​​ data-bs-target="carousel"><i class="bi bi-folder-plus"></i> Add</button>
                        </div>
                    </div>
                 </div>
                
            </div>
        </div>
    </div>
    <?php
        require "inc/scripts.php";
    ?>
    <script src="scripts/setting.js"></script>
</body>
</html>