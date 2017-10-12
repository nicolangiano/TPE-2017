{if $voluntariados}
  <ul>
    {foreach $voluntariados as $Voluntariado}
    <li class="list-group-item">{$voluntariado['nombre_espacio']} -- {$Voluntariado['horarios']} </li>
    {/foreach}
  </ul>
{else}
  <ul>
      <li class="list-group-item list-group-item-danger"> No se encontraron voluntariados</li>
  </ul>
{/if}
