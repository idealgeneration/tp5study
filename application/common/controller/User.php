<?php
namespace app\common\controller;//命名空间，类似java中的package
class User{
	public function showName($name=''){
		return "my name is {$name}";
	}
}