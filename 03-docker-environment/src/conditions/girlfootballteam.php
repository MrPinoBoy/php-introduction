    <form>
      Welcome to the girl soccer team ! Please enter your informations below. <br>
      <label for="age">Please enter your age:</label>
      <input type="" name="age"><br>
      Please select your gender:
      <label for="gender">Man</label>
      <input type="radio" name="gender" value="man">
      <label for="gender">Woman</label>
      <input type="radio" name="gender" value="woman">
      <input type="submit" value="submit" name="submit">
    </form>

    <!-- <?php if (isset($_GET['age']) AND isset($_GET['gender'])) {
      if ($_GET['age'] >= 21 AND $_GET['age'] <= 40 AND $_GET['gender'] == "woman") {
        echo "Welcome to the team!";
      } else {
        echo "Sorry, you don't fit the criteria.";
      }
    }
    ?> -->

<?php
$message = "Sorry you don't fit the criteria" ;
if (isset($_GET['age']) AND isset($_GET['gender'])) {
      if ($_GET['age'] >= 21 AND $_GET['age'] <= 40 AND $_GET['gender'] == "woman") {
        $message = "Welcome to the team!";
      }
        echo $message;
      
    }
    ?> 