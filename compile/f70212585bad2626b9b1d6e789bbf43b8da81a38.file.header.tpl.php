<?php /* Smarty version Smarty-3.1.17, created on 2014-11-14 13:33:32
         compiled from "E:\xampp\htdocs\shop\view\default\public\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:279495465942c577b26-26001891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f70212585bad2626b9b1d6e789bbf43b8da81a38' => 
    array (
      0 => 'E:\\xampp\\htdocs\\shop\\view\\default\\public\\header.tpl',
      1 => 1415942570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279495465942c577b26-26001891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frontTenNav' => 0,
    'oneFrontNav' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5465942c577b29_65357108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5465942c577b29_65357108')) {function content_5465942c577b29_65357108($_smarty_tpl) {?><div id="header">
	<span class="tel"><em class="tel_ico"></em>400-878-1619</span>
	<h1><a href="./"><img src="view/default/images/huahua_logo2.png" alt="花花家LOGO"></a></h1>
	<?php if ($_COOKIE['user']) {?>
	<p>
		您好，<?php echo $_COOKIE['user'];?>
，<a href="?a=user">个人中心</a> | <a href="?a=cart"><i class="cat"></i>购物袋(<strong>0</strong>)</a> | <a href="?a=user&m=loginOut">退出</a>
	</p>
	<?php } else { ?>
	<p>
		<a href="?a=cart"><i class="cat"></i>购物袋(<strong>0</strong>)</a>
		<a href="?a=user&m=login">登录</a> | 
		<a href="?a=user&m=reg">注册</a>
	</p>
	<?php }?>
	<div class="header_search">
		<form method="post" name="form" action="?a=list&m=searchGoods">
			<input type="text" name="content" placeholder=" 快捷搜一搜吧"/>
			<input type="submit" name="search" value="" />
		</form>
	</div>
</div>
<div id="nav">
	<ul>
		<?php if (isset($_GET['navid'])) {?>
			<li><a href="./">首页</a></li>
		<?php } else { ?>
			<li><a class="selected" href="./">首页</a></li>
		<?php }?>
		
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontTenNav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php if (isset($_smarty_tpl->tpl_vars['oneFrontNav']->value[0]->id)&&$_smarty_tpl->tpl_vars['oneFrontNav']->value[0]->id==$_smarty_tpl->tpl_vars['value']->value->id) {?>
				<li><a class="selected" href="?a=list&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></li>
			<?php } else { ?>
				<li><a href="?a=list&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></li>
			<?php }?>
		<?php } ?>
	</ul>
</div>
<!-- <div id="search">
	<form method="post" name="form" action="?a=list&m=searchGoods">
		<select name="way">
			<option value="nav">按类别</option>
			<option value="goods">按商品名称</option>
		</select>
		<input type="text" name="content"/>
		<input type="submit" name="search"/>
	</form>
</div> -->
<?php }} ?>
