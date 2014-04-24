<?
	include_once '../php/MagicSquare.php';
	include_once '../php/menu.php';
	include_once '../php/head.php';
	$the_pageName = "Printmaking";
?>
	<?$head = new Head();
		$head->addLess("other.less");
		$head->display();
	?>
	<body style="width:2000px">
		<section class="rectangles">
			<?
				$e = new Menu("leftSide");
				$e->prepend($e->addMenuButton(array("../", "Liv", ""), "doubleMenuButton"));
				$e->append("<doubleMenuButton>".makeCredits("h3")."</doubleMenuButton>");
				$e->display();
				makeMagicFromImages("MagicRectangle");
			?>
		</section>
	</body>
</html>
