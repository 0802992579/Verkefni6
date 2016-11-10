<?php 
$title = basename($_SERVER['SCRIPT_FILENAME'], '.php'); 
$title = str_replace('_', ' ', $title); 
if ($title == 'index') {    $title = 'home'; } 
$title = ucwords($title);
?>
<head>
    <meta charset="utf-8">
    <title>A Thing<?php if (isset($title)) {echo "&#8212;{$title}";} ?> </title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/stilsida.css">
</head>
<body>
<header class="clearfix">
	<img src="images/logo.jpg" alt="A Thing" id="logo">
        <h1>A Thing</h1>
    </header>