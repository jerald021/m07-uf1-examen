<?php
/**
 * Created by PhpStorm.
 * User: jerald021
 * Date: 19/11/15
 * Time: 19:02
 */

namespace AppBundle\Services;


class StringsService
{
    /**
     * @var
     */
    private $cadena1;
    /**
     * @var
     */
    private $cadena2;
    /**
     * @var
     */
    private $result1;

    /**
     * @return mixed
     */
    public function getCadena1()
    {
        return $this->cadena1;
    }

    /**
     * @param mixed $cadena1
     */
    public function setCadena1($cadena1)
    {
        $this->cadena1 = $cadena1;
    }

    /**
     * @return mixed
     */
    public function getCadena2()
    {
        return $this->cadena2;
    }

    /**
     * @param mixed $cadena2
     */
    public function setCadena2($cadena2)
    {
        $this->cadena2 = $cadena2;
    }

    /**
     *
     */
    public function unir()
    {
        $this->result1= $this->cadena1 . " - " . $this->cadena2;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result1;
    }

    /**
     *
     */
    public function upperCase(){
        $this->result1= strtoupper($this->cadena1);
    }

    /**
     * @return mixed
     */
    public function getUpperCase(){
        return $this->result1;
    }

    /**
     *
     */
    public function lowerCase(){
        $this->result1= strtolower($this->cadena1);
    }

    /**
     * @return mixed
     */
    public function getLowerCase(){
        return $this->result1;
    }

    /**
     *
     */
    public function length(){
        $this->result1= strlen($this->cadena1);
    }

    /**
     * @return mixed
     */
    public function getLength(){
        return $this->result1;
    }

    /**
     *
     */
    public function charAt(){
        $this->result1= substr($this->cadena1, 4, 1);
    }

    /**
     * @return mixed
     */
    public function getCharAt(){
        return $this->result1;
    }

}