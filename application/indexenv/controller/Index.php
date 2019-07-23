<?php
namespace app\indexenv\controller;

use think\Env;

class Index{
	public function index(){
		dump(Env::get('email','hello@qq.com'));
		// dump($_ENV);
		// dump(config());
	}
}