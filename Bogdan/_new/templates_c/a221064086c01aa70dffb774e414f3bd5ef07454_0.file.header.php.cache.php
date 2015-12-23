<?php
/* Smarty version 3.1.28-dev/77, created on 2015-12-23 01:35:26
  from "D:\projects\Bogdan\Bogdan\_new\templates\header.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_5679ec4e95a547_14075226',
  'file_dependency' => 
  array (
    'a221064086c01aa70dffb774e414f3bd5ef07454' => 
    array (
      0 => 'D:\\projects\\Bogdan\\Bogdan\\_new\\templates\\header.php',
      1 => 1450830590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5679ec4e95a547_14075226 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '257695679ec4e90c4a5_92379256';
?>
<!DOCTYPE html>
<html lang="ro" class="csstransforms csstransforms3d csstransitions"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">


<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<link rel="apple-touch-icon" href="favicon.png" />
<link rel="shortcut icon" href="/favicon.png" />

<!-- Custom CSS -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="css/ionicons.min.css" rel="stylesheet" />
<link href="css/main.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link href="css/responsive.css" rel="stylesheet" />
<link href="css/fixes.css" rel="stylesheet" />

<!-- Online Fonts -->
<link href="https://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->
</head>
<body>

<!-- Wrap -->
<div id="wrap">

  <!-- header -->
  <div class="container relative">
    <header>
      <div class="logo"> <a href="#."><img class="img-responsive" src="images/sigla.png" alt=""></a> </div>
      <!-- Top bar -->
      <div class="top-bar">
        <div class="top-info">
          <ul class="personal-info">
            <li>
              <p><i class="fa fa-phone"></i> + 0740 38 18 82 </p>
            </li>
            <li>
              <p><i class="fa fa-envelope-o"></i>contact@advanceddesign.ro</p>
            </li>
            <li>
              <p><i class="fa fa-clock-o"></i> Luni - Vineri 09:00 - 18:00 </p>
            </li>
          </ul>
          <ul class="social">
            <li><a href="#."><i class="fa fa-facebook"></i></a></li>
            <li><a href="#."><i class="fa fa-twitter"></i></a></li>
            <li><a href="#."><i class="fa fa-google"></i></a></li>
            <li><a href="#."><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>

        <!-- Navigation -->
        <nav class="navbar">
          <ul class="nav ownmenu">

            <?php
$_from = $_smarty_tpl->tpl_vars['Menu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_0_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$__foreach_i_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$__foreach_i_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_i_0_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$__foreach_i_0_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
    					<li <?php if (strrpos($_smarty_tpl->tpl_vars['i']->value,$_smarty_tpl->tpl_vars['SelMenu']->value) === 0) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</a></li>
    				<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved_local_item;
}
}
if ($__foreach_i_0_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved_item;
}
if ($__foreach_i_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_i_0_saved_key;
}
?>
          </ul>

          <!-- GET A QUOTES -->
          <div class="quotes"> <a href="contact.php" class="customcolor"><i class="fa fa-pencil-square-o"></i> Contacteaza-ne </a> </div>
        </nav>
      </div>
    </header>
  </div>
<?php }
}
