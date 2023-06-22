<?php /* Smarty version 2.6.33, created on 2023-06-20 19:34:54
         compiled from cache/modules/AOW_WorkFlow/CasesEditViewdate_entered1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'cache/modules/AOW_WorkFlow/CasesEditViewdate_entered1.tpl', 15, false),array('modifier', 'default', 'cache/modules/AOW_WorkFlow/CasesEditViewdate_entered1.tpl', 42, false),)), $this); ?>

    
<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap class="dateTimeComboColumn">
<input autocomplete="off" type="text" id="aor_conditions_value1_date" class="datetimecombo_date" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['aow_temp_date']['name']]['value']; ?>
" size="11" maxlength="10" title='' tabindex="1" onblur="combo_aor_conditions_value1.update();" onchange="combo_aor_conditions_value1.update(); "    >
	<button type="button" id="aor_conditions_value1_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar"  alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</td>
<td nowrap class="dateTimeComboColumn">
<div id="aor_conditions_value1_time_section" class="datetimecombo_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="DateTimeCombo" id="aor_conditions_value1" name="aor_conditions_value[1]" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['aow_temp_date']['name']]['value']; ?>
">
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"), $this);?>
"></script>
<script type="text/javascript">
var combo_aor_conditions_value1 = new Datetimecombo("<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['aow_temp_date']['name']]['value']; ?>
", "aor_conditions_value1", "<?php echo $this->_tpl_vars['TIME_FORMAT']; ?>
", "1", '', false, true);
//Render the remaining widget fields
text = combo_aor_conditions_value1.html('');
document.getElementById('aor_conditions_value1_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_aor_conditions_value1.jsscript(''));

addToValidateBinaryDependency('<?php echo $this->_tpl_vars['form_name']; ?>
',"aor_conditions_value1_hours", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_HOURS']; ?>
" ,"aor_conditions_value1_date");
addToValidateBinaryDependency('<?php echo $this->_tpl_vars['form_name']; ?>
', "aor_conditions_value1_minutes", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_MINUTES']; ?>
" ,"aor_conditions_value1_date");
addToValidateBinaryDependency('<?php echo $this->_tpl_vars['form_name']; ?>
', "aor_conditions_value1_meridiem", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_MERIDIEM']; ?>
","aor_conditions_value1_date");

YAHOO.util.Event.onDOMReady(function()
{

	Calendar.setup ({
	onClose : update_aor_conditions_value1,
	inputField : "aor_conditions_value1_date",
    form : "",
	ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
	daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
	button : "aor_conditions_value1_trigger",
	singleClick : true,
	step : 1,
	weekNumbers: false,
        startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
	comboObject: combo_aor_conditions_value1
	});

	//Call update for first time to round hours and minute values
	combo_aor_conditions_value1.update(false);

}); 
</script>