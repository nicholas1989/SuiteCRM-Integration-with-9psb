<?php /* Smarty version 2.6.33, created on 2023-06-20 19:33:49
         compiled from cache/modules/AOW_WorkFlow/CasesEditViewmultienumstatus2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'multienum_to_array', 'cache/modules/AOW_WorkFlow/CasesEditViewmultienumstatus2.tpl', 6, false),array('function', 'html_options', 'cache/modules/AOW_WorkFlow/CasesEditViewmultienumstatus2.tpl', 11, false),)), $this); ?>



<input type="hidden" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
_multiselect"
name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
_multiselect" value="true">
<?php echo smarty_function_multienum_to_array(array('string' => $this->_tpl_vars['fields']['status']['value'],'default' => $this->_tpl_vars['fields']['status']['default'],'assign' => 'values'), $this);?>

<select id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
"
name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
[]"
multiple="true" size='6' style="width:150" title='' tabindex="1" 
>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['values']), $this);?>

</select>
