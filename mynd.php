<?php ob_start( ); ?>
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
    // open the file in append mode
    // The append mode not only adds new content at the end, preserving any existing content. 
    // It also creates a new file if it doesn't already exist.
    $file = fopen('myndir.csv', 'a');
    // write the contents followed by a new line
    // PHP_EOL is a constant that represents a new line using the correct characters for the operating system (\n or \r\n).
    fwrite($file, $_POST['image'] . ",". $_POST['caption'] .PHP_EOL);
   
    // close the file
    fclose($file);
}
?>


<h1>Photo</h1>
<form name="writeFile" method="POST" action="">

Caption: <?php echo "<input type='text' name='caption' size='35' />"; ?>
      <br><br>

Image: <input type='text' name='image' size='35' />
      <br><br>

  <input name="putContents" type="Submit" value="Save" />
</form>
</body>
</html>
<?php ob_end_flush( ); ?>