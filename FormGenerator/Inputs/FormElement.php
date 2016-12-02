<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 01:39
 */

namespace FormGenerator\Inputs;


/**
 * Class FormElement
 * @package FormGenerator\Inputs
 */
abstract class FormElement implements \FormGenerator\Interfaces\FormElement
{

    /**
     * @var
     */
    private $name;
    /**
     * @var
     */
    private $ID;
    /**
     * @var
     */
    private $classes;
    /**
     * @var
     */
    private $label;
    /**
     * @var
     */
    private $disabled;
    /**
     * @var
     */
    private $required;
    /**
     * @var
     */
    private $wrapperClasses;
    /**
     * @var
     */
    private $after;
    /**
     * @var
     */
    private $before;
    /**
     * @var
     */
    private $checked;
    /**
     * @var
     */
    private $min;
    /**
     * @var
     */
    private $max;

    /**
     * @var
     */
    protected $formid;

    private $placeholder;

    /**
     * @return mixed
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * @param string $placeholder
     */
    public function setPlaceholder(string $placeholder)
    {
        $this->placeholder = "placeholder='{$placeholder}'";
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
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
     * @param string $ID
     */
    public function setID(string $ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return mixed
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * @param string $classes
     */
    public function setClasses(string $classes)
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
     * @param string $label
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
     * @param string $disabled
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
     * @param string $required
     */
    public function setRequired(string $required)
    {
        $this->required = $required <=> "";
    }

    /**
     * @return mixed
     */
    public function getWrapperClasses()
    {
        return $this->wrapperClasses;
    }

    /**
     * @param string $wrapperClasses
     */
    public function setWrapperClasses(string $wrapperClasses)
    {
        $this->wrapperClasses = $wrapperClasses;
    }

    /**
     * @param string $element
     */
    function setBefore(string $element)
    {
        $parts = explode(".", $element);
        $this->before = "<" . $parts[0] . " class=" . $parts[1] . ">";
    }

    /**
     * @param string $element
     */
    function setAfter(string $element)
    {
        $this->after = "</" . $element . ">";
    }


    /**
     * @return mixed
     */
    function getAfter()
    {
        return $this->after;
    }

    /**
     * @return mixed
     */
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
     * @param $formid
     */
    public function setFormid($formid)
    {
        $this->formid = $formid;
    }

    /**
     * @return mixed
     */
    public function getChecked()
    {
        return $this->checked;
    }

    /**
     * @param string $checked
     */
    public function setChecked(string $checked)
    {
        $this->checked = $checked;
    }

    /**
     * @return mixed
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * @param string $min
     */
    public function setMin(string $min)
    {
        $this->min = "min=" . $min . "";
    }

    /**
     * @return mixed
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @param string $max
     */
    public function setMax(string $max)
    {
        $this->max = "max=" . $max . "";
    }





}