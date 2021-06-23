<?php 
    $gifHuman = ($_GET['species'] == 'human') ? "https://i.giphy.com/media/k1GwIaMANCzxm/giphy.webp" : (($_GET['species'] == 'cat') ? "https://i.giphy.com/media/jpbnoe3UIa8TU8LM13/giphy.webp" : "https://i.giphy.com/media/mjo3HtlPnEuNq/giphy.webp");
?>
<form method="get">
    <label for="species">Are you a human, a cat or a unicorn?</label><br>
    <label>Human</label>
    <input type="radio" name="species" value="human"><br>
    <label>Cat</label>
    <input type="radio" name="species" value="cat"><br>
    <label>Unicorn</label>
    <input type="radio" name="species" value="unicorn"><br>
    <input type="submit">
</form>
<img src=<?php echo $gifHuman ?>>