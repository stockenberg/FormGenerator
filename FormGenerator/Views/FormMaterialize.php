<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 12:49
 */

namespace FormGenerator\Views;


use FormGenerator\Inputs\FormMaster;
use FormGenerator\Interfaces\InputInterface;
use FormGenerator\Interfaces\SelectInterface;
use FormGenerator\Interfaces\TextareaInterface;

class FormMaterialize extends FormMaster
{

    protected function prepareInput(InputInterface $input)
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
                        <input  name='{$input->getName()}' 
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

    protected function prepareTextarea(TextareaInterface $input)
    {
        return "
            {$input->getBefore()}
                <div class='input-field {$input->getWrapperClasses()}'>
                    <label for='{$input->getID()}'>{$input->getLabel()}</label>
                    <textarea {$input->getPlaceholder()} id='{$input->getID()}' class='materialize-textarea {$input->getClasses()}'
                                name='{$input->getName()}' {$input->getDisabled()} {$input->getRequired()}>{$input->getText()}</textarea>
                </div>
            {$input->getAfter()}
       
        ";
    }

    protected function prepareSelect(SelectInterface $input)
    {
        $return = "{$input->getBefore()}
                    <div class='input-field {$input->getWrapperClasses()}'>";
            $return .= "<select class='{$input->getClasses()}' 
                                id='{$input->getID()}' {$input->getRequired()} {$input->getDisabled()} 
                                name='{$input->getName()}' {$input->getMultiple()} 
                                size='{$input->getSize()}'>";

                 $return .= "<option disabled selected>Bitte Wählen</option>";

                foreach ($input->getOptions() as $value => $text) {
                    $return .= "<option value='{$value}'>{$text}</option>";
                }

            $return .= "</select>";
        $return .= "<label for='{$input->getID()}'>{$input->getLabel()}</label>";
        $return .= "</div>
            {$input->getAfter()}";
        return $return;
    }


    private function checkbox_switch(InputInterface $input)
    {
        return "
            {$input->getBefore()}
            <div class=\"switch {$input->getWrapperClasses()}\">
                <label>
                  <input id='{$input->getID()}'  {$input->getRequired()} {$input->getChecked()} {$input->getDisabled()} class='{$input->getClasses()}' name='{$input->getName()}' type=\"checkbox\">
                  <span class=\"lever\"></span>
                  {$input->getLabel()}
                </label>
              </div>
          {$input->getAfter()}
        ";
    }

    private function checkbox(InputInterface $input)
    {
        return "
            {$input->getBefore()}
            <p class=\"{$input->getWrapperClasses()}\">
                  <input id='{$input->getID()}' 
                  type='checkbox' {$input->getRequired()} {$input->getChecked()} {$input->getDisabled()} 
                  class='{$input->getClasses()}' 
                  name='{$input->getName()}'>
                  <label for='{$input->getID()}'>{$input->getLabel()}</label>
              </p>
          {$input->getAfter()}
        ";
    }

    private function radio(InputInterface $input)
    {
        return "
        {$input->getBefore()}
            <p>
              <input class='{$input->getClasses()}'  {$input->getRequired()} {$input->getChecked()} {$input->getDisabled()}
              name='{$input->getName()}' 
              type=\"radio\" id='{$input->getID()}' />
              <label for='{$input->getID()}'>{$input->getLabel()}</label>
            </p>
        {$input->getAfter()}
        ";
    }


}