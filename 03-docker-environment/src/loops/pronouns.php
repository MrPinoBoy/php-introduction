<?php
$pronouns = ["I", "You", "He/She", "We", "You", "They"];
foreach ($pronouns as $key=> $pronoun) {
    if ($key == 2) {
        echo $pronoun . " codes<br>";
    } else {
        echo $pronoun . " code<br>";
    }
}
?>