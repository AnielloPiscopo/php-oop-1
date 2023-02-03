<?php
    function getAPartOfList($list , $offset , $length){
        return array_slice($list,$offset,$length);
    };