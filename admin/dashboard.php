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
    <title>Admin Panel</title>
    <link rel="stylesheet" href="Css/index.css">
    <style>
      .nav-pills .nav-link {
          position: relative;
          color: #333;
          border-radius: 10px;
          margin: 5px 0;
          transition: all 0.3s ease;
          overflow: hidden;
      }

      /* hover background + glow */
      .nav-pills .nav-link:hover {
          color: #fff !important;
          background: linear-gradient(45deg, #000000, #000000);
          transform: translateX(8px);
          box-shadow: 0 5px 15px rgba(13, 110, 253, 0.4);
      }

      /* animated left border */
      .nav-pills .nav-link::before {
          content: "";
          position: absolute;
          left: 0;
          top: 0;
          width: 0;
          height: 100%;
          background: #ffffff;
          transition: 0.3s;
      }

      .nav-pills .nav-link:hover::before {
          width: 5px;
      }
      /* .box-today{
        width: 100px; */
        
        /* border-radius: 10%;
        /* background-color: blue; */
        
        height: 30px;
    
      .box-generate{
        width: 200px;
        height: 30px;
      }
      .dashboard-right{
        gap: 10px;
      }
      .text-generate{
        font-size: 15px;
      }
      .total{
        width: 23%;
        height: 300px;
        background-color: red;
      }
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
            <div class="col-lg-10 ms-auto p-2 overflow-hidden">
            
                
            
            </div>
        </div>
    </div>
    <?php
        require "inc/scripts.php";
    ?>
</body>
</html>