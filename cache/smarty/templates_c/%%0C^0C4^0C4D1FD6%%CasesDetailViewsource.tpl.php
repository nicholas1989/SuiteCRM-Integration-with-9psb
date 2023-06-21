<?php /* Smarty version 2.6.33, created on 2023-06-20 19:34:27
         compiled from cache/modules/AOW_WorkFlow/CasesDetailViewsource.tpl */ ?>


<?php if (is_string ( $this->_tpl_vars['fields']['source']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['source']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['source']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['source']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['source']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['source']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['source']['options'][$this->_tpl_vars['fields']['source']['value']]; ?>

<?php endif; ?>