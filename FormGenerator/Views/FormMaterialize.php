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
            case "checkbox":
                return $this->switch($input);
                break;

            case "radio":
                return $this->radio($input);
                break;


        }

    }

    protected function prepareTextarea(Textarea $input)
    {
        // TODO: Implement prepareTextarea() method.
    }

    protected function prepareSelect(Select $input)
    {
        // TODO: Implement prepareSelect() method.
    }

    protected function prepareForm(Form $form)
    {
        // TODO: Implement prepareForm() method.
    }

    private function switch(Input $input)
    {
        return "
            <div class=\"switch {$input->getClasses()} \">
                <label>
                  <input id='{$input->getID()}' name='{$this->formid}[{$input->getName()}]' type=\"checkbox\">
                  <span class=\"lever\"></span>
                  {$input->getLabel()}
                </label>
              </div>
        ";
    }

    private function radio(Input $input){
        return "
            <p>
              <input name='{$this->formid}[{$input->getName()}]' type=\"radio\" id='{$input->getID()}' />
              <label for='{$input->getID()}'>{$input->getLabel()}</label>
            </p>
        ";
    }


}