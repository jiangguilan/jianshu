<?php
    require('./init.php');
    function check($soucse,$data,$table){;
        global $conn;
        $sql = "select * from $table where $soucse = $data";
        $result = mysqli_query($conn,$sql);
        // var_dump($result);
        // echo '</br>';
        return $result;
        // if($result)
        // {
        //         return 1;
        // }
        // else 
        // {
        //     return 0;
        // }
    }
?>