<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A Simple PHP File</title>
</head>
<body>
    
    <?php 
        echo "<h1> Hello, Katja!;</h1>";
        $a = NULL;
        var_dump($a);
        echo $a;

        define("SITE_URL", "https://www.tutorialrepublic.com/");
 
        // Using constant
        echo "Thank you for visiting - " . SITE_URL;
 
    ?>
</body>
</html>