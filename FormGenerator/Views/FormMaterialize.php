<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 12:49
 */

namespace FormGenerator\Views;




use FormGenerator\Inputs\FormMaster;
use FormGenerator\Interfaces\Input;
use FormGenerator\Interfaces\Select;
use FormGenerator\Interfaces\Textarea;

class FormMaterialize extends FormMaster
{
    protected function prepareInput(Input $input)
    {
        // TODO: Implement prepareInput() method.
        echo "test";
    }

    protected function prepareTextarea(Textarea $input)
    {
        // TODO: Implement prepareTextarea() method.
    }

    protected function prepareSelect(Select $input)
    {
        // TODO: Implement prepareSelect() method.
    }


}