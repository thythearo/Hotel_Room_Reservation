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
      
      
      /* .box-today{
        width: 100px; */
        
        /* border-radius: 10%;
        /* background-color: blue; */

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