<?php
/* Smarty version 4.3.4, created on 2024-01-05 09:28:36
  from '/Users/pw/Desktop/-RE-Sources-Relationnelles/project-root/app/Views/layouts/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6597cbc4516448_30840386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46c43e5f82fa804329c2b479def0976ca89496ca' => 
    array (
      0 => '/Users/pw/Desktop/-RE-Sources-Relationnelles/project-root/app/Views/layouts/default.tpl',
      1 => 1704446843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6597cbc4516448_30840386 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html>

<head>
    <title> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10402286766597cbc450e967_84347804', "title");
?>
</title>
    <link rel="stylesheet" href="/styles.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15441947126597cbc4510068_51879219', "styles");
?>

</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main>
        <h1>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17507375056597cbc4513a73_30775953', "content-title");
?>

        </h1>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14162049006597cbc4514704_79405258', "content");
?>

    </main>

    <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20466090166597cbc4515b10_44843434', "js");
?>

</body>

</html><?php }
/* {block "title"} */
class Block_10402286766597cbc450e967_84347804 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10402286766597cbc450e967_84347804',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "styles"} */
class Block_15441947126597cbc4510068_51879219 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_15441947126597cbc4510068_51879219',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "styles"} */
/* {block "content-title"} */
class Block_17507375056597cbc4513a73_30775953 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content-title' => 
  array (
    0 => 'Block_17507375056597cbc4513a73_30775953',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block "content-title"} */
/* {block "content"} */
class Block_14162049006597cbc4514704_79405258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14162049006597cbc4514704_79405258',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "content"} */
/* {block "js"} */
class Block_20466090166597cbc4515b10_44843434 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_20466090166597cbc4515b10_44843434',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block "js"} */
}
