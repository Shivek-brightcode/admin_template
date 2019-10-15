<?php
function execPrint($command) {
    $result = array();
    exec($command, $result);
    foreach ($result as $line) {
        print($line . "<br>");
    }
}
// Print the exec output inside of a pre element
print("<pre>" . execPrint("git pull https://Shivek-brightcode:a4a49a3d6663d6760e23602842b5f417d3bb60c1@github.com/Shivek-brightcode/admin_template.git master") . "</pre>");
?>
