<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;


class Index extends Controller
{
    private $dbconn;

    public function index()
    {
        //连接数据库
        $this->dbconn = Db::connect();
        //会话开始
        session_start();
        if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $u = Db::table('user')->where(['username' => $_POST['username']])->select();
            if (count($u) == 0) {
                echo 'Error : User does\'nt exist . (用户不存在)';
                exit();
            } else {
                $up = (Db::table('user')->where(['username' => $_POST['username']])->column('password'))[0];
                if (md5($_POST['password']) == $up) {
                    if ($_POST['username']=='DZQ'){
                        return view('index',[
                            'user_name'=> $_POST['username']
                        ]);
                    }else{
                        return view('loginmes',[
                            'message' => '欢迎回来 '.$_POST['username'],
                            'reURL' => 'home'
                        ]);
                    }

                } else {
                    return view('loginmes',[
                        'message' => 'Error: login faild ,Wrong password ! (密码错误，登录失败)',
                        'reURL' => 'home'
                    ]);
                }
            }

        } else {
            echo 'Error : username or password is null . (用户名或密码不能为空)';
            exit();
        }
    }


    public function logout()
    {
        session_start();
        $_SESSION = array();
    }

}


