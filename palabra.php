<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar palabra</title>
</head>
<body>
<?php
    $entrada=array("baseball","cat,bas,hol,base,rar,pull,ball");
    $separacion=explode(",",$entrada[1]);
    echo "Entrada: ";
    for($i=0;$i<count($entrada);$i++)
    {
        echo $entrada[$i]."\n";
    }
    echo "<br>";
    $palabra="";
    for($i=0;$i<count($separacion);$i++)
    {
        for($j=0;$j<count($separacion);$j++)
        {
            if($j!=$i)
            {
                $palabra=$separacion[$i].$separacion[$j];
                if($palabra==$entrada[0])
                {
                    echo "Salida: ".$separacion[$i].",".$separacion[$j];
                }
            }
        }
    }
?>
</body>
</html>