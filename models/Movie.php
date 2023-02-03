<?php
    // * create a new class 
    class Movie{
        public $name;
        public $director;
        public $genres;

        public function __construct($name, $director, ...$genres){
            $this->name = $name;
            $this->director = $director;
            $this->genres = $genres;
        }

        public function getName(){
            return $this->name;
        }

        public function getDirector(){
            return $this->director;
        }

        public function getGenres(){
            return $this->genres;
        }
    }
?>