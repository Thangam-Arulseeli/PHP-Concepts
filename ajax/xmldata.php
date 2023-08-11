<?php
// The PHP File
// The page on the server called by the JavaScript above is a PHP file called 
   "getcd.php".

// The PHP script loads an XML document, "cd_catalog.xml", runs a query against the XML file, and returns the result as HTML:
$q=$_GET["q"];

$xmlDoc = new DOMDocument();
$xmlDoc->load("xmlcddata.xml");

$x=$xmlDoc->getElementsByTagName('ARTIST');

for ($i=0; $i<=$x->length-1; $i++) {
  //Process only element nodes
  if ($x->item($i)->nodeType==1) {
    if ($x->item($i)->childNodes->item(0)->nodeValue == $q) {
      $y=($x->item($i)->parentNode);
    }
  }
}

$cd=($y->childNodes);

for ($i=0;$i<$cd->length;$i++) {
  //Process only element nodes
  if ($cd->item($i)->nodeType==1) {
    echo("<b>" . $cd->item($i)->nodeName . ":</b> ");
    echo($cd->item($i)->childNodes->item(0)->nodeValue);
    echo("<br>");
  }
}

// When the CD query is sent from the JavaScript to the PHP page, the following happens:

// PHP creates an XML DOM object
// Find all <artist> elements that matches the name sent from the JavaScript
// Output the album information (send to the "txtHint" placeholder)

?>