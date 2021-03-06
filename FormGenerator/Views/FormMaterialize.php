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
            case "switch":
                return $this->checkbox_switch($input);
                break;

            case "checkbox":
                return $this->checkbox($input);
                break;

            case "radio":
                return $this->radio($input);
                break;

            case "file":
                return "
                {$input->getBefore()}
                {$input->getHeadline()}
                    <div class='file-field input-field {$input->getWrapperClasses()}'>
                        {$input->getIconPrefix()}
                        <div class='btn'>
                            <span>{$input->getLabel()}</span>
                            <input  name='{$input->getName()}' 
                                    class='{$input->getClasses()}'
                                    {$input->getMin()} {$input->getMax()} {$input->getPlaceholder()} {$input->getLength()}
                                    type='{$input->getType()}' 
                                    id='{$input->getID()}' {$input->getRequired()} {$input->getDisabled()} 
                                    value='{$input->getValue()}' />
                          </div>
                          <div class=\"file-path-wrapper\">
                            <input class=\"file-path validate\" type=\"text\">
                          </div>
                    </div>
                {$input->getAfter()}
                ";
                break;

            default:
                return "
                {$input->getBefore()}
                {$input->getHeadline()}
                    <div class='input-field {$input->getWrapperClasses()}'>
                        {$input->getIconPrefix()}
                        <input  name='{$input->getName()}' 
                                class='{$input->getClasses()}'
                                {$input->getMin()} {$input->getMax()} {$input->getPlaceholder()} {$input->getLength()}
                                type='{$input->getType()}' 
                                id='{$input->getID()}' {$input->getRequired()} {$input->getDisabled()} 
                                value='{$input->getValue()}' />
                                <label for='{$input->getID()}' {$input->getSuccess()} {$input->getError()}>{$input->getLabel()}</label>
                    </div>
                {$input->getAfter()}";
                break;


        }

    }

    protected function prepareTextarea(TextareaInterface $input)
    {
        return "
            {$input->getBefore()}
            {$input->getHeadline()}
                <div class='input-field {$input->getWrapperClasses()}'>
                    {$input->getIconPrefix()}
                    <textarea {$input->getPlaceholder()} id='{$input->getID()}' class='materialize-textarea {$input->getClasses()}' {$input->getLength()}
                                name='{$input->getName()}' {$input->getDisabled()} {$input->getRequired()}>{$input->getText()}</textarea>
                    <label for='{$input->getID()}'>{$input->getLabel()}</label>
                </div>
            {$input->getAfter()}
       
        ";
    }

    protected function prepareSelect(SelectInterface $input)
    {

        switch ($input->getVariant()) {

            case "browser-default":
                $return = "
                {$input->getBefore()}
                {$input->getHeadline()}
                        <div class='{$input->getWrapperClasses()}'>";
                $return .= "<label for='{$input->getID()}'>{$input->getLabel()}</label>";
                $return .= "<select class='{$input->getVariant()} {$input->getClasses()}' 
                                    id='{$input->getID()}' {$input->getRequired()} {$input->getDisabled()} 
                                    name='{$input->getName()}' {$input->getMultiple()} 
                                    size='{$input->getSize()}'>";

                $return .= "<option disabled selected>Bitte Wählen</option>";
                foreach ($input->getOptions() as $value => $option) {
                    $return .= "<option value='{$value}'>{$option}</option>";
                }

                $return .= "</select>";
                $return .= "</div>
                {$input->getAfter()}";
                break;
                break;

            case "optgroup":
                $return = "
                
                {$input->getBefore()}
                {$input->getHeadline()}
                        <div class='input-field {$input->getWrapperClasses()}'>";
                $return .= "<select class='{$input->getClasses()}' 
                                    id='{$input->getID()}' {$input->getRequired()} {$input->getDisabled()} 
                                    name='{$input->getName()}' {$input->getMultiple()} 
                                    size='{$input->getSize()}'>";

                $return .= "<option disabled selected>Bitte Wählen</option>";

                foreach ($input->getOptions() as $optgroup => $option) {
                    $return .= "<optgroup {$input->getIcon()} class='circle' label='{$optgroup}'>";
                    foreach ($option as $key => $value) {
                        $return .= "<option value='{$key}'>{$value}</option>";
                    }
                    $return .= "</optgroup>";
                }

                $return .= "</select>";
                $return .= "<label for='{$input->getID()}'>{$input->getLabel()}</label>";
                $return .= "</div>
                {$input->getAfter()}";
                break;
            default:
                $return = "
                {$input->getBefore()}
                {$input->getHeadline()}
                        <div class='input-field {$input->getWrapperClasses()}'>";
                $return .= "<select class='{$input->getClasses()}' 
                                    id='{$input->getID()}' {$input->getRequired()} {$input->getDisabled()} 
                                    name='{$input->getName()}' {$input->getMultiple()} 
                                    size='{$input->getSize()}'>";

                $return .= "<option disabled selected>Bitte Wählen</option>";

                foreach ($input->getOptions() as $value => $option) {
                    $text = (is_array($option) && array_key_exists("value", $option)) ? $option["value"] : $option;

                    $icon = (is_array($option) && array_key_exists("icon", $option)) ? "data-icon='". $option["icon"] . "'" : "";

                    $iconClass = (is_array($option) && array_key_exists("classes", $option)) ? $option["classes"] : "";

                    $return .= "<option class='{$iconClass}' {$icon} value='{$value}'>{$text}</option>";
                }

                $return .= "</select>";
                $return .= "<label for='{$input->getID()}'>{$input->getLabel()}</label>";
                $return .= "</div>
                {$input->getAfter()}";
                break;
        }

        return $return;


    }


    private function checkbox_switch(InputInterface $input)
    {
        $labelBefore = ($input->getLabelBefore() != '') ? '<label for=' . $input->getID() . '>' . $input->getLabelBefore() . '</label>' : '';
        $labelAfter = ($input->getLabelAfter() != '') ? '<label for=' . $input->getID() . '>' . $input->getLabelAfter() . '</label>' : '<label for=' . $input->getID() . '>' . $input->getLabel() . '</label>';
        return "
            {$input->getBefore()}
            {$input->getHeadline()}
            <div class=\"{$input->getType()} {$input->getWrapperClasses()}\">
                <label>
                  {$labelBefore}
                  <input id='{$input->getID()}'  {$input->getRequired()} {$input->getChecked()} {$input->getDisabled()} class='{$input->getClasses()}' name='{$input->getName()}' type=\"checkbox\" value='{$input->getValue()}'>
                  <span class=\"lever\"></span>
                  {$labelAfter}
                </label>
              </div>
          {$input->getAfter()}
        ";
    }

    private function checkbox(InputInterface $input)
    {
        $labelBefore = ($input->getLabelBefore() != '') ? '<label for=' . $input->getID() . '>' . $input->getLabelBefore() . '</label>' : '';
        $labelAfter = ($input->getLabelAfter() != '') ? '<label for=' . $input->getID() . '>' . $input->getLabelAfter() . '</label>' : '<label for=' . $input->getID() . '>' . $input->getLabel() . '</label>';

        return "
            {$input->getBefore()}
            {$input->getHeadline()}
            <p class=\"{$input->getWrapperClasses()}\">
                  {$labelBefore}
                  <input id='{$input->getID()}' 
                  type='checkbox' {$input->getRequired()} {$input->getChecked()} {$input->getDisabled()}
                  class='{$input->getClasses()}' 
                  name='{$input->getName()}' value='{$input->getValue()}'>
                  {$labelAfter}
              </p>
          {$input->getAfter()}
        ";
    }

    private function radio(InputInterface $input)
    {

        $labelBefore = ($input->getLabelBefore() != '') ? '<label for=' . $input->getID() . '>' . $input->getLabelBefore() . '</label>' : '';
        $labelAfter = ($input->getLabelAfter() != '') ? '<label for=' . $input->getID() . '>' . $input->getLabelAfter() . '</label>' : '<label for=' . $input->getID() . '>' . $input->getLabel() . '</label>';

        return "
        {$input->getBefore()}
        {$input->getHeadline()}
            <p>
                  {$labelBefore}
                  <input class='{$input->getClasses()}'  {$input->getRequired()} {$input->getChecked()} {$input->getDisabled()}
                  name='{$input->getName()}' 
                  type=\"radio\" id='{$input->getID()}' value='{$input->getValue()}' />
                  {$labelAfter}
            </p>
        {$input->getAfter()}
        ";
    }


}