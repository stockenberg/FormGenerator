<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 15:35
 */

namespace FormGenerator\Inputs;


/**
 * Class Form
 * @package FormGenerator\Inputs
 */
class Form extends FormElement implements \FormGenerator\Interfaces\Form
{

    /**
     * @var
     */
    private $action;
    /**
     * @var
     */
    private $enctype;
    /**
     * @var
     */
    private $method;

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction(string $action)
    {
        $this->action = $action;
    }

    /**
     * @return bool
     */
    public function getEnctype()
    {
        return $this->enctype <=> "";
    }

    /**
     * @param string $enctype
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
     * @param string $method
     */
    public function setMethod(string $method)
    {
        $this->method = $method;
    }


}