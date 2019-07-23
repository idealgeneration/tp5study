<?php
namespace app\index\controller;
use app\common\controller\User as commonUser;//导入所需的类，类似java中的import

class User extends commonUser{

	public function show(){
		return $this->showName("lixiang");
	}
}