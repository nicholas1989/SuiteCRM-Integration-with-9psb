

    <select name="{$fields.contact_type_c.name}"
            id="{$fields.contact_type_c.name}"
            title=''  tabindex="1"              
            >

        {if isset($fields.contact_type_c.value) && $fields.contact_type_c.value != ''}
            {html_options options=$fields.contact_type_c.options selected=$fields.contact_type_c.value}
        {else}
            {html_options options=$fields.contact_type_c.options selected=$fields.contact_type_c.default}
        {/if}
    </select>

