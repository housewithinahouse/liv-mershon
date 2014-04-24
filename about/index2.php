<!doctype html>
<html>
	<!--Liv Mershon | 2013 | by: robodraw.co -->
	<head>
		<title>Liv Mershon | About</title>
		<!--META (for the grid to behave)-->
		<meta name="viewport" content="width=device-width initial-scale=1, minimum-scale=1, maximum-scale=1"/>

		<!--stylesheets-->
		<link rel="stylesheet/less" type="text/css" href="../css/grid.less" />
		<link rel="stylesheet/less" type="text/css" href="../css/other.less" />

		<!--LESS CONTROLS -->
		<script type="text/javascript">
		less = {
			env: "development", // or "production"
			async: false,       // load imports async
			fileAsync: false,   // load imports async when in a page under file protocol
			poll: 1000,         // when in watch mode, time in ms between polls
			functions: {},      // user functions, keyed by name
			dumpLineNumbers: "comments", // or "mediaQuery" or "all"
		}; </script>
		<script src="../js/less.js" type="text/javascript"></script>

	</head>
	<body>
	<? include '../php/menu.php';?>
	<div class="grid-container">
		<div class="grid-100">
			<h1>ABOUT</h1>
		</div>

		<div class="grid-5">
			<?makeMenu();?>
		</div>
		<div class="grid-80 grid-parent">
				<div class="grid-40">
					<img src="images/livprofile.jpg">
				</div>
				<div class="grid-60">
				<p> I am a multi-media artist who lives in Bloomington, Indiana.
				<br>I use visual art as a method to express my particular interpretation of the human condition, focusing on gender performance, absurdity, humor, loneliness, mysticism, eroticism, and darkness.</p>
				<p>Thank you for taking time to peruse my work & please visit the site again as I add more work of past and future. If you would like to collaborate on any future projects, please contact me at:
				<br><a href="mailto:callheroliver@fastmail.fm?Subject=about%20page" target="_top">callheroliver@fastmail.fm</a></p>
				</div>
			<?makeFooter();?>
		</div>
	</div>



	</body>
</html>
