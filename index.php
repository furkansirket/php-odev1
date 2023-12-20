<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
 function ucgen($s){
     for($i=1;$i < $s;$i++){ 
        $j=0; 
        while($j <$i){
             echo "o"; $j+=1;}
              echo "<br />"; } }

    ucgen(5);
    ?>   
</body>
</html>