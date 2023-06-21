<?php /* Smarty version 2.6.33, created on 2023-06-20 18:46:43
         compiled from cache/include/InlineEditing/AccountsEditViewcontact_type_c.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'cache/include/InlineEditing/AccountsEditViewcontact_type_c.tpl', 9, false),)), $this); ?>


    <select name="<?php echo $this->_tpl_vars['fields']['contact_type_c']['name']; ?>
"
            id="<?php echo $this->_tpl_vars['fields']['contact_type_c']['name']; ?>
"
            title=''  tabindex="1"              
            >

        <?php if (isset ( $this->_tpl_vars['fields']['contact_type_c']['value'] ) && $this->_tpl_vars['fields']['contact_type_c']['value'] != ''): ?>
            <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['contact_type_c']['options'],'selected' => $this->_tpl_vars['fields']['contact_type_c']['value']), $this);?>

        <?php else: ?>
            <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['contact_type_c']['options'],'selected' => $this->_tpl_vars['fields']['contact_type_c']['default']), $this);?>

        <?php endif; ?>
    </select>

