<?php /* Smarty version 2.6.33, created on 2023-06-20 19:29:50
         compiled from cache/themes/SuiteP/modules/Cases/form_SubpanelQuickCreate_Cases.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/themes/SuiteP/modules/Cases/form_SubpanelQuickCreate_Cases.tpl', 62, false),array('function', 'sugar_translate', 'cache/themes/SuiteP/modules/Cases/form_SubpanelQuickCreate_Cases.tpl', 83, false),array('function', 'counter', 'cache/themes/SuiteP/modules/Cases/form_SubpanelQuickCreate_Cases.tpl', 108, false),array('function', 'html_options', 'cache/themes/SuiteP/modules/Cases/form_SubpanelQuickCreate_Cases.tpl', 144, false),array('function', 'sugar_getjspath', 'cache/themes/SuiteP/modules/Cases/form_SubpanelQuickCreate_Cases.tpl', 204, false),array('block', 'minify', 'cache/themes/SuiteP/modules/Cases/form_SubpanelQuickCreate_Cases.tpl', 99, false),array('modifier', 'strip_semicolon', 'cache/themes/SuiteP/modules/Cases/form_SubpanelQuickCreate_Cases.tpl', 101, false),)), $this); ?>


<script>
    <?php echo '
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($(\'.edit-view-pagination\').children().length == 0) $(\'.saveAndContinue\').remove();
    });
    '; ?>

</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="<?php echo $this->_tpl_vars['form_name']; ?>
" id="<?php echo $this->_tpl_vars['form_id']; ?>
" <?php echo $this->_tpl_vars['enctype']; ?>
>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<?php if (isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true'): ?>
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php else: ?>
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php endif; ?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module']; ?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action']; ?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
<?php if (( ! empty ( $_REQUEST['return_module'] ) || ! empty ( $_REQUEST['relate_to'] ) ) && ! ( isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true' )): ?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']): ?><?php echo $_REQUEST['return_relationship']; ?>
<?php elseif ($_REQUEST['relate_to'] && empty ( $_REQUEST['from_dcmenu'] )): ?><?php echo $_REQUEST['relate_to']; ?>
<?php elseif (empty ( $this->_tpl_vars['isDCForm'] ) && empty ( $_REQUEST['from_dcmenu'] )): ?><?php echo $_REQUEST['return_module']; ?>
<?php endif; ?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<?php endif; ?>
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<?php $this->assign('place', '_HEADER'); ?> <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Cases'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_Cases'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'Cases_subpanel_save_button');return false;" type="submit" name="Cases_subpanel_save_button" id="Cases_subpanel_save_button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="Cases_subpanel_cancel_button" id="Cases_subpanel_cancel_button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_TITLE']; ?>
" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Cases'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="Cases_subpanel_full_form_button" id="Cases_subpanel_full_form_button" value="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_LABEL']; ?>
"> <input type="hidden" name="full_form" value="full_form">
<?php if ($this->_tpl_vars['showVCRControl']): ?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $this->_tpl_vars['app_strings']['LBL_SAVE_AND_CONTINUE']; ?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $this->_tpl_vars['APP']['LBL_SAVE_AND_CONTINUE']; ?>

</button>
<?php endif; ?>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Cases", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif; ?><?php endif; ?>
</div>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
</div>
</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CASE_INFORMATION','module' => 'Cases'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="LBL_CASE_INFORMATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SUBJECT">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SUBJECT','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="name"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name']['value']); ?>
<?php endif; ?>
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
'
id='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' size='30'
maxlength='255'        value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PRIORITY">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PRIORITY','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="priority"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['priority']['name']; ?>
"
id="<?php echo $this->_tpl_vars['fields']['priority']['name']; ?>
"
title=''              
>
<?php if (isset ( $this->_tpl_vars['fields']['priority']['value'] ) && $this->_tpl_vars['fields']['priority']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['priority']['options'],'selected' => $this->_tpl_vars['fields']['priority']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['priority']['options'],'selected' => $this->_tpl_vars['fields']['priority']['default']), $this);?>

<?php endif; ?>
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_STATE">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATE','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="state"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['state']['name']; ?>
"
id="<?php echo $this->_tpl_vars['fields']['state']['name']; ?>
"
title=''              
>
<?php if (isset ( $this->_tpl_vars['fields']['state']['value'] ) && $this->_tpl_vars['fields']['state']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['state']['options'],'selected' => $this->_tpl_vars['fields']['state']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['state']['options'],'selected' => $this->_tpl_vars['fields']['state']['default']), $this);?>

<?php endif; ?>
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_STATUS">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="dynamicenum" field="status"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Dynamicenum/SugarFieldDynamicenum.js"), $this);?>
'></script>
<select name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
"
id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
"
title=''           
>
<?php if (isset ( $this->_tpl_vars['fields']['status']['value'] ) && $this->_tpl_vars['fields']['status']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['default']), $this);?>

<?php endif; ?>
</select>
<script type="text/javascript">
    if(typeof de_entries == 'undefined')<?php echo '{var de_entries = new Array;}'; ?>

    var el = document.getElementById("state");
    addLoadEvent(function()<?php echo '{loadDynamicEnum('; ?>
"state","<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
"<?php echo ')}'; ?>
);
    if (SUGAR.ajaxUI && SUGAR.ajaxUI.hist_loaded) <?php echo '{loadDynamicEnum('; ?>
"state","<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
"<?php echo ')}'; ?>

</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SERVICE_CHANEL">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SERVICE_CHANEL','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="service_chanel_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['service_chanel_c']['name']; ?>
"
id="<?php echo $this->_tpl_vars['fields']['service_chanel_c']['name']; ?>
"
title=''              
>
<?php if (isset ( $this->_tpl_vars['fields']['service_chanel_c']['value'] ) && $this->_tpl_vars['fields']['service_chanel_c']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['service_chanel_c']['options'],'selected' => $this->_tpl_vars['fields']['service_chanel_c']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['service_chanel_c']['options'],'selected' => $this->_tpl_vars['fields']['service_chanel_c']['default']), $this);?>

<?php endif; ?>
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ESCALATE">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ESCALATE','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="escalate_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['escalate_c']['name']; ?>
"
id="<?php echo $this->_tpl_vars['fields']['escalate_c']['name']; ?>
"
title=''              
>
<?php if (isset ( $this->_tpl_vars['fields']['escalate_c']['value'] ) && $this->_tpl_vars['fields']['escalate_c']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['escalate_c']['options'],'selected' => $this->_tpl_vars['fields']['escalate_c']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['escalate_c']['options'],'selected' => $this->_tpl_vars['fields']['escalate_c']['default']), $this);?>

<?php endif; ?>
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SERVICE_INTEREST">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SERVICE_INTEREST','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="service_interest_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['service_interest_c']['name']; ?>
"
id="<?php echo $this->_tpl_vars['fields']['service_interest_c']['name']; ?>
"
title=''              
>
<?php if (isset ( $this->_tpl_vars['fields']['service_interest_c']['value'] ) && $this->_tpl_vars['fields']['service_interest_c']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['service_interest_c']['options'],'selected' => $this->_tpl_vars['fields']['service_interest_c']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['service_interest_c']['options'],'selected' => $this->_tpl_vars['fields']['service_interest_c']['default']), $this);?>

<?php endif; ?>
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PRODUCT_TYPE">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PRODUCT_TYPE','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="product_type_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['product_type_c']['name']; ?>
"
id="<?php echo $this->_tpl_vars['fields']['product_type_c']['name']; ?>
"
title=''              
>
<?php if (isset ( $this->_tpl_vars['fields']['product_type_c']['value'] ) && $this->_tpl_vars['fields']['product_type_c']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['product_type_c']['options'],'selected' => $this->_tpl_vars['fields']['product_type_c']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['product_type_c']['options'],'selected' => $this->_tpl_vars['fields']['product_type_c']['default']), $this);?>

<?php endif; ?>
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_CAT">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CAT','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="dynamicenum" field="cat_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Dynamicenum/SugarFieldDynamicenum.js"), $this);?>
'></script>
<select name="<?php echo $this->_tpl_vars['fields']['cat_c']['name']; ?>
"
id="<?php echo $this->_tpl_vars['fields']['cat_c']['name']; ?>
"
title=''           
>
<?php if (isset ( $this->_tpl_vars['fields']['cat_c']['value'] ) && $this->_tpl_vars['fields']['cat_c']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['cat_c']['options'],'selected' => $this->_tpl_vars['fields']['cat_c']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['cat_c']['options'],'selected' => $this->_tpl_vars['fields']['cat_c']['default']), $this);?>

<?php endif; ?>
</select>
<script type="text/javascript">
    if(typeof de_entries == 'undefined')<?php echo '{var de_entries = new Array;}'; ?>

    var el = document.getElementById("product_type_c");
    addLoadEvent(function()<?php echo '{loadDynamicEnum('; ?>
"product_type_c","<?php echo $this->_tpl_vars['fields']['cat_c']['name']; ?>
"<?php echo ')}'; ?>
);
    if (SUGAR.ajaxUI && SUGAR.ajaxUI.hist_loaded) <?php echo '{loadDynamicEnum('; ?>
"product_type_c","<?php echo $this->_tpl_vars['fields']['cat_c']['name']; ?>
"<?php echo ')}'; ?>

</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SUBCATEGORY">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SUBCATEGORY','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="dynamicenum" field="subcategory_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Dynamicenum/SugarFieldDynamicenum.js"), $this);?>
'></script>
<select name="<?php echo $this->_tpl_vars['fields']['subcategory_c']['name']; ?>
"
id="<?php echo $this->_tpl_vars['fields']['subcategory_c']['name']; ?>
"
title=''           
>
<?php if (isset ( $this->_tpl_vars['fields']['subcategory_c']['value'] ) && $this->_tpl_vars['fields']['subcategory_c']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['subcategory_c']['options'],'selected' => $this->_tpl_vars['fields']['subcategory_c']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['subcategory_c']['options'],'selected' => $this->_tpl_vars['fields']['subcategory_c']['default']), $this);?>

<?php endif; ?>
</select>
<script type="text/javascript">
    if(typeof de_entries == 'undefined')<?php echo '{var de_entries = new Array;}'; ?>

    var el = document.getElementById("cat_c");
    addLoadEvent(function()<?php echo '{loadDynamicEnum('; ?>
"cat_c","<?php echo $this->_tpl_vars['fields']['subcategory_c']['name']; ?>
"<?php echo ')}'; ?>
);
    if (SUGAR.ajaxUI && SUGAR.ajaxUI.hist_loaded) <?php echo '{loadDynamicEnum('; ?>
"cat_c","<?php echo $this->_tpl_vars['fields']['subcategory_c']['name']; ?>
"<?php echo ')}'; ?>

</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SOURCE">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SOURCE','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="source"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['source']['name']; ?>
"
id="<?php echo $this->_tpl_vars['fields']['source']['name']; ?>
"
title=''              
>
<?php if (isset ( $this->_tpl_vars['fields']['source']['value'] ) && $this->_tpl_vars['fields']['source']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['source']['options'],'selected' => $this->_tpl_vars['fields']['source']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['source']['options'],'selected' => $this->_tpl_vars['fields']['source']['default']), $this);?>

<?php endif; ?>
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SERVICE_PERSONA">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SERVICE_PERSONA','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="service_persona_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['service_persona_c']['name']; ?>
"
id="<?php echo $this->_tpl_vars['fields']['service_persona_c']['name']; ?>
"
title=''              
>
<?php if (isset ( $this->_tpl_vars['fields']['service_persona_c']['value'] ) && $this->_tpl_vars['fields']['service_persona_c']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['service_persona_c']['options'],'selected' => $this->_tpl_vars['fields']['service_persona_c']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['service_persona_c']['options'],'selected' => $this->_tpl_vars['fields']['service_persona_c']['default']), $this);?>

<?php endif; ?>
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_AGENT_OUTLET">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_AGENT_OUTLET','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="agent_outlet_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['agent_outlet_c']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['agent_outlet_c']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['agent_outlet_c']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['agent_outlet_c']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['agent_outlet_c']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['contact_id_c']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['agent_outlet_c']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['agent_outlet_c']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['agent_outlet_c']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_Cases","field_to_name_array":{"id":"contact_id_c","name":"agent_outlet_c"}}'; ?>
, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['agent_outlet_c']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['agent_outlet_c']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['agent_outlet_c']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['agent_outlet_c']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['agent_outlet_c']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_AMOUNT_DISPUT">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_AMOUNT_DISPUT','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="amount_disput_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['amount_disput_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['amount_disput_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['amount_disput_c']['value']); ?>
<?php endif; ?>
<input type='text' name='<?php echo $this->_tpl_vars['fields']['amount_disput_c']['name']; ?>
'
id='<?php echo $this->_tpl_vars['fields']['amount_disput_c']['name']; ?>
' size='30'
maxlength='255'        value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ACCOUNT_NAME">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="account_name"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['account_name']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['account_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['account_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['account_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['account_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_Cases","field_to_name_array":{"id":"account_id","name":"account_name"}}'; ?>
, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['account_name']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ASSIGNED_TO_NAME">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="assigned_user_name"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['assigned_user_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_USERS_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_USERS_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['assigned_user_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_Cases","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}'; ?>
, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_USERS_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_USERS_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
']) != 'undefined'",
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

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CHOOSE_FILE','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="multifile" field="choose_file_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['choose_file_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['choose_file_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['choose_file_c']['value']); ?>
<?php endif; ?>
<input type='text' name='<?php echo $this->_tpl_vars['fields']['choose_file_c']['name']; ?>
'
id='<?php echo $this->_tpl_vars['fields']['choose_file_c']['name']; ?>
' size='30'
maxlength='255'        value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_DESCRIPTION">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="description" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['description']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
'
    rows="6"
    cols="80"
    title='' tabindex="0" 
     ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_RESOLUTION">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_RESOLUTION','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="resolution"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['resolution']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['resolution']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['resolution']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['resolution']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['resolution']['name']; ?>
'
    rows="6"
    cols="80"
    title='' tabindex="0" 
     ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_UPDATE_INFO">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_UPDATE_INFO','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="update_info_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['update_info_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['update_info_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['update_info_c']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['update_info_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['update_info_c']['name']; ?>
'
    rows="4"
    cols="60"
    title='' tabindex="0" 
     ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_CREATED">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="created_by_name"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['created_by_name']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['created_by_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['created_by_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['created_by']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_USERS_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_USERS_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['created_by_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_Cases","field_to_name_array":{"id":"created_by","user_name":"created_by_name"}}'; ?>
, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_USERS_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['created_by_name']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_USERS_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DATE_ENTERED">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_ENTERED','module' => 'Cases'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="datetime" field="date_entered"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>



<?php if (! empty ( $this->_tpl_vars['vardef']['date_formatted_value'] )): ?>
<?php $this->assign('value', "{".($this->_tpl_vars['vardef']).".date_formatted_value"); ?> }
<?php else: ?>
<?php if (strlen ( $this->_tpl_vars['fields']['date_entered']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['date_entered']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['date_entered']['value']); ?>
<?php endif; ?>
<?php endif; ?>
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
"><?php echo $this->_tpl_vars['value']; ?>
</span>
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
    var _form_id = '<?php echo $this->_tpl_vars['form_id']; ?>
';
    <?php echo '
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == \'\') ? \'EditView\' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    '; ?>

</script>
<?php $this->assign('place', '_FOOTER'); ?> <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Cases'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_Cases'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'Cases_subpanel_save_button');return false;" type="submit" name="Cases_subpanel_save_button" id="Cases_subpanel_save_button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="Cases_subpanel_cancel_button" id="Cases_subpanel_cancel_button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_TITLE']; ?>
" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Cases'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="Cases_subpanel_full_form_button" id="Cases_subpanel_full_form_button" value="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_LABEL']; ?>
"> <input type="hidden" name="full_form" value="full_form">
<?php if ($this->_tpl_vars['showVCRControl']): ?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $this->_tpl_vars['app_strings']['LBL_SAVE_AND_CONTINUE']; ?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $this->_tpl_vars['APP']['LBL_SAVE_AND_CONTINUE']; ?>

</button>
<?php endif; ?>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Cases", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif; ?><?php endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("form_SubpanelQuickCreate_Cases",
    function () { initEditView(document.forms.form_SubpanelQuickCreate_Cases) });
//window.setTimeout(, 100);
window.onbeforeunload = function () { return onUnloadEditView(); };
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {
$(document).ready(function() {
    $(".collapseLink,.expandLink").click(function (e) { e.preventDefault(); });
  });
}
</script>
<?php echo '
<script type="text/javascript">

    var selectTab = function(tab) {
        $(\'#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER\').hide();
        $(\'#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER\').eq(tab).show().addClass(\'active\').addClass(\'in\');
        $(\'#EditView_tabs div.panel-content div.panel\').hide();
        $(\'#EditView_tabs div.panel-content div.panel.tab-panel-\' + tab).show()
    };

    var selectTabOnError = function(tab) {
        selectTab(tab);
        $(\'#EditView_tabs ul.nav.nav-tabs li\').removeClass(\'active\');
        $(\'#EditView_tabs ul.nav.nav-tabs li a\').css(\'color\', \'\');

        $(\'#EditView_tabs ul.nav.nav-tabs li\').eq(tab).find(\'a\').first().css(\'color\', \'red\');
        $(\'#EditView_tabs ul.nav.nav-tabs li\').eq(tab).addClass(\'active\');

    };

    var selectTabOnErrorInputHandle = function(inputHandle) {
        var tab = $(inputHandle).closest(\'.tab-pane-NOBOOTSTRAPTOGGLER\').attr(\'id\').match(/^tab-content-(.*)$/)[1];
        selectTabOnError(tab);
    };


    $(function(){
        $(\'#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]\').click(function(e){
            if(typeof $(this).parent().find(\'a\').first().attr(\'id\') != \'undefined\') {
                var tab = parseInt($(this).parent().find(\'a\').first().attr(\'id\').match(/^tab(.)*$/)[1]);
                selectTab(tab);
            }
        });

        $(\'a[data-toggle="collapse-edit"]\').click(function(e){
            if($(this).hasClass(\'collapsed\')) {
              // Expand panel
                // Change style of .panel-header
                $(this).removeClass(\'collapsed\');
                // Expand .panel-body
                $(this).parents(\'.panel\').find(\'.panel-body\').removeClass(\'in\').addClass(\'in\');
            } else {
              // Collapse panel
                // Change style of .panel-header
                $(this).addClass(\'collapsed\');
                // Collapse .panel-body
                $(this).parents(\'.panel\').find(\'.panel-body\').removeClass(\'in\').removeClass(\'in\');
            }
        });
    });

    </script>
'; ?>
<?php echo '
<script type="text/javascript">
addForm(\'form_SubpanelQuickCreate_Cases\');addToValidate(\'form_SubpanelQuickCreate_Cases\', \'name\', \'name\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SUBJECT','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'date_entered_date\', \'date\', false,\'Date Created\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'modified_user_id\', \'assigned_user_name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'modified_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'created_by\', \'assigned_user_name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'created_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'description\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'deleted\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'assigned_user_id\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'assigned_user_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'case_number\', \'int\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_NUMBER','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'type\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TYPE','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'status\', \'dynamicenum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'priority\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PRIORITY','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'resolution\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_RESOLUTION','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'work_log\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_WORK_LOG','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'suggestion_box\', \'readonly\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SUGGESTION_BOX','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'account_name\', \'relate\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'account_id\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_ID','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'state\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATE','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'case_attachments_display\', \'function\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CASE_ATTACHMENTS_DISPLAY','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'case_update_form\', \'function\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CASE_UPDATE_FORM','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'contact_created_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CONTACT_CREATED_BY_NAME','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'contact_created_by_id\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CONTACT_CREATED_BY_ID','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'update_text\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_UPDATE_TEXT','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'internal\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_INTERNAL','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'aop_case_updates_threaded\', \'function\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_AOP_CASE_UPDATES_THREADED','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'source\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SOURCE','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'jjwg_maps_address_c\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_JJWG_MAPS_ADDRESS','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'amount_disput_c\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_AMOUNT_DISPUT','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'update_info_c\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_UPDATE_INFO','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'jjwg_maps_lat_c\', \'float\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_JJWG_MAPS_LAT','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'jjwg_maps_geocode_status_c\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_JJWG_MAPS_GEOCODE_STATUS','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'sec_upload_c\', \'image\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SEC_UPLOAD','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'agent_outlet_c\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_AGENT_OUTLET','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'cat_c\', \'dynamicenum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CAT','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'jjwg_maps_lng_c\', \'float\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_JJWG_MAPS_LNG','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'choose_file_c\', \'multifile\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CHOOSE_FILE','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'save_question_c\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SAVE_QUESTION','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'contact_id_c\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_AGENT_OUTLET_CONTACT_ID','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'source_email_c\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SOURCE_EMAIL','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'subcategory_c\', \'dynamicenum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SUBCATEGORY','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'upload_c\', \'image\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_UPLOAD','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'escalate_c\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ESCALATE','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'service_interest_c\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SERVICE_INTEREST','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'service_chanel_c\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SERVICE_CHANEL','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'email_source_c\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_SOURCE','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'category_c\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CATEGORY','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'product_type_c\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PRODUCT_TYPE','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Cases\', \'service_persona_c\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SERVICE_PERSONA','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\' );
addToValidateBinaryDependency(\'form_SubpanelQuickCreate_Cases\', \'assigned_user_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Cases','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\', \'assigned_user_id\' );
addToValidateBinaryDependency(\'form_SubpanelQuickCreate_Cases\', \'created_by_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Cases','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\', \'created_by\' );
addToValidateBinaryDependency(\'form_SubpanelQuickCreate_Cases\', \'account_name\', \'alpha\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Cases','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\', \'account_id\' );
addToValidateBinaryDependency(\'form_SubpanelQuickCreate_Cases\', \'agent_outlet_c\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Cases','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_AGENT_OUTLET','module' => 'Cases','for_js' => true), $this);?>
<?php echo '\', \'contact_id_c\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'form_SubpanelQuickCreate_Cases_agent_outlet_c\']={"form":"form_SubpanelQuickCreate_Cases","method":"query","modules":["Contacts"],"group":"or","field_list":["name","id"],"populate_list":["agent_outlet_c","contact_id_c"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'form_SubpanelQuickCreate_Cases_account_name\']={"form":"form_SubpanelQuickCreate_Cases","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["form_SubpanelQuickCreate_Cases_account_name","account_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["account_id"],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'form_SubpanelQuickCreate_Cases_assigned_user_name\']={"form":"form_SubpanelQuickCreate_Cases","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects[\'form_SubpanelQuickCreate_Cases_created_by_name\']={"form":"form_SubpanelQuickCreate_Cases","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name","created_by"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>'; ?>
