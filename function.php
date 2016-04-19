<?php

require_once dirname(__FILE__).'\configs\config.php';
if(empty($GTEMP)){
	header("Content-type:text/html;charset=utf8");
	exit('没有定义调用模版名$GETMP,使用方法：$GETMP="模版文件名";');
}
//读入文件
$GTEMPcontent=file_get_contents(GPTEMPLATES_DIR.$GTEMP);
//匹配读取的文件变量
$GTEMPcontent=GTEMPcenter($GTEMPcontent);
$GTEMPcontent=strip_tags($GTEMPcontent);
$GTEMPcontent=GTEMPcleans($GTEMPcontent);
$GTEMPauto=explode('$',$GTEMPcontent);
//自加载所有变量并清楚Notice报错
foreach ($GTEMPauto as $key => $value) {
	if(!empty($$value)){
	$smarty->assign($value,$$value);
	}else{
		$$value="";
		$smarty->assign($value,$$value);
	}
}
//展示模版
$smarty->display($GTEMP);
//自定义函数-清除非匹配项
function GTEMPcleans($nr){
	$nr=preg_replace('/\n/','',$nr);
	$nr=preg_replace('/ /','',$nr);
	$nr=preg_replace('/==[0-9]/','', $nr);
	$cl=array('foreach','\/foreach','if','\/if','include','\=','\/','\:','\!','\&');
	foreach ($cl as $key => $value) {
	 $nr=preg_replace('/'.$value.'/',' ', $nr);
	}
	$nr=preg_replace('/ /','',$nr);
	$nr=preg_replace('/"+\w+\.\w+"/','',$nr);
	$nr=preg_replace('/"+\w+"/','',$nr);
	$nr=preg_replace('/\.+\w+}/','',$nr);
	$nr=preg_replace('/[^$\w]/','', $nr);
	return $nr;
}
//自定义函数-取中间文本
function GTEMPcenter($nr,$pre="<!--{",$lst="}-->"){
	$nr=preg_replace('/'.$pre.'/','',$nr);
	$nr=preg_replace('/'.$lst.'/','  $'.md5("gpsmartyendmark"),$nr);
	$nr=preg_replace('/\s+\w+\s/','', $nr);
	$nr=preg_replace('/\s+\/+\w+\s/','', $nr);
	return $nr;
}
?>

