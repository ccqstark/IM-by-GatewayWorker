<?php
namespace app\index\controller;

use think\Controller;
use think\Exception;
use app\index\model\Test1;

class Index extends Controller
{
    public function Index()
    {
        $fromid = input("fromid");
        $toid = input("toid");
        $this->assign("fromid",$fromid);
        $this->assign("toid",$toid);
        return $this->fetch();
//       echo 'Let\'s chat!';
	}

}
   

