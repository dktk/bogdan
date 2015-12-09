<?php
function LoadTemplate($title, $description, $keywords, $template) {
	LoadTemplateWithScripts($title, $description, $keywords, $template, array());
}

function LoadTemplateWithScripts($title, $description, $keywords, $template, $scripts) {
	require './libs/Smarty.class.php';

	$smarty = new Smarty;

	$smarty->force_compile = true;
	$smarty->caching = true;
	// $smarty->cache_lifetime = 120;
	$smarty->assignByRef("title", $title);
	$smarty->assignByRef("description", $description);

	$smarty->assignByRef("keywords", $keywords);

	$menu=Array('Acasa'=>'/',
				'Proiectare'=>'proiectare.php',
				'ISCIR' => 'iscir.php',
				'Dirigentie de santier' => 'dirigentie-de-santier.php',
				'Portofoliu'=>'portofoliu.php');

	$smarty->assignByRef('SelMenu', $template);
	$smarty->assignByRef('Menu', $menu);

	$smarty->display('./templates/header.php');
	$smarty->display('./templates/'. $template . '.php');
	$smarty->display('./templates/footer.php');

	$numberOfScripts = count($scripts);
	if ( $numberOfScripts > 0) {
		for ($i=0; $i < $numberOfScripts; $i++) {
			echo "<script src='" . $scripts[$i] ."'></script>\n";
		}
	}
	$smarty->display('./templates/html-end.php');
}
?>
