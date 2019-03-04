<?php
    function AUTH(){
        $handle = $_REQUEST['handle'];
        require('./Auth.php');

        function result($data){
            var_dump($data);
            // echo'</br>';
            if($data["code"]==1)
            {
                echo json_encode(["ack" => "success","msg" => "","data" => $data["data"]]);
            }
            else
            {
                echo json_encode(["ack" => "failure","msg" => "require".' '.$data["msg"],"data" => ""]);
            }
        }
        
        // 根据指令调用函数
        switch ($handle) {
            case 'login':{
                result(login());
                
            } break;
            case 'register':{
                result(register());
            } break;
            default:
                # code...
                break;
            
        }
    }
?>