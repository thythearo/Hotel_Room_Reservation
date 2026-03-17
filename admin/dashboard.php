<?php
    require('inc/../essiontials.php');
    admin_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <?php
        require('../inc/Link.php')
    ?>
    <style>
        .text-menu p{
            margin: 0;
            line-height: 1.5;
        }
        .picture-admin{
            width: 50px;
            background-color: black;
            height: 50px;
            border-radius: 50%;
        }
        .text-in{
            color: white;
            object-fit: cover;
            margin-left: 15px;
            margin-top: 15px;
        }
        .name-admin p{
            margin: 0;
            line-height: 1.6;
        }
        .left-menu{
            
            width: 100%;
            
        }
        .dash{
            border-radius: 10px;
        }
        .dash p{
            font-size: 15px;
            text-align: center;
            margin-top: 13px;
        }
        .sub-menu p{
            margin-top: 10px;
        }
        .sub-menu i{

        }
        .all-left-menu{
            width: 20%;
            padding: 15px;
            background-color: #E8E1DF;
            margin-top: 0;
        }
        .all-right-menu{
            width: 80%;
            
        }
        .menu-1{
            width: 30px;
            height: 20px;
        }
     
    </style>
</head>
<body class="bg-light">
    <div class="container-fulid d-flex">
        <div class="all-left-menu pb-4">
            <div class="mx-3 left-menu">
                <div class="text-menu mt-2">
                    <p class="fs-4">Admin Room</p>
                    <p class="mt-0">Management Suite</p>
                </div><hr>
                <div class="profile-admin d-flex">
                    <div class="picture-admin">
                        <div class="text-in">
                            <p>TR</p>
                        </div>
                    </div>
                    <div class="mx-2 name-admin">
                        <p class="fs-8">Thy Thearo</p>
                        <p>Hotel Manager</p>
                    </div>
                </div><hr>
                
                <div class="dash p-0 text-dark" style="width: 250px;">
                    <div class="sub-menu d-flex">
                        <i class="mt-2 mx-2 bi bi-house-door"></i>
                        <p class="mx-3">Dashboard</p>
                    </div>
                    <div class="sub-menu d-flex mx-2">
                        <i class="mt-3 fa-solid fa-bed"></i>
                        <p class="mx-3">Hotel Management</p>
                    </div>
                    <div class="sub-menu d-flex mx-2">
                        <i class="mt-2 bi bi-people"></i>
                        <p class="mx-3">Customer</p>
                    </div>
                    <div class="sub-menu d-flex mx-2">
                        <i class="mt-2 bi bi-person-fill-gear"></i>
                        <p class="mx-3">Staff Management</p>
                    </div>
                    <div class="sub-menu d-flex mx-2">
                        <i class="mt-2 bi bi-graph-up-arrow"></i>
                        <p class="mx-3">Analytics</p>
                    </div>
                    <div class="sub-menu d-flex mx-2">
                        <i class="mt-2 bi bi-gear-wide-connected"></i>
                        <p class="mx-3">Settings</p>
                    </div>
                </div><hr>
                <div class="dash p-0 text-dark mt-4" style="width: 250px;">
                     <div class="sub-menu d-flex mx-2">
                        <i class="mt-2 bi bi-bell"></i>
                        <p class="mx-3">Notifications</p>
                    </div>
                     <div class="sub-menu d-flex mx-2">
                        <i class="mt-2 bi bi-search"></i>
                        <p class="mx-3">Settings</p>
                    </div>
                </div><hr>
                <div class="dash p-0 text-dark mt-2" style="width: 250px;">
                    <div class="sub-menu d-flex mx-2">
                        <i class="mt-2 bi bi-box-arrow-left"></i>
                        <p class="mx-3">Settings</p>
                    </div>
                </div>
            </div>   
        </div>
        <div class="all-right-menu pb-4">
            <div class="righy-menu-on d-flex justify-content-between">
                <div class="mx-3 sub-right-menu">
                    <div>
                        <h4 class="mt-4">Dashboard</h4>
                        <p>Welcome Back! Here's what happening today.</p>
                    </div>
                </div>
                <div class="sub-right-menu d-flex gap-4 mt-4">
                    <div class="menu-1">
                        <p>Today</p>
                    </div>
                    <div class="menu-2 mx-4">
                        <p>Generate report</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        require('scripts.php');
    ?>
</body>
</html>