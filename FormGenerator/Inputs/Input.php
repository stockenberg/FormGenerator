<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 02:26
 */

namespace FormGenerator\Inputs;


/**
 * Class Input
 * @package FormGenerator\Inputs
 */
class Input extends FormElement implements \FormGenerator\Interfaces\InputInterface
{

    /**
     * @var
     */
    private $value;
    /**
     * @var
     */
    private $type;
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
    private $checked;

    private $labelBefore;

    private $labelAfter;

    public function getType()
    {
        return $this->type;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }

    public function getMin()
    {
        return $this->min;
    }

    public function setMin(string $min)
    {
        $this->min = "min=" . $min . "";
    }

    public function getMax()
    {
        return $this->max;
    }

    public function setMax(string $max)
    {
        $this->max = "max=" . $max . "";
    }

    public function getChecked()
    {
        return $this->checked;
    }

    public function setChecked(string $checked)
    {
        $this->checked = $checked;
    }

    public function getLabelBefore()
    {
        return $this->labelBefore;
    }

    public function setLabelBefore(string $labelBefore)
    {
        $this->labelBefore = $labelBefore;
    }

    public function getLabelAfter()
    {
        return $this->labelAfter;
    }

    public function setLabelAfter(string $labelAfter)
    {
        $this->labelAfter = $labelAfter;
    }



}