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
        return "{$input->getBefore()}
                    <div class='{$input->getWrapperClasses()}'>
                        <label for='{$input->getID()}'>{$input->getLabel()}</label>
                        <input {$input->getPlaceholder()} form='{$this->formid}' name='{$this->formid}[{$input->getName()}]' 
                                class='{$input->getClasses()}'
                                type='{$input->getType()}' 
                                id='{$input->getID()}' {$input->getRequired()} {$input->getDisabled()} 
                                value='{$input->getValue()}' />
                    </div>
                {$input->getAfter()}
        ";
    }

    protected function prepareTextarea(Textarea $input)
    {
        return "
            {$input->getBefore()}
                <div class='{$input->getWrapperClasses()}'>
                    <label for='{$input->getID()}'>{$input->getLabel()}</label>
                    <textarea {$input->getPlaceholder()} form='{$this->formid}' id='{$input->getID()}' class='{$input->getClasses()}'
                                name='{$this->formid}[{$input->getName()}]' {$input->getDisabled()} {$input->getRequired()}>{$input->getText()}
                    </textarea>
                </div>
            {$input->getAfter()}
        ";
    }

    protected function prepareSelect(Select $input)
    {
        $return = "{$input->getBefore()}<div class='{$input->getWrapperClasses()}'>";
            $return .= "<select form='{$this->formid}' class='{$input->getClasses()}' 
                                id='{$input->getID()}' {$input->getRequired()} {$input->getDisabled()} name='{$this->formid}[{$input->getName()}]' {$input->getMultiple()} 
                                size='{$input->getSize()}'>";
                $return .= "<option disabled selected>Bitte Wählen</option>";
                foreach ($input->getOptions() as $value => $text) {
                    $return .= "<option value='{$value}'>{$text}</option>";
                }
            $return .= "</select>";
        $return .= "</div>{$input->getAfter()}";

        return $return;

    }

    protected function prepareForm(Form $input)
    {
        return "<form action='{$input->getAction()}' 
                        method='{$input->getMethod()}' 
                        enctype='{$input->getEnctype()}' id='{$this->formid}' class='{$input->getClasses()}'>
                </form>";
    }


}