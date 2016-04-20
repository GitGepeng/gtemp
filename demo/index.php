<?php
//下面可书写任意PHP代码
$title='一个简单的Demo';
$dir="index";
$array = array('id' =>0 ,'title'=>'Gp自加载模版引擎','author'=>'Gp', );
//以下是配置项
$GTEMP="index.htm";
$GTEMP_CACHING=false;//设置为强迫编译
require_once '../gtemp/function.php';
?>