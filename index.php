<?php
    $citazione='da grandi poteri derivano grandi responsabilità';
    $parola=$_GET['parola'];
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
    
<h2>
    <?php echo str_replace($parola, '***', $citazione); ?>
</h2>


<form action="" method="GET"> 
 <input type="text" name="parola">
 <button type="submit">start</button>
</form>


<h2>
    il paragrafo è lungo:
    <?php echo strlen($citazione) ?>
    caratteri
</h2>


</body>
</html>