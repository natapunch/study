<?php

/**
 * Created by PhpStorm.
 * User: jenn
 * Date: 12.01.17
 * Time: 15:25
 */
class group
{
public $title;
public $speciality;
public $kurs;
public function display ()
{
    echo $this->title;
    echo $this->speciality;
    echo $this->kurs;
}
}