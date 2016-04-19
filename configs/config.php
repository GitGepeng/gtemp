<?php
/*使用本插件后注意以下几点,以免造成代码冲突,失去自定义功能
1.不可在PHP中使用变量如下
$GTEMP
$GTEMPcontent
$GTEMPauto
$GTEMP_CACHING
2.不可重新define名如下
GPTEMPLATES_DIR
3.不可用函数名如下
GTEMPcleans
GTEMPcenter
*插件名：Gtemp自加载模版引擎
*版本号：v0.70
*使用说明如下
例：
将gtemp文件夹放入网站根目录wwwroot下
创建templates目录并创建htm等格式模版文件
注：如需模版分类则需在templates文件夹下建立分类文件夹,并且$GTEMP和include语句也得用"分类/模版名"来引入分类模版
若不如此引入的文件是teamplates文件夹下的文件
创建index.php文件写控制器完成后加入$GTEMP='模版文件名';require_once './gtemp/function.php';
即可展示模版
v7.0后增加了控制器强制编译机制,如模版需要实时更新则需在引入文件之前设置变量$GTEMP_CACHING=true;
*/
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
