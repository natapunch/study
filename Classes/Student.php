<?php

/**
 * Created by PhpStorm.
 * User: jenn
 * Date: 12.01.17
 * Time: 16:43
 */
class Student extends Person
{
public $facultet;
public $group;
public $speciality;

    /**
     * Student constructor.
     * @param string $facultet
     * @param string $group
     * @param string $speciality
     */
    public function __construct(string $facultet, string $group, string $speciality)
{
    parent::__construct();
    $this->facultet=$facultet;
    $this->group=$group;
    $this->speciality=$speciality;

}


    public function display_info_stud()
{
    parent::display_info();
    echo $this->facultet;
    echo $this->group;
    echo $this->speciality;

}
}