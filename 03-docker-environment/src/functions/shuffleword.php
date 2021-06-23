<?php
$sentence = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";
$wordArray = explode(" ", $sentence);
foreach ($wordArray as $word) {
    if (strlen($word) == 1){
        echo $word . " ";
    } else {
    echo $word[0] . str_shuffle(substr($word,1,-1)) . $word[strlen($word)-1] . " ";
    //still got issues with punctuation, I know how I could fix it for this one sentence
    }
}