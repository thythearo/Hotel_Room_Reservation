<?php
    require('../inc/db_config.php');
    require('../inc/essiontials.php');
    admin_login();

    if(isset($_POST['add_feature']))
{
    $frm_data = filteration($_POST);

    if(!empty($frm_data['name'])){

        $q = "INSERT INTO `feature`(`name`) VALUES (?)";
        $values = [$frm_data['name']];

        $res = insert($q, $values, 's');

        if($res){
            echo 1;
        }else{
            echo 0;
        }

    }else{
        echo 0;
    }

    exit;
}

    if(isset($_POST['get_feature']))
    {
        $res = selectAll('feature');
        $i = 1;

        while($row = mysqli_fetch_assoc($res)){
            echo  <<< data
                <tr>
                    <td>$i</td>
                    <td>$row[name]</td>
                    <td>
                        <button type="button" onclick="remove_feature($row[id])" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </td>
                </tr>  
            data;
            $i++;
        }
    }

    if(isset($_POST['remove_feature']))
    {
        $frm_data = filteration($_POST);
        $values = [$frm_data['remove_feature']];
        
        $q = "DELETE FROM `feature` WHERE `id`=?";
        $res = delete($q, $values, 'i');
        echo $res;
    }

        if (isset($_POST['add_facility'])) 
    {
        $frm_data = filteration($_POST);
        $img_r = uploadSVGImage($_FILES['icon'], FEATURE_FOLDER);

        // Handle image errors
        if (in_array($img_r, ['inv_img', 'inv_size', 'upd_failed'])) {
            echo $img_r; // ✅ return plain text
            exit;
        }

        // Insert into database
        $q = "INSERT INTO `facilities`(`icon`,`name`,`description`) VALUES (?,?,?)";
        $values = [$img_r, $frm_data['name'], $frm_data['desc']];

        $res = insert($q, $values, 'sss');

        // Return simple response
        if($res == 1){
            echo 1;   // ✅ success
        }else{
            echo 0;   // ❌ fail
        }
    }

    if(isset($_POST['get_facilities']))
    {
        $res = selectAll('facilities');
        $i = 1;
        $path = FEATURE_IMG_PATH;

        while($row = mysqli_fetch_assoc($res)){
            echo <<<data
            <tr>
                <td>$i</td>
                <td><img src="{$path}{$row['icon']}" width="40px"></td>
                <td>{$row['name']}</td>
                <td>{$row['description']}</td>
                <td>
                    <button onclick="remove_facility($row[id])" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            data;
            $i++;
        }
    }

    if(isset($_POST['remove_facility']))
    {
        $frm_data = filteration($_POST);
        $values = [$frm_data['remove_facility']];

        $pre_q = "SELECT * FROM `facilities` WHERE `id`=?";
        $res = select($pre_q, $values, 'i');
        $img = mysqli_fetch_assoc($res);

        if(deleteImage($img['icon'], FEATURE_FOLDER)){
            $q = "DELETE FROM `facilities` WHERE `id`=?";
            $res = delete($q, $values, 'i');
            echo $res;
            
        }
        else{
            echo 0;
        }
        
    }

?>