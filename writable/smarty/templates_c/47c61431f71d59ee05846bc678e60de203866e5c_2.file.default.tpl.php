<?php
/* Smarty version 4.3.4, created on 2024-02-05 13:29:08
  from 'C:\wamp64\www\-RE-Sources-Relationnelles\app\Views\layouts\default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65c0e2a4932843_28002071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47c61431f71d59ee05846bc678e60de203866e5c' => 
    array (
      0 => 'C:\\wamp64\\www\\-RE-Sources-Relationnelles\\app\\Views\\layouts\\default.tpl',
      1 => 1707139741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_65c0e2a4932843_28002071 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113314127465c0e2a49146c7_52151451', "title");
?>
</title>
    <link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars((string) base_url(), ENT_QUOTES, 'UTF-8');?>
/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3473149665c0e2a491e356_12270666', "styles");
?>

</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <section id="content">
        <h1>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211910656765c0e2a4927839_41012722', "content-title");
?>

        </h1>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58659405965c0e2a492b6d0_93623399', "content");
?>

        </section>

    <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15744646065c0e2a492ff59_71596385', "js");
?>

</body>

</html><?php }
/* {block "title"} */
class Block_113314127465c0e2a49146c7_52151451 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_113314127465c0e2a49146c7_52151451',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "styles"} */
class Block_3473149665c0e2a491e356_12270666 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_3473149665c0e2a491e356_12270666',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "styles"} */
/* {block "content-title"} */
class Block_211910656765c0e2a4927839_41012722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content-title' => 
  array (
    0 => 'Block_211910656765c0e2a4927839_41012722',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content-title"} */
/* {block "content"} */
class Block_58659405965c0e2a492b6d0_93623399 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_58659405965c0e2a492b6d0_93623399',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "js"} */
class Block_15744646065c0e2a492ff59_71596385 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_15744646065c0e2a492ff59_71596385',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block "js"} */
}
