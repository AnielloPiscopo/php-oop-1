<?php
    require_once __DIR__  . '/php/models/Movie.php';
?>


<!DOCTYPE html>
<html lang="ita">

<head>
    <!-- META TAG + TITLE -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>


    <!-- * SCRIPTS JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js" type="text/javascript" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
        integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" type="text/javascript" defer></script>
    <script src="js/script.js" type="text/javascript" defer></script>
</head>



<body>
    <div id="app">
        <main>
            <?php 
            $movie1 = new Movie('LOL', 'lol','sd','asd');
            $movie2 = new Movie('asdasd', 'cdcd','sasdasx','AAAAAAAA');


            echo $movie1->getName(). "\n";
            echo $movie1->getDirector(). "\n";
            foreach($movie1->genres as $genre){
                echo $genre."\n";
            }

            
            echo $movie2->name. "\n";
            echo $movie2->director. "\n";
            foreach($movie2->genres as $genre){
                echo $genre."\n";
            }
        ?>

            <div v-for='shi in moviesInfo'>1</div>
        </main>
    </div>
</body>

</html>