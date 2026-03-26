<?php
    require('inc/essiontials.php');
    require('inc/db_config.php');

    session_start();
    session_regenerate_id(true);
    if(isset($_SESSION['admin_login']) && $_SESSION['admin_login'] == true){
        redirect('dashboard.php'); 
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php
    require('inc/Link.php');
    ?>
    <style>
        div.login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            border: 2px;
            width: 350px;
            padding: 30px;
        }
    </style>
</head>

<body class="bg-light">

    <div class="login-form shadow text-center rounded overflow-hidden">
        <form action="" method="post">
            <h4 style="background-color: red; color: white; padding: 5px; border-radius: 5px;">Hotel Login</h4>
            <div>
                <div class="mb-3 mt-3">
                    <input name="admin_name" required type="text" class="form-control shadow-none text-center"
                        placeholder="Admin Names">
                </div>
                <div class="mb-4">
                    <input name="admin_pass" required type="password" class="form-control shadow-none text-center"
                        placeholder="Password">
                </div>
                <button name="login" type="submit" class="btn text-white btn-primary shadow-none">Login</button>
            </div>
        </form>
    </div>
    <?php
    if (isset($_POST['login'])) {
        $frm_data = filteration($_POST);

        $query = "SELECT * FROM `admin_login` WHERE `admin_name`=? AND `admin_pass`=?";
        $values = [$frm_data['admin_name'], $frm_data['admin_pass']];

        $res = select($query, $values, "ss");
        
        if($res -> num_rows== 1) {
            $row = mysqli_fetch_assoc($res);

            $_SESSION['admin_login']=true;
            $_SESSION['adminId'] = $row['no'];
            redirect('dashboard.php');
        } else {
            alert('error', 'Login failed!');
        }
    }
        ?>


    <?php
    require('inc/scripts.php');
    ?>
</body>

</html>