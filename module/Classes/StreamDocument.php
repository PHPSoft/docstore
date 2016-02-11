<?php
namespace module\Classes;

class StreamDocument implements ContentInterface {

    protected $resource;
    
    protected $buffer;
            
    public function __condtruct($resource, $buffer = 4096)
    {
        $this->resource = $resource;
        $this->buffer = $buffer;
    }
    
    public function getContent() 
    {
        $streamContent = '';
        rewind($this->resource);
        while (feof($this->resource) === false) {
           $streamContent .= fread($this->resource, $this->buffer);
        }
        return $streamContent;
    }

    public function getId() 
    {
        return 'resource-'.(int)$this->resource;
    }
    
    public function hasData()
    {
        
        return true;
    }

}
