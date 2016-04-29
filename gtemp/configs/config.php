<?php
require dirname(dirname(__FILE__)).'\Smarty\libs\Smarty.class.php';//设置smarty核心文件目录
$gtemp = new Smarty;//创建gtemp对象
$gtemp->cache_dir = dirname(dirname(__FILE__)).'/cache'; //设置缓存目录
if(isset($GTEMP_CACHING))
$GTEMP_CACHING!=false?$gtemp->caching = true:$gtemp->caching = false;//设置缓存模式
else
$gtemp->caching = true;
$gtemp->debugging = false;//调试模式
$gtemp ->compile_dir = dirname(dirname(__FILE__))."/templates_c";//设置编译目录
$gtemp->left_delimiter = '<!--{';//定义模版定界符
$gtemp->right_delimiter = '}-->';//同上，注意：最好不要改动，否则会出现模版错误，改动此处必须改动内置函数
define('GPTEMPLATES_DIR', $gtemp->template_dir[0]);
?>