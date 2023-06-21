

{if is_string($fields.subcategory_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.subcategory_c.name}" value="{ $fields.subcategory_c.options }">
{ $fields.subcategory_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.subcategory_c.name}" value="{ $fields.subcategory_c.value }">
{ $fields.subcategory_c.options[$fields.subcategory_c.value]}
{/if}
