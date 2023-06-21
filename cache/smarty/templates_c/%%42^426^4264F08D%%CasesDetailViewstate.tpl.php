<?php /* Smarty version 2.6.33, created on 2023-06-20 19:34:26
         compiled from cache/modules/AOW_WorkFlow/CasesDetailViewstate.tpl */ ?>


<?php if (is_string ( $this->_tpl_vars['fields']['state']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['state']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['state']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['state']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['state']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['state']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['state']['options'][$this->_tpl_vars['fields']['state']['value']]; ?>

<?php endif; ?>