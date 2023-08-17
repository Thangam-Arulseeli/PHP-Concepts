<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - XML</title>
</head>
<body>
    <p3> PHP - XML Introduction </h3>
    <pre>
        ***** PHP XML Parsers
            *** What is XML?
                * The XML language is a way to structure data for sharing across websites.
                * Several web technologies like RSS Feeds and Podcasts are written in XML.
                * XML is easy to create. It looks a lot like HTML, except that you make up your own tags.

            *** * What is an XML Parser?
                * To read and update, create and manipulate an XML document, you will need an XML parser.
            *** Types of XML parsers in PHP
                * Tree-Based Parsers
                * Event-Based Parsers
        
                ** Tree-Based Parsers
                    * Tree-based parsers holds the entire document in Memory and
                      transforms the XML document into a Tree structure. 
                    * It analyzes the whole document, and provides access to the Tree elements (DOM).
                    * This type of parser is a better option for smaller XML documents,
                      but not for large XML document as it causes major performance issues.
                    * Example of tree-based parsers:
                        * SimpleXML
                        * DOM
                ** Event-Based Parsers
                    * Event-based parsers do not hold the entire document in Memory,
                      instead, they read in one node at a time and allow you to interact
                      with in real time. Once you move onto the next node, 
                      the old one is thrown away.

                ** This type of parser is well suited for large XML documents.
                   It parses faster and consumes less memory.
                    * Example of event-based parsers:
                        * XMLReader
                        * XML Expat Parser

        ***** PHP SimpleXML Parser (PHP extension that allows us to easily manipulate
                    and get XML data.)
                * SimpleXML is a tree-based parser.
                * SimpleXML provides an easy way of getting an element's name,
                 attributes and textual content if you know the XML document's structure or layout.
                * SimpleXML turns an XML document into a data structure you can iterate through 
                  like a collection of arrays and objects.
                * Compared to DOM or the Expat parser, SimpleXML takes a fewer lines of
                  code to read text data from an element
                * From PHP 5, the SimpleXML functions are part of the PHP core. 
                  No installation is required to use these functions.
                * PHP SimpleXML - Read From String
                    simplexml_load_string() function is used to read XML data from a string.
        
        *** Functions to keep track of the PHP--XML Errors 
            ** libxml_use_internal_errors(true);
            ** libxml_get_errors() 
        *** The PHP simplexml_load_file() function is used to read XML data from a file.       

        *** PHP XML Expat Parser
            ** The built-in XML Expat Parser makes it possible to process XML documents in PHP.
            ** The Expat parser is an event-based parser.
            ** Look at the following XML fraction:
                <from>Arulseeli</from>
            ** An event-based parser reports the XML above as a series of three events
                * Start element: from
                * Start CDATA section, value: Arulseeli
                * Close element: from
                * The XML Expat Parser functions are part of the PHP core. 
                * There is no installation needed to use these functions.
            
        *** PHP XML DOM Parser
            * The built-in DOM parser makes it possible to process XML documents in PHP.
            * The DOM parser is a tree-based parser.

            * Look at the following XML document fraction:
                 ?xml version="1.0" encoding="UTF-8" ? 
                <from>Arulseeli</from>
                    The DOM sees the XML above as a tree structure:

                    Level 1: XML Document
                    Level 2: Root element: 
                    Level 3: Text element: "Arulseeli" 
        
            * The DOM parser functions are part of the PHP core (no installation needed)
             
    </pre>

<hr>
    <?php
       // Example 1.1 // Retrieve XML data in PHP 
       // Assume we have a variable $myXMLData  that contains XML data
         echo "Example 1.1: <br>";
         echo "<h4>Get XML data, which is defined in php file and print it....</h4>";
            $myXMLData =
            "<?xml version='1.0' encoding='UTF-8'?>
            <note>
                <from>Arulseeli</from>
                <to>Blessie</to>
                <heading>Reminder</heading>
                <body>Don't forget to come to my home this weekend!</body>
            </note>";
    
        // The example below shows how to use the simplexml_load_string() function 
        // to read XML data from a string:
               
        $xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
        print_r($xml);
        echo "<br>";
    // ** The output of the code above will be:
    
    // SimpleXMLElement Object ( [to] => Blessie [from] => Arulseeli [heading] => Reminder [body] => Don't forget to come to my home this weekend! )
    // ** Error Handling Tip: 
       //Use the libxml functionality to retrieve all XML errors when loading the document 
       //and then iterate over the errors. 
       //The following example tries to load a broken XML string:
    ?>

    <hr>

    <?php
        // Example 1.2  // To handle XML errors
        // Error Handling Tip: Use the libxml functionality to retrieve all XML errors
        //  when loading the document and then iterate over the errors. 
        // The following example tries to load a broken XML string:
             echo "Example 1.2: <br>";
            libxml_use_internal_errors(true);
            $myXMLData =
            "<?xml version='1.0' encoding='UTF-8'?>
            <document>
                <userdata >Arulseeli </userdata>
                <email>seeliseelan@example.com</email>
            </document>";

            $xml = simplexml_load_string($myXMLData);
            if ($xml === false) {
            echo "Failed loading XML: ";
            foreach(libxml_get_errors() as $error) {
                echo "<br>", $error->message;
            }
            } else {
            print_r($xml);
            }
            echo "<br>";
            // output
            //     Failed loading XML:
            //     Opening and ending tag mismatch: user line 3 and wronguser
            //     Opening and ending tag mismatch: email line 4 and wrongemail
    ?>
<hr>
      <?php
        // <!-- XML File contains data -->
        // <?xml version="1.0" encoding="UTF-8"?>
        //     <notes>
            //     <to>Rama Devi<to>
            //     <from>Arulseeli</from>
            //     <heading>Reminder</heading>
            //     <body>Don't forget to call me when you are free!!!!</body>
        //     </notes>
        ?>
        <!-- The example below shows how to use the simplexml_load_file() function 
            to read XML data from a file   -->
     <hr>

        <?php
            // Example 2.1   // Reads the data from XML file - notes.xml 
            echo "Example 2.1: <br>";
            echo "<br> Loads data from external XML File <br>";
            $xml=simplexml_load_file("http://localhost/php-concepts/assets/files/nodes.xml") or die("Error: Cannot create object");
            print_r($xml);
            echo "<br>";
            // Output 
            // SimpleXMLElement Object ( [to] => Rama Devi [from] => Arulseeli [heading] => Reminder [body] => Don't forget to come to my home this weekend! )
        ?>
<hr>

    <?php
        // Example 2.2   // PHP SimpleXML - Get Node/Attribute Values
        // SimpleXML is a PHP extension that allows us to easily manipulate and get XML data. 
        // Get the node values from the "notes.xml" file
        echo "Example 2.2: <br>";
        $xml=simplexml_load_file("http://localhost/php-concepts/assets/files/nodes.xml") or die("Error: Cannot create object");
        echo $xml->to . "<br>";
        echo $xml->from . "<br>";
        echo $xml->heading . "<br>";
        echo $xml->body;

        // Output 

        // Rama Devi
        // Arulseeli
        // Reminder
        // Don't forget to come to my home this weekend!
    ?>

<hr>

    <?php
        // Example 2.3  // PHP SimpleXML - Get Node Values of Specific Elements (Have books.xml)
        // Gets the node value of the <title> element in the first and
        // second <book> elements in the "books.xml" file: 
        echo "Example 2.3: <br>";
        $xml=simplexml_load_file("http://localhost/php-concepts/assets/files/books.xml") or die("Error: Cannot create object");
        echo $xml->book[0]->title . "<br>";
        echo $xml->book[1]->title . "<br>";
        echo $xml->book[2]->title . "<br>";
        echo "<br>";
        // Output 

        //Everyday Italian
        //Harry Potter
    ?>
       
       <hr>

    <?php
        // Example 2.4  // PHP SimpleXML - Get Node Values - Iterate using foreach Loop 
        echo "Example 2.4: <br>";
        $xml=simplexml_load_file("http://localhost/php-concepts/assets/files/books.xml") or die("Error: Cannot create object");
        foreach($xml->children() as $books) {
            echo $books->title . ", ";
            echo $books->author . ", ";
            echo $books->year . ", ";
            echo $books->price . "<br>";
        }
    ?>

<hr>
    <?php
        // Example 3.1  // PHP SimpleXML - Get Attribute Values
        echo "Example 3.1: <br>";
        $xml=simplexml_load_file("http://localhost/php-concepts/assets/files/books.xml") or die("Error: Cannot create object");
        echo $xml->book[0]['category'] . "<br>";
        echo $xml->book[1]->title['lang'] . "<br> <br>";

        //Output 

        //COOKING
        //en
    ?>

<hr>
    <?php
        // Example 3.2  // PHP SimpleXML - Get Attribute Values - Loop
        // Gets the attribute values of the <title> elements in the "books.xml" file
        echo "Example 3.2: <br>";
        $xml=simplexml_load_file("http://localhost/php-concepts/assets/files/books.xml") or die("Error: Cannot create object");
        foreach($xml->children() as $books) {
        echo $books->title['lang'];
        echo "<br>";
        }
        
        // Output
        //     en
        //     en
        //     en-us
        //     en-us
    ?>
<hr>

    <?php
        // Example 4 //  Initializing the XML Expat Parser
        // We want to initialize the XML Expat Parser in PHP, 
        // define some handlers for different XML events, and then parse the XML file.

        echo "Example 4: <br>";
        // Initialize the XML parser
        $parser=xml_parser_create();

        // Function to use at the start of an element
        function start($parser,$element_name,$element_attrs) {
        switch($element_name) {
            case "NOTE":
            echo "-- Note --<br>";
            break;
            case "TO":
            echo "To: ";
            break;
            case "FROM":
            echo "From: ";
            break;
            case "HEADING":
            echo "Heading: ";
            break;
            case "BODY":
            echo "Message: ";
        }
        }

        // Function to use at the end of an element
        function stop($parser,$element_name) {
        echo "<br>";
        }

        // Function to use when finding character data
        function char($parser,$data) {
        echo $data . "<br>";
        }

        // Specify element handler
        xml_set_element_handler($parser,"start","stop");

        // Specify data handler
        xml_set_character_data_handler($parser,"char");

        // Open XML file
        $fp=fopen("http://localhost/php-concepts/assets/files/nodes.xml","r");

        // Read data
        while ($data=fread($fp,4096)) {
        xml_parse($parser,$data,feof($fp)) or
        die (sprintf("XML Error: %s at line %d",
        xml_error_string(xml_get_error_code($parser)),
        xml_get_current_line_number($parser)));
        }

        // Free the XML parser
        xml_parser_free($parser);

        // Explanation

        // Initialize the XML parser with the xml_parser_create() function
        // Create functions to use with the different event handlers
        // Add the xml_set_element_handler() function to specify which function will be executed when the parser encounters the opening and closing tags
        // Add the xml_set_character_data_handler() function to specify which function will execute when the parser encounters character data
        // Parse the file "nodes.xml" with the xml_parse() function
        // In case of an error, add xml_error_string() function to convert an XML error to a textual description
        // Call the xml_parser_free() function to release the memory allocated with the xml_parser_create() function
    ?>

<hr>
    <?php
        // Example 5  //  Load and Output XML
        // Initializes the XML parser, load the xml, and output it:
        echo "Example 5: <br>";
        $xmlDoc = new DOMDocument();
        $xmlDoc->load("http://localhost/php-concepts/assets/files/nodes.xml");

        print $xmlDoc->saveXML();

        //The output of the code above will be:

        // Rama Devi Arulseeli Reminder Don't forget me this weekend!
        // If you select "View source" in the browser window,
        // you will see the following HTML:

        // <?xml version="1.0" encoding="UTF-8"?>
        // <notes>
        // <to>Blessie</to>
        // <from>Arulseeli</from>
        // <heading>Reminder</heading>
        // <body>Don't forget to come to my home this weekend!</body>
        // </notes>
        // The example above creates a DOMDocument-Object and loads the XML from "note.xml" into it.

        // Then the saveXML() function puts the internal XML document into a string, so we can output it.

    ?>
    <hr>

<?php
    // Example 6  //  Looping through XML
    // We want to initialize the XML parser, load the XML, and loop through all elements of the <note> element:
    echo "Example 6: <br>";
    $xmlDoc = new DOMDocument();
    $xmlDoc->load("http://localhost/php-concepts/assets/files/nodes.xml");

    $x = $xmlDoc->documentElement;
    foreach ($x->childNodes AS $item) {
         print $item->nodeName . " = " . $item->nodeValue . "<br>";
    }
    
        // Output 
        // #text =
        // to = Rama Devi
        // #text =
        // from = Arulseeli
        // #text =
        // heading = Reminder
        // #text =
        // body = Don't forget to come to my home this weekend!
        // #text =

        // Note:
        // When XML generates, it often contains white-spaces between the nodes. 
        // The XML DOM parser treats these as ordinary elements, and 
        // if you are not aware of them, they sometimes cause problems.
        ?>
<hr>
</body>
</html>
