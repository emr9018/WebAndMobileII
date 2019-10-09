<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset="UTF-8">


    <title>Riley Exercises 2</title>
    <link rel = "stylesheet" type="text/css" href="assets/css/exercises2.css">
    
    
     <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Noto+Serif+SC">
    <style>
    .star
        {
            font-family: 'Noto Serif SC', serif;

        }
    </style>
    
    </head>

<body>
    <!-- Image will be displayed here through CSS means-->
    <div class = "image">
    </div>
    <br>
    <div class = "topleftblock">
<div class = "star">*</div><b>Lilac</b>
    </div>
    <br>

    <div class = "toprightblock">
    <div class = "star">*</div><b>Dogwood</b>
    </div>
      <br>

    <div class = "bottomleftblock">
    <div class = "star">*</div><b>Pansy</b>
     </div>
        <br>

    <div class = "bottomrightblock">
    <div class = "star">*</div><b>Iris</b>   
    </div>
    
    
    <div class = "validator">
        <!-- Remind to change .HTML to .PHP when applicable -->
        <a href = "https://validator.w3.org/check?uri=https://people.rit.edu/emr9018/iste240/exercises/exercises2.php" target="_blank"> <img src="assets/images/HTML5Logo.png" alt = "HTML5 Validator"> </a>
        
        <a href = "https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fpeople.rit.edu%2Femr9018%2Fiste240%2Fexercises%2Fexercises2.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en" target="_blank"><img src="assets/images/CSSValidator.png" alt = "CSS Validator"> </a><br />
        
        <!-- EXTRA CREDIT PHP LINE CODE -->
        
        <?php
$filename = 'exercises3.php';
if (file_exists($filename)) {
    echo "Last modified: " . date ("l, F d Y h:ia", filemtime($filename));
}
?>
    </div>
</body>













</html>