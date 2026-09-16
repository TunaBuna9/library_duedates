<!-- Nichole Blachford 2026 -->
 <?php
    include "functions.php";
 ?>


<!-- MAKE IT LOOK NICE -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Due Date checker</title>
</head>
<body>
    <?php 
        include("form.php");
        if ($_GET){
            echo $bookMessage;
            echo "<br>";
            echo $bookMessage2;
        }
    ?>
    
</body>
</html>