<?
	include_once '../php/MagicSquare.php';
	include_once '../php/menu.php';
	include_once '../php/head.php';
	$the_pageName = "Comics";
?>
	<?$head = new Head();
		$head->addLess("other.less");
		$head->display();
	?>
	<body>
		<header>
			<?
				$e = new Menu("bar");
				$e->display();
			?>
		</header>

		<section class="rectangles">
			<h1> COMICS </h1>
			<? makeFiguresFromImages(); ?>
				<footer><?print(makeCredits("h2"));?></footer>
		</section>
	</body>
</html>
