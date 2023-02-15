<?php /* Smarty version 2.6.33, created on 2023-02-15 17:01:27
         compiled from cache/themes/SuiteP/modules/InboundEmail/SearchForm_basic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'cache/themes/SuiteP/modules/InboundEmail/SearchForm_basic.tpl', 31, false),array('function', 'math', 'cache/themes/SuiteP/modules/InboundEmail/SearchForm_basic.tpl', 32, false),array('function', 'sugar_translate', 'cache/themes/SuiteP/modules/InboundEmail/SearchForm_basic.tpl', 38, false),array('function', 'html_options', 'cache/themes/SuiteP/modules/InboundEmail/SearchForm_basic.tpl', 67, false),array('function', 'sugar_getimagepath', 'cache/themes/SuiteP/modules/InboundEmail/SearchForm_basic.tpl', 123, false),)), $this); ?>

<input type='hidden' id="orderByInput" name='orderBy' value=''/>
<input type='hidden' id="sortOrder" name='sortOrder' value=''/>
<?php if (! isset ( $this->_tpl_vars['templateMeta']['maxColumnsBasic'] )): ?>
	<?php $this->assign('basicMaxColumns', $this->_tpl_vars['templateMeta']['maxColumns']); ?>
<?php else: ?>
    <?php $this->assign('basicMaxColumns', $this->_tpl_vars['templateMeta']['maxColumnsBasic']); ?>
<?php endif; ?>
<script>
<?php echo '
	$(function() {
	var $dialog = $(\'<div></div>\')
		.html(SUGAR.language.get(\'app_strings\', \'LBL_SEARCH_HELP_TEXT\'))
		.dialog({
			autoOpen: false,
			title: SUGAR.language.get(\'app_strings\', \'LBL_HELP\'),
			width: 700
		});
		
		$(\'#filterHelp\').click(function() {
		$dialog.dialog(\'open\');
		// prevent the default action, e.g., following a link
	});
	
	});
'; ?>

</script>
<div class="row">
    
      
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='name_basic'> <?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'InboundEmail'), $this);?>
</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<?php if (strlen ( $this->_tpl_vars['fields']['name_basic']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name_basic']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name_basic']['value']); ?>
<?php endif; ?>
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name_basic']['name']; ?>
'
    id='<?php echo $this->_tpl_vars['fields']['name_basic']['name']; ?>
' size='30'
    maxlength='255'        value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      accesskey='9'  >

		</div>
		<div class="search-clear"></div>
	</div>
    
      
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='type_basic'> <?php echo smarty_function_sugar_translate(array('label' => 'LBL_TYPE','module' => 'InboundEmail'), $this);?>
</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<?php echo smarty_function_html_options(array('id' => 'type_basic','name' => 'type_basic[]','options' => $this->_tpl_vars['fields']['type_basic']['options'],'size' => '6','class' => 'templateGroupChooser','multiple' => '1','selected' => $this->_tpl_vars['fields']['type_basic']['value']), $this);?>

		</div>
		<div class="search-clear"></div>
	</div>
    
      
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='status_basic'> <?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'InboundEmail'), $this);?>
</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<?php echo smarty_function_html_options(array('id' => 'status_basic','name' => 'status_basic[]','options' => $this->_tpl_vars['fields']['status_basic']['options'],'size' => '6','class' => 'templateGroupChooser','multiple' => '1','selected' => $this->_tpl_vars['fields']['status_basic']['value']), $this);?>

		</div>
		<div class="search-clear"></div>
	</div>
    
      
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='server_url_basic'> <?php echo smarty_function_sugar_translate(array('label' => 'LBL_SERVER_URL','module' => 'InboundEmail'), $this);?>
</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<?php if (strlen ( $this->_tpl_vars['fields']['server_url_basic']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['server_url_basic']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['server_url_basic']['value']); ?>
<?php endif; ?>
<input type='text' name='<?php echo $this->_tpl_vars['fields']['server_url_basic']['name']; ?>
'
    id='<?php echo $this->_tpl_vars['fields']['server_url_basic']['name']; ?>
' size='30'
    maxlength='100'        value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >

		</div>
		<div class="search-clear"></div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="submitButtons">
			<input tabindex="2" title="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_TITLE']; ?>
" onclick="SUGAR.savedViews.setChooser();" class="button" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_LABEL']; ?>
" id="search_form_submit"/>&nbsp;
			<input tabindex='2' title='<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
' onclick='SUGAR.searchForm.clear_form(this.form); return false;' class='button' type='button' name='clear' id='search_form_clear' value='<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
'/>
			<?php if ($this->_tpl_vars['HAS_ADVANCED_SEARCH'] && ! $this->_tpl_vars['searchFormInPopup']): ?>
				&nbsp;&nbsp;<a id="advanced_search_link" href="javascript:void(0);" accesskey="<?php echo $this->_tpl_vars['APP']['LBL_ADV_SEARCH_LNK_KEY']; ?>
"><?php echo $this->_tpl_vars['APP']['LNK_ADVANCED_FILTER']; ?>
</a>
			<?php endif; ?>
		</div>
		<div class="helpIcon" width="*"><img alt="Help" border='0' id="filterHelp" src='<?php echo smarty_function_sugar_getimagepath(array('file' => "help-dashlet.gif"), $this);?>
'></div>
	</div>
</div>
<script>
	<?php echo '
	$(document).ready(function () {
		$( \'#advanced_search_link\' ).one( "click", function() {
			//alert( "This will be displayed only once." );
			SUGAR.searchForm.searchFormSelect(\''; ?>
<?php echo $this->_tpl_vars['module']; ?>
<?php echo '|advanced_search\',\''; ?>
<?php echo $this->_tpl_vars['module']; ?>
<?php echo '|basic_search\');
		});
	});
	'; ?>

</script><?php echo '<script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'search_form_owner_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["owner_name_basic","created_by_basic"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_distribution_user_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["distribution_user_name_basic","distribution_user_id_basic"],"required_list":["distribution_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_outbound_email_name_basic\']={"form":"search_form","method":"query","modules":["OutboundEmailAccounts"],"group":"or","field_list":["name","id"],"populate_list":["outbound_email_name_basic","outbound_email_id_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_autoreply_email_template_name_basic\']={"form":"search_form","method":"query","modules":["EmailTemplates"],"group":"or","field_list":["name","id"],"populate_list":["autoreply_email_template_name_basic","template_id_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_create_case_email_template_name_basic\']={"form":"search_form","method":"query","modules":["EmailTemplates"],"group":"or","field_list":["name","id"],"populate_list":["create_case_email_template_name_basic","create_case_template_id_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_external_oauth_connection_name_basic\']={"form":"search_form","method":"query","modules":["ExternalOAuthConnection"],"group":"or","field_list":["name","id"],"populate_list":["external_oauth_connection_name_basic","external_oauth_connection_id_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script>'; ?>