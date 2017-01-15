<?php

/**
 * Created by PhpStorm.
 * User: jenn
 * Date: 12.01.17
 * Time: 16:29
 */
abstract class Person
//    implements Interf
{
    protected $fio;
    protected $phone;
    protected $email;

    public $data = array();

    /**
     * Person constructor.
     * @param string $fio
     * @param int $phone
     * @param string $email
     */
    public function __construct(string $fio, int $phone, string $email)
        {
        $this->fio = $fio;
        $this->phone=$phone;
        $this->email=$email;
        }
    public function __set($varname, $value)
    {
        $this->data[$varname] = $value;
    }

    public function __get($varname)
    {
        return (aray_key_exist($varname, $this->data) ? $this->data[$varname] : null);
    }

    public function __call($metod, $arg)
    {
        $arg->metod;
    }




    public function display_info()
    {

    echo $this->fio;
    echo $this->phone;
    echo $this->email;

    }
}


?>