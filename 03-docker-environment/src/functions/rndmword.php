<h1>Generate a new word!</h1>
<p>
    <?php 
    $alphabet = "abcdefghijklmnopqrstuvwxyz";
        function wordGen($alphabet){
            $length1 = rand(1,5);
            $word1 = substr(str_shuffle($alphabet),0,$length1);
            $length2 = rand(7,15);
            $word2 = substr(str_shuffle($alphabet),0,$length2);
            echo ucfirst($word1) . " " . ucfirst($word2);
        }
        wordGen($alphabet);
        ?>
        </p>