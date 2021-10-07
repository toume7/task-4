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

    /**
     * bee constructor.
     * @param $hierarchy
     * @param $varieties
     */
    public function __construct($hierarchy, $varieties)
    {
        $this->hierarchy = $hierarchy;
        $this->varieties = $varieties;
    }

    public function arrive()
    {
        /**
         * код рождения
         */
    }

    public function grow_up()
    {
        /**
         * рост
         */
    }

    public function collection()
    {
        /**
         * код  сборы пыльцы
         */
    }

    public function care()
    {
        /**
         * код заботы о потомстве
         */
    }

    public function doome(){
        echo 'гибель';
    }

    public function Display()
    {
        echo('Иерархия- ' . $this->hierarchy . '<br>' . 'разновидность- ' . $this->varieties . '<br>');
    }

    /**
     * @return mixed
     */
    public function getHierarchy()
    {
        return $this->hierarchy;
    }

    /**
     * @return mixed
     */
    public function getVarieties()
    {
        return $this->varieties;
    }

}