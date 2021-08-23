<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable types</title>
</head>
<body>
    <?php
    $firstname = "Thomas";
    $myAge = 25;
    $eyeColor = "brown";
    $family = array(
        0 => 'Dominique',
        1 => 'Alain',
        2 => 'Quentin',
        3 => 'Chloé'
    );
    $hungry = false;
    ?>
    <p>
        Hi! My name is <?php echo $firstname?>.
    </p>
    <p>
        I am <?php echo $myAge?> years old.
    </p>
    <p>
        My eyes are <?php echo $eyeColor?>.
    </p>
    <p>
        The first person in my family is <?php echo $family[0]?>
    </p>
    <p>
        Am I hungry? <?php if ($hungry) { ?>
            Yes
        <?php } else {?>
            No 
            <?php } ?>
        </p>
</body>
</html>