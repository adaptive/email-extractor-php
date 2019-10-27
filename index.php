<?php
require_once "lib.php";
// use this code to extract email addresses from a text message 
$input = ' place your text within the variable $input ';

// export to csv file
csv_to_export($input);

// export to text file
text_to_export($input);
