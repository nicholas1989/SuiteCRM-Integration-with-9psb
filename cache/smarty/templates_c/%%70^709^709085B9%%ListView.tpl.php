<?php /* Smarty version 2.6.33, created on 2023-06-27 05:52:24
         compiled from custom/include/SugarFields/Fields/Phone/ListView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_fetch', 'custom/include/SugarFields/Fields/Phone/ListView.tpl', 43, false),array('function', 'sugar_phone', 'custom/include/SugarFields/Fields/Phone/ListView.tpl', 45, false),)), $this); ?>

<?php ob_start(); ?><?php echo smarty_function_sugar_fetch(array('object' => $this->_tpl_vars['parentFieldArray'],'key' => $this->_tpl_vars['col']), $this);?>
<?php $this->_smarty_vars['capture']['getPhone'] = ob_get_contents();  $this->assign('phone', ob_get_contents());ob_end_clean(); ?>

<?php echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone'],'usa_format' => $this->_tpl_vars['usa_format']), $this);?>


<?php if ($this->_tpl_vars['displayParams']['enableSMS'] == true): ?>
<?php if ($this->_tpl_vars['phone'] != ''): ?>
	<img class="img-twilio-sms" src="custom/themes/default/images/text.png" onclick="return openSms('<?php echo $this->_tpl_vars['phone']; ?>
', '<?php echo $this->_tpl_vars['displayParams']['module']; ?>
', '<?php echo $this->_tpl_vars['parentFieldArray']['ID']; ?>
');">
<?php endif; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['displayParams']['enableWhatsApp'] == true): ?>
<?php if ($this->_tpl_vars['phone'] != ''): ?>
	<img class="img-bv-whatsapp" src="custom/themes/default/images/whatsapp.png" onclick="return openWhatsApp('<?php echo $this->_tpl_vars['phone']; ?>
', '<?php echo $this->_tpl_vars['displayParams']['module']; ?>
', '<?php echo $this->_tpl_vars['parentFieldArray']['ID']; ?>
');">
<?php endif; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['displayParams']['enableTwilio'] == true): ?>
<?php if ($this->_tpl_vars['phone'] != ''): ?>
	<a href="#" class="btn-twilo-call" onclick="return call('<?php echo $this->_tpl_vars['parentFieldArray']['NAME']; ?>
','<?php echo $this->_tpl_vars['phone']; ?>
');" title="call <?php echo $this->_tpl_vars['phone']; ?>
"><i class="fa fa-phone"></i></a>
<?php endif; ?>
<?php endif; ?>