<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 12:49
 */

namespace FormGenerator\Views;


use FormGenerator\Inputs\FormMaster;
use FormGenerator\Interfaces\Form;
use FormGenerator\Interfaces\Input;
use FormGenerator\Interfaces\Select;
use FormGenerator\Interfaces\Textarea;

class FormMaterialize extends FormMaster
{
    protected function prepareInput(Input $input)
    {

        switch ($input->getType()) {
            case "checkbox-switch":
                return $this->checkbox_switch($input);
                break;

            case "checkbox":
                return $this->checkbox($input);
                break;

            case "radio":
                return $this->radio($input);
                break;

            default:
                return "
                {$input->getBefore()}
                    <div class='input-field {$input->getWrapperClasses()}'>
                        <label for='{$input->getID()}'>{$input->getLabel()}</label>
                        <input form='{$this->formid}' name='{$this->formid}[{$input->getName()}]' 
                                class='{$input->getClasses()}'
                                {$input->getMin()} {$input->getMax()} {$input->getPlaceholder()}
                                type='{$input->getType()}' 
                                id='{$input->getID()}' {$input->getRequired()} {$input->getDisabled()} 
                                value='{$input->getValue()}' />
                    </div>
                {$input->getAfter()}";
                break;


        }

    }

    protected function prepareTextarea(Textarea $input)
    {
        return "
            {$input->getBefore()}
                <div class='input-field {$input->getWrapperClasses()}'>
                    <label for='{$input->getID()}'>{$input->getLabel()}</label>
                    <textarea {$input->getPlaceholder()} form='{$this->formid}' id='{$input->getID()}' class='materialize-textarea {$input->getClasses()}'
                                name='{$this->formid}[{$input->getName()}]' {$input->getDisabled()} {$input->getRequired()}>{$input->getText()}</textarea>
                </div>
            {$input->getAfter()}
       
        ";
    }

    protected function prepareSelect(Select $input)
    {

    }

    protected function prepareForm(Form $form)
    {
        // TODO: Implement prepareForm() method.
    }

    private function checkbox_switch(Input $input)
    {
        return "
            {$input->getBefore()}
            <div class=\"switch {$input->getWrapperClasses()}\">
                <label>
                  <input id='{$input->getID()}'  {$input->getRequired()} {$input->getChecked()} {$input->getDisabled()} class='{$input->getClasses()}' name='{$this->formid}[{$input->getName()}]' type=\"checkbox\">
                  <span class=\"lever\"></span>
                  {$input->getLabel()}
                </label>
              </div>
          {$input->getAfter()}
        ";
    }

    private function checkbox(Input $input)
    {
        return "
            {$input->getBefore()}
            <p class=\"{$input->getWrapperClasses()}\">
                  <input id='{$input->getID()}' 
                  type='checkbox' {$input->getRequired()} {$input->getChecked()} {$input->getDisabled()} 
                  class='{$input->getClasses()}' 
                  name='{$this->formid}[{$input->getName()}]'>
                  <label for='{$input->getID()}'>{$input->getLabel()}</label>
              </p>
          {$input->getAfter()}
        ";
    }

    private function radio(Input $input)
    {
        return "
        {$input->getBefore()}
            <p>
              <input class='{$input->getClasses()}'  {$input->getRequired()} {$input->getChecked()} {$input->getDisabled()}
              name='{$this->formid}[{$input->getName()}]' 
              type=\"radio\" id='{$input->getID()}' />
              <label for='{$input->getID()}'>{$input->getLabel()}</label>
            </p>
        {$input->getAfter()}
        ";
    }


}