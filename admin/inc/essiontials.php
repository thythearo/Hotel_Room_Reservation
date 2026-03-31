<?php
    // frontend upload image
    define('SITE_URL','http://127.0.0.1/Hotel_Room_Reservation/');
    define('ABOUT_IMG_PATH', SITE_URL.'images/about/');
    define('CAROUSEL_IMG_PATH', SITE_URL.'images/carousel/');
    define('FEATURE_IMG_PATH', SITE_URL.'images/feature/');

    // backend upload image
    define('UPLOAD_IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'].'/Hotel_Room_Reservation/images/');
    define('ABOUT_FOLDER', 'about/');
    define('CAROUSEL_FOLDER', 'carousel/');
    define('FEATURE_FOLDER', 'feature/');
    function admin_login(){
        session_start();
        if(!(isset($_SESSION['admin_login']) && $_SESSION['admin_login'] == true)){
             echo "<script>
             window.location.href='index.php';
        </script>";
        exit;
        }
    }
    function redirect($url){
        echo "<script>
             window.location.href='$url';
        </script>";
        exit;
    }

    function alert($type, $msg){
        $bs_class = ($type == "success")? "alert-success" : "alert-danger";
        echo <<<alert
                    <div class="alert $bs_class alert-dismissible fade show custom-alerts" role="alert">
                        <strong class="me-3">$msg</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                alert;
    }

    function uploadImage($image, $folder)
    {
        $valid_mime = ['image/jpeg', 'image/png', 'image/webp'];
        $img_mime = $image['type'];

        // Check MIME type
        if (!in_array($img_mime, $valid_mime)) {
            return 'inv_img'; // invalid image format
        }

        // Check size (2MB = 2 * 1024 * 1024 bytes)
        if ($image['size'] > (2 * 1024 * 1024)) {
            return 'inv_size'; // file too large
        }

        // Get extension
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);

        // Random file name
        $rname = 'IMG_' . random_int(11111, 99999) . '.' . $ext;

        // Final path
        $img_path = UPLOAD_IMAGE_PATH . $folder . $rname;

        // Move file
        if (move_uploaded_file($image['tmp_name'], $img_path)) {
            return $rname; // success
        } else {
            return 'upd_failed'; // upload failed
        }
    }

    function deleteImage($image, $folder){
        if(unlink(UPLOAD_IMAGE_PATH.$folder.$image)){
            return true;
        }
        else{
            return false;
        }
    }

    function uploadSVGImage($image, $folder)
    {
        $valid_mime = ['image/svg+xml'];
        $img_mime = $image['type'];

        // Check MIME type
        if (!in_array($img_mime, $valid_mime)) {
            return 'inv_img'; // invalid image format
        }

        // Check size (1MB = 1 * 1024 * 1024 bytes)
        if ($image['size'] > (1 * 1024 * 1024)) {
            return 'inv_size'; // file too large
        }

        // Get extension
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);

        // Random file name
        $rname = 'IMG_' . random_int(11111, 99999) . '.' . $ext;

        // Final path
        $img_path = UPLOAD_IMAGE_PATH . $folder . $rname;

        // Move file
        if (move_uploaded_file($image['tmp_name'], $img_path)) {
            return $rname; // success
        } else {
            return 'upd_failed'; // upload failed
        }
    }
    
?>