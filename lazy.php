<?php
require "vendor/autoload.php";

echo '<pre>';
print_r($_POST);
echo '</pre>';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link rel="stylesheet" href="syntax.css">
    <script src="syntaxhighlighter.js"></script>
    <title>FormGen Materialize CSS - Formular Example</title>
</head>
<body onload="sh_highlightDocument();">

<div class="row" style="width: 80%; margin: auto;">
    <h2>Lazy</h2>
    <?=  $form->Output(); ?>
</div>


<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script>
    $(document).ready(function () {
        $('select').material_select();

        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });

        $('input.autocomplete').autocomplete({
            data: {
                "Apple": null,
                "Microsoft": null,
                "Google": 'http://placehold.it/250x250'
            }
        });

    });
</script>
</body>
</html>
