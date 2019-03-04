<?php
/**
 * router = http://local.jianshu_back.com/api.php?router=AUTH&handle=login&uname=jiang&upwd=123abc
 */
    $router = $_REQUEST['router'];

    switch ($router) {
        case 'AUTH':{
            // require('./Auth.php');
            // AUTH();
            require('./controler.php');
            AUTH();
        } break;
        case 'BLOG':{

        } break;
        default:
            # code...
            break;
    }
?>