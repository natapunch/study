<?php

require_once "Person.php";
/**
 *Class Prepod
 */
class Prepod extends Person
{
    protected $quality;
    protected $discipline;
    protected $dolj;
    protected $kafedra;

    /**
     * Prepod constructor.
     */
    public function __construct($fio, $phone, $email, $quality, $discipline, $dolj, $kafedra){
        parent::__construct($fio,$phone,$email);
        echo $this->quality=$quality;
        echo $this->discipline=$discipline;
        echo $this->dolj=$dolj;
        echo $this->kafedra=$kafedra;
       }

}