<?php

/**
 * 
 */
abstract class Person
//    implements Interf
{
    protected $fio;
    protected $phone;
    protected $email;

      /**
     * Person constructor.
     * @param string $fio
     * @param int $phone
     * @param string $email
     */
    public function __construct($fio,$phone,$email)
        {
//          $this->data;
        echo $this->fio = $fio;
        echo $this->phone=$phone;
        echo $this->email=$email;

        }

    /**
     * @param $varname
     * @param $value
     */
    public function __set($varname, $value){
        $this->data[$varname] = $value;
    }

    /**
     * @param $varname
     * @return null
     */
    public function __get($varname){
        return (array_key_exists($varname, $this->data) ? $this->data[$varname] : null);
    }

    /**
     * @param $metod
     * @param $arg
     */
    public function __call($metod, $arg){
        $arg->metod;
    }

}