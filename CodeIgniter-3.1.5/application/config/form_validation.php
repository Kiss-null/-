<?php
$config =array(
	'article'=>array(
		array(
			'field'=>'name',
			'label'=>'账号',
			'rules'=>'required|min_length[5]'
		),
		array(
			'field'=>'password',
			'label'=>'密码',
			'rules'=>'required|min_length[5]'
		),
	),
);
