<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Indexx_model extends CI_Model{
	/**
	 * 添加
	 */
	public function recharge($data){
		$data=$this->db->insert('administrators',$data);
		if($data){
			success('indexx/index','充值成功');
		}else{
			error('充值失败');
		}
	}
	public function select($data){
		$data=$this->db->where($data)->get('administrators')->result_array();
		if($data){
			$cookie=$_COOKIE[$data['name']];
			success('indexx/index','登录成功');
		}else{
			error('登录失败');
		}

	}
}
