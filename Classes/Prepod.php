<?php

/**
 * Created by PhpStorm.
 * User: jenn
 * Date: 12.01.17
 * Time: 15:20
 */
class Prepod extends Person
{
    public $quality;
    public $discipline;
    public $dolj;
    public $kafedra;


    /**
     * Prepod constructor.
     * @param string $quality
     * @param int $discipline
     * @param string $dolj
     * @param $kafedra
     */
    public function __construct($quality, $discipline, $dolj, $kafedra)
    {
        parent::__construct();
        $this->quality = $quality;
        $this->discipline;
        $this->dolj;
        $this->kafedra;
    }

    public function display_info_prepod()
    {
        parent::display_info();
        echo $this->quality;
        echo $this->discipline;
        echo $this->dolj;
        echo $this->kafedra;
    }
}