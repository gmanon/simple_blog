<?php
/**
 ** class Template
 ** This class simple replace variables
 **/
 
class template{

    function replaceItems($items = array(),$template)
    {
        $counter = 0;           // Create a counter
        $new_document = $template;  //  Initialize new_document
        
        foreach($items as $item_key=>$item_value)
        {
        
            if($counter < 1)
            {
                $new_document .= str_replace( "<!-- {" . strtoupper($item_key) . "} -->}", 
                html_entities($item_value), $page);
            }
            else
            {
                $new_document = str_replace( "<!-- {" . strtoupper($item_key) . "} -->}", 
                html_entities($item_value), $new_document);
            }
            
            
            $counter++; // Increment counter by one
        }
        
        return $new_document;
    }
    
}


