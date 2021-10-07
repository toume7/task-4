<?php
abstract class grow{
    abstract protected function grow_up();
}

class human extends grow
{
    public $eye_color;
    public $body_type;
    public $gender;
    public $nationality;
    public $height;
    public $weight;

    public function __construct($eye_color, $body_type, $gender, $nationality, $height, $weight)
    {
        $this->eye_color = $eye_color;
        $this->body_type = $body_type;
        $this->gender = $gender;
        $this->nationality = $nationality;
        $this->height = $height;
        $this->weight = $weight;
    }
    protected function grow_up(){

    }


    public function die()
    {
        /**
         * код смерти
         */
    }

    /**
     * @return mixed
     */
    public function getEyeColor()
    {
        return $this->eye_color;
    }

    /**
     * @return mixed
     */
    public function getBodyType()
    {
        return $this->body_type;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

}

class flower extends grow
{
    public $color;
    public $scent;
    public $size;

    /**
     * flower constructor.
     * @param $color
     * @param $scent
     * @param $size
     */
    public function __construct($color, $scent, $size)
    {
        $this->color = $color;
        $this->scent = $scent;
        $this->size = $size;
    }
    protected function grow_up(){

    }

    public function Display()
    {
        echo('цвет цветка-' . $this->color . '<br>' . 'размер цветка-' . $this->size . "<br>" . 'запах- ' . $this->scent . "<br>");
    }
}
