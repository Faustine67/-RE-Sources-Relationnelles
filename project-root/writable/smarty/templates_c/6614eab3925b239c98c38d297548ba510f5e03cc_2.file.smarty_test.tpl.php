<?php
/* Smarty version 4.3.4, created on 2024-01-05 09:32:38
  from '/Users/pw/Desktop/-RE-Sources-Relationnelles/project-root/app/Views/smarty_test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6597ccb6675597_83248246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6614eab3925b239c98c38d297548ba510f5e03cc' => 
    array (
      0 => '/Users/pw/Desktop/-RE-Sources-Relationnelles/project-root/app/Views/smarty_test.tpl',
      1 => 1704447157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6597ccb6675597_83248246 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14888496586597ccb666c0c0_59090166', 'content-title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8294382646597ccb666e622_09907887', 'content');
?>



<?php }
/* {block 'content-title'} */
class Block_14888496586597ccb666c0c0_59090166 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content-title' => 
  array (
    0 => 'Block_14888496586597ccb666c0c0_59090166',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
 
<?php
}
}
/* {/block 'content-title'} */
/* {block 'content'} */
class Block_8294382646597ccb666e622_09907887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8294382646597ccb666e622_09907887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2> Liste de course </h2>
<ul>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['elements']->value, 'element');
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
?>
<li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value, ENT_QUOTES, 'UTF-8');?>
</li>
 <?php
}
if ($_smarty_tpl->tpl_vars['element']->do_else) {
?>
<li> Pas d'éléments dans la liste </li>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
    Bienvenue, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
!
<?php } else { ?>
    Vous devez être connecté pour acceder à cette page
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
