<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$list = M('News')->order('time desc')->limit(6)->select();
		$this->assign('list',$list);
        $this->display();
	}
}