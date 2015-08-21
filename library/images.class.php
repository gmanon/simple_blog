<?php 

/*
 * @author: Guillermina Gonjon
 * @date: August 20th, 2015
 * @name: Image Class
 */
class image{
	private $image_id;
	private $image_width;
	private $image_height;
	private $image_name;
	private $image_caption;
	private $image_location;
	private $image_format;
	public $image = null;
	
	/*
	 * Convert image object to string
	 */
	function __toString()
	{
		$this->image;
	}
	
	/*
	 * @function buildImages
	 * @params images
	 * @type array
	 * @params location
	 * @type string
	 * @params caption
	 * @returns array
	 * 
	 */
	function buildImages($images=array("position"=>"positionvalue","image"=>"image_value","location"=>"locationvalue","caption"=>"cationvalue"))
	{

			$image = new Imagick($images['image']);
			$image_height = $image->getimageheight();
			$image_width = $image->getimagewidth();
			
			$this->image = 
							"<figure><img class='image' id='image' 
								src='".$images['image']
							."' align='".$images['position']."' width='$image_width' height='$image_height'>
								<caption class='caption'>".$images['caption']."</caption
							</figure>";
		
		
		return $this->image;
		
	}

}



?>