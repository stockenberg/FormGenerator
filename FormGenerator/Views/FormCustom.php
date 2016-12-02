<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 01:44
 */

namespace FormGenerator\Views;


use FormGenerator\Inputs\FormMaster;
use FormGenerator\Interfaces\Form;
use FormGenerator\Interfaces\Input;
use FormGenerator\Interfaces\Select;
use FormGenerator\Interfaces\Textarea;

class FormCustom extends FormMaster
{

    protected function prepareInput(Input $input)
    {
        return "{$input->getBefore()}<div class='{$input->getWrapperClasses()}'>
                    <label for='{$input->getID()}'>{$input->getLabel()}</label>
                    <input form='{$this->formid}' name='{$this->formid}[{$input->getName()}]' 
                            class='{$input->getClasses()}'
                            type='{$input->getType()}' 
                            id='{$input->getID()}' {$input->getRequired()} {$input->getDisabled()} 
                            value='{$input->getValue()}' />
                </div>{$input->getAfter()}
        ";
    }

    protected function prepareTextarea(Textarea $textarea)
    {
        return "{$textarea->getBefore()}<div class='{$textarea->getWrapperClasses()}'>
                    <label for='{$textarea->getID()}'>{$textarea->getLabel()}</label>
                    <textarea form='{$this->formid}' id='{$textarea->getID()}' name='{$this->formid}[{$textarea->getName()}]' {$textarea->getDisabled()} {$textarea->getRequired()}>{$textarea->getText()}</textarea>
                </div>{$textarea->getAfter()}
        ";
    }

    protected function prepareSelect(Select $select)
    {
        $return = "{$select->getBefore()}<div class='{$select->getWrapperClasses()}'>";
        $return .= "<select form='{$this->formid}' class='{$select->getClasses()}' id='{$select->getID()}' {$select->getRequired()} {$select->getDisabled()} name='{$this->formid}[{$select->getName()}]' {$select->getMultiple()} size='{$select->getSize()}'>";
        $return .= "<option disabled selected>Bitte Wählen</option>";
        foreach ($select->getOptions() as $value => $text) {
            $return .= "<option value='{$value}'>{$text}</option>";
        }
        $return .= "</select>";
        $return .= "</div>{$select->getAfter()}";
        return $return;

    }

    protected function prepareForm(Form $form)
    {
        return "<form action='{$form->getAction()}' method='{$form->getMethod()}' enctype='{$form->getEnctype()}' id='{$this->formid}' class='{$form->getClasses()}'></form>";
    }


}