<?php if (!defined('THINK_PATH')) exit();?><!--
To change this template, choose Tools | Templates
and open the template in the editor.
--><!DOCTYPE html><html><head><title></title><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style>            .content{
                position: absolute;
                width: 100%;
                background-color:#426ab3;
                height: 500px;
            }
            .header{
                width: 100%;
                height: 200px;
                background-color: #a3cf62;
            }
            .tab{
                float: left;
                width: 100px;
                height: 25px;
                border-color: black;
                border-style: solid;
                border-bottom: none;
                margin-left: 10px; 
                cursor: pointer;
            }           
        </style><script type="text/javascript" src="__ROOT__/lost&found/jquery.js"></script><script type="text/javascript">            $(function(){
                $("#tab1").click(function(){
                    $(".content").hide();
                    $(".tab").css("background", "none");
                    $("#tab1").css("background-color","#426ab3");
                    $("#content1").show();
                });
                $("#tab2").click(function(){
                    $(".content").hide();
                    $(".tab").css("background", "none");
                    $("#tab2").css("background-color","#426ab3");
                    $("#content2").show();
                });
                $("#tab3").click(function(){
                    $(".content").hide();
                    $(".tab").css("background", "none");
                    $("#tab3").css("background-color","#426ab3");
                    $("#content3").show();
                });
            });
        </script></head><body style="margin:0px;"><div class="header"><div style="height:173px">管理员页面</div><div id="tab1" class="tab" style="background-color:#426ab3;">地点管理</div><div id="tab2" class="tab">标签2</div><div id="tab3" class="tab">标签3</div></div><div id="content3" class="content">            内容页面3
        </div><div id="content2" class="content">            内容页面2
        </div><div id="content1" class="content"><?php if(is_array($locationList)): $i = 0; $__LIST__ = $locationList;if( count($__LIST__)==0 ) : echo "fuck" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["name"]); ?><br><?php endforeach; endif; else: echo "fuck" ;endif; ?></div></body></html>