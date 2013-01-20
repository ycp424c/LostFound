<?php
class AdminAction extends CommonAction{
    function index(){
        $this->display();
    }
    function admin(){
        $username = $_POST[username];
        $password = $_POST[password];
        $userdatam = M('admininfo');
        $userdata = $userdatam->where('name="'.$username.'"')->find();
        //print_r($userdata['password']);
        if(cookie('adminloged')!='true'){
            if($userdata['password']==$password)
            {
                    echo '验证成功';
                    cookie('adminloged','true',3600);

            }  else {
                echo '验证失败';
                echo "<script language=\"javascript\">location.href = 'javascript:history.back()'</script>";
                return;
            }          
         }
        $locationList = M('location')->select();
//        print_r($locationList);
        $this->assign('locationList',$locationList);
        $this->display();
    }
}
?>