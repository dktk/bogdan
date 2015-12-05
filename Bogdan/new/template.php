<?php

function LoadTemplate($title, $description, $keywords, $template) {
	require './libs/Smarty.class.php';

	$smarty = new Smarty;
	
	$smarty->force_compile = true;
	$smarty->caching = true;
	// $smarty->cache_lifetime = 120;
	$smarty->assignByRef("title", $title);
	$smarty->assignByRef("description", $description);
	
	$smarty->assignByRef("keywords", $keywords);
	
	$menu=Array('Acasa'=>'/',
				'Servicii'=>'servicii.php',
				'Portofoliu'=>'portofoliu.php', 
				'Despre noi' => 'despre.php', 
				'Contact' => 'contact.php'); 
	
	$smarty->assignByRef('SelMenu', $template); 
	$smarty->assignByRef('Menu', $menu); 

	$smarty->display('./templates/_header.tpl');
	$smarty->display('./templates/'. $template . '.tpl');
	$smarty->display('./templates/_footer.tpl');
}	

?>