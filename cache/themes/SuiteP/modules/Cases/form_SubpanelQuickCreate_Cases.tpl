

<script>
    {literal}
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($('.edit-view-pagination').children().length == 0) $('.saveAndContinue').remove();
    });
    {/literal}
</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="{$fields.id.value}">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
{if (!empty($smarty.request.return_module) || !empty($smarty.request.relate_to)) && !(isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true")}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{assign var='place' value="_HEADER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Cases'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_Cases'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'Cases_subpanel_save_button');return false;" type="submit" name="Cases_subpanel_save_button" id="Cases_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="Cases_subpanel_cancel_button" id="Cases_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Cases'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="Cases_subpanel_full_form_button" id="Cases_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form">
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Cases", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
</div>
</td>
</tr>
</table>
{sugar_include include=$includes}
<div id="EditView_tabs">

<ul class="nav nav-tabs">
</ul>
<div class="clearfix"></div>
<div class="tab-content" style="padding: 0; border: 0;">

<div class="tab-pane panel-collapse">&nbsp;</div>
</div>

<div class="panel-content">
<div>&nbsp;</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_CASE_INFORMATION' module='Cases'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="LBL_CASE_INFORMATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SUBJECT">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SUBJECT' module='Cases'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="name"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}
<input type='text' name='{$fields.name.name}'
id='{$fields.name.name}' size='30'
maxlength='255'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PRIORITY">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_PRIORITY' module='Cases'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="priority"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.priority.name}"
id="{$fields.priority.name}"
title=''              
>
{if isset($fields.priority.value) && $fields.priority.value != ''}
{html_options options=$fields.priority.options selected=$fields.priority.value}
{else}
{html_options options=$fields.priority.options selected=$fields.priority.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_STATE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_STATE' module='Cases'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="state"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.state.name}"
id="{$fields.state.name}"
title=''              
>
{if isset($fields.state.value) && $fields.state.value != ''}
{html_options options=$fields.state.options selected=$fields.state.value}
{else}
{html_options options=$fields.state.options selected=$fields.state.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_STATUS">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='Cases'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="dynamicenum" field="status"  >
{counter name="panelFieldCount" print=false}

<script type="text/javascript" src='{sugar_getjspath file="include/SugarFields/Fields/Dynamicenum/SugarFieldDynamicenum.js"}'></script>
<select name="{$fields.status.name}"
id="{$fields.status.name}"
title=''           
>
{if isset($fields.status.value) && $fields.status.value != ''}
{html_options options=$fields.status.options selected=$fields.status.value}
{else}
{html_options options=$fields.status.options selected=$fields.status.default}
{/if}
</select>
<script type="text/javascript">
    if(typeof de_entries == 'undefined'){literal}{var de_entries = new Array;}{/literal}
    var el = document.getElementById("state");
    addLoadEvent(function(){literal}{loadDynamicEnum({/literal}"state","{$fields.status.name}"{literal})}{/literal});
    if (SUGAR.ajaxUI && SUGAR.ajaxUI.hist_loaded) {literal}{loadDynamicEnum({/literal}"state","{$fields.status.name}"{literal})}{/literal}
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SERVICE_CHANEL">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SERVICE_CHANEL' module='Cases'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="service_chanel_c"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.service_chanel_c.name}"
id="{$fields.service_chanel_c.name}"
title=''              
>
{if isset($fields.service_chanel_c.value) && $fields.service_chanel_c.value != ''}
{html_options options=$fields.service_chanel_c.options selected=$fields.service_chanel_c.value}
{else}
{html_options options=$fields.service_chanel_c.options selected=$fields.service_chanel_c.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ESCALATE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_ESCALATE' module='Cases'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="escalate_c"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.escalate_c.name}"
id="{$fields.escalate_c.name}"
title=''              
>
{if isset($fields.escalate_c.value) && $fields.escalate_c.value != ''}
{html_options options=$fields.escalate_c.options selected=$fields.escalate_c.value}
{else}
{html_options options=$fields.escalate_c.options selected=$fields.escalate_c.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SERVICE_INTEREST">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SERVICE_INTEREST' module='Cases'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="service_interest_c"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.service_interest_c.name}"
id="{$fields.service_interest_c.name}"
title=''              
>
{if isset($fields.service_interest_c.value) && $fields.service_interest_c.value != ''}
{html_options options=$fields.service_interest_c.options selected=$fields.service_interest_c.value}
{else}
{html_options options=$fields.service_interest_c.options selected=$fields.service_interest_c.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PRODUCT_TYPE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_PRODUCT_TYPE' module='Cases'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="product_type_c"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.product_type_c.name}"
id="{$fields.product_type_c.name}"
title=''              
>
{if isset($fields.product_type_c.value) && $fields.product_type_c.value != ''}
{html_options options=$fields.product_type_c.options selected=$fields.product_type_c.value}
{else}
{html_options options=$fields.product_type_c.options selected=$fields.product_type_c.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_CAT">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_CAT' module='Cases'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="dynamicenum" field="cat_c"  >
{counter name="panelFieldCount" print=false}

<script type="text/javascript" src='{sugar_getjspath file="include/SugarFields/Fields/Dynamicenum/SugarFieldDynamicenum.js"}'></script>
<select name="{$fields.cat_c.name}"
id="{$fields.cat_c.name}"
title=''           
>
{if isset($fields.cat_c.value) && $fields.cat_c.value != ''}
{html_options options=$fields.cat_c.options selected=$fields.cat_c.value}
{else}
{html_options options=$fields.cat_c.options selected=$fields.cat_c.default}
{/if}
</select>
<script type="text/javascript">
    if(typeof de_entries == 'undefined'){literal}{var de_entries = new Array;}{/literal}
    var el = document.getElementById("product_type_c");
    addLoadEvent(function(){literal}{loadDynamicEnum({/literal}"product_type_c","{$fields.cat_c.name}"{literal})}{/literal});
    if (SUGAR.ajaxUI && SUGAR.ajaxUI.hist_loaded) {literal}{loadDynamicEnum({/literal}"product_type_c","{$fields.cat_c.name}"{literal})}{/literal}
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SUBCATEGORY">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SUBCATEGORY' module='Cases'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="dynamicenum" field="subcategory_c"  >
{counter name="panelFieldCount" print=false}

<script type="text/javascript" src='{sugar_getjspath file="include/SugarFields/Fields/Dynamicenum/SugarFieldDynamicenum.js"}'></script>
<select name="{$fields.subcategory_c.name}"
id="{$fields.subcategory_c.name}"
title=''           
>
{if isset($fields.subcategory_c.value) && $fields.subcategory_c.value != ''}
{html_options options=$fields.subcategory_c.options selected=$fields.subcategory_c.value}
{else}
{html_options options=$fields.subcategory_c.options selected=$fields.subcategory_c.default}
{/if}
</select>
<script type="text/javascript">
    if(typeof de_entries == 'undefined'){literal}{var de_entries = new Array;}{/literal}
    var el = document.getElementById("cat_c");
    addLoadEvent(function(){literal}{loadDynamicEnum({/literal}"cat_c","{$fields.subcategory_c.name}"{literal})}{/literal});
    if (SUGAR.ajaxUI && SUGAR.ajaxUI.hist_loaded) {literal}{loadDynamicEnum({/literal}"cat_c","{$fields.subcategory_c.name}"{literal})}{/literal}
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SOURCE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SOURCE' module='Cases'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="source"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.source.name}"
id="{$fields.source.name}"
title=''              
>
{if isset($fields.source.value) && $fields.source.value != ''}
{html_options options=$fields.source.options selected=$fields.source.value}
{else}
{html_options options=$fields.source.options selected=$fields.source.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SERVICE_PERSONA">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SERVICE_PERSONA' module='Cases'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="service_persona_c"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.service_persona_c.name}"
id="{$fields.service_persona_c.name}"
title=''              
>
{if isset($fields.service_persona_c.value) && $fields.service_persona_c.value != ''}
{html_options options=$fields.service_persona_c.options selected=$fields.service_persona_c.value}
{else}
{html_options options=$fields.service_persona_c.options selected=$fields.service_persona_c.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_AGENT_OUTLET">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_AGENT_OUTLET' module='Cases'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="agent_outlet_c"  >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.agent_outlet_c.name}" class="sqsEnabled" tabindex="0" id="{$fields.agent_outlet_c.name}" size="" value="{$fields.agent_outlet_c.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.agent_outlet_c.id_name}" 
id="{$fields.agent_outlet_c.id_name}" 
value="{$fields.contact_id_c.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.agent_outlet_c.name}" id="btn_{$fields.agent_outlet_c.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_CONTACTS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_CONTACTS_LABEL"}"
onclick='open_popup(
"{$fields.agent_outlet_c.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_Cases","field_to_name_array":{"id":"contact_id_c","name":"agent_outlet_c"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.agent_outlet_c.name}" id="btn_clr_{$fields.agent_outlet_c.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.agent_outlet_c.name}', '{$fields.agent_outlet_c.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.agent_outlet_c.name}']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_AMOUNT_DISPUT">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_AMOUNT_DISPUT' module='Cases'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="amount_disput_c"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.amount_disput_c.value) <= 0}
{assign var="value" value=$fields.amount_disput_c.default_value }
{else}
{assign var="value" value=$fields.amount_disput_c.value }
{/if}
<input type='text' name='{$fields.amount_disput_c.name}'
id='{$fields.amount_disput_c.name}' size='30'
maxlength='255'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ACCOUNT_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_ACCOUNT_NAME' module='Cases'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="account_name"  >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.account_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.account_name.name}" size="" value="{$fields.account_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.account_name.id_name}" 
id="{$fields.account_name.id_name}" 
value="{$fields.account_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.account_name.name}" id="btn_{$fields.account_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL"}"
onclick='open_popup(
"{$fields.account_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_Cases","field_to_name_array":{"id":"account_id","name":"account_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.account_name.name}" id="btn_clr_{$fields.account_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.account_name.name}', '{$fields.account_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.account_name.name}']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ASSIGNED_TO_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Cases'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="assigned_user_name"  >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.assigned_user_name.name}" size="" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" 
id="{$fields.assigned_user_name.id_name}" 
value="{$fields.assigned_user_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.assigned_user_name.name}" id="btn_{$fields.assigned_user_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_LABEL"}"
onclick='open_popup(
"{$fields.assigned_user_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_Cases","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.assigned_user_name.name}" id="btn_clr_{$fields.assigned_user_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.assigned_user_name.name}', '{$fields.assigned_user_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.assigned_user_name.name}']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_CHOOSE_FILE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_CHOOSE_FILE' module='Cases'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="multifile" field="choose_file_c"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.choose_file_c.value) <= 0}
{assign var="value" value=$fields.choose_file_c.default_value }
{else}
{assign var="value" value=$fields.choose_file_c.value }
{/if}
<input type='text' name='{$fields.choose_file_c.name}'
id='{$fields.choose_file_c.name}' size='30'
maxlength='255'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_DESCRIPTION">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Cases'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="description" colspan='3' >
{counter name="panelFieldCount" print=false}

{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}
<textarea  id='{$fields.description.name}' name='{$fields.description.name}'
    rows="6"
    cols="80"
    title='' tabindex="0" 
     >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_RESOLUTION">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_RESOLUTION' module='Cases'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="resolution"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.resolution.value)}
{assign var="value" value=$fields.resolution.default_value }
{else}
{assign var="value" value=$fields.resolution.value }
{/if}
<textarea  id='{$fields.resolution.name}' name='{$fields.resolution.name}'
    rows="6"
    cols="80"
    title='' tabindex="0" 
     >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_UPDATE_INFO">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_UPDATE_INFO' module='Cases'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="update_info_c"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.update_info_c.value)}
{assign var="value" value=$fields.update_info_c.default_value }
{else}
{assign var="value" value=$fields.update_info_c.value }
{/if}
<textarea  id='{$fields.update_info_c.name}' name='{$fields.update_info_c.name}'
    rows="4"
    cols="60"
    title='' tabindex="0" 
     >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_CREATED">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_CREATED' module='Cases'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="created_by_name"  >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.created_by_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.created_by_name.name}" size="" value="{$fields.created_by_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.created_by_name.id_name}" 
id="{$fields.created_by_name.id_name}" 
value="{$fields.created_by.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.created_by_name.name}" id="btn_{$fields.created_by_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_LABEL"}"
onclick='open_popup(
"{$fields.created_by_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_Cases","field_to_name_array":{"id":"created_by","user_name":"created_by_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.created_by_name.name}" id="btn_clr_{$fields.created_by_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.created_by_name.name}', '{$fields.created_by_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.created_by_name.name}']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DATE_ENTERED">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='Cases'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="datetime" field="date_entered"  >
{counter name="panelFieldCount" print=false}


{if !empty($vardef.date_formatted_value) }
{assign var="value" value={$vardef.date_formatted_value} }
{else}
{if strlen($fields.date_entered.value) <= 0}
{assign var="value" value=$fields.date_entered.default_value }
{else}
{assign var="value" value=$fields.date_entered.value }
{/if}
{/if}
<span class="sugar_field" id="{$fields.date_entered.name}">{$value}</span>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>
</div>
</div>

<script language="javascript">
    var _form_id = '{$form_id}';
    {literal}
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
{assign var='place' value="_FOOTER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Cases'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_Cases'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'Cases_subpanel_save_button');return false;" type="submit" name="Cases_subpanel_save_button" id="Cases_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="Cases_subpanel_cancel_button" id="Cases_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Cases'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="Cases_subpanel_full_form_button" id="Cases_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form">
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Cases", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("form_SubpanelQuickCreate_Cases",
    function () {ldelim} initEditView(document.forms.form_SubpanelQuickCreate_Cases) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {ldelim}
$(document).ready(function() {ldelim}
    $(".collapseLink,.expandLink").click(function (e) {ldelim} e.preventDefault(); {rdelim});
  {rdelim});
{rdelim}
</script>
{literal}
<script type="text/javascript">

    var selectTab = function(tab) {
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
        $('#EditView_tabs div.panel-content div.panel').hide();
        $('#EditView_tabs div.panel-content div.panel.tab-panel-' + tab).show()
    };

    var selectTabOnError = function(tab) {
        selectTab(tab);
        $('#EditView_tabs ul.nav.nav-tabs li').removeClass('active');
        $('#EditView_tabs ul.nav.nav-tabs li a').css('color', '');

        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).find('a').first().css('color', 'red');
        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).addClass('active');

    };

    var selectTabOnErrorInputHandle = function(inputHandle) {
        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^tab-content-(.*)$/)[1];
        selectTabOnError(tab);
    };


    $(function(){
        $('#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]').click(function(e){
            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(.)*$/)[1]);
                selectTab(tab);
            }
        });

        $('a[data-toggle="collapse-edit"]').click(function(e){
            if($(this).hasClass('collapsed')) {
              // Expand panel
                // Change style of .panel-header
                $(this).removeClass('collapsed');
                // Expand .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').addClass('in');
            } else {
              // Collapse panel
                // Change style of .panel-header
                $(this).addClass('collapsed');
                // Collapse .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').removeClass('in');
            }
        });
    });

    </script>
{/literal}{literal}
<script type="text/javascript">
addForm('form_SubpanelQuickCreate_Cases');addToValidate('form_SubpanelQuickCreate_Cases', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_SUBJECT' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('form_SubpanelQuickCreate_Cases', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('form_SubpanelQuickCreate_Cases', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'case_number', 'int', true,'{/literal}{sugar_translate label='LBL_NUMBER' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'type', 'enum', false,'{/literal}{sugar_translate label='LBL_TYPE' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'status', 'dynamicenum', false,'{/literal}{sugar_translate label='LBL_STATUS' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'priority', 'enum', false,'{/literal}{sugar_translate label='LBL_PRIORITY' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'resolution', 'text', false,'{/literal}{sugar_translate label='LBL_RESOLUTION' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'work_log', 'text', false,'{/literal}{sugar_translate label='LBL_WORK_LOG' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'suggestion_box', 'readonly', false,'{/literal}{sugar_translate label='LBL_SUGGESTION_BOX' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'account_name', 'relate', true,'{/literal}{sugar_translate label='LBL_ACCOUNT_NAME' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'account_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_ID' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'state', 'enum', false,'{/literal}{sugar_translate label='LBL_STATE' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'case_attachments_display', 'function', false,'{/literal}{sugar_translate label='LBL_CASE_ATTACHMENTS_DISPLAY' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'case_update_form', 'function', false,'{/literal}{sugar_translate label='LBL_CASE_UPDATE_FORM' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'contact_created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CONTACT_CREATED_BY_NAME' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'contact_created_by_id', 'id', false,'{/literal}{sugar_translate label='LBL_CONTACT_CREATED_BY_ID' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'update_text', 'text', false,'{/literal}{sugar_translate label='LBL_UPDATE_TEXT' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'internal', 'bool', false,'{/literal}{sugar_translate label='LBL_INTERNAL' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'aop_case_updates_threaded', 'function', false,'{/literal}{sugar_translate label='LBL_AOP_CASE_UPDATES_THREADED' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'source', 'enum', false,'{/literal}{sugar_translate label='LBL_SOURCE' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'jjwg_maps_address_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_ADDRESS' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'amount_disput_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_AMOUNT_DISPUT' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'update_info_c', 'text', false,'{/literal}{sugar_translate label='LBL_UPDATE_INFO' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'jjwg_maps_lat_c', 'float', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_LAT' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'jjwg_maps_geocode_status_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_GEOCODE_STATUS' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'sec_upload_c', 'image', false,'{/literal}{sugar_translate label='LBL_SEC_UPLOAD' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'agent_outlet_c', 'relate', false,'{/literal}{sugar_translate label='LBL_AGENT_OUTLET' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'cat_c', 'dynamicenum', false,'{/literal}{sugar_translate label='LBL_CAT' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'jjwg_maps_lng_c', 'float', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_LNG' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'choose_file_c', 'multifile', false,'{/literal}{sugar_translate label='LBL_CHOOSE_FILE' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'save_question_c', 'text', false,'{/literal}{sugar_translate label='LBL_SAVE_QUESTION' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'contact_id_c', 'id', false,'{/literal}{sugar_translate label='LBL_AGENT_OUTLET_CONTACT_ID' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'source_email_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_SOURCE_EMAIL' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'subcategory_c', 'dynamicenum', false,'{/literal}{sugar_translate label='LBL_SUBCATEGORY' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'upload_c', 'image', false,'{/literal}{sugar_translate label='LBL_UPLOAD' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'escalate_c', 'enum', false,'{/literal}{sugar_translate label='LBL_ESCALATE' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'service_interest_c', 'enum', false,'{/literal}{sugar_translate label='LBL_SERVICE_INTEREST' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'service_chanel_c', 'enum', false,'{/literal}{sugar_translate label='LBL_SERVICE_CHANEL' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'email_source_c', 'enum', false,'{/literal}{sugar_translate label='LBL_EMAIL_SOURCE' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'category_c', 'enum', false,'{/literal}{sugar_translate label='LBL_CATEGORY' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'product_type_c', 'enum', false,'{/literal}{sugar_translate label='LBL_PRODUCT_TYPE' module='Cases' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Cases', 'service_persona_c', 'enum', false,'{/literal}{sugar_translate label='LBL_SERVICE_PERSONA' module='Cases' for_js=true}{literal}' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_Cases', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Cases' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Cases' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_Cases', 'created_by_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Cases' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_CREATED' module='Cases' for_js=true}{literal}', 'created_by' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_Cases', 'account_name', 'alpha', true,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Cases' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ACCOUNT_NAME' module='Cases' for_js=true}{literal}', 'account_id' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_Cases', 'agent_outlet_c', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Cases' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_AGENT_OUTLET' module='Cases' for_js=true}{literal}', 'contact_id_c' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['form_SubpanelQuickCreate_Cases_agent_outlet_c']={"form":"form_SubpanelQuickCreate_Cases","method":"query","modules":["Contacts"],"group":"or","field_list":["name","id"],"populate_list":["agent_outlet_c","contact_id_c"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['form_SubpanelQuickCreate_Cases_account_name']={"form":"form_SubpanelQuickCreate_Cases","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["form_SubpanelQuickCreate_Cases_account_name","account_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["account_id"],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['form_SubpanelQuickCreate_Cases_assigned_user_name']={"form":"form_SubpanelQuickCreate_Cases","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['form_SubpanelQuickCreate_Cases_created_by_name']={"form":"form_SubpanelQuickCreate_Cases","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name","created_by"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>{/literal}
