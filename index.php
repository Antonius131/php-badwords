<?php

   /*
        creare variabile con paragrafo di testo;
        stampare a schermo paragrafo e lunghezza;
        scegliere una parola da cesurare e passarla tramite parametro get
        sostituire con tre asterischi (*) tutte le occorrenze della parola da censurare
       stampare di nuovo il paragrafo e la sua lunghezza
    */

    $paragraph = 'Per me si va nella città dolente, Per me si va nell’eterno dolore, Per me si va tra la perduta gente.'

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
   <h1>Titolo</h1>
   <h4>La Divina Commedia - Canto III</h4>
   <pre><?php echo $paragraph?></pre>
</body>
</html>