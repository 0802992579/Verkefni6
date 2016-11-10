﻿<?php

// slóð á API, sem skilar JSON
$url ="http://tsuts.tskoli.is/2t/0802992579/verkefni6GSO/myndir.json";          
  
// JSON sótt úr API.
$json = file_get_contents($url);


// Breytum JSON streng í php assoiative array.
$myndir = json_decode($json, true);
//	print_r($myndir);
?>
<html>
<head>
    <title>A Thing<?php if (isset($title)) {echo "&#8212;{$title}";} ?> </title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/stilsida.css">
</head>
<body>
<?php
// if the form has been submitted, process the input text
if (isset($_POST['putContents'])) {
   
    
     // php býr til write.txt ef hún er ekki til, og opnar í write-only mode
    
     $file = fopen('myndir.json', 'w');
  
      // add to array
     $count = count($myndir);
   /*  $myndir[$count]['slod'] = $_POST['image'];
     $myndir[$count]['heiti'] = $_POST['caption'];*/
     // breytum php fylki aftur í JSON

      $AdditionalArray = array(
                'slod' => $_POST['image'],
                'heiti' => $_POST['caption']
                );

      
          //append additional json to json file
                $myndir[]=$AdditionalArray; 
     print_r($myndir);
     $jsonData = json_encode($myndir);


     //fwrite($file, $jsonData );
    
     file_put_contents($file, $jsonData );
     // close the file
   
     fclose($file);
}
?>

<h1>Photo</h1>
<form name="writeFile" method="POST" action="">

Caption: <input type='text' name='caption' size='35' />"; 
      <br><br>

Image: <input type='text' name='image' size='35' />
      <br><br>

  <input name="putContents" type="Submit" value="Save" />
</form>
</body>
</html>
	



