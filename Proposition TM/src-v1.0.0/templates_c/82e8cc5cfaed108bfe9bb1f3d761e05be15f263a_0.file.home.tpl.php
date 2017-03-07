<?php
/* Smarty version 3.1.29, created on 2017-03-07 16:22:48
  from "C:\xampp\htdocs\src\tpl\home\home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58bed048007a50_33437156',
  'file_dependency' => 
  array (
    '82e8cc5cfaed108bfe9bb1f3d761e05be15f263a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\tpl\\home\\home.tpl',
      1 => 1488900166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bed048007a50_33437156 ($_smarty_tpl) {
?>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>


Affichage tableau base : testtm - table : testtm<br><br>
<?php
$_from = $_smarty_tpl->tpl_vars['testtable']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_test_0_saved_item = isset($_smarty_tpl->tpl_vars['test']) ? $_smarty_tpl->tpl_vars['test'] : false;
$_smarty_tpl->tpl_vars['test'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['test']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
$_smarty_tpl->tpl_vars['test']->_loop = true;
$__foreach_test_0_saved_local_item = $_smarty_tpl->tpl_vars['test'];
echo $_smarty_tpl->tpl_vars['test']->value['id'];?>
 - 
<?php echo $_smarty_tpl->tpl_vars['test']->value['name'];?>
<br><br>

<?php
$_smarty_tpl->tpl_vars['test'] = $__foreach_test_0_saved_local_item;
}
if ($__foreach_test_0_saved_item) {
$_smarty_tpl->tpl_vars['test'] = $__foreach_test_0_saved_item;
}
?>

<br><br>

<?php echo $_smarty_tpl->tpl_vars['count']->value;
}
}
