<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model{
	/**
	 * 添加
	 */
	public function add($data){
		$this->db->insert('administrators',$data);
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
