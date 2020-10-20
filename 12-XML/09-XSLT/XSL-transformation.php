<?php 


$processor = new XsltProcessor;

$xsl = new DOMDocument;
$xsl->load("xsl-rules.xsl");

$processor->importStyleSheet($xsl);

$xml = new DomDocument;
$xml->load("publications.xml");
$result = $processor->transformToXml($xml);

echo "<pre>{$result}</pre>";

 ?>