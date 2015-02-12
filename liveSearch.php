<?php

$xmlDoc = new DOMDocument();
$xmlDoc->load("dataRef/ls.xml");

$x = $xmlDoc->getElementsByTagName('item');

//get the q parameter from URL
$q = $_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q) > 0) {
    $hint = "";
    for ($i = 0; $i < ($x->length); $i++) {
        $y = $x->item($i)->getElementsByTagName('name');
        $z = $x->item($i)->getElementsByTagName('extra');
        if ($y->item(0)->nodeType == 1) {
            //find a link matching the search text
            if (stristr($y->item(0)->childNodes->item(0)->nodeValue, $q)) {
                if ($hint == "") {
                    $hint = "<h3>" .
                            $y->item(0)->childNodes->item(0)->nodeValue .
                            "  </h3>";
                    $hint .= "<small>" .
                            $z->item(0)->childNodes->item(0)->nodeValue .
                            "</small>";
                } else {
                    $hint = $hint . "<h4>" .
                            $y->item(0)->childNodes->item(0)->nodeValue .
                            "<h4>";
                    //$y->item(0)->childNodes->item(0)->nodeValue . "</a>";
                }
            }
        }
    }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint == "") {
    $response = "no suggestion";
} else {
    $response = $hint;
}

//output the response
echo $response;
?>