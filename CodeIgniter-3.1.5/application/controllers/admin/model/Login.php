<?php
namespace app\admin\model;
use think\Model;
class Login extends Model
{
    protected $table = 'administrators';
    public function login($date){//到这，运行方法
        return $this->where($date)->select();//搜索上面的“text表”，将值返回
    }
    public function name($name){//到这，运行方法
        return $this->insert($name);//搜索上面的“text表”，将值返回
    }
}