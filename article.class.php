<?php
/**
 ** class Article
 ** This class creates, splits and shows articles
 **/
 
class article{

    private $title;
    public $article;
    private $content;
    private $images = array();
    private $author;
    private $date;
    public $hide;
    public $article_names;
    
    function limitContent($size=100,$content)
    {
    	$word_content = str_word_count($content);
    	$new_content = '';
        //  show full article is 100%
        switch($size){
            case 100:
            	$new_content = $content;
            	break;
            	
            	case 75:
            	$new_content = substr($content,0,($word_content/75)*100);
				break;
				
            case 50:
            	$new_content = substr($content,0,($word_content/50)*100)."...\n";
				break;
            case 25:
            	breake;
            	$new_content = substr($content,0,($word_content/25)*100)."...\n";
            	break;
            default:
                $new_content = $content;
                break;

            
        }
        
        $this->content = $new_content;
        
        return $this->content;
        
    }

    
    
    function buildArticle($title, $images=array("images","location","image_caption"), $content, $author, $date, $size = 50)
    {
       $myarticle = '';
       
       $date = new DateTime();
       
       $picture = new image();
       $image = $picture->buildImages($images);
       
       // Determine size of article
		$mycontent = $this->limitContent($size,$content);
		
       $myarticle .= htmlentities(ucwords($title))."\n";
       $myarticle .= htmlentities(ucwords($author))."\n";
       $myarticle .= $date->format("M d, Y")."\n";
       $myarticle .= $image;
       $myarticle .= htmlentities($mycontent)."\n";

       $this->article = $myarticle;
       
        return $this->article;
    }
    
        
    function setArticleName()
    {
        $this->article_names [] = $this->title;
    }
    
    
    function getArticleName()
    {
        return $this->article_names;
    }
    
}


