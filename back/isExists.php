<?php
    require('./init.php');
    function check($soucse,$data,$table){;
        global $conn;
        $sql = "select * from $table where $soucse = '$data'";
        $result = mysqli_fetch_all(mysqli_query($conn,$sql), 1);
        // var_dump($sql);
        // echo '</br>';
        return $result;
        if(gettype($result) == "array" && count($result) == 1)
        {
                return true;
        }
        else 
        {
            return false;
        }
    }
?>