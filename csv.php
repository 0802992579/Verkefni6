<?php
/* how to extract the values from a CSV file into a multidimensional associative array using fopen() and fgetcsv().*/
/* CSV skráin: 
			There should be no space after the comma. If you add a space, it is considered to be the first character of a data field. 
			Each line in a CSV file must have the same number of items. 
*/
$file = fopen('myndir.csv', 'r');  // r fyrir lesréttindi

// get the first row from the CSV file to use as titles
// fgetcsv() gets the current line from a CSV file and converts it into an array
$titles = fgetcsv($file);

// initialize an empty array for the values that will be extracted from the CSV data
$myndir = [];
$no_myndir = 0;
// fgetcsv() moves to the next line

/*
The conditional statement uses the count() method to find out how many elements are in
the array. If there is only one, and the value of the first element is null, the continue keyword
returns to the top of the loop without executing the next line.
*/
while (($data = fgetcsv($file)) !== false) {
    
    // fgetcsv() returns an array with a single null value if it encounters a blank line
    // annars gætum við fengið meldingu í array_combine() ef null element.
    if (count($data) == 1 && is_null($data[0])) {
        continue;
    }
    // array_combine() creates an associative array using
    // the first array as array keys and the second as values
    // $users[] er multidimensional array, sem bætir við einu fylki í einu í while lykkjunni.
    $myndir[] = array_combine($titles, $data);
}
fclose($file);


?>