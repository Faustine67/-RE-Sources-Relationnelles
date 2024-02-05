<?php
/* Smarty version 4.3.4, created on 2024-02-05 13:13:32
  from 'C:\wamp64\www\-RE-Sources-Relationnelles\app\Views\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65c0defc19ae76_97896837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67413beff3e2c4a0c4de8ecf0c96920ece048ab5' => 
    array (
      0 => 'C:\\wamp64\\www\\-RE-Sources-Relationnelles\\app\\Views\\templates\\header.tpl',
      1 => 1707138794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c0defc19ae76_97896837 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
    <nav>
    <div>
        <img src="<?php echo htmlspecialchars((string) base_url(), ENT_QUOTES, 'UTF-8');?>
/logo.jpeg" class="logo">
    </div>
    <div class="nav-links">
        <a href="youtube">Recherche</a>
        <a href="liste_post">Tous les posts</a>
        <a href="login">Se connecter</a>
        <a href= "<?php echo '<?'; ?>
=site_url('dashboard')<?php echo '?>'; ?>
">Administration</a>
    </nav>
    </div>
</header><?php }
}
