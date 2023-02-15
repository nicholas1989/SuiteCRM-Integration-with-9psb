

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
{$PAGINATION}
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
<input type="hidden" name="searchField" value="">   
<input type="hidden" id="origin_id" name="origin_id" value="{$smarty.request.origin_id}">   
<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=InboundEmail'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
<input title="{$MOD.LBL_TEST_BUTTON_TITLE}" 
type="button" class="button" id="emailTestSettings" onClick="testInboundConfiguration()" name="button" value="{$MOD.LBL_TEST_CONNECTION_SETTINGS}" //>
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=InboundEmail", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
{$PAGINATION}
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
{sugar_translate label='DEFAULT' module='InboundEmail'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_TYPE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_TYPE' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="type" colspan='3' >
{counter name="panelFieldCount" print=false}

<input type="hidden" class="sugar_field" id="{$fields.type.name}" name="{$fields.type.name}" value="{ $fields.type.value }">
{ $fields.type.options[$fields.type.value]}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="name"  >
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


<div class="col-xs-12 col-sm-4 label" data-label="LBL_STATUS">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="status"  >
{counter name="panelFieldCount" print=false}

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
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_OWNER_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_OWNER_NAME' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="owner_name" colspan='3' >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.owner_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.owner_name.name}" size="" value="{$fields.owner_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.owner_name.id_name}" 
id="{$fields.owner_name.id_name}" 
value="{$fields.created_by.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.owner_name.name}" id="btn_{$fields.owner_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_LABEL"}"
onclick='open_popup(
"{$fields.owner_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"created_by","name":"owner_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.owner_name.name}" id="btn_clr_{$fields.owner_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.owner_name.name}', '{$fields.owner_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.owner_name.name}']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_CONNECTION_CONFIGURATION' module='InboundEmail'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_0" data-id="LBL_CONNECTION_CONFIGURATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_AUTH_TYPE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_AUTH_TYPE' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="auth_type"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.auth_type.name}"
id="{$fields.auth_type.name}"
title=''              
>
{if isset($fields.auth_type.value) && $fields.auth_type.value != ''}
{html_options options=$fields.auth_type.options selected=$fields.auth_type.value}
{else}
{html_options options=$fields.auth_type.options selected=$fields.auth_type.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_EXTERNAL_OAUTH_CONNECTION_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_EXTERNAL_OAUTH_CONNECTION_NAME' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="external_oauth_connection_name"  >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.external_oauth_connection_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.external_oauth_connection_name.name}" size="" value="{$fields.external_oauth_connection_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.external_oauth_connection_name.id_name}" 
id="{$fields.external_oauth_connection_name.id_name}" 
value="{$fields.external_oauth_connection_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.external_oauth_connection_name.name}" id="btn_{$fields.external_oauth_connection_name.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.external_oauth_connection_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"external_oauth_connection_id","name":"external_oauth_connection_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.external_oauth_connection_name.name}" id="btn_clr_{$fields.external_oauth_connection_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.external_oauth_connection_name.name}', '{$fields.external_oauth_connection_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.external_oauth_connection_name.name}']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SERVER_URL">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SERVER_URL' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="server_url"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.server_url.value) <= 0}
{assign var="value" value=$fields.server_url.default_value }
{else}
{assign var="value" value=$fields.server_url.value }
{/if}
<input type='text' name='{$fields.server_url.name}'
id='{$fields.server_url.name}' size='30'
maxlength='100'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_LOGIN">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_LOGIN' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="email_user"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.email_user.value) <= 0}
{assign var="value" value=$fields.email_user.default_value }
{else}
{assign var="value" value=$fields.email_user.value }
{/if}
<input type='text' name='{$fields.email_user.name}'
id='{$fields.email_user.name}' size='30'
maxlength='100'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PROTOCOL">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_PROTOCOL' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="protocol"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.protocol.name}"
id="{$fields.protocol.name}"
title=''              
>
{if isset($fields.protocol.value) && $fields.protocol.value != ''}
{html_options options=$fields.protocol.options selected=$fields.protocol.value}
{else}
{html_options options=$fields.protocol.options selected=$fields.protocol.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PASSWORD">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_PASSWORD' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="password" field="email_password"  >
{counter name="panelFieldCount" print=false}

<input type='password'
id='{$fields.email_password.name}'
name='{$fields.email_password.name}'
size='35'
placeholder="{if !empty($fields.email_password.value)}{sugar_translate label='LBL_PASSWORD_SET_NEW_VALUE_TO_RESET'}{/if}"
data-is-value-set="{if !empty($fields.email_password.value)}true{else}false{/if}"
value=''
title=''
tabindex='0'
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SERVER_PORT">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SERVER_PORT' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="int" field="port"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.port.value) <= 0}
{assign var="value" value=$fields.port.default_value }
{else}
{assign var="value" value=$fields.port.value }
{/if}  
<input type='text' name='{$fields.port.name}' 
id='{$fields.port.name}' size='30' maxlength='5' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'    >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_MAILBOX">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_MAILBOX' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="mailbox"  >
{counter name="panelFieldCount"  print=false}
<div style="display: flex; align-items:baseline;"><input tabindex="0"  id="mailbox" name="mailbox" tabindex="90" size="30" maxlength="500" type="text" value="{$fields.mailbox.value}"/> <input tabindex="0"  type="button" id="subscribeFolderButton" class="button" onclick="openMailboxPopup()" value="{$MOD.LBL_SELECT}"/></div>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SSL">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SSL' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="bool" field="is_ssl"  >
{counter name="panelFieldCount" print=false}

{if strval($fields.is_ssl.value) == "1" || strval($fields.is_ssl.value) == "yes" || strval($fields.is_ssl.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.is_ssl.name}" value="0"> 
<input type="checkbox" id="{$fields.is_ssl.name}" 
name="{$fields.is_ssl.name}" 
value="1" title='' tabindex="0" {$checked} >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TRASH_FOLDER">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_TRASH_FOLDER' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="trashFolder"  >
{counter name="panelFieldCount"  print=false}
<div style="display: flex; align-items:baseline;"><input tabindex="0"  name="trashFolder" id="trashFolder" tabindex="92" value="{$fields.trashFolder.value}" size='30' maxlength='100' type="text"/> <input tabindex="0"  type="button" id="trashFolderButton" class="button" onclick="openTrashMailboxPopup()" value="{$MOD.LBL_SELECT}"/></div>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_CONNECTION_STRING">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_CONNECTION_STRING' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="connection_string"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.connection_string.value) <= 0}
{assign var="value" value=$fields.connection_string.default_value }
{else}
{assign var="value" value=$fields.connection_string.value }
{/if}
<input type='text' name='{$fields.connection_string.name}'
id='{$fields.connection_string.name}' size='30'
placeholder="Optional. Set to use a specific connection string"    value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SENT_FOLDER">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SENT_FOLDER' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="sentFolder"  >
{counter name="panelFieldCount"  print=false}
<div style="display: flex; align-items:baseline;"><input tabindex="0"  id="sentFolder" name="sentFolder" tabindex="95" size="30" maxlength="100" type="text" value="{$fields.sentFolder.value}"/> <input tabindex="0"  type="button" id="sentFolderButton" class="button" onclick="openSentMailboxPopup()" value="{$MOD.LBL_SELECT}"/></div>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_OUTBOUND_CONFIGURATION' module='InboundEmail'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_1" data-id="LBL_OUTBOUND_CONFIGURATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_OUTBOUND_EMAIL_ACCOUNT_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="outbound_email_name"  >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.outbound_email_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.outbound_email_name.name}" size="" value="{$fields.outbound_email_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.outbound_email_name.id_name}" 
id="{$fields.outbound_email_name.id_name}" 
value="{$fields.outbound_email_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.outbound_email_name.name}" id="btn_{$fields.outbound_email_name.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.outbound_email_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"outbound_email_id","name":"outbound_email_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.outbound_email_name.name}" id="btn_clr_{$fields.outbound_email_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.outbound_email_name.name}', '{$fields.outbound_email_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.outbound_email_name.name}']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SIGNATURE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SIGNATURE' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="account_signature_id"  >
{counter name="panelFieldCount" print=false}
<span id='account_signature_id_span'>
{$fields.account_signature_id.value}</span>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_ALLOW_OUTBOUND_GROUP_USAGE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_ALLOW_OUTBOUND_GROUP_USAGE' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="bool" field="allow_outbound_group_usage" colspan='3' >
{counter name="panelFieldCount" print=false}

{if strval($fields.allow_outbound_group_usage.value) == "1" || strval($fields.allow_outbound_group_usage.value) == "yes" || strval($fields.allow_outbound_group_usage.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.allow_outbound_group_usage.name}" value="0"> 
<input type="checkbox" id="{$fields.allow_outbound_group_usage.name}" 
name="{$fields.allow_outbound_group_usage.name}" 
value="1" title='' tabindex="0" {$checked} >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FROM_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_FROM_NAME' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="from_name"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.from_name.value) <= 0}
{assign var="value" value=$fields.from_name.default_value }
{else}
{assign var="value" value=$fields.from_name.value }
{/if}
<input type='text' name='{$fields.from_name.name}'
id='{$fields.from_name.name}' size='30'
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_REPLY_TO_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_REPLY_TO_NAME' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="reply_to_name"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.reply_to_name.value) <= 0}
{assign var="value" value=$fields.reply_to_name.default_value }
{else}
{assign var="value" value=$fields.reply_to_name.value }
{/if}
<input type='text' name='{$fields.reply_to_name.name}'
id='{$fields.reply_to_name.name}' size='30'
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FROM_ADDR">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_FROM_ADDR' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="from_addr"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.from_addr.value) <= 0}
{assign var="value" value=$fields.from_addr.default_value }
{else}
{assign var="value" value=$fields.from_addr.value }
{/if}
<input type='text' name='{$fields.from_addr.name}'
id='{$fields.from_addr.name}' size='30'
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_REPLY_TO_ADDR">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_REPLY_TO_ADDR' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="reply_to_addr"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.reply_to_addr.value) <= 0}
{assign var="value" value=$fields.reply_to_addr.default_value }
{else}
{assign var="value" value=$fields.reply_to_addr.value }
{/if}
<input type='text' name='{$fields.reply_to_addr.name}'
id='{$fields.reply_to_addr.name}' size='30'
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_AUTO_REPLY_CONFIGURATION' module='InboundEmail'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_2" data-id="LBL_AUTO_REPLY_CONFIGURATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FILTER_DOMAIN">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_FILTER_DOMAIN' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="filter_domain"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.filter_domain.value) <= 0}
{assign var="value" value=$fields.filter_domain.default_value }
{else}
{assign var="value" value=$fields.filter_domain.value }
{/if}
<input type='text' name='{$fields.filter_domain.name}'
id='{$fields.filter_domain.name}' size='30'
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="autoreply_email_template_name"  >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.autoreply_email_template_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.autoreply_email_template_name.name}" size="" value="{$fields.autoreply_email_template_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.autoreply_email_template_name.id_name}" 
id="{$fields.autoreply_email_template_name.id_name}" 
value="{$fields.template_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.autoreply_email_template_name.name}" id="btn_{$fields.autoreply_email_template_name.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.autoreply_email_template_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"template_id","name":"autoreply_email_template_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.autoreply_email_template_name.name}" id="btn_clr_{$fields.autoreply_email_template_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.autoreply_email_template_name.name}', '{$fields.autoreply_email_template_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.autoreply_email_template_name.name}']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_MAX_AUTO_REPLIES">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_MAX_AUTO_REPLIES' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="int" field="email_num_autoreplies_24_hours"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.email_num_autoreplies_24_hours.value) <= 0}
{assign var="value" value=$fields.email_num_autoreplies_24_hours.default_value }
{else}
{assign var="value" value=$fields.email_num_autoreplies_24_hours.value }
{/if}  
<input type='text' name='{$fields.email_num_autoreplies_24_hours.name}' 
id='{$fields.email_num_autoreplies_24_hours.name}' size='30'  value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'    >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_GROUP_CONFIGURATION' module='InboundEmail'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_3" data-id="LBL_GROUP_CONFIGURATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ENABLE_AUTO_IMPORT">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_ENABLE_AUTO_IMPORT' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="bool" field="is_auto_import"  >
{counter name="panelFieldCount" print=false}

{if strval($fields.is_auto_import.value) == "1" || strval($fields.is_auto_import.value) == "yes" || strval($fields.is_auto_import.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.is_auto_import.name}" value="0"> 
<input type="checkbox" id="{$fields.is_auto_import.name}" 
name="{$fields.is_auto_import.name}" 
value="1" title='' tabindex="0" {$checked} >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="bool" field="move_messages_to_trash_after_import"  >
{counter name="panelFieldCount" print=false}

{if strval($fields.move_messages_to_trash_after_import.value) == "1" || strval($fields.move_messages_to_trash_after_import.value) == "yes" || strval($fields.move_messages_to_trash_after_import.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.move_messages_to_trash_after_import.name}" value="0"> 
<input type="checkbox" id="{$fields.move_messages_to_trash_after_import.name}" 
name="{$fields.move_messages_to_trash_after_import.name}" 
value="1" title='' tabindex="0" {$checked} >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_CASE_CONFIGURATION' module='InboundEmail'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_4" data-id="LBL_CASE_CONFIGURATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_CREATE_CASE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_CREATE_CASE' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="bool" field="is_create_case" colspan='3' >
{counter name="panelFieldCount" print=false}

{if strval($fields.is_create_case.value) == "1" || strval($fields.is_create_case.value) == "yes" || strval($fields.is_create_case.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.is_create_case.name}" value="0"> 
<input type="checkbox" id="{$fields.is_create_case.name}" 
name="{$fields.is_create_case.name}" 
value="1" title='' tabindex="0" {$checked} >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_CASE_EMAIL_TEMPLATE_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_CASE_EMAIL_TEMPLATE_NAME' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="create_case_email_template_name"  >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.create_case_email_template_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.create_case_email_template_name.name}" size="" value="{$fields.create_case_email_template_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.create_case_email_template_name.id_name}" 
id="{$fields.create_case_email_template_name.id_name}" 
value="{$fields.create_case_template_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.create_case_email_template_name.name}" id="btn_{$fields.create_case_email_template_name.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.create_case_email_template_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"create_case_template_id","name":"create_case_email_template_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.create_case_email_template_name.name}" id="btn_clr_{$fields.create_case_email_template_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.create_case_email_template_name.name}', '{$fields.create_case_email_template_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.create_case_email_template_name.name}']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DISTRIB_METHOD">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DISTRIB_METHOD' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="distrib_method"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.distrib_method.name}"
id="{$fields.distrib_method.name}"
title=''              
>
{if isset($fields.distrib_method.value) && $fields.distrib_method.value != ''}
{html_options options=$fields.distrib_method.options selected=$fields.distrib_method.value}
{else}
{html_options options=$fields.distrib_method.options selected=$fields.distrib_method.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DISTRIB_OPTIONS">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DISTRIB_OPTIONS' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="function" field="distribution_options"  >
{counter name="panelFieldCount" print=false}
<span id='distribution_options_span'>
{$fields.distribution_options.value}</span>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DISTRIBUTION_USER_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DISTRIBUTION_USER_NAME' module='InboundEmail'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="distribution_user_name"  >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.distribution_user_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.distribution_user_name.name}" size="" value="{$fields.distribution_user_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.distribution_user_name.id_name}" 
id="{$fields.distribution_user_name.id_name}" 
value="{$fields.distribution_user_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.distribution_user_name.name}" id="btn_{$fields.distribution_user_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_LABEL"}"
onclick='open_popup(
"{$fields.distribution_user_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"distribution_user_id","name":"distribution_user_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.distribution_user_name.name}" id="btn_clr_{$fields.distribution_user_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.distribution_user_name.name}', '{$fields.distribution_user_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.distribution_user_name.name}']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>                    </div>
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
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=InboundEmail'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
<input title="{$MOD.LBL_TEST_BUTTON_TITLE}" 
type="button" class="button" id="emailTestSettings" onClick="testInboundConfiguration()" name="button" value="{$MOD.LBL_TEST_CONNECTION_SETTINGS}" //>
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=InboundEmail", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<!-- Begin Meta-Data Javascript -->
{sugar_getscript file="modules/InboundEmail/InboundEmail.js"}
<script type="text/javascript">
                    {literal}var userService = function() { return { isAdmin: function() { return {/literal}{if $is_admin}true{else}false{/if}{literal};}}}();{/literal}
                    {suite_combinescripts
                        files="modules/InboundEmail/js/fields.js,
                               modules/InboundEmail/js/case_create_toggle.js,
                               modules/InboundEmail/js/distribution_toggle.js,
                               modules/InboundEmail/js/mail_folders.js,
                               modules/InboundEmail/js/ssl_port_set.js,
                               modules/InboundEmail/js/fields_toggle.js,
                               modules/InboundEmail/js/auth_type_fields_toggle.js,
                               modules/InboundEmail/js/owner_toggle.js,
                               modules/InboundEmail/js/test_configuration.js,
                               modules/InboundEmail/js/panel_toggle.js"}
                </script>
<!-- End Meta-Data Javascript -->
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () {ldelim} initEditView(document.forms.EditView) {rdelim});
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
addForm('EditView');addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', true,'Date Created' );
addToValidate('EditView', 'date_modified_date', 'date', true,'Date Modified' );
addToValidate('EditView', 'modified_user_id', 'modified_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_BY' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'owner_name', 'relate', false,'{/literal}{sugar_translate label='LBL_OWNER_NAME' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'name', 'varchar', true,'{/literal}{sugar_translate label='LBL_NAME' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'status', 'enum', true,'{/literal}{sugar_translate label='LBL_STATUS' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'server_url', 'varchar', true,'{/literal}{sugar_translate label='LBL_SERVER_URL' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'connection_string', 'varchar', false,'{/literal}{sugar_translate label='LBL_CONNECTION_STRING' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'email_user', 'varchar', true,'{/literal}{sugar_translate label='LBL_LOGIN' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'email_password', 'password', false,'{/literal}{sugar_translate label='LBL_PASSWORD' module='InboundEmail' for_js=true}{literal}' );
addToValidateRange('EditView', 'port', 'int', true, '{/literal}{sugar_translate label='LBL_SERVER_PORT' module='InboundEmail' for_js=true}{literal}', 110, 65535);
addToValidate('EditView', 'service', 'varchar', true,'{/literal}{sugar_translate label='LBL_SERVICE' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'mailbox', 'text', true,'{/literal}{sugar_translate label='LBL_MAILBOX' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'sentFolder', 'varchar', false,'{/literal}{sugar_translate label='LBL_SENT_FOLDER' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'trashFolder', 'varchar', false,'{/literal}{sugar_translate label='LBL_TRASH_FOLDER' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'delete_seen', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETE_SEEN' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'move_messages_to_trash_after_import', 'bool', false,'{/literal}{sugar_translate label='LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'mailbox_type', 'varchar', false,'{/literal}{sugar_translate label='LBL_MAILBOX_TYPE' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'template_id', 'id', false,'{/literal}{sugar_translate label='LBL_AUTOREPLY' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'stored_options', 'text', false,'{/literal}{sugar_translate label='LBL_STORED_OPTIONS' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'group_id', 'id', false,'{/literal}{sugar_translate label='LBL_GROUP_ID' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'is_personal', 'bool', true,'{/literal}{sugar_translate label='LBL_IS_PERSONAL' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'groupfolder_id', 'id', false,'{/literal}{sugar_translate label='LBL_GROUPFOLDER_ID' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'type', 'enum', false,'{/literal}{sugar_translate label='LBL_TYPE' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'auth_type', 'enum', false,'{/literal}{sugar_translate label='LBL_AUTH_TYPE' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'protocol', 'enum', false,'{/literal}{sugar_translate label='LBL_PROTOCOL' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'is_ssl', 'bool', false,'{/literal}{sugar_translate label='LBL_SSL' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'is_default', 'bool', false,'{/literal}{sugar_translate label='LBL_IS_DEFAULT' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'from_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_FROM_NAME' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'from_addr', 'varchar', false,'{/literal}{sugar_translate label='LBL_FROM_ADDR' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'reply_to_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_REPLY_TO_NAME' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'reply_to_addr', 'varchar', false,'{/literal}{sugar_translate label='LBL_REPLY_TO_ADDR' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'account_signature_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_SIGNATURE' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'filter_domain', 'varchar', false,'{/literal}{sugar_translate label='LBL_FILTER_DOMAIN' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'email_num_autoreplies_24_hours', 'int', false,'{/literal}{sugar_translate label='LBL_MAX_AUTO_REPLIES' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'is_auto_import', 'bool', false,'{/literal}{sugar_translate label='LBL_ENABLE_AUTO_IMPORT' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'is_create_case', 'bool', false,'{/literal}{sugar_translate label='LBL_CREATE_CASE' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'allow_outbound_group_usage', 'bool', false,'{/literal}{sugar_translate label='LBL_ALLOW_OUTBOUND_GROUP_USAGE' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'distrib_method', 'enum', false,'{/literal}{sugar_translate label='LBL_DISTRIB_METHOD' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'distribution_options', 'function', false,'{/literal}{sugar_translate label='LBL_DISTRIB_OPTIONS' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'distribution_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_DISTRIBUTION_USER_ID' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'distribution_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_DISTRIBUTION_USER_NAME' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'outbound_email_id', 'relate', false,'{/literal}{sugar_translate label='LBL_OUTBOUND_EMAIL_ACCOUNT_ID' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'outbound_email_name', 'relate', false,'{/literal}{sugar_translate label='LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'autoreply_email_template_name', 'relate', false,'{/literal}{sugar_translate label='LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'create_case_template_id', 'relate', false,'{/literal}{sugar_translate label='LBL_CASE_EMAIL_TEMPLATE_ID' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'create_case_email_template_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CASE_EMAIL_TEMPLATE_NAME' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'external_oauth_connection_id', 'relate', false,'{/literal}{sugar_translate label='LBL_EXTERNAL_OAUTH_CONNECTION_ID' module='InboundEmail' for_js=true}{literal}' );
addToValidate('EditView', 'external_oauth_connection_name', 'relate', false,'{/literal}{sugar_translate label='LBL_EXTERNAL_OAUTH_CONNECTION_NAME' module='InboundEmail' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='InboundEmail' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='InboundEmail' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'owner_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='InboundEmail' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_OWNER_NAME' module='InboundEmail' for_js=true}{literal}', 'created_by' );
addToValidateBinaryDependency('EditView', 'distribution_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='InboundEmail' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_DISTRIBUTION_USER_NAME' module='InboundEmail' for_js=true}{literal}', 'distribution_user_id' );
addToValidateBinaryDependency('EditView', 'outbound_email_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='InboundEmail' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' module='InboundEmail' for_js=true}{literal}', 'outbound_email_id' );
addToValidateBinaryDependency('EditView', 'autoreply_email_template_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='InboundEmail' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' module='InboundEmail' for_js=true}{literal}', 'template_id' );
addToValidateBinaryDependency('EditView', 'create_case_email_template_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='InboundEmail' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_CASE_EMAIL_TEMPLATE_NAME' module='InboundEmail' for_js=true}{literal}', 'create_case_template_id' );
addToValidateBinaryDependency('EditView', 'external_oauth_connection_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='InboundEmail' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_EXTERNAL_OAUTH_CONNECTION_NAME' module='InboundEmail' for_js=true}{literal}', 'external_oauth_connection_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_owner_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["owner_name","created_by"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['EditView_external_oauth_connection_name']={"form":"EditView","method":"query","modules":["ExternalOAuthConnection"],"group":"or","field_list":["name","id"],"populate_list":["external_oauth_connection_name","external_oauth_connection_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['EditView_outbound_email_name']={"form":"EditView","method":"query","modules":["OutboundEmailAccounts"],"group":"or","field_list":["name","id"],"populate_list":["outbound_email_name","outbound_email_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['EditView_autoreply_email_template_name']={"form":"EditView","method":"query","modules":["EmailTemplates"],"group":"or","field_list":["name","id"],"populate_list":["autoreply_email_template_name","template_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['EditView_create_case_email_template_name']={"form":"EditView","method":"query","modules":["EmailTemplates"],"group":"or","field_list":["name","id"],"populate_list":["create_case_email_template_name","create_case_template_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['EditView_distribution_user_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["distribution_user_name","distribution_user_id"],"required_list":["distribution_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>{/literal}
