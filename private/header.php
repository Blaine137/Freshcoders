<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreshCoders</title>
    <!-- <link rel="stylesheet" href="http://2352blaineyoung.000webhostapp.com/public/style.css"> links css to 000webhost -->
    <link rel="stylesheet" href="../public/style.css">
    <style>
        .headerImage{
            background-image: url(<?php echo $image_url; ?>);
        }
    </style>
</head>

<body>
    <header>
        <h1>FreshCoders</h1>
    </header>
    <nav>
        <a href="http://2352blaineyoung.000webhostapp.com/public/index.php">Home</a>
        <a href="http://2352blaineyoung.000webhostapp.com/public/about.php">About</a>
        <a href="http://2352blaineyoung.000webhostapp.com/public/resources.php">Resources</a>
        <a href="http://2352blaineyoung.000webhostapp.com/public/contact.php">Contact</a>
        <a href="http://2352blaineyoung.000webhostapp.com/public/login.php">Login</a>
		
	    <!-- <a href="../public/index.php">Home</a>
        <a href="../public/about.php">About</a>
        <a href="../public/resources.php">Resources</a>
        <a href="../public/contact.php">Contact</a>
        <a href="../public/login.php">Login</a> links for localhost --> 
        <?php if(isset($_SESSION['admin'])){ ?> 
            <a href="http://2352blaineyoung.000webhostapp.com/public/admin.php">Download</a>
        <?php } ?>
    </nav>
    <div class="headerImage">
    <!-- empty div for the image -->
    </div>
    <main>
