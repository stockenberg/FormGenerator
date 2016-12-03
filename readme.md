<pre>
<h4>Composer Autoload</h4>
"autoload": {
    "psr-4": {
      "FormGenerator\\": "FormGenerator/"
    }
  }
<h4>Documentation</h4>
Questions? -> MStockenberg [AT] gmail [DOT] com
<h5>Demo: http://g.mstockenberg.de</h5>
<ul>
<h5>Global</h5>
<li>name</li>
<li>ID</li>
<li>classes "first scnd third ..."</li>
<li>wrapperClasses "first scnd third ..."</li>
<li>label</li>
<li>disabled</li>
<li>required</li>
<li>after "htmlmarkup will be inserted after this element"</li>
<li>before "htmlmarkup will be inserted before this element"</li>
<li>checked</li>
<li>placeholder</li>

<h5>Input Specific</h5>
<li>type</li>
<li>value</li>
<li>min (for input type range)</li>
<li>max (for input type range)</li>
<li>checked</li>
<li>labelBefore (Just for Materialize Switch)</li>
<li>labelAfter (Just for Materialize Switch)</li>

<h5>Select Specific</h5>
<li>multiple</li>
<li>size</li>
<li>options array key => value</li>

<h5>Textarea Specific</h5>
<li>text</li>
<li>length</li>

<h5>Form Specific</h5>
<li>action</li>
<li>method</li>
<li>enctype</li>
</ul>

<h3>Min Setup</h3>
<h5>Get Right Library</h5>
$form = new \FormGenerator\Views\FormMaterialize();
<h5>Start Form</h5>
$form->addElement("Form");
$form->form = "start";
$form->action = "#";
$form->method = "post";
$form->id = "Register";
<h5>Add Element</h5>
$form->addElement("Input");
$form->headline = "&lt;h5&gt;Input&lt;/h5&gt;";
$form->type = "text";
$form->label = "Normal Textbox";
$form->classes = "validate";
$form->id = "normal";
<h5>Close Formtag</h5>
$form->addElement("Form");
$form->form = "end";
<h5>Rendering</h5>
$form->Output();

<h3>Full Setup </h3>
<h5>Demo: http://g.mstockenberg.de</h5>

<h5>Get Right Library</h5>

$form = new \FormGenerator\Views\FormMaterialize();

<h5>Start Form</h5>

$form->addElement("Form");
$form->form = "start";
$form->action = "#";
$form->method = "post";
$form->id = "Register";

<h5>Selectlists</h5>

$form->addElement("Select");
$form->headline = "&lt;h5&gt;Select&lt;/h5&gt;";
$form->name = "Register[anrede]";
$form->before = "&lt;div class='row'&gt;";
$form->classes = "icons";
$form->wrapperClasses = "col s4 m4 l4";
$form->label = "Select with Icons left";
$form->options = [
    "key" => [
        "value" => "Text",
        "icon" => "picture-95970-1460131169.png",
        "classes" => "circle left"
    ],

];
<br />

$form->addElement("Select");
$form->name = "Register[anrede]";
$form->classes = "icons";
$form->label = "Select with Icons right";
$form->wrapperClasses = "col s4 m4 l4";
$form->options = [
    "key" => [
        "value" => "Text",
        "icon" => "picture-95970-1460131169.png",
        "classes" => "circle"
    ],
];
<br />

$form->addElement("Select");
$form->name = "Register[anrede]";
$form->wrapperClasses = "col s4 m4 l4";
$form->label = "Normal";
$form->options = [
    "herr" => "Herr",
    "frau" => "Frau"
];
<br />

$form->addElement("Select");
$form->name = "Register[anrede]";
$form->classes = "validate";
$form->wrapperClasses = "col s4 m4 l4";
$form->label = "Multiple";
$form->multiple = "multiple";
$form->options = [
    "herr" => "Herr",
    "frau" => "Frau"
];
<br />

$form->addElement("Select");
$form->name = "Register[anrede]";
$form->wrapperClasses = "col s4 m4 l4";
$form->classes = "validate";
$form->variant = "optgroup";
$form->label = "Optgroup";
$form->options = [
    "Anrede" => [
        "herr" => "Herr",
        "frau" => "Frau"
    ]
];
<br />

$form->addElement("Select");
$form->name = "Register[anrede]";
$form->label = "Browser Default";
$form->wrapperClasses = "col s4 m4 l4";
$form->variant = "browser-default";
$form->id = "default";
$form->after = "&lt;/div&gt;";
$form->options = [
    "herr" => "Herr",
    "frau" => "Frau"
];

<h5>Input</h5>

$form->addElement("Input");
$form->headline = "&lt;h5&gt;Input&lt;/h5&gt;";
$form->type = "text";
$form->label = "Normal Textbox";
$form->classes = "validate";
$form->id = "normal";
<br />
$form->addElement("Input");
$form->type = "text";
$form->label = "Account Textbox";
$form->classes = "validate";
$form->iconPrefix = "account_circle";
$form->id = "normal";
<br />

$form->addElement("Input");
$form->type = "text";
$form->label = "Autocomplete";
$form->classes = "validate autocomplete";
$form->iconPrefix = "textsms";
$form->id = "autocomplete";
<br />

$form->addElement("Input");
$form->type = "text";
$form->label = "Phone Textbox";
$form->classes = "validate";
$form->iconPrefix = "phone";
$form->id = "normal";
<br />

$form->addElement("Input");
$form->before = "&lt;p style='display: inline-block'>Das ist eine inline Textbox&lt;/p&gt;";
$form->type = "text";
$form->label = "Inline Textbox";
$form->classes = "validate";
$form->wrapperClasses = "inline";
$form->id = "normal";
<br />

$form->addElement("Input");
$form->type = "email";
$form->label = "E-Mail";
$form->classes = "validate";
$form->error = "Falsch ausgefüllt";
$form->success = "Erfolg!";
<br />

$form->addElement("Input");
$form->type = "date";
$form->label = "Date";
$form->classes = "datepicker";
<br />

$form->addElement("Input");
$form->type = "text";
$form->label = "Text with Length Count";
$form->classes = "validate";
$form->length = "120";
$form->id = "length";
<br />

$form->addElement("Input");
$form->type = "password";
$form->label = "Password";
$form->classes = "validate";
$form->id = "password";

<h5>Radio / Checkboxes</h5>

$form->addElement("Input");
$form->headline = "&lt;h5&gt;Radio / Checkbox&lt;/h5&gt;";
$form->type = "switch";
$form->labelBefore = "off";
$form->labelAfter = "on";
<br />

$form->addElement("Input");
$form->type = "radio";
$form->classes = "with-gap";
$form->label = "with-gap";
$form->id = "filled";
<br />

$form->addElement("Input");
$form->type = "radio";
$form->label = "radio";
$form->id = "asd";
<br />

$form->addElement("Input");
$form->type = "checkbox";
$form->classes = "filled-in";
$form->label = "filled-in";
$form->id = "my";
<br />

$form->addElement("Input");
$form->type = "checkbox";
$form->label = "checkbox";
$form->id = "check";

<h5>Textareas</h5>

$form->addElement("Textarea");
$form->headline = "&lt;h5&gt;Textareas&lt;/h5&gt;";
$form->label = "Message";
$form->id = "message";
<br />

$form->addElement("Textarea");
$form->label = "Message";
$form->id = "message";
<br />

$form->addElement("Textarea");
$form->label = "Message";
$form->id = "message-length";
$form->iconPrefix = "mode_edit";
$form->classes = "validate";
$form->length = "120";

<h5>Buttons</h5>

$form->addElement("Input");
$form->headline = "&lt;h5&gt;Buttons&lt;/h5&gt;";
$form->label = "File Upload";
$form->id = "file";
$form->type = "file";
<br />

$form->addElement("Input");
$form->value = "Submit";
$form->id = "reset";
$form->wrapperClasses = "row";
$form->classes = "btn col green m12 l12 s12";
$form->type = "reset";
<br />

$form->addElement("Input");
$form->value = "Reset";
$form->id = "submit";
$form->wrapperClasses = "row";
$form->classes = "btn col red m12 l12 s12";
$form->type = "submit";

<h5>Close Formtag</h5>
$form->addElement("Form");
$form->form = "end";

<h5>Rendering</h5>
$form->Output();
</pre>