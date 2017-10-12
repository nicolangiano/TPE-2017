<div>
	<h3>Algunos espacios de Articulación Social</h3>
	<div class="col-md-12">
	{if $voluntariados}
		{foreach $voluntariados as $voluntariado}
		<a href="{$book['url_libro']}">
			<div class="col-xs-10 col-md-2 bookWrapper">
				<div class="voluntariadoCaption">
					<div>
						<span>{$voluntariado['nombre_espacio']}</span>
						<span>{$voluntariado['cant_voluntarios']}</span>
						<span>{$voluntariado['horarios']}</span>
					</div>
				</div>
			</div>
		</a>
		{/foreach}
	{/if}
	</div>
</div>
