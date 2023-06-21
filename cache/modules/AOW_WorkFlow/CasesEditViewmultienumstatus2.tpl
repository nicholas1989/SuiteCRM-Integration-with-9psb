


<input type="hidden" id="{$fields.status.name}_multiselect"
name="{$fields.status.name}_multiselect" value="true">
{multienum_to_array string=$fields.status.value default=$fields.status.default assign="values"}
<select id="{$fields.status.name}"
name="{$fields.status.name}[]"
multiple="true" size='6' style="width:150" title='' tabindex="1" 
>
{html_options options=$fields.status.options selected=$values}
</select>
