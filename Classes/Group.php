<?php

/**
 * Created by PhpStorm.
 * User: jenn
 * Date: 12.01.17
 * Time: 15:25
 */
class Group
{
public $title;
public $speciality;
public $kurs;

    /**
     * group constructor.
     * @param $title
     * @param $speciality
     * @param $kurs
     */
    public function __construct ($title, $speciality, $kurs){
    echo $this->title=$title;
    echo $this->speciality=$speciality;
    echo $this->kurs=$kurs;
}
}