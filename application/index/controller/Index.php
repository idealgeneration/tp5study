<?php
namespace app\index\controller;
use app\common\controller\Index as commonIndex;
use \think\Config;
use think\Env;

class Index
{

    public function __construct(){
        config("controller","index"); //动态配置，助手函数
        Config::set("controller","index");//动态配置，Config类
    }

    public function index()
    {
        return 'this is index Index index';
    }

    public function info($id){
        return "{$id}";
    }
    

    public function common(){
    	$common=new commonIndex();
    	return $common->index();
    }

    public function showConfig(){
        config("action","showConfig");//动态配置
    	dump(config());
    }

    public function showConfig2(){
        config("action","showConfig2");//动态配置
        dump(config());
    }
}
