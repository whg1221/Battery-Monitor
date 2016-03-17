<?php
namespace Home\Controller;
use Think\Controller;

/**
 * 首页控制器
 * @package Home\Controller
 */
class IndexController extends CommonController {
    /**
     * 系统首页
     */
    public function index(){
        // 获取当前账户的登录信息
        $where = array();
        $where['userid'] = session('uid');
        
        $info = M('users')->field('userid,loginnum')->where($where)->find();
		$battyHis = M('his_batty')->where($where)->field('syspressure, soc, battery, range, tempmax, tempmin, voltagemax, voltagemin,
				faultevent, faulttime, recordtime')->select();
			
        $this->assign('info', $info);
        //$this->battyHis = $battyHis;
        $this->assign('battyHis', $battyHis);
        $this->assign('SERVER_SOFTWARE', $_SERVER['SERVER_SOFTWARE']);
        $this->display();
    }
    
    /*
     * 添加新用户
     */
    public function addUser() {
    	
    }
    
    /*
     * 存储新id
     */
    public function store() {
    	
    }
    
    /*
     * 标定id
     */
    public function standard() {
    	echo "standard";
    }
    
    public function battery_detail() {
    	$this->display();
    }
}