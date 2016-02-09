<?php
include('../module/Classes/DocumentStore.php');
include('../module/Classes/HtmlDocument.php');


use module\Classes\DocumentStore;
use module\Classes\HtmlDocument;

$documentStore = new DocumentStore();

$htmlDoc = new HtmlDocument('https://php.net');

$documentStore->AddDocument($htmlDoc);

print_r($documentStore->getDocuments());

