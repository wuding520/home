<?php
namespace app\index\model;

use think\Model;

class Zhoukao3 extends Model
{
    public function insData($data){
        return $this->insert($data);
    }
    public function showData(){
        return $this->select();
    }
    public function updData($id){
        return $this->where("can_id",$id)->find();
    }
    public function updsData($data){
        return $this->update($data);
    }
}
