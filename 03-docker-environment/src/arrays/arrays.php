<?php 
    $family = ["Dominique", "Alain", "Quentin", "Thomas", "Chloé"];
    $recipes = ["Chili con Carne", "Mexican Soup", "Lasana", "Couscous"];
    $films = ["Interstellar", "Fight Club", "Eternal sunshine of the spotless mind", "Requiem for a dream", "Mad Max: Fury road", "Drive", "Man of Steel"];
    // print_r($family);
    // print_r($recipes);
    // print_r($films);
    // print_r($films[0])
    array_push($films, "The Shining");
    $films[] = "Joker";
    //index of "Junior Web Dev" is "function"
    $me = array(
        "firstname" => "Thomas",
        "lastname" => "Beaupain",
        "dob" => "14/03/1996",
        "town" => "Liège",
        "age" => 25,
        "favSeason" => "Spring",
        "loveFootball" => false,
        "favMovies" => $films,
        "hobbies" => array("Videogames", "Drawing", "Programming")
    );

    $mother = array(
        "firstname" => "Dominique",
        "lastname" => "Cuvelier",
        "dob" => "27/01/1965",
        "town" => "Courtil",
        "age" => 56,
        "favSeason" => "Summer",
        "loveFootball" => false,
        "favMovies" => $films,
        "hobbies" => array("Gardening", "Cooking", "Walking")
    );
    $me["mother"] = $mother;
    $me['function'] = 'Junior Web Dev';
    //$me['function'] = 'Senior Web Dev';
    echo '<pre>';
        print_r($family);
    echo '</pre>';  
    echo '<pre>';
        var_dump($recipes);
    echo '</pre>';
    echo '<pre>';
        print_r($films);
    echo '</pre>';

    $me["lastname"] = "Durand";

    echo '<pre>';
        print_r($me);
    echo '</pre>';
    echo '<pre>';
        echo $films[0];
    echo '</pre>';
    echo '<pre>';
        echo $me['function'];
    echo '</pre>';
    echo '<pre>';
        echo count($mother['hobbies']);
    echo '</pre>';

    $me["hobbies"][] = "taxidermy";

    echo '<pre>';
        echo sizeof($me['hobbies']);
    echo '</pre>';
    echo '<pre>';
        echo count($mother['hobbies']) + sizeof($me['hobbies']);
    echo '</pre>';
    //merges the last array onto the first, replacing every common values
    $coolArray = array_merge($me, $mother);
    echo '<pre>+++++++++++++++++++++++++++++++++++++++++';
        print_r($coolArray);
    echo '</pre>';
    //intersects two arrays, giving back only the common????????????????????????
    $coolerArray = array_intersect($me,$mother);
    echo '<pre>';
        print_r($coolerArray);
    echo '</pre>';
?>