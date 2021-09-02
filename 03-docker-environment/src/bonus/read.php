<table><tr><th>Name</th><th>Difficulty</th><th>Distance</th><th>Duration</th><th>Elevation gain</th><th>Availability</th>
<?php
$dbh = new PDO("mysql:host=mysql;dbname=hiking","root","root");
foreach($dbh->query('SELECT * FROM hike') as $row) {
    if ($row[6] == 1) {
        $availability = "Available";
    } else {
        $availability = "Unavailable";
    }
    $difficulty = ucfirst($row[2]);
    echo "<tr><td><a href='update.php?ID=$row[0]'>$row[1]</a></td>
    <td>$difficulty</td>
    <td>$row[3] KM</td>
    <td>$row[4]</td>
    <td>$row[5]m</td>
    <td>$availability</td>
    <td><a href='delete.php?ID=$row[0]'>Delete</a></td></tr>";
}
?>
</table>
<a href="create.php">Add new hike</a>