<?php
    require_once __DIR__  . '/models/Movie.php';
?>


<!DOCTYPE html>
<html lang="ita">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>



<body>
    <main>
        <?php 
            $movie1 = new Movie('LOL', 'lol','sd','asd');
            $movie2 = new Movie('asdasd', 'cdcd','sasdasx','AAAAAAAA');


            echo $movie1->name;
            echo $movie1->director;
            foreach($movie1->genres as $genre){
                echo $genre;
            }
;

            echo $movie2->name;
            echo $movie2->director;
            foreach($movie2->genres as $genre){
                echo $genre;
            }
        ?>
    </main>
</body>

</html>