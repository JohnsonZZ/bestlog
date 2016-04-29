<?php
namespace Home\Controller;
use Think\Controller;
class CaseController extends Controller {
    public function index(){
        $this->display();
	}
	public function article(){
		$data['id'] = I('get.theme');
		$List = M('List');
		$list = $List->where($data)->find();
		$this->assign($list);
        $this->display();
	}
}