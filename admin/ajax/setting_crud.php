<?php
    require('../inc/db_config.php');
    require('../inc/essiontials.php');
    admin_login();

    if(isset($_POST['get_general']))
    {
        $q = "SELECT * FROM `settings` WHERE `no` = ?";
        $values = [1];
        $res = select($q, $values, "i");
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;
    }

    if(isset($_POST['upd_general']))
    {
        $frm_data = filteration($_POST);

        $q = "UPDATE `settings` SET `site_title`=?, `site_about`=? WHERE `no`=?";
        $values = [$frm_data['site_title'], $frm_data['site_about'],1];
        $res = update($q, $values,'ssi');
        echo $res;
    }

    if(isset($_POST['upd_shutdown']))
    {
        $frm_data = ($_POST['upd_shutdown']==0) ? 1 : 0;

        $q = "UPDATE `settings` SET `shutdown`=? WHERE `no`=?";
        $values = [$frm_data, 1];
        $res = update($q, $values,'ii');
        echo $res;
    }

        if(isset($_POST['get_contacts']))
    {
        $q = "SELECT * FROM `contact` WHERE `no` = ?";
        $values = [1];
        $res = select($q, $values, "i");
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;
    }

        if(isset($_POST['upd_contacts']))
    {
        $frm_data = filteration($_POST);

        $q = "UPDATE `contact` SET `address`=?,`gmap`=?,`pn1`=?,`pn2`=?,`email`=?,`fb`=?,`insta`=?,`tw`=?,`iframe`=? WHERE `no`=?";
        $values = [$frm_data['address'], $frm_data['gmap'], $frm_data['pn1'], $frm_data['pn2'], $frm_data['email'], $frm_data['fb'], $frm_data['insta'], $frm_data['tw'], $frm_data['iframe'],1];
        $res = update($q, $values,'sssssssssi');
        echo $res;
    }

    if (isset($_POST['add_member'])) 
    {
        $frm_data = filteration($_POST);
        $img_r = uploadImage($_FILES['picture'], ABOUT_FOLDER);

        // Handle image errors (clean way)
        if (in_array($img_r, ['inv_img', 'inv_size', 'upd_failed'])) {
            echo json_encode([
                "status" => "error",
                "msg" => $img_r
            ]);
            exit;
        }

        // Insert into database
        $q = "INSERT INTO `team_made`(`name`, `picture`) VALUES (?, ?)";
        $values = [$frm_data['name'], $img_r];

        $res = insert($q, $values, 'ss');

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

    if(isset($_POST['get_members']))
    {
        $res = selectAll('team_made');

        while($row = mysqli_fetch_assoc($res)){
            $path = ABOUT_IMG_PATH;
            echo  <<< data
                <div class="col mb-3" style="flex: 0 0 16.66%; max-width:16.66%;">
                    <div class="card bg-dark text-white border-0 h-100">
                        <img src="$path$row[picture]" style="height:200px; width:100%; object-fit:cover;">
                            <div class="card-img-overlay d-flex flex-column justify-content-between">   
                                <div class="text-end align-item-right">
                                    <button type="button" onclick="remove_member($row[no])" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </div>
                                <p class="card-text text-center text-dark px-3">$row[name]</p>
                            </div>
                        </div>
                    </div>           
            data;
        }
    }

    if(isset($_POST['remove_member']))
    {
        $frm_data = filteration($_POST);
        $values = [$frm_data['remove_member']];

        $pre_q = "SELECT * FROM `team_made` WHERE `no`=?";
        $res = select($pre_q, $values, 'i');
        $img = mysqli_fetch_assoc($res);

        if(deleteImage($img['picture'], ABOUT_FOLDER)){
            $q = "DELETE FROM `team_made` WHERE `no`=?";
            $res = delete($q, $values, 'i');
            echo $res;
        }
        else{
            echo 0;
        }
    }

?>