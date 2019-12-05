<?php
function execPrint($command) {
    $result = array();
    exec($command, $result);
    foreach ($result as $line) {
        print($line . "<br>");
    }
}
// Print the exec output inside of a pre element
print("<pre>" . execPrint("git pull https:///*USERNAME*/:/*AUTHKEY*/@github.com/Shivek-brightcode//*REPO-NAME.get*/ master") . "</pre>");
?>
