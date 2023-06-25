<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Temperatura</h1>
    <?php
        $t=mt_rand(-10, 40);
        echo "Slučajna vrednost temperature je: $t<hr>";
        if($t<10)
            echo "<img src='slike/18-s.png' width='100px'>";
        else if($t>=10 and $t<25)
            echo "<img src='slike/07-s.png' width='100px'>";
        else    
            echo "<img src='slike/01-s.png' width='100px'>";
    ?>
</body>
</html>