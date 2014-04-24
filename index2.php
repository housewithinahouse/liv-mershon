<!doctype html>
<!-- some ideas:
squares drop away, grid remains, big image shows up behind it > for main page.
menu spread out (like now).

menu clustered with 8 buttons on left hand side. labels pop right, cutting aftoss squares. when clicked, label disapears, and thumbs show up. Vlivking on thumb pops modal window over thumbs, label pops to side for caption, clicking modal window closes it. for gallery.

line snaking off at bottom for last square, drops over footer. for comic link


-->
<html>
	<head>
		<title>Liv Mershon </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet/less" type="text/css" href="css/other.less" />
		<script type="text/javascript">
    less = {
        env: "production", // or "production"
        async: false,       // load imports async
        fileAsync: false,   // load imports async when in a page under
                            // a file protocol
        poll: 1000,         // when in watch mode, time in ms between polls
        functions: {},      // user functions, keyed by name
        dumpLineNumbers: "comments", // or "mediaQuery" or "all"
       // relativeUrls: false,// whether to adjust url's to be relative
                            // if false, url's are already relative to the
                            // entry less file
       // rootpath: ":/a.com/"// a path to add on to the start of every url
                            //resource
    };
		</script>
		<script src="js/less.js" type="text/javascript"></script>
		</head>
	<body>
	<script type="text/javascript">
    //document.getElementById("buttonTitle").innerHTML = document.getElementById("textbox").value;
	</script>
	<?php include '/php/nav.php'; ?>
		<div style="width:100%;clear:right">
			<div onmouseover="document.getElementById('buttonTitle').innerHTML='about me';">
			<a href="about"><footer><h1 id="buttonTitle">Liv Mershon's Work</h1></footer></a>
		</div>
	</nav>

	</body>
</html>
