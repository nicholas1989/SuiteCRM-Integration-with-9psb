

{if is_string($fields.service_interest_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.service_interest_c.name}" value="{ $fields.service_interest_c.options }">
{ $fields.service_interest_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.service_interest_c.name}" value="{ $fields.service_interest_c.value }">
{ $fields.service_interest_c.options[$fields.service_interest_c.value]}
{/if}
