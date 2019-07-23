<?php
namespace app\indexview\controller;//命名空间

use think\Controller;
use think\View;

class Index extends Controller{
	public function index(){
		// // app/indexview/view/index/index.html
		// return view();
		// // app/indexview/view/index/upload.html
		// return view('upload');
		// // app/indexview/view/public/upload.html
		// return view('public/upload');
		// // public/index.html
		// return view('./index.html');
		// return view('index',['email'=>'lixiang@qq.com']);

		return $this->fetch('index',['email'=>'lixiang@qq.com']);
	}
	public function info(){
		//模板变量赋值
		// $this->assign('key1','value1');
		// $this->view->key2='value2';
		// View::instance()->assign('key3','values3');
		// dump($_SERVER);
		// session('email','lixiang@qq.com');
		// cookie('name','lixiang');

		$this->assign('email','2584765322@qq.com');
		$this->assign('time',time());
		$this->assign('name','lixiang');

		$this->assign('a',10);
		$this->assign('b',20);

		return $this->fetch('index',[],[]);
	}

	public function xunhuan(){
		$list=[
			'user1'=>[
				'name'=>'lx',
				'email'=>'lixiang@qq.com'
			],
			'user2'=>[
				'name'=>'zhangsan',
				'email'=>'zhangssan@qq.com'
			],
			'user3'=>[
				'name'=>'lisi',
				'email'=>'lisi@qq.com'
			]
		];
		$this->assign('list',$list);
		return $this->fetch('xunhuan',[],[]);
	}

	public function bijiao(){
		$this->assign('a',10);
		$this->assign('b',20);

		return $this->fetch('bijiao');
	}

	public function tiaojian(){

		return $this->fetch('tiaojian');

	}
}