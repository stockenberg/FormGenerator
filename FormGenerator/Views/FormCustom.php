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
use FormGenerator\Interfaces\InputInterface;
use FormGenerator\Interfaces\Select;
use FormGenerator\Interfaces\SelectInterface;
use FormGenerator\Interfaces\Textarea;
use FormGenerator\Interfaces\TextareaInterface;

class FormCustom extends FormMaster
{

    protected function prepareInput(InputInterface $input)
    {
        return "{$input->getBefore()}
                    <div class='{$input->getWrapperClasses()}'>
                        <label for='{$input->getID()}'>{$input->getLabel()}</label>
                        <input {$input->getPlaceholder()} name='{$input->getName()}' 
                                class='{$input->getClasses()}'
                                type='{$input->getType()}' 
                                id='{$input->getID()}' {$input->getRequired()} {$input->getDisabled()} 
                                value='{$input->getValue()}' />
                    </div>
                {$input->getAfter()}
        ";
    }

    protected function prepareTextarea(TextareaInterface $input)
    {
        return "
            {$input->getBefore()}
                <div class='{$input->getWrapperClasses()}'>
                    <label for='{$input->getID()}'>{$input->getLabel()}</label>
                    <textarea {$input->getPlaceholder()} id='{$input->getID()}' class='{$input->getClasses()}'
                                name='{$input->getName()}' {$input->getDisabled()} {$input->getRequired()}>{$input->getText()}
                    </textarea>
                </div>
            {$input->getAfter()}
        ";
    }

    protected function prepareSelect(SelectInterface $input)
    {
        $return = "{$input->getBefore()}<div class='{$input->getWrapperClasses()}'>";
            $return .= "<select  class='{$input->getClasses()}' 
                                id='{$input->getID()}' {$input->getRequired()} {$input->getDisabled()} name='{$input->getName()}' {$input->getMultiple()} 
                                size='{$input->getSize()}'>";
                $return .= "<option disabled selected>Bitte Wählen</option>";
                foreach ($input->getOptions() as $value => $text) {
                    $return .= "<option value='{$value}'>{$text}</option>";
                }
            $return .= "</select>";
        $return .= "</div>{$input->getAfter()}";

        return $return;

    }


}