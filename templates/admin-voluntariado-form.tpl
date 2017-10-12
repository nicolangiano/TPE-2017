<section>
<div id="formContainer" class="container">
	<div class="col-md-offset-1 col-md-9">
	    <form id="uploadVoluntariado" class="uploadForm">
	      <div class="form-group col-md-12">
	        <div class="col-md-12">
	            <label for="InputVoluntariadoName">Nombre Voluntariado</label>
	            <input type="text" class="form-control" name="VoluntariadoName" id="InputVoluntariadoName" placeholder="Nombre Voluntariado">
	        </div>
	      </div>
	      <div class="form-group col-md-12">
	        <div class="col-md-12">
	          <label for="InputVoluntariadoSpace" >Nombre espacio</label>
	          <input type="text" class="form-control" name="VoluntariadoSpace" placeholder="Nombre Espacio">
	         </div>
	      </div>
	      <div class="col-md-12">
	        <div class="col-md-12">
	          <label for="select">Elige tipo</label>
	          {if $types}
	          <select class="form-control" name="bookSection">
	           {foreach $types as $type}
	            <option id="{$type['id_voluntariado']}">{$type['id_voluntariado']}</option>
	            {/foreach}
	          </select>
	          {/if}
	        </div>
	      </div>

	    </form>
	</div>
</div>
</section>
