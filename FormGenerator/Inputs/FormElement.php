<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 01:39
 */

namespace FormGenerator\Inputs;


abstract class FormElement implements \FormGenerator\Interfaces\FormElement
{

    private $name;
    private $ID;
    private $classes = [];
    private $label;
    private $disabled;
    private $required;
    private $wrapperClasses = [];
    protected $formid;
    private $after;
    private $before;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     */
    public function setID(string $ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return array
     */
    public function getClasses()
    {
        return implode(" ", $this->classes);
    }

    /**
     * @param array $classes
     */
    public function setClasses(array $classes)
    {
        $this->classes = $classes;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * @param mixed $disabled
     */
    public function setDisabled(string $disabled)
    {
        $this->disabled = $disabled <=> "";
    }

    /**
     * @return mixed
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param mixed $required
     */
    public function setRequired(string $required)
    {
        $this->required = $required <=> "";
    }

    /**
     * @return array
     */
    public function getWrapperClasses()
    {
        return implode(" ", $this->wrapperClasses);
    }

    /**
     * @param array $wrapperClasses
     */
    public function setWrapperClasses(array $wrapperClasses)
    {
        $this->wrapperClasses = $wrapperClasses;
    }

    function setBefore(string $element)
    {
        $this->before = $element;
    }

    function setAfter(string $element)
    {
        $this->after = $element;
    }


    function getAfter()
    {
        return $this->after;
    }

    function getBefore()
    {
        return $this->before;
    }

    /**
     * @return mixed
     */
    public function getFormid()
    {
        return $this->formid;
    }

    /**
     * @param mixed $formid
     */
    public function setFormid($formid)
    {
        $this->formid = $formid;
    }


}