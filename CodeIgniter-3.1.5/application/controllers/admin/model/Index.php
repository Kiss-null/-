<?php
namespace app\admin\model;
use think\Model;
class Index extends Model
{
    protected $table = 'gx';
    public function getAll(){//到这，运行方法gatAll
        return $this->belongsTo("Classs", "classs_id", "id")->field('cname');
    }
}