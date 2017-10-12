<div class="col-md-12">
  <ul class="list-group col-md-4">
    {if $types}
      {foreach $types as $type}
        <a href="#" class="list-group-item sec" id="{$type['id_voluntariado']}">{$type['nombre_voluntariado']}</a>
      {/foreach}
    {else}
      <p>
        No hay tipos de Voluntariados
      </p>
    {/if}
  </ul>
  <div class="col-md-8" id="voluntariadosList">

  </div>
</div>
