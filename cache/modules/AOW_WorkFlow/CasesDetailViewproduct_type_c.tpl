

{if is_string($fields.product_type_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.product_type_c.name}" value="{ $fields.product_type_c.options }">
{ $fields.product_type_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.product_type_c.name}" value="{ $fields.product_type_c.value }">
{ $fields.product_type_c.options[$fields.product_type_c.value]}
{/if}
