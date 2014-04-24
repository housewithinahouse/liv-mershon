
<?
	include_once 'basicMagic.php';
	include_once 'head.php';

<?
	$the_websiteName = "livmershon.com";
	$the_websiteTitle = "Liv Mershon";
	$the_websiteTitleSeparator = " | ";
	$the_webAddress = "http://livmershon.com";

	$the_year = "2013";
	$the_createdBy = "housewithinahouse";
	$the_createdByLink = "http://housewithinahouse.com";

	$the_linksList = array(
									 array("a_href"=>"../", "menuButton_inner"=>"&laquo;", "menuname_inner"=>"Home"),
									 array("a_href"=>"../drawings", "menuButton_inner"=>"&curren;", "menuname_inner"=>"Drawings"),
									 array("a_href"=>"../printmaking", "menuButton_inner"=>"&#135;", "menuname_inner"=>"Printmaking"),
									 array("a_href"=>"../comics","menuButton_inner"=>"&#9633;", "menuname_inner"=>"Comics"),
									 array("a_href"=>"http://www.youtube.com/user/MammyFlammy/videos' target='_blank", "menuButton_inner"=>"&#9895;", "menuname_inner"=>"Mammy Flammy"),
									 array("a_href"=>"../badpsychic", "menuButton_inner"=>"&#9907;", "menuname_inner"=>"Bad Psychic"),
									 array("a_href"=>"../other", "menuButton_inner"=>"&plusmn;", "menuname_inner"=>"Other"),
									 array("a_href"=>"../about", "menuButton_inner"=>"&#9660;", "menuname_inner"=>"About"),
									 array("","","")
									);

	$the_pageName = "DEFAULT"; //should change on most pages.
	$the_pathToCSS = "/css/";
	$the_pathToJS = "/js/";
	$base_path = "";
	

	//switches:
	$menu_skipCurrentPage = TRUE;
	$head_appendBasePath = FALSE; 
?>