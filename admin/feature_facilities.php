<?php

    require "inc/essiontials.php";
    require "inc/db_config.php";
    admin_login();
    session_regenerate_id(true);
    if(isset($_GET['seen']))
    {
        $frm_data = filteration($_GET);

        if($frm_data['seen']=='all'){
    $q = "UPDATE `user_queries` SET `seen`=? ";
    $values = [1];

    if(update($q,$values,'i')){
        alert('success', 'Marked all as read');
    }else{
        alert('error', 'Operation failed');
    }

    header("Location: user_queries.php");
    exit;
}
    }
    if(isset($_GET['del']))
    {
        $frm_data = filteration($_GET);

        if($frm_data['del']=='all'){
    $q = "DELETE FROM `user_queries`";

    if(mysqli_query($con, $q)){
        alert('success', 'All Data Delete');
    }else{
        alert('error', 'Operation failed');
    }

    header("Location: user_queries.php");
    exit;
}
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting feature & facilities</title>
    <?php
        require "inc/Link.php";
    ?>
</head>
<body class="bg-light">
    <?php
      require "inc/header.php";
    ?>
    <div class="container-fluid" id="main_content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-3 overflow-hidden">
                <h3 class="mb-4">Feature & Facilities</h3>

                <div class="cards mt-5 border-top shadow-sm mb-4">
                    <div class="card-body">

                        <div class="d-flex align-item-center justify-content-between mb-3">
                            <p class="card-title m-0">Feature</p>
                            <button type="button" class="btn btn-primary shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#feature-s"><i class="bi bi-file-earmark-plus"></i> Add</button>
                        </div>
                        <div class="row" id="team-data" style="display:flex; flex-wrap:wrap;">
                        </div>

                        <div class="table-responsiv-md" style="height: 350px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                <thead>
                                    <tr class="bg-warning text-dark">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="feature-data">
                                    
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>


                <div class="cards mt-5 border-top shadow-sm mb-4">
                    <div class="card-body">

                        <div class="d-flex align-item-center justify-content-between mb-3">
                            <p class="card-title m-0">Facilities</p>
                            <button type="button" class="btn btn-primary shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#facility-s"><i class="bi bi-file-earmark-plus"></i> Add</button>
                        </div>


                        <div class="table-responsiv-md" style="height: 350px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                <thead>
                                    <tr class="bg-warning text-dark">
                                    <th scope="col">#</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="facilities-data">
                                    
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Feature Team Modal-->
                <div class="modal fade" id="feature-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="feature_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title fw-bold">Add Feature</h6>
                                    
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="feature_name"  required class="form-control shadow-none">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary text-white shadow-none">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

        <!-- Facilities modal-->
         <div class="modal fade" id="facility-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form id="facility_s_form">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title fw-bold">Add Facility</h6>
                                    
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="facility_name"  required class="form-control shadow-none">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Icon</label>                                        
                                    <input type="file" name="facility_icon" id="member_picture_inp" accept="[.svg]" required class="form-control shadow-none">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="facility_desc" class="form-control shadow-none" rows="3"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset"  class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary text-white shadow-none">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

    <?php
        require "inc/scripts.php";
    ?>

    <script src="scripts/feature_facilities.js"></script>

</body>
</html>