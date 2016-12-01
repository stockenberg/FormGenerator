<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 01:44
 */

namespace FormGenerator\Views;


use FormGenerator\Inputs\FormMaster;
use FormGenerator\Interfaces\Input;
use FormGenerator\Interfaces\Select;
use FormGenerator\Interfaces\Textarea;

class FormCustom extends FormMaster
{


    protected function prepareInput(Input $input)
    {
        return "<div class='{$input->getWrapperClasses()}'>
                    <label for='{$input->getID()}'>{$input->getLabel()}</label>
                    <input name='{$input->getName()}[{$input->getID()}]' 
                            class='{$input->getClasses()}'
                            type='{$input->getType()}' 
                            id='{$input->getID()}' {$input->getRequired()} {$input->getDisabled()} 
                            value='{$input->getValue()}' />
                </div>
        ";
    }

    protected function prepareTextarea(Textarea $textarea)
    {
        return "<div class='{$textarea->getWrapperClasses()}'>
                    <label for='{$textarea->getID()}'>{$textarea->getLabel()}</label>
                    <textarea id='{$textarea->getID()}' name='{$textarea->getName()}' {$textarea->getDisabled()} {$textarea->getRequired()}>{$textarea->getText()}</textarea>
                </div>
        ";
    }

    protected function prepareSelect(Select $select)
    {
        $return = "<div class='{$select->getWrapperClasses()}'>";
        $return .= "<select class='{$select->getClasses()}' id='{$select->getID()}' {$select->getRequired()} {$select->getDisabled()} name='{$select->getName()}[{$select->getID()}]' {$select->getMultiple()} size='{$select->getSize()}'>";
        $return .= "<option disabled selected>Bitte Wählen</option>";
        foreach ($select->getOptions() as $value => $text) {
            $return .= "<option value='{$value}'>{$text}</option>";
        }
        $return .= "</select>";
        $return .= "</div>";
        return $return;

    }


}