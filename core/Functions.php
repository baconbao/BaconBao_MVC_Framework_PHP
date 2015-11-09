<?php

function str_secure($value)
{
    return trim(strip_tags($value));
}

function placeholders($text, $count=0, $separator=","){
    $result = array();
    if($count > 0){
        for($x=0; $x<$count; $x++){
            $result[] = $text;
        }
    }

    return implode($separator, $result);
}

function htmlkarakter($string)
{
   $string = str_secure($string);
   $string = str_replace(array("&", "<", ">",'\'','"','\n'), array("&amp;","&lt;", "&gt;", '&#039;', '&quot;', "<br>"), $string);

       $string = nl2br($string);
       $string = preg_replace( '/(<br(?: \\/)?>\\r?\\n?\\r?)(?=\\1)/is', '', $string );

       return $string;  
}