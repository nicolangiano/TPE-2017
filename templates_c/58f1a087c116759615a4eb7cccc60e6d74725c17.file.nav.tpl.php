<?php /* Smarty version Smarty-3.1.14, created on 2017-10-12 14:05:51
         compiled from ".\templates\components\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:894459df5a9f031387-03993527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58f1a087c116759615a4eb7cccc60e6d74725c17' => 
    array (
      0 => '.\\templates\\components\\nav.tpl',
      1 => 1507808545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '894459df5a9f031387-03993527',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59df5a9f040d83_44648918',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59df5a9f040d83_44648918')) {function content_59df5a9f040d83_44648918($_smarty_tpl) {?>			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    	<ul class="nav navbar-nav">
			    		<li class="action"><a id="home" href="#">Home</a></li>
						<li><a id="Voluntariados" href="#">Voluntariados</a></li>
				        <li class="action"><a id="faq" href="#">FAQ</a></li>
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			      	<?php if (isset($_SESSION['activeUser'])){?>
							    <li><a id="admin-list-voluntariados" href="#">Listar Voluntariados</a></li>
							    <li class="action"><a id="admin-voluntariado-form" href="#">Agregar Voluntariado</a></li>
							    <li><a id="admin-list-type" href="#">Listar Tipo de Voluntariado</a></li>
							    <li class="action"><a id="admin-type-form" href="#">Agregar Tipo de Voluntariado</a></li>
								<li class="action"><a id="logout" href="#">Logout</a></li>
							<?php }else{ ?>
									<li class="action"><a id="login" href="#">Login</a></li>
							<?php }?>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->

			</nav>
<?php }} ?>