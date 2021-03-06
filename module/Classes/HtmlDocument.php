<?php
namespace module\Classes;
include('/Users/playground/Sites/a3ji.local/module/Interfaces/ContentInterface.php');

use module\Interfaces\ContentInterface;

class HtmlDocument implements ContentInterface {
  
    protected $url;
    
    public function __construct($url)
    {
        $this->url = $url;
    }
    
    public function getContent() 
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
        $html = curl_exec($ch);
        curl_close($ch);
        
        return $html;
    }

    public function getId() 
    {
        return $this->url;
    }

//put your code here
}
