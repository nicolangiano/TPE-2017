<?php /* Smarty version Smarty-3.1.14, created on 2017-10-12 14:05:51
         compiled from ".\templates\components\trending.tpl" */ ?>
<?php /*%%SmartyHeaderCode:705559df5a9f0b9f06-13216625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4a277ee2d9a0598f770fe053b401af94e87f2ca' => 
    array (
      0 => '.\\templates\\components\\trending.tpl',
      1 => 1507808891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '705559df5a9f0b9f06-13216625',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'voluntariados' => 0,
    'book' => 0,
    'voluntariado' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59df5a9f0f4881_60190691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59df5a9f0f4881_60190691')) {function content_59df5a9f0f4881_60190691($_smarty_tpl) {?><div>
	<h3>Algunos espacios de Articulación Social</h3>
	<div class="col-md-12">
	<?php if ($_smarty_tpl->tpl_vars['voluntariados']->value){?>
		<?php  $_smarty_tpl->tpl_vars['voluntariado'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['voluntariado']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['voluntariados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['voluntariado']->key => $_smarty_tpl->tpl_vars['voluntariado']->value){
$_smarty_tpl->tpl_vars['voluntariado']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['book']->value['url_libro'];?>
">
			<div class="col-xs-10 col-md-2 bookWrapper">
				<div class="voluntariadoCaption">
					<div>
						<span><?php echo $_smarty_tpl->tpl_vars['voluntariado']->value['nombre_espacio'];?>
</span>
						<span><?php echo $_smarty_tpl->tpl_vars['voluntariado']->value['cant_voluntarios'];?>
</span>
						<span><?php echo $_smarty_tpl->tpl_vars['voluntariado']->value['horarios'];?>
</span>
					</div>
				</div>
			</div>
		</a>
		<?php } ?>
	<?php }?>
	</div>
</div>
<?php }} ?>