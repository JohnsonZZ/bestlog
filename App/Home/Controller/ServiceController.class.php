<?php
namespace Home\Controller;
use Think\Controller;
class ServiceController extends Controller {
    public function index(){
		$list = M('Goods')->order('ol asc')->select();
		$this->assign('list',$list);
        $this->display();
	}
}