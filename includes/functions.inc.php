<?php
/*
 * @param: file
 * @return: string if false and object if true.
 * Check if file exists, or send a error message. 
*/

function check($file)
{
        if(file_exists($file))
        {
                 require_once($file);
        }
        else
        {
                echo "$file was not found.<br/>\n";
        }
}
