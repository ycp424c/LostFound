<?php
class AdminAction extends CommonAction{
    function index(){
        $this->display();
    }
    function admin(){
        $username = $_POST[username];
        $password = $_POST[password];
//        $password = md5($_POST[password]);
        $userdata = M(admininfo);
        if($userdata->where('username=%s',$username)->select('password')==$password)
        {
            echo '验证成功';
        }
        $this->display();
    }
}
?>