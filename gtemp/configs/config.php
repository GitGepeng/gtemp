<?php
header("Content-type:text/html;charset=utf-8");//设置文字编码
require dirname(dirname(__FILE__)).'\smarty\libs\Smarty.class.php';//设置smarty核心文件目录
$smarty = new Smarty;//创建smarty对象
$smarty->cache_dir = dirname(dirname(__FILE__)).'/cache'; //设置缓存目录
if(isset($GTEMP_CACHING))
$GTEMP_CACHING!=false?$smarty->caching = true:$smarty->caching = false;//设置缓存模式
else
$smarty->caching = true;
$smarty->debugging = false;//调试模式
$smarty ->compile_dir = dirname(dirname(__FILE__))."/templates_c";//设置编译目录
$smarty->left_delimiter = '<!--{';//定义模版定界符
$smarty->right_delimiter = '}-->';//同上，注意：最好不要改动，否则会出现模版错误，改动此处必须改动内置函数
define('GPTEMPLATES_DIR', $smarty->template_dir[0]);
?>