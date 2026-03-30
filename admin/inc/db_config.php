<?php
    $hname = 'localhost';
    $uname = 'root';
    $pass = '';
    $db = 'Hotel_room_project';

    $con = mysqli_connect($hname, $uname, $pass, $db);

    // if($con) {
    //     die("Cannot Connect To Database" . mysqli_connect_error());
    // }
    function filteration($data){
        foreach ($data as $key => $value){
            $value = trim($value);
            $value = stripcslashes($value);
            $value = htmlspecialchars($value);
            $value = strip_tags($value);
            $data[$key] = $value;
        }
        return $data;
    }

    function select($sql, $values, $datatypes){
    $con = $GLOBALS['con'];

    if($stmt = mysqli_prepare($con, $sql)){
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            echo json_encode(["status"=>"error","msg"=>"Query failed"]);
            exit;
        }
    } else {
        echo json_encode(["status"=>"error","msg"=>"Prepare failed"]);
        exit;
    }
}
    function update($sql, $values, $datatypes){
    $con = $GLOBALS['con'];

    if($stmt = mysqli_prepare($con, $sql)){
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);

        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            echo json_encode(["status"=>"error","msg"=>"Update failed"]);
            exit;
        }

    } else {  
        echo json_encode(["status"=>"error","msg"=>"Prepare failed"]);
        exit;
    }
}
    
?>