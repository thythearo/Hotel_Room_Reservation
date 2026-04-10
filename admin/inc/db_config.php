<?php
    $hname = 'localhost';
    $uname = 'root';
    $pass = '';
    $db = 'Hotel_room_project';

    $con = mysqli_connect($hname, $uname, $pass, $db);

       
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

    function selectAll($table){
        $con = $GLOBALS['con'];
        $res = mysqli_query($con, "SELECT * FROM $table");
        return $res;
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

    function insert($sql, $values, $datatypes)
    {
        $con = $GLOBALS['con'];

        $stmt = mysqli_prepare($con, $sql);

        if ($stmt === false) {
            return [
                "status" => "error",
                "msg" => "Prepare failed",
                "error" => mysqli_error($con)
            ];
        }

        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);

            return [
                "status" => "success",
                "rows" => $res
            ];
        } else {
            $error = mysqli_stmt_error($stmt);
            mysqli_stmt_close($stmt);

            return [
                "status" => "error",
                "msg" => "Insert failed",
                "error" => $error
            ];
        }
    }

        function delete($sql, $values, $datatypes){
        $con = $GLOBALS['con'];

        if($stmt = mysqli_prepare($con, $sql)){
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);

            if(mysqli_stmt_execute($stmt)){
                $res = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            } else {
                mysqli_stmt_close($stmt);
                echo json_encode(["status"=>"error","msg"=>"delete failed"]);
                exit;
            }

        } else {  
            echo json_encode(["status"=>"error","msg"=>"Prepare failed"]);
            exit;
        }
    }

    
        
?>