<?php
/* Smarty version 3.1.29, created on 2016-04-20 18:09:51
  from "E:\gtemp\demo\templates\common\index.htm" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5717556f4ce846_88164017',
  'file_dependency' => 
  array (
    '644027acc8526b36fed743313e8a1abbcbccfdf9' => 
    array (
      0 => 'E:\\gtemp\\demo\\templates\\common\\index.htm',
      1 => 1461146989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.htm' => 1,
    'file:common/footer.htm' => 1,
  ),
),false)) {
function content_5717556f4ce846_88164017 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:common/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
.box{
	width: 960px;
	margin: auto;
	overflow: hidden;
	border: 1px solid #cdcdcd;
}
</style>
<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
<div class="box">
	<?php if ($_smarty_tpl->tpl_vars['dir']->value == "index") {?>
		您现在看到的文件是<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>

	<?php } else { ?>
		您又看到的文件是<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>

	<?php }?>
	<br>
	<?php
$_from = $_smarty_tpl->tpl_vars['array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
	<?php echo $_smarty_tpl->tpl_vars['v']->key;?>
:<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<br>
	<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:common/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
