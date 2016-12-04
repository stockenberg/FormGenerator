<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 01:39
 */

namespace FormGenerator\Inputs;

use FormGenerator\Interfaces\MaterializeConfigInterface;


/**
 * Class FormElement
 * @package FormGenerator\Inputs
 */
class FormElement implements \FormGenerator\Interfaces\FormElementInterface
{
    use BootstrapConfigTrait;
    use MaterializeConfigTrait;
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
    private $placeholder;
    /**
     * @var
     */
    private $variant;

    private $headline;

    private $length;

    private $error;

    private $success;

    private $iconPrefix;

    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    public function setPlaceholder(string $placeholder)
    {
        $this->placeholder = "placeholder='{$placeholder}'";
    }

    public function getName()
    {
        return str_replace(".", "][", $this->name);
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getID()
    {
        return $this->ID;
    }

    public function setID(string $ID)
    {
        $this->ID = $ID;
    }

    public function getClasses()
    {
        return $this->classes;
    }

    public function setClasses(string $classes)
    {
        $this->classes = $classes;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function getDisabled()
    {
        return $this->disabled;
    }

    public function setDisabled(string $disabled)
    {
        $this->disabled = $disabled;
    }

    public function getRequired()
    {
        return $this->required;
    }

    public function setRequired(string $required)
    {
        $this->required = $required <=> "";
    }

    public function getWrapperClasses()
    {
        return $this->wrapperClasses;
    }

    public function setWrapperClasses(string $wrapperClasses)
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


    public function getHeadline()
    {
        return $this->headline;
    }

    public function setHeadline(string $headline)
    {
        $this->headline = $headline;
    }



}