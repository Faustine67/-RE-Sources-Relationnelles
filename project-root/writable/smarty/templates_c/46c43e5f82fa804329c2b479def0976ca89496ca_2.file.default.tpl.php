<?php
/* Smarty version 4.3.4, created on 2024-01-05 13:06:28
  from '/Users/pw/Desktop/-RE-Sources-Relationnelles/project-root/app/Views/layouts/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6597fed4a8f674_77561028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46c43e5f82fa804329c2b479def0976ca89496ca' => 
    array (
      0 => '/Users/pw/Desktop/-RE-Sources-Relationnelles/project-root/app/Views/layouts/default.tpl',
      1 => 1704459973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6597fed4a8f674_77561028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>

<head>
    <title> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5764494016597fed4a87610_73808727', "title");
?>
</title>
    <link rel="stylesheet" href="/styles.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11201079436597fed4a889c3_36918505', "styles");
?>

</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main>
        <h1>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16827025466597fed4a8cc95_50439230', "content-title");
?>

        </h1>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12600841476597fed4a8d992_15762474', "content");
?>

    </main>

    <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9517412596597fed4a8ed71_70289449', "js");
?>

</body>

</html><?php }
/* {block "title"} */
class Block_5764494016597fed4a87610_73808727 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5764494016597fed4a87610_73808727',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "styles"} */
class Block_11201079436597fed4a889c3_36918505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_11201079436597fed4a889c3_36918505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "styles"} */
/* {block "content-title"} */
class Block_16827025466597fed4a8cc95_50439230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content-title' => 
  array (
    0 => 'Block_16827025466597fed4a8cc95_50439230',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block "content-title"} */
/* {block "content"} */
class Block_12600841476597fed4a8d992_15762474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12600841476597fed4a8d992_15762474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "content"} */
/* {block "js"} */
class Block_9517412596597fed4a8ed71_70289449 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_9517412596597fed4a8ed71_70289449',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block "js"} */
}
