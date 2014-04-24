<?
	include_once '../php/MagicSquare.php';
	include_once '../php/menu.php';
	include_once '../php/head.php';
	$the_pageName = "Drawings";
?>

	<?$head = new Head();
		$head->addLess("other.less");
		$head->addHighslide();
		$head->display();
	?>
	<body>
		<?
			$e = new Menu("leftSide");
			$e->prepend($e->addMenuButton(array("../", "Liv", ""), "doubleMenuButton"));
			$e->append("<doubleMenuButton>".makeCredits("h3")."</doubleMenuButton>");
			$e->display();
		?>
		<section class = "squares">
		<? makeMagicFromImages("MagicSquare", "highslide", "return hs.expand(this)"); ?>
		</section>
	</body>
</html>
