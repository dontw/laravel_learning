<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
          <?php
            if($arr['complete']){
                echo "&#9989";
            }else{
                echo "&Cross;";
            }
          ?> 

          <?php if($arr['complete']) : ?>
            <h1>ok</h1>
          <?php else : ?>
            <h1>NO</h1>
          <?php endif; ?>
   
</body>
</html>