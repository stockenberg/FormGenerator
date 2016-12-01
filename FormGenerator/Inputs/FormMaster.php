<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 12:50
 */

namespace FormGenerator\Inputs;

use FormGenerator\Interfaces\Input;
use FormGenerator\Interfaces\Select;
use FormGenerator\Interfaces\Textarea;

abstract class FormMaster implements \FormGenerator\Interfaces\FormMaster
{

    protected $config = array();
    protected $field;

    /**
     * Define Form-Array
     * @param array $config
     */
    public function setConfig(array $config)
    {
        $this->config = $config;
    }

    private function getConfig()
    {
        return $this->config;
    }

    private function parseInput()
    {
        return $this->parse(new \FormGenerator\Inputs\Input());
    }

    private function parseSelect()
    {
        return $this->parse(new \FormGenerator\Inputs\Select());
    }

    private function parseTextarea()
    {
        return $this->parse(new \FormGenerator\Inputs\Textarea());
    }


    abstract protected function prepareInput(Input $input);

    abstract protected function prepareTextarea(Textarea $input);

    abstract protected function prepareSelect(Select $input);

    private function parse(\FormGenerator\Interfaces\FormElement $element)
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


    final public function Output(){
        $return = "";
        foreach ($this->getConfig() as $row => $field) {
            $Output = "parse" . $field["element"];
            $this->field = $field;
            $return .= $this->$Output();
        }
        return $return;
    }

}