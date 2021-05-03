<?php
    $badWord = $_GET["badWord"];  
    $txt = "un lungo paragrafo con delle parole divertenti, peculiari e alquanto proibite. Le parole possono essere molte e di diversi tipi, loquace presempio, non molto usata come parola. Erpetologo d'altro canto ha un suono divertente quanto complicato è il suo significato di esperto di lettere, infine $badWord; la aprola si spiega da sola";
    str_replace($badWord, "***", $txt);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <p><?php echo $txt; ?></p>  
</body>
</html>