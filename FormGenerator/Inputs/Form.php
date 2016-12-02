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
class Form extends FormElement implements \FormGenerator\Interfaces\FormInterface
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

    private $form;


    public function getAction()
    {
        return $this->action;
    }

    public function setAction(string $action)
    {
        $this->action = "action='{$action}'";
    }

    public function getEnctype()
    {
        return $this->enctype;
    }

    public function setEnctype(string $enctype)
    {
        $this->enctype = "enctype='{$enctype}'";
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setMethod(string $method)
    {
        $this->method = "method='{$method}'";
    }

    public function getForm()
    {
        return $this->form;
    }

    public function setForm(string $form)
    {
        $this->form = $form;
    }




}