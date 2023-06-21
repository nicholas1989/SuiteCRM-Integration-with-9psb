
    
<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap class="dateTimeComboColumn">
<input autocomplete="off" type="text" id="aor_conditions_value1_date" class="datetimecombo_date" value="{$fields[$fields.aow_temp_date.name].value}" size="11" maxlength="10" title='' tabindex="1" onblur="combo_aor_conditions_value1.update();" onchange="combo_aor_conditions_value1.update(); "    >
	<button type="button" id="aor_conditions_value1_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar"  alt="{$APP.LBL_ENTER_DATE}"></span></button>
</td>
<td nowrap class="dateTimeComboColumn">
<div id="aor_conditions_value1_time_section" class="datetimecombo_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="DateTimeCombo" id="aor_conditions_value1" name="aor_conditions_value[1]" value="{$fields[$fields.aow_temp_date.name].value}">
<script type="text/javascript" src="{sugar_getjspath file="include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"}"></script>
<script type="text/javascript">
var combo_aor_conditions_value1 = new Datetimecombo("{$fields[$fields.aow_temp_date.name].value}", "aor_conditions_value1", "{$TIME_FORMAT}", "1", '', false, true);
//Render the remaining widget fields
text = combo_aor_conditions_value1.html('');
document.getElementById('aor_conditions_value1_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_aor_conditions_value1.jsscript(''));

addToValidateBinaryDependency('{$form_name}',"aor_conditions_value1_hours", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_HOURS}" ,"aor_conditions_value1_date");
addToValidateBinaryDependency('{$form_name}', "aor_conditions_value1_minutes", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_MINUTES}" ,"aor_conditions_value1_date");
addToValidateBinaryDependency('{$form_name}', "aor_conditions_value1_meridiem", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_MERIDIEM}","aor_conditions_value1_date");

YAHOO.util.Event.onDOMReady(function()
{ldelim}

	Calendar.setup ({ldelim}
	onClose : update_aor_conditions_value1,
	inputField : "aor_conditions_value1_date",
    form : "",
	ifFormat : "{$CALENDAR_FORMAT}",
	daFormat : "{$CALENDAR_FORMAT}",
	button : "aor_conditions_value1_trigger",
	singleClick : true,
	step : 1,
	weekNumbers: false,
        startWeekday: {$CALENDAR_FDOW|default:'0'},
	comboObject: combo_aor_conditions_value1
	{rdelim});

	//Call update for first time to round hours and minute values
	combo_aor_conditions_value1.update(false);

{rdelim}); 
</script>