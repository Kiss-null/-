<?php

namespace app\admin\controller;
use app\admin\Model\Login as logi;
use think\Controller;


class Login extends Controller
{
    public function _initialize()
    {
        parent::_initialize();
        $this->cModel = new logi;
    }
    public function index(){
        if(request()->isPost()){
            $data = input('post.');
            if(!captcha_check($data['verifyCode'])) {
                $this->success('验证码不正确',1,0);
            }else{
            $date['name']=$data['name'];
                $date['password']=$data['password'];
                $data=$this->cModel->login($date);
                if($data){
                    $this->success('密码正确','admin/index/index',1,0);
                }else{
                    $this->success('密码错误','admin/login/index',0);
                }
            }
        }
        return view('login');
    }
    public function edit(){
        if(request()->isAjax()) {
            $name['name']=input("name");
            $name['password']=input("password");

          return  $data=$this->cModel->name($name);

        }
        return view('edit');
    }

}