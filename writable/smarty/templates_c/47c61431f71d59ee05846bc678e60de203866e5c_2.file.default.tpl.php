<?php
/* Smarty version 4.3.4, created on 2024-01-05 16:14:53
  from 'C:\wamp64\www\-RE-Sources-Relationnelles\app\Views\layouts\default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65982afd7602b0_80295057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47c61431f71d59ee05846bc678e60de203866e5c' => 
    array (
      0 => 'C:\\wamp64\\www\\-RE-Sources-Relationnelles\\app\\Views\\layouts\\default.tpl',
      1 => 1704470034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_65982afd7602b0_80295057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26698525165982afd758972_38061840', "title");
?>
</title>
    <link rel="stylesheet" href="/styles.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181986420165982afd75a3d3_99361722', "styles");
?>

</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main>
        <h1>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193391786265982afd75c2a5_05022022', "content-title");
?>

        </h1>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137598031565982afd75d995_14347704', "content");
?>

    </main>

    <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48213113165982afd75f5c1_68586789', "js");
?>

</body>

</html><?php }
/* {block "title"} */
class Block_26698525165982afd758972_38061840 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_26698525165982afd758972_38061840',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "styles"} */
class Block_181986420165982afd75a3d3_99361722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_181986420165982afd75a3d3_99361722',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "styles"} */
/* {block "content-title"} */
class Block_193391786265982afd75c2a5_05022022 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content-title' => 
  array (
    0 => 'Block_193391786265982afd75c2a5_05022022',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content-title"} */
/* {block "content"} */
class Block_137598031565982afd75d995_14347704 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_137598031565982afd75d995_14347704',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "js"} */
class Block_48213113165982afd75f5c1_68586789 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_48213113165982afd75f5c1_68586789',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block "js"} */
}
