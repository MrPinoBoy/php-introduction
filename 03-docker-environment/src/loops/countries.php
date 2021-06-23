<label for="countries">Select a country:</label>
<select name="countries" id="countries">
    <?php
    $countries = ["BE" => "Belgium", "FR" => "France", "SP" => "Spain", "ITA" => "Italy", "AUS" => "Australia", "CR" => "Croatia", "RU" => "Russia", "JPN" => "Japan", "NZ" => "New-Zealand", "NOR" => "Norway"];
    foreach ($countries as $iso => $country) {
        echo "<option value='$iso'>$country</option>";
    }
    ?>
</select>