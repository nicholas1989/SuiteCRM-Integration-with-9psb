<?php /* Smarty version 2.6.33, created on 2023-06-20 19:34:27
         compiled from cache/modules/AOW_WorkFlow/CasesDetailViewproduct_type_c.tpl */ ?>


<?php if (is_string ( $this->_tpl_vars['fields']['product_type_c']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['product_type_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['product_type_c']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['product_type_c']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['product_type_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['product_type_c']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['product_type_c']['options'][$this->_tpl_vars['fields']['product_type_c']['value']]; ?>

<?php endif; ?>