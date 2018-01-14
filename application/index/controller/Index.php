<?php

namespace app\index\controller;

use think\Db;
use think\Controller;

class Index extends Controller
{
    private $array_path = [
        'DIR_CSS' => './static/css',
        'DIR_JS' => './static/js',
        'DIR_FONT' => './static/fonts',
        'DIR_IMG' => './static/images'
    ];


//    private $dbconn;

    public function index()
    {
        $un = $this->getCurUser();
        $Binfo = $this->getBookinfo();
        $Bn = $Binfo[0];
        $Ba = $Binfo[1];
        return view('home',$this->array_path+[
            'username' => $un,
                'bookname'=>$Bn,
                'authorname'=>$Ba

            ]);
    }
    public function store()
    {
        $un = $this->getCurUser();
        $Binfo = $this->getBookinfo();
        $Bn = $Binfo[0];
        $Ba = $Binfo[1];
        return view('store',
            $this->array_path+[
                'bookname'=>$Bn,
                'authorname'=>$Ba,
                'username' => $un

                ]);
    }
    public function created()
    {
        $un = $this->getCurUser();
        return view('created',$this->array_path+['username' => $un]);
    }
    public function about()
    {
        $un = $this->getCurUser();
        return view('aboutme',$this->array_path+['username' => $un]);
    }
    public function login()
    {
        $un = $this->getCurUser();
        if($un=='未登录'){
            return view('login',$this->array_path);
        }else{
            return $this->success('个人中心功能暂未开发！', 'index/index/index','' , 2);
        }

    }
    public function getCurUser(){
        session_start();
        $CurUser = empty($_SESSION['username'])?'未登录':$_SESSION['username'];
        return $CurUser;
    }

    public function getBookinfo(){
        $dbconn = Db::connect();
        $book_name=Db::table('books')->column('book_name');
        $book_author=Db::table('books')->column('book_authorname');
        $info = array($book_name,$book_author);
        return $info;
    }

}
