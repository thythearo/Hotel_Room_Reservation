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
    <title>Setting Rooms</title>
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
                <h3 class="mb-4">Rooms</h3>

                <div class="cards mt-5 border-top shadow-sm mb-4">
                    <div class="card-body">

                        <div class="text-end mb-4">
                            <button type="button" class="btn btn-primary shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-room"><i class="bi bi-file-earmark-plus"></i> Add</button>
                        </div>
                        <div class="row" id="team-data" style="display:flex; flex-wrap:wrap;">
                        </div>

                        <div class="table-responsiv-lg" style="height: 450px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                <thead>
                                    <tr class="bg-warning text-dark">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Area</th>
                                    <th scope="col">Guest</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="room-data">
                                    
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Add Room Modal-->
                <div class="modal fade" id="add-room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="add_room_form" autocomplete="off">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title fw-bold">Add Room</h6>
                                    
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="name"  required class="form-control shadow-none">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Area</label>
                                            <input type="number" min="1" name="area"  required class="form-control shadow-none">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Price</label>
                                            <input type="number" min="1" name="price"  required class="form-control shadow-none">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Quantity</label>
                                            <input type="number" min="1" name="quantity"  required class="form-control shadow-none">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Adults (Max.)</label>
                                            <input type="number" min="1" name="adult"  required class="form-control shadow-none">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Children (Max.)</label>
                                            <input type="number" min="1" name="children"  required class="form-control shadow-none">
                                        </div>
                                        
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Features</label>
                                            <div class="row">
                                                <?php
                                                    $res = selectAll('feature');
                                                    while($opt = mysqli_fetch_assoc($res)){
                                                        echo "
                                                            <div class='col-md-3 mb-1'>
                                                                <label>
                                                                    <input type='checkbox' name='features[]' value='$opt[id]' class='form-check-input shadow-none me-1'>
                                                                    $opt[name]
                                                                </label>
                                                            </div>
                                                        ";


                                                    
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Facility</label>
                                            <div class="row">
                                                <?php
                                                    $res = selectAll('facilities');
                                                    while($opt = mysqli_fetch_assoc($res)){
                                                        echo "
                                                            <div class='col-md-3 mb-1'>
                                                                <label>
                                                                    <input type='checkbox' name='facilities[]' value='$opt[id]' class='form-check-input shadow-none me-1'>
                                                                    $opt[name]
                                                                </label>
                                                            </div>
                                                        ";
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea name="desc" rows="4" class="form-control shadow-none" required></textarea>
                                        </div>
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

  

    <?php
        require "inc/scripts.php";
    ?>

    <script>
        let room_data = document.getElementById('room-data');
  

        let add_room_form = document.getElementById('add_room_form');

        add_room_form.addEventListener('submit', function(e){
            e.preventDefault();
            add_rooms();
        });

        function add_rooms(){
            let data = new FormData(add_room_form);
            data.append('add_room', '');
            data.append('name',add_room_form.elements['name'].value);
            data.append('area',add_room_form.elements['area'].value);
            data.append('price',add_room_form.elements['price'].value);
            data.append('quantity',add_room_form.elements['quantity'].value);
            data.append('adult',add_room_form.elements['adult'].value);
            data.append('children',add_room_form.elements['children'].value);
            data.append('desc',add_room_form.elements['desc'].value);

            let features = [];
            let feature_inputs = add_room_form.querySelectorAll('input[name="features[]"]');

            feature_inputs.forEach(el => {
                if(el.checked){
                    features.push(el.value);
                }
            });

            let facilities = [];
            let facility_inputs = add_room_form.querySelectorAll('input[name="facilities[]"]');

            facility_inputs.forEach(el => {
                if(el.checked){
                    facilities.push(el.value);
                }
            });

            data.append('features', JSON.stringify(features));
            data.append('facilities', JSON.stringify(facilities));

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);

            xhr.onload = function(){
    console.log(this.responseText); // 👈 ADD THIS

    var myModalEl = document.getElementById('add-room');
    var modal = bootstrap.Modal.getInstance(myModalEl);
    modal.hide();

    if(this.responseText.trim() == 'success'){
        alert('success', 'New Room Added!');
        add_room_form.reset();
        get_rooms();
    }else{
        alert('error', 'Operation Failed!');
    }
}

            xhr.send(data);
        }

        // function get_rooms(){
        //     let xhr = new XMLHttpRequest();
        //     xhr.open("POST", "ajax/rooms_crud.php", true);
        //     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        //     xhr.onload = function(){
        //         room_data.innerHTML = this.responseText;
        //     }

        //     xhr.send('get_rooms=');
        // }

        // window.onload = function(){
        //     get_rooms();
        // }
    </script>

</body>
</html>