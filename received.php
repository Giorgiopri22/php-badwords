<?php
// definisco le variabili: 
$testo = $_POST["paragraph"];
$censura = $_POST["word"];


$lunghezzaTesto = strlen($testo);
$censoredText = str_ireplace($censura , "***" , $testo);
$censoredTextLength = strlen($censoredText);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura</title>
</head>
<body>
    <h2>
        <?php echo $lunghezzaTesto . $testo ?>
    </h2>
    <h1>
        <?php  echo $censoredText . $censoredTextLength ?>
    </h1>
</body>
</html>