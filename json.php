<?php

// slóð á API, sem skilar JSON
$url ="http://tsuts.tskoli.is/2t/0802992579/verkefni6GSO/myndir.json";          
  
// JSON sótt úr API.
$json = file_get_contents($url);


// Breytum JSON streng í php assoiative array.
// Við fáum multidimensional associative array (key/value)
$myndir = json_decode($json, true);
//	print_r($myndir);

/*
Útskýringar:
        $myndir er multidimensional array (þ.e. geymir undirfylki)
        $myndir er key/value fylki 
        $myndir geymir fylkið results 
        mydnir fylkið (venjulegt fylki) geymir nokkur fylki (nafnlaus)
        Þessi nafnlausu fylki eru key/value fylki og hvert þeirra geymir upplýsingar um mynd
*/
// sækjum $myndir fylkið yfir í $fylki, til einföldunar        
$fylki = $myndir["myndir"]; 
?>
 <!-- Header -->
    <?php 
    try {
        include 'csv.php';  
        include 'header.php';
	include 'menu.php';
    ?>
  
<body>
   <section>
        <h2>A Thing for you</h2>
        <p>A Thing has been very popular for three years now. It entered the market in 2013 and was immediately popular. A Thing is manifactured by The Thing Company, a company that specializes in making life easier for modern people.</p>
        <?php
                
        foreach ($fylki as $value){
        	echo "<figure>";
        	echo "<img src='images/" . $value['slod'] . ".jpg' alt='Submit' width='100' height='100' />";
   		echo "<figcaption>" . $value['heiti'] . "</figcaption>";    
      		echo "</figure>";
	}
        ?>
        

   	
<p>A Thing has been described as the most usefull item since the ballpoint pen. Customers are universially happy with A Thing, buying more and more Things for teheir friends, family and fellow workers. Try it out - you will be amazed!</p> 
        <p>A Thing is cheap enough for everyone and so the life millions of people can be improved. Make your life better and get A Thing to day. Buy A Thing today and join a evergrowing community of Thing-user. This close-knit community has been described by members as a second family where people find true support, comfort and warmth. Don´t leave it for an another day. Buy A Thing and join a ever growing community!</p>
 		
        <p>A Thing has given rise to new usage of the word thing in english. You can read about it <a href="http://www.urbandictionary.com/define.php?term=A%20Thing">here</a> 
        and also  <a href="http://opinionator.blogs.nytimes.com/2016/04/16/is-that-even-a-thing/?_r=0">here</a>. We are extreme proud that your product has changed the English language and hope that in the future A Thing enter more languages such as Japanesese and Chineese</p>

   </section>
    
   <?php include 'footer.php';?>
  </body>
</html>
<?php } catch (Exception $e) {
header('Location: http://localhost/phpsols/error.php');
}
?>

