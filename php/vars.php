<?
	$the_websiteName = "livmershon.com";
	$the_websiteTitle = "Liv Mershon";
	$the_websiteTitleSeparator = " | ";
	$the_webAddress = "http://livmershon.com";

	$the_year = "2013";
	$the_createdBy = "housewithinahouse";
	$the_createdByLink = "http://housewithinahouse.com";

	$the_linksList = array(
									 array("../", "&laquo;", "Home"),
									 array("../drawings", "&curren;", "Drawings"),
									 array("../printmaking", "&#135;", "Printmaking"),
									 array("../comics","&#9633;", "Comics"),
									 array("http://www.youtube.com/user/MammyFlammy/videos' target='_blank", "&#9895;", "Mammy Flammy"),
									 array("../badpsychic", "&#9907;", "Bad Psychic"),
									 array("../other", "&plusmn;", "Other"),
									 array("../about", "&#9660;", "About"),
									 array("","","")
									);

	$the_pageName = "DEFAULT"; //should change on most pages.

	//switches:
	$menu_skipCurrentPage = TRUE;

	class BasicWebElement
	/*
		-this is the superclass for everything that has:
			+$disp_string :: what is returned when the object is asked to display()
			+display() 		:: calls beforeDisplay(to wrap up whatever), echos $disp_string
			+append()			:: adds string to the end of $disp_string
			+prepend()		:: add string to begining of $disp_string.
			+beforeDisplay:: this is where you put any wrapup things (like closing tags).

	*/
{
	protected $disp_string;
	public function prepend($string){
		$this->disp_string = $string . $this->disp_string;
	}
	public function append($string){
		$this->disp_string .= $string;
	}
	protected function beforeDisplay(){
		$this->append("");
	}
	public function display(){
		$this->beforeDisplay();
		echo $this->disp_string;
	}
}
	?>
