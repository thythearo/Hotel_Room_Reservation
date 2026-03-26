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
      .box-today{
        width: 100px; 
        
         border-radius: 10%;
         background-color: blue;
        
        height: 30px;
    }
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
            <div class="col-lg-10 ms-auto p-3 overflow-hidden">
                <h3 class="mb-4">Settings</h3>
                <!-- General Setting -->

                <div class="cards mt-5 border-top shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-item-center justify-content-between mb-3">
                            <p class="card-title m-0">General Setting</p>
                            <button type="button" class="btn btn-primary shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s"><i class="bi bi-pencil-square"></i> Edit</button>
                        </div>
                        <p class="card-subtitle mb-1 fw-bold">Site Title</p>
                        <p class="card-text" id="site_title">Content</p>
                        <p class="card-subtitle mb-1 fw-bold">About Us</p>
                        <p class="card-text" id="site_about">Content</p>
                    </div>
                </div>

                <!-- General Setting Modal-->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title fw-bold">General Setting</h6>
                                    
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Site Title</label>
                                        <input type="text" name="site-title" id="site_title_inp" required class="form-control shadow-none">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">About Us</label>
                                        <textarea name="site-about" id="site_about_inp" required class="form-control shadow-none" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title_inp.value = general_data.site_title; site_about_inp.value = general_data.site_about;" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary text-white shadow-none">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Shutdown Setting Modal-->
                 <div class="cards mt-1 border-top shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-item-center justify-content-between mb-3">
                            <p class="card-title m-0">Shutdown Website</p>
                            <div class="form-check form-switch">
                                <form>
                                    <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle">

                                </form>
                        
                            </div>
                        </div>
                        <p class="card-text">
                            No customer will be allowed to book hotel room, when shutdown mode is turn on.
                        </p>
                    </div>
                </div>

                <!-- Contact Setting-->
                 <div class="cards mt-1 border-top shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-item-center justify-content-between mb-3">
                            <p class="card-title m-0">Contact Setting</p>
                            <button type="button" class="btn btn-primary shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s"><i class="bi bi-pencil-square"></i> Edit</button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <p class="card-subtitle mb-1 ">Address</p>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <p class="card-subtitle mb-1 ">Google Map</p>
                                    <p class="card-text" id="gmap"></p>
                                </div>
                                <div class="mb-4">
                                    <p class="card-subtitle mb-1">Phone Number</p>
                                    <p class="card-text">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="pn1"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <p class="card-subtitle mb-1">Phone Number</p>
                                    <p class="card-text">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="pn2"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <p class="card-subtitle mb-1">E-mail</p>
                                    <p class="card-text" id="email"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        require "inc/scripts.php";
    ?>
    <script>
        let general_data;
        let general_s_form = document.getElementById('general_s_form');
        let site_title_inp = document.getElementById('site_title_inp');
        let site_about_inp = document.getElementById('site_about_inp');

        function get_general()

        {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');
            let shutdown_toggle = document.getElementById('shutdown-toggle');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/setting_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function(){
                general_data = JSON.parse(this.responseText);
                
                site_title.innerText= general_data.site_title;
                site_about.innerText= general_data.site_about;

                site_title_inp.value = general_data.site_title;
                site_about_inp.value = general_data.site_about;
                
                if(general_data.shutdown==0){
                    shutdown_toggle.checked = false;
                    shutdown_toggle.value= 0;
                }else{
                    shutdown_toggle.checked = true;
                    shutdown_toggle.value = 1;
                }

            }
            
            xhr.send('get_general');
        }

        general_s_form.addEventListener('submit', function(e){
            e.preventDefault();
            upd_general(site_title_inp.value, site_about_inp.value);
        })

        function upd_general(site_title_val, site_about_val){
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/setting_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function(){

                var myModal = document.getElementById('general-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide(); // Returns a Bootstrap modal instance
                
                if(this.responseText== 1)
                {
                    alert('success', 'Change Save!');
                    get_general();
                }
                else
                {
                    alert('Error', 'No Change made!');
                }

                // reload data after update
                get_general();
            }

            xhr.send(
                'site_title=' + encodeURIComponent(site_title_val) +
                '&site_about=' + encodeURIComponent(site_about_val) +
                '&upd_general=1'
            );
        }
        
        function upd_shutdown(val)
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/setting_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function(){
                if(this.responseText== 1 && general_data.shutdown ==0)
                {
                    alert('success', 'Site has been shutdown Save!');
                }
                else
                {
                    alert('Error', 'Shutdown mode off!');
                }

                // reload data after update
                get_general();
            }

            xhr.send('upd_shutdown='+ val);
        }
        
        window.onload = function(){
            get_general();
        }
    </script>
</body>
</html>