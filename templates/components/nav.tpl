			<nav class="navbar navbar-inverse">
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
			      	{if isset($smarty.session.activeUser)}
							    <li><a id="admin-list-voluntariados" href="#">Listar Voluntariados</a></li>
							    <li class="action"><a id="admin-voluntariado-form" href="#">Agregar Voluntariado</a></li>
							    <li><a id="admin-list-type" href="#">Listar Tipo de Voluntariado</a></li>
							    <li class="action"><a id="admin-type-form" href="#">Agregar Tipo de Voluntariado</a></li>
								<li class="action"><a id="logout" href="#">Logout</a></li>
							{else}
									<li class="action"><a id="login" href="#">Login</a></li>
							{/if}
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->

			</nav>
