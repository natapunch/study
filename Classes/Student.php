<?php

require_once "Person.php";

/**
 * class Student extends Person
 */

class Student extends Person{
    public $facultet;
    public $group;
    public $speciality;

    /**
     * Student constructor.
     */

    public function __construct($fio,$phone,$email,$facultet, $group, $speciality){
        parent::__construct($fio,$phone,$email);
        echo $this->facultet=$facultet;
        echo $this->group=$group;
        echo $this->speciality=$speciality;

        }

 }
