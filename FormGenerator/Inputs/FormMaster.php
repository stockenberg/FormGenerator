<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 12:50
 */

namespace FormGenerator\Inputs;

use FormGenerator\Interfaces\Form;
use FormGenerator\Interfaces\Input;
use FormGenerator\Interfaces\Select;
use FormGenerator\Interfaces\Textarea;

/**
 * Class FormMaster
 * @package FormGenerator\Inputs
 */
abstract class FormMaster implements \FormGenerator\Interfaces\FormMaster
{
    /**
     * @var array
     */
    protected $config = array();
    /**
     * @var
     */
    protected $field;
    /**
     * @var string
     */
    protected $formid;

    /**
     * FormMaster constructor.
     * @param string $formid
     */
    public function __construct(string $formid)
    {
        $this->formid = $formid;
    }

    /**
     * @param array $config
     */
    public function setConfig(array $config)
    {
        $this->config = $config;
    }

    /**
     * @return array
     */
    private function getConfig()
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
     * @param Input $input
     * @return mixed
     */
    abstract protected function prepareInput(Input $input);

    /**
     * @param Textarea $input
     * @return mixed
     */
    abstract protected function prepareTextarea(Textarea $input);

    /**
     * @param Select $input
     * @return mixed
     */
    abstract protected function prepareSelect(Select $input);

    /**
     * @param Form $form
     * @return mixed
     */
    abstract protected function prepareForm(Form $form);

    /**
     * @param \FormGenerator\Interfaces\FormElement $element
     * @return mixed
     */
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