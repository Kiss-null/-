<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fx extends CI_Controller{
	public function index(){
		$data['title']='我是标题';
		$data['name']=array(
			'ss','萨顶顶','saa'
		);
		p($data);
		$this->load->helper('url');
		echo base_url();
		//redirect('fx/ssk');
		//$this->load->view('index/11',$data);

	}
	public function ssk(){
		echo "hello";
	}
}
