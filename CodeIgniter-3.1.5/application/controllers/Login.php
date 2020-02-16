
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	public function index(){
//开启辅助函数	$this->load->helper('url');
	//跳转
		//redirect('login/ssk');
		$this->load->helper('form');
		$this->load->view('login/index.html');

	}
	/*
	 * 登录
	 * 验证密码
	*/
	public function add(){
		$this->load->library('form_validation');
		//执行验证
		$status=$this->form_validation->run('article');
		if($status){
			//判断密码
			$data=$this->input->post();
			$this->load->model('login_model','login');
		 	$this->login->select($data);
		}else{
			//格式错误
			$this->load->helper('form');
			$this->load->view('login/edit.html');
		}
	}
	//注册
	public function edit(){
		//载入表单验证类
			$this->load->helper('form');
			$this->load->view('login/edit.html');
	}
	public function edits(){
		//载入表单验证类
		$data=$data=$this->input->post();
		if($data){
			$this->load->library('form_validation');
			//执行验证
			$status=$this->form_validation->run('article');
			if($status){
				$this->load->model('login_model','login');
				$this->login->add($data);
				success('login/index','注册成功');
			}else{
				$this->load->helper('form');
				$this->load->view('login/edit.html');
			}
		}

	}
}
