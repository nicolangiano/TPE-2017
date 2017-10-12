<?php /* Smarty version Smarty-3.1.14, created on 2017-10-12 16:28:24
         compiled from "templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1239359df5a9f05c302-07429658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86f31bea36745d7880a3307675985632e9230a43' => 
    array (
      0 => 'templates\\home.tpl',
      1 => 1507818503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1239359df5a9f05c302-07429658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59df5a9f064004_89834690',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59df5a9f064004_89834690')) {function content_59df5a9f064004_89834690($_smarty_tpl) {?><div class="row">
	<?php echo $_smarty_tpl->getSubTemplate ("components/slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div class="row">
	<?php echo $_smarty_tpl->getSubTemplate ("components/trending.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php }} ?>