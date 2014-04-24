<?php
include_once 'vars.php';

class MagicSquare extends BasicWebElement
{
  public $img_src, $a_class, $a_href, $a_onclick, $a_id;
  public function __construct(
	$img_src = "images/placeholder.jpg",
	$a_href = "#",
	$a_class = "default",
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
		$this->prepend("<a id='{$this->a_id}' href='{$this->a_href}' class='{$this->a_class}' onclick='{$this->a_onclick}'>");
		$this->append("</a>");
	}
	public function generate_img()
	{
		$this->append("<img src='{$this->img_src}'>");
	}
	protected function beforeDisplay(){
		$this->generate_img();
		$this->generate_a();
		$this->prepend('<magicSquare>');
		$this->append('</magicSquare>');
	}
}
class MagicRectangle extends MagicSquare
{
	protected function beforeDisplay(){
		$this->generate_img();
		$this->generate_a();
		$this->prepend('<magicRectangle>');
		$this->append('</magicRectangle>');
	}
}
class MagicFigure extends MagicSquare
{
	public $figcaption, $figlink;
	public function __construct(
	$img_src = "images/placeholder.jpg",
	$a_href = "#",
	$figcaption = "DEFAULT",
	$figlink = "> > > > > > >",
	$a_class = "default",
	$a_onclick = "return hs.expand(this)",
	$a_id = NULL
	)
	{
		$this->img_src = $img_src;
  	$this->a_class = $a_class;
  	$this->a_href = $a_href;
  	$this->a_onclick = $a_onclick;
  	$this->figcaption = $figcaption;
  	$this->figlink = $figlink;
  	$this->a_id = $a_id;
  }
	public function generate_figcaption(){
		$this->append("<figcaption>{$this->figcaption}</figcaption>");
	}
	public function generate_figlink(){
		$this->append("<figlink>{$this->figlink}</figlink>");
	}
	protected function beforeDisplay(){
		$this->generate_img();

		$this->generate_figcaption();
		$this->generate_figlink();
		$this->generate_a();
		$this->prepend('<figure>');
		$this->append('</figure>');
	}
}
?>

<?php
function makeMagicFromImages($obj_type, $a_class = "default", $a_onclick = ""){
	if ($handle = opendir('./images')) {
		while (false !== ($entry = readdir($handle))) {
		  if ($entry != "." && $entry != "..") {
		  	if(preg_match("/_thumb.jpg/", $entry)){
		  		$obj = new $obj_type("images/{$entry}", "images/".str_replace("_thumb","",$entry), $a_class, $a_onclick);
		  		$obj->display();
		  	}
			}
		}
		closedir($handle);
	}
}

function makeFiguresFromImages($obj_type = "MagicFigure"){
	if ($handle = opendir('./images')) {
		while (false !== ($entry = readdir($handle))) {
		  if ($entry != "." && $entry != "..") {
		  	if(preg_match("/_thumb.jpg/", $entry)){
		  		$obj = new MagicFigure("images/{$entry}", str_replace("_thumb.jpg","",$entry).".html", strtoupper(str_replace("_thumb.jpg","",$entry)));
		  		$obj->display();
		  	}
			}
		}
		closedir($handle);
	}
}

?>
