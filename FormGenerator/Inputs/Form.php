<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 15:35
 */

namespace FormGenerator\Inputs;


class Form extends FormElement implements \FormGenerator\Interfaces\Form
{

    private $action;
    private $enctype;
    private $method;

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction(string $action)
    {
        $this->action = $action;
    }

    /**
     * @return mixed
     */
    public function getEnctype()
    {
        return $this->enctype;
    }

    /**
     * @param mixed $enctype
     */
    public function setEnctype(string $enctype)
    {
        $this->enctype = $enctype;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $method
     */
    public function setMethod(string $method)
    {
        $this->method = $method;
    }


}