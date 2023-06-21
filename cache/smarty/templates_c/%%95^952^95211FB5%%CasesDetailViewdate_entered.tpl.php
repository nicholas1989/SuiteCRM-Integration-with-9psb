<?php /* Smarty version 2.6.33, created on 2023-06-20 19:34:26
         compiled from cache/modules/AOW_WorkFlow/CasesDetailViewdate_entered.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['aow_temp_date']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['aow_temp_date']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['aow_temp_date']['value']); ?>
<?php endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['aow_temp_date']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['aow_temp_date']['value']; ?>
</span>