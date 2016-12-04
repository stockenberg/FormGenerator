<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 12:45
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


class FormBootstrap extends FormMaster
{

    protected function prepareTextarea(TextareaInterface $input)
    {
        // TODO: Implement prepareTextarea() method.
    }

    protected function prepareSelect(SelectInterface $input)
    {
        // TODO: Implement prepareSelect() method.
    }

    protected function prepareInput(InputInterface $input)
    {

        switch ($input->getType()){
            case "checkbox";
                return $this->checkbox($input);
                break;

            case "submit";
                return "
                    {$input->getBefore()}
                    <button type=\"submit\" name='{$input->getName()}' class=\"btn {$input->getClasses()}\" id=\"{$input->getID()}\" {$input->getDisabled()}\">{$input->getValue()}</button>
                    {$input->getAfter()}
                    ";
                break;

            case $input->getType() . "-group":

                return "
                        {$input->getBefore()}
                        {$input->getHeadline()}
                        <div class=\"form-group {$input->getWrapperClasses()}\">
                            <label class='{$input->getLabelClasses()}' for=\"{$input->getID()}\">{$input->getLabel()}</label>
                            <div class=\"input-group\">
                            {$input->getAddonBefore()}
                            <input type=\"{$input->getType()}\" name='{$input->getName()}' class=\"form-control {$input->getClasses()}\" id=\"{$input->getID()}\" placeholder=\"{$input->getPlaceholder()}\" value=\"{$input->getValue()}\" {$input->getDisabled()} {$input->getRequired()} \">
                            {$input->getAddonAfter()}
                            {$input->getHelp()}
                             </div>
                        </div>
                        {$input->getAfter()}
                    ";

                break;

            case $input->getType() . "-horizontal":

                return "
                        {$input->getBefore()}
                        {$input->getHeadline()}
                        <div class=\"form-group {$input->getWrapperClasses()}\">
                            <label class='{$input->getLabelClasses()}' for=\"{$input->getID()}\">{$input->getLabel()}</label>
                            <div class=\"{$input->getHorizontalClasses()}\">
                            {$input->getAddonBefore()}
                            <input type=\"{$input->getType()}\" name='{$input->getName()}' class=\"form-control {$input->getClasses()}\" id=\"{$input->getID()}\" placeholder=\"{$input->getPlaceholder()}\" value='{$input->getValue()}' {$input->getDisabled()} {$input->getRequired()} \">
                            {$input->getAddonAfter()}
                             {$input->getHelp()}
                             </div>
                        </div>
                        {$input->getAfter()}
                    ";

                break;


            case "default":
                return "
                        {$input->getBefore()}
                        {$input->getHeadline()}
                        <div class=\"form-group {$input->getWrapperClasses()}\">
                            <label class='{$input->getLabelClasses()}' for=\"{$input->getID()}\">{$input->getLabel()}</label>
                            
                            
                            <input type=\"{$input->getType()}\" name='{$input->getName()}' class=\"form-control {$input->getClasses()}\" id=\"{$input->getID()}\" placeholder=\"{$input->getPlaceholder()}\" value='{$input->getValue()}' {$input->getDisabled()} {$input->getRequired()} \">
                            
                            
                             {$input->getHelp()}
                        </div>
                        {$input->getAfter()}
                    ";
                break;
        }


    }

    public function checkbox(InputInterface $input)
    {
        return "
                {$input->getBefore()}
                <div class=\"checkbox {$input->getWrapperClasses()}\">
                    <label>
                      <input type=\"checkbox\"> Check me out
                    </label>
                  </div>
                {$input->getAfter()}
                  ";
    }




}