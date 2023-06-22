

{if is_string($fields.source.options)}
<input type="hidden" class="sugar_field" id="{$fields.source.name}" value="{ $fields.source.options }">
{ $fields.source.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.source.name}" value="{ $fields.source.value }">
{ $fields.source.options[$fields.source.value]}
{/if}
