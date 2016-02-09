<?php
namespace module\Classes;

use module\Interfaces\ContentInterface;

class DocumentStore {
    protected $data = [];
    
    public function AddDocument(ContentInterface $document)
    {
        $key = $document->getId();
        $value = $document->getContent();
        $this->data[$key] = $value;
    }
 
    public function getDocuments()
    {
        return $this->data;
    }
    
}
