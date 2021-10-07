<?php
interface gibel{
    public function doome();

        /**
         * гибель
         */
}

class bee implements gibel
{
    public $hierarchy;
    public $varieties;


    public function doome(){
        echo 'гибель';
    }

