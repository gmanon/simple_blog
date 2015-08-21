<?php 
require_once("./images.class.php");
require_once("./article.class.php");

class blog extends article{
	
	public $article;
	public $blog;
	
	function createBlog($titles, $images, $contents, $authors, $dates)
	{
		$counter = 0;	// Start a counter
		
		foreach($titles as $title)
		{
			$this->blog[$counter] = parent::buildArticle($title, $images[$counter], $contents[$counter], $authors[$counter], $dates[$counter]);
			
			$counter++;	// Increment
		}
		
		return $this->blog;

	}
	
}
$titles = array("first Title","Second Title","Third Title");
$images = array(array("position"=>"center","image"=>"myimage.jpg","location"=>"img","caption"=>"myimage"),
		array("position"=>"myimage","image"=>"myimage.jpg","location"=>"img","caption"=>"myimage"),
		array("position"=>"myimage","image"=>"myimage.jpg","location"=>"img","caption"=>"myimage"));
$contents = array("Content this is the contentContent this is the contentContent this is the contentContent this is the content",
		"Second Content this is the contentContent this is the contentContent this is the content",
		
"Third Content this is the contentContent this is the content");
$authors = array("Guillermina Gonjon","Guillermina Manon","Third Author");
$dates = array(date("Y,d,m"),date("Y,d,m"),date("Y,d,m"),date("Y,d,m"));

$newblog = new blog();
$blog = $newblog->createBlog($titles, $images, $contents, $authors, $dates);
echo '<pre>';print_r($newblog);print_r($blog);echo '</pre>';

?>