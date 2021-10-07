<?php
abstract class get_a_job{
    abstract protected function get_a_job();
}

class astronaut extends get_a_job
{
    public $age;
    public $body_type;
    public $gender;
    public $nationality;

    /**
     * astronaut constructor.
     * @param $age
     * @param $body_type
     * @param $gender
     * @param $nationality
     */
    public function __construct($age, $body_type, $gender, $nationality)
    {
        $this->age = $age;
        $this->body_type = $body_type;
        $this->gender = $gender;
        $this->nationality = $nationality;
    }
    protected function get_a_job(){
        /** абстрактаня функция */
    }

    public function Display()
    {
        echo('возраст-' . $this->age . '<br>' . 'телосложение- ' . $this->body_type . '<br>' . 'пол-' . $this->gender . '<br>' . 'национальность- ' . $this->nationality . '<br>');
    }

    public function get_a_specialty()
    {
        /**
         * код получение специальности
         */
    }


    public function prepare()
    {
        /**
         * код для подготовки к полету
         */
    }

    public function flight()
    {
        /**
         * код для полета
         */
    }

    public function return()
    {
        /**
         * код для возвращения
         */
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
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

}