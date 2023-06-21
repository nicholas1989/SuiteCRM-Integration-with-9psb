

{if is_string($fields.cat_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.cat_c.name}" value="{ $fields.cat_c.options }">
{ $fields.cat_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.cat_c.name}" value="{ $fields.cat_c.value }">
{ $fields.cat_c.options[$fields.cat_c.value]}
{/if}
