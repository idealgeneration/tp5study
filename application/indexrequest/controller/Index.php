<?php
namespace app\indexrequest\controller;

use think\Request;
use think\Config;

class Index{

	public function __construct(){
		Config::set("default_return_type","json");
		// config("default_return_type","json");
	}

	public function index(Request $request){//3.注入Request类,建议用这种方式
		//1.助手函数
		// $request=request();
		//2.Request类
		// $request=Request::instance();
		dump($request);
	}

	public function show(){
		$data=[
			'code'	=>0,
			'result'=>[
				'username'=>'lixang',
				'email'=>'lixiang@qq.com',
				'list'=>[1,2,3,4]
			]
		];
		return $data;
	}

	public function info(Request $request){
		//地址栏上的内容
		dump($request->domain());
		dump($request->pathinfo());
		dump($request->path());
		dump($request->url());
		dump($request->baseurl());
		dump($request->root());

		//请求类型
		dump($request->method());
		dump($request->isGet());
		dump($request->isPost());

		//请求参数
		dump($request->param());
		dump($request->route());
		dump($request->get());
		dump($request->post());
		// dump($request->server());
		// dump($request->input());
		dump($request->has('type'));
		dump($request->has('id'));
		dump($request->isAjax());
		dump($request->ip());

		//session cookies
		session('name','lixiang');
		dump($request->session());
		dump($request->cookie());
		dump($request->file());

		//module controller action
		dump($request->module());
		dump($request->controller());
		dump($request->action());
	}

	public function helperinfo(Request $request){
		dump($request->param());
		dump(input('type'));
		dump(input('get.id'));
	}


}