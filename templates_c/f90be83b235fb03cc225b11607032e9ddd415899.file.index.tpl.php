<?php /* Smarty version Smarty-3.1.14, created on 2017-10-12 14:05:50
         compiled from "templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2627459df5a9eefe486-40394818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90be83b235fb03cc225b11607032e9ddd415899' => 
    array (
      0 => 'templates\\index.tpl',
      1 => 1448913368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2627459df5a9eefe486-40394818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59df5a9ef3cc80_61615793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59df5a9ef3cc80_61615793')) {function content_59df5a9ef3cc80_61615793($_smarty_tpl) {?><div class="container">
	<?php echo $_smarty_tpl->getSubTemplate ("components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<?php echo $_smarty_tpl->getSubTemplate ("components/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="container" id="content">
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>