<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 12:50
 */

namespace FormGenerator\Inputs;


use FormGenerator\Interfaces\FormInterface;
use FormGenerator\Interfaces\InputInterface;
use FormGenerator\Interfaces\SelectInterface;
use FormGenerator\Interfaces\TextareaInterface;

/**
 * Class FormMaster
 * @package FormGenerator\Inputs
 */
abstract class FormMaster extends Presets implements \FormGenerator\Interfaces\FormMasterInterface
{


    /**
     * @var
     */
    protected $field;
    /**
     * @var string
     */


    public function __set($name, $value)
    {
        $this->config[$this->count][$name] = $value;
    }


    /**
     * Expects an two dimensional array, each sub-array represents an form-element
     *
     * e.g. $config([first-element], [scnd-element] ... )
     *
     * # Global
     * - name
     * - ID
     * - classes "first scnd third ..."
     * - wrapperClasses "first scnd third ..."
     * - label
     * - disabled
     * - required
     * - after "htmlmarkup will be inserted after this element"
     * - before "htmlmarkup will be inserted before this element"
     * - checked
     * - placeholder
     *
     * # Input Specific
     * - type
     * - value
     * - min (for input type range)
     * - max (for input type range)
     * - checked
     * - labelBefore
     * - labelAfter
     *
     * # Select Specific
     * - multiple
     * - size
     * - options array key => value
     *
     * # Textarea Specific
     * - text
     * - length
     *
     * # Form Specific
     * - action
     * - method
     * - enctype
     *
     */
    public function addElement(string $element, string $id = ""){
        $this->count++;
        $this->config[$this->count]["element"] = $element;
        if($id != ""){
            $this->lazy($id);
        }
    }
    /**
     * @return array
     */
    protected function getConfig()
    {
        return $this->config;
    }

    /**
     * @return mixed
     */
    private function parseInput()
    {
        return $this->parse(new \FormGenerator\Inputs\Input());
    }

    /**
     * @return mixed
     */
    private function parseSelect()
    {

        return $this->parse(new \FormGenerator\Inputs\Select());
    }

    /**
     * @return mixed
     */
    private function parseTextarea()
    {
        return $this->parse(new \FormGenerator\Inputs\Textarea());
    }

    /**
     * @return mixed
     */
    private function parseForm()
    {
        return $this->parse(new \FormGenerator\Inputs\Form());
    }


    /**
     * @param Form $input
     * @return string if getForm() == start - returns starting Formtag || getForm() == end return form Endtag
     */
    protected function prepareForm(FormInterface $input)
    {
        switch ($input->getForm()){
            case "start":
                return "<form {$input->getAction()} {$input->getMethod()} {$input->getEnctype()} id='{$input->getID()}' class='{$input->getClasses()}'>";
                break;

            case "end":
                return "</form>";
                break;
        }

    }

    /**
     * @param Input $input
     * @return mixed
     */
    abstract protected function prepareInput(InputInterface $input);

    /**
     * @param Textarea $input
     * @return mixed
     */
    abstract protected function prepareTextarea(TextareaInterface $input);

    /**
     * @param Select $input
     * @return mixed
     */
    abstract protected function prepareSelect(SelectInterface $input);


    /**
     * @param FormElement $element
     * @return mixed
     */
    private function parse(FormElement $element)
    {
        $prepareInput = "";
        foreach ($this->field as $attr => $values) {
            if ($attr != "element") {
                $function = "set" . $attr;
                $element->$function($values);
            } else {
                $prepareInput = "prepare" . $values;
            }
        }
        return $this->$prepareInput($element);

    }


    /**
     * @return string
     */
    final public function Output()
    {
        $return = "";
        foreach ($this->getConfig() as $row => $field) {
            $Output = "parse" . $field["element"];
            $this->field = $field;
            $return .= $this->$Output();
        }
        return $return;
    }

}