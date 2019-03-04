<?php
    require './init.php';
    // var_dump($conn);
    // 登录
    function login(){
        @$name = $_GET['name'];
        @$pwd = $_GET['pwd'];
        echo ($name.' '.$pwd);
        // return [
        //     "code" => 1,
        //     "data" => [
        //         "name" => $name,
        //         "account" => $account,
        //         "pwd" => $pwd,
        //         "gender" => $gender,
        //         "born" => $born
        //     ]
        // ];
    }

    // 注册
    function register(){
        global $conn;//无效，所以在init文件global
        // var_dump($conn);
        @$name = $_GET['name'];
        @$account = $_GET['account'];
        @$pwd = $_GET['pwd'];
        @$gender = $_GET['gender'];
        @$born = $_GET['born'];
        if(!$gender)
        {
            $gender = null;
        }
        if(!$born)
        {
            $born = null;
        }
        if(!$name)
        {
            return [
                "code" => 0,
                "msg" => "name"
            ];
        }
        else if(!$account)
        {
            return [
                "code" => 0,
                "msg" => "account"
            ];
        }
        else if(!$pwd)
        {
            return [
                "code" => 0,
                "msg" => "pwd"
            ];

        }
        else
        {   
            if(!preg_match('/^[A-Za-z0-9_\x{4e00}-\x{9fa5}]+$/u',$name)) 
            {
                return [
                    "code" => 0,
                    "msg" => "用户名由2-16位数字或字母、汉字、下划线组成！"
                ];
            }
            else if(!preg_match("/^1[34578]\d{9}$/", $account))
            {
                return [
                    "code" => 0,
                    "msg" => "用户账号由11位数字组成！"
                ]; 
            }
            else if(preg_match("/^[a-zA-Z\d_]{8,20}$/",$pwd))
            {
                return [
                    "code" => 0,
                    "msg" => "用户密码由8-20位数字或字母、汉字、下划线组成！"
                ];
            }              
            else{
                require('./isExists.php');
                // var_dump(gettype(check('user_name',$name,'user')));
                // var_dump(json_encode(check('user_account',$account,'user')));
                // return;
                $checkNameResult = check('user_name',$name,'user');
                $checkAccountResult = check('user_account',$account,'user');
                if(gettype($checkNameResult) == "array" && count($checkNameResult) == 1)
                {
                    return [
                        "code" => 0,
                        "msg" => "用户名已存在！"
                    ];
                }
                else if(gettype($checkAccountResult) == "array" && count($checkAccountResult) == 1)
                {
                    return [
                        "code" => 0,
                        "msg" => "账号已存在！"
                    ];
                }
                else 
                {
                    echo 'no';
                    $sql = "insert into user(id,user_level, user_name,  user_password, user_account, create_time, gender, born) value ('',2,'$name','$pwd','$account',now(),0,null)";
                    $result = mysqli_query($conn,$sql);
                    var_dump($result);

                    // return [
                    //     "code" => 1,
                    //     "data" => [
                    //         "name" => $name,
                    //         "account" => $account,
                    //         "pwd" => $pwd,
                    //         "gender" => $gender,
                    //         "born" => $born
                    //     ]
                    // ];
                }
            }
        }         
    }

?>


