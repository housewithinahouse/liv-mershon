<?php

class MagicSquare
{
    public $img_src, $a_class, $a_href, $a_onclick, $a_id;
	private $disp_string;
    public function __construct(
		$img_src = "images/sumguy_thumb.jpg",
		$a_class = "highslide",
		$a_href = "#",
		$a_onclick = "return hs.expand(this)",
		$a_id = NULL
		)
	{
		$this->img_src = $img_src;
    	$this->a_class = $a_class;
    	$this->a_href = $a_href;
    	$this->a_onclick = $a_onclick;
    	$this->a_id = $a_id;
    }
    public function generate_a()
	{
		$this->disp_string = "<a id='{$this->a_id}' href='{$this->a_href}' class='{$this->a_class}' onclick='{$this->a_onclick}'>{$this->disp_string}</a>";
	}
	public function generate_img()
	{
		$this->disp_string = "<img src='{$this->img_src}'>";
	}
	public function display(){
		echo '<magicSquare>';		
		$this->generate_img();
		$this->generate_a();
		echo $this->disp_string;
		echo '</a>';
		echo '</magicSquare>';
	}
}
?>


<?php
//Example #2 List all entries in the current directory and strip out . and ..
if ($handle = opendir('./images')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            $obj = new MagicSquare("images/{$entry}");
			$obj->display();
        }
    }
    closedir($handle);
}
?>

