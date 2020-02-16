<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
use app\admin\model\Index as gx;

class Index extends Controller
{
    private $cModel;
    public function _initialize()
    {
        parent::_initialize();
        $this->cModel = new gx;   //别名：避免与控制名冲突
    }
    public function index()
    {
        if(request()->isAjax()){
            $key=input("key","");
            $where=[];
            if($key != ''){
                $where['name'] = ['like',"%".$key."%"];
            }
            $list = $this-> cModel->getAll($where);
        }else {
            $list = $this-> cModel->limit(2,4)->   select();
        }
        foreach($list as $k => $v) {
            $list[$k]['ctime']=date("Y-m-d",$v['ctime']);
        }
        $this->assign('custom',$list);
        return view('index');
    }
    public function create(){
        $id=input("id");
        if(!empty($id)){
            $list=Db::table("gx")->where('id',$id)->find();
            $this-> assign("custom", $list);
        }
        return view('edit');
    }
    public function edit()
    {
        $data =input("post.");
        $data['ctime']=time();
        unset($data["id"]);
        $id = input('id');
        if(!empty($id)){
            $data['utime']=time();
            $data=Db::name("gx")->where('id',$id)->update($data);
            if($data){
                $this->success('修改成功','admin/index/index',0);
            }else{
                $this->error('修改失败',1,0);
            }
        }else{
            $data['ctime']=time();
            $data=Db::name("gx")->insert($data);
            if($data){
                $this->success('添加成功','admin/index/index',0);
            }else{
                $this->error('添加失败',1,0);
            }
        }
    }
    public function delete(){
        $del=input('id');
        $custom = Db::name('gx')->where('id',$del)->delete();
        if($custom){
            $this->success('删除成功','admin/index/index',1,0);
        }else{
            $this->error('删除失败',1,0);
        }
    }


}



