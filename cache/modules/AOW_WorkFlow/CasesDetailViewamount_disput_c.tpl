
{if strlen($fields.amount_disput_c.value) <= 0}
{assign var="value" value=$fields.amount_disput_c.default_value }
{else}
{assign var="value" value=$fields.amount_disput_c.value }
{/if} 
<span class="sugar_field" id="{$fields.amount_disput_c.name}">{$fields.amount_disput_c.value}</span>
