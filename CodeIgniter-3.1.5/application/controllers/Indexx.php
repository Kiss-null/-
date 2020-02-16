<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indexx extends CI_Controller{
	public function index(){
		$data='155555';
		$this->load->model('login_model','login');
		$this->login->select($data);
		$this->load->view('indexx/index.html');

	}
	public function recharge(){
		$data='155555';
		//载入表单验证类
		$data=$data=$this->input->post();
		if($data){
			$this->load->library('form_validation');
			$status=$this->form_validation->run('article');
			if($status){
				$this->load->model('indexx_model','index');
				$this->index->recharge($data);
				success('login/index','注册成功');
			}else{
				$this->load->helper('form');
				$this->load->view('login/edit.html');
			}
		}
	}
}



