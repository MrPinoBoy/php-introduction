<?php 
$dbh = new PDO("mysql:host=mysql;dbname=hiking","root","root");
$ID = $_GET['ID'];
$query = "SELECT * FROM hike WHERE ID = $ID ";
foreach($dbh->query($query) as $row) {
    $name = htmlspecialchars($row[1]);
    $difficulty = $row[2];
    $distance = $row[3];
    $duration = $row[4];
    $elevation = $row[5];
}
echo $name;
?>

<form method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="Name of the hike" value="<?php echo $name ?>"></input>
    <label for="difficulty">Difficulty:</label>
    <select name="difficulty" value='<?php echo $difficulty?>'>
        <option value="null" selected disabled hidden>--Choose a difficulty--</option>
        <option value="very easy">Very easy</option>
        <option value="easy">Easy</option>
        <option value="medium">Medium</option>
        <option value="hard">Hard</option>
        <option value="very hard">Very hard</option>
    </select>
    <label for="distance">Distance(km):</label>
    <input type="number" step="0.1" min="0" name="distance" value='<?php echo $distance ?>'></input>
    <label for="duration">Duration:</label>
    <input type="string" min="0" placeholder="hh:mm:ss" name="duration" value='<?php echo $duration?>'></input>
    <label for="elevation">Elevation(m):</label>
    <input type="number" min="0" name="elevation" value='<?php echo $elevation?>'></input>
    <select name="availability">
        <option value="null" selected="selected">--Is the hike available?--</option>
        <option value="1">Available</option>
        <option value="0">Unavailable</option>
    </select>
    <input type="submit" value="Save hike"></input>
</form>
<?php
if(isset($_POST)) {
    $name = $_POST['name'] ?? null;
    $difficulty = $_POST['difficulty'] ?? null;
    $distance = (int)$_POST['distance'] ?? null;
    $duration = $_POST['duration'] ?? null;
    $elevation = (int)$_POST['elevation'] ?? null;
    $availability = (int)$_POST['availability'] ?? null;
    if(isset($name) && isset($difficulty) && isset($distance) && isset($duration) && isset($elevation) && isset($availability)) {
       if(preg_match('/\d{2,}\:\d{2}\:\d{2}/', $duration)) {
            $pdo = new PDO("mysql:host=mysql;dbname=hiking","root","root");
            if ($pdo->prepare("UPDATE hike SET name = ?,difficulty = ?,distance = ?,duration = ?,height_difference = ?,availability = ? WHERE ID = ?")->execute([$name,$difficulty,$distance,$duration,$elevation,$availability,$ID])){
                echo "Your hike has been updated succesfully";
            } else {
                echo "There was something wrong with your request, please try again";
            }
        } else {
            echo "Please input duration as hh:mm:ss";
        }
    } else {
        echo "Please fill in all the information";
    }
}
?>