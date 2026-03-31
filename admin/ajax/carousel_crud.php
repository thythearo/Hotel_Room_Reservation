<?php
    require('../inc/db_config.php');
    require('../inc/essiontials.php');
    admin_login();



    if (isset($_POST['add_image'])) 
    {

        $img_r = uploadImage($_FILES['picture'], CAROUSEL_FOLDER);

        // Handle image errors (clean way)
        if (in_array($img_r, ['inv_img', 'inv_size', 'upd_failed'])) {
            echo json_encode([
                "status" => "error",
                "msg" => $img_r
            ]);
            exit;
        }

        // Insert into database
        $q = "INSERT INTO `carousel`(`image`) VALUES (?)";
        $values = [$img_r];

        $res = insert($q, $values, 's');

        // Handle DB response
        if ($res['status'] == 'success') {
            echo json_encode([
                "status" => "success",
                "msg" => "Member added successfully"
            ]);
        } else {
            echo json_encode([
                "status" => "error",
                "msg" => $res['msg'],
                "error" => $res['error']
            ]);
        }
    }

    if(isset($_POST['get_carousel']))
    {
        $res = selectAll('carousel');

        while($row = mysqli_fetch_assoc($res)){
            $path = CAROUSEL_IMG_PATH;
            echo  <<< data
                <div class="col-md-4 mb-3">
                    <div class="card bg-dark text-white border-0 h-100">
                        <img src="$path$row[image]" style="height:200px; width:100%; object-fit:cover;">
                            <div class="card-img-overlay d-flex flex-column justify-content-between">   
                                <div class="text-end align-item-right">
                                    <button type="button" onclick="remove_image($row[no])" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>           
            data;
        }
    }

    if(isset($_POST['remove_image']))
    {
        $frm_data = filteration($_POST);
        $values = [$frm_data['remove_image']];

        $pre_q = "SELECT * FROM `carousel` WHERE `no`=?";
        $res = select($pre_q, $values, 'i');
        $img = mysqli_fetch_assoc($res);

        if(deleteImage($img['image'], CAROUSEL_FOLDER)){
            $q = "DELETE FROM `carousel` WHERE `no`=?";
            $res = delete($q, $values, 'i');
            echo $res;
        }
        else{
            echo 0;
        }
    }

?>