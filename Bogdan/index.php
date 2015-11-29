<?php

require '../libs/Smarty.class.php';

$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$smarty->assign("Title", "Advanced Design - Satu Mare");
$smarty->assign("description", "Advanced Design - Consultanta si excelenta in instalatii");

// todo: 
$smarty->assign("keywords", "Inginer instalator");

$smarty->display('./templates/index.tpl');

?>