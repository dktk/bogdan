<?php

function LoadTemplate($title, $description, $keywords, $template) {
	require '../libs/Smarty.class.php';

	$smarty = new Smarty;
	
	$smarty->force_compile = true;
	$smarty->caching = true;
	$smarty->cache_lifetime = 120;
	$smarty->assign("Title", $title);
	$smarty->assign("description", $description);
	
	$smarty->assign("keywords", $keywords);
	
	$smarty->display('./templates/'. $template . '.tpl');
}	

?>