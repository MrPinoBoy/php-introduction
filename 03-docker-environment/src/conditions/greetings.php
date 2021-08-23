<?php 
    if (isset($_GET['age']) AND isset($_GET['gender'])){
        if ($_GET['age'] < 12) {
          if ($_GET['gender'] == 'man') {
            if ($_GET['english'] == 'yes') {
            echo "Hello mister kiddo!";
          } else {
            echo "Aloha mister kiddo!";
          }
          } else {
            if ($_GET['english'] == 'yes') {
              echo "Hello miss kiddo!";
            } else {
              echo "Aloha miss kiddo!";
            }
          } 
        } else if ($_GET['age'] >= 12 AND $_GET['age'] < 18) {
          if ($_GET['gender'] == 'man') {
            if ($_GET['english'] == 'yes') {
              echo "Hello mister teen!";
            } else {
              echo "Aloha mister teen!";
            }
            } else {
              if ($_GET['english'] == 'yes') {
                echo "Hello miss teen!";
              } else {
                echo "Aloha miss teen!";
              }
            }
        } else if ($_GET['age'] >= 18 AND $_GET['age'] < 115) {
          if ($_GET['gender'] == 'man') {
            if ($_GET['english'] == 'yes') {
              echo "Hello mister adult!";
            } else {
              echo "Aloha mister adult!";
            }
            } else {
              if ($_GET['english'] == 'yes') {
                echo "Hello miss adult!";
              } else {
                echo "Aloha miss adult!";
              }
            }
        } else {
          if ($_GET['gender'] == 'man') {
            if ($_GET['english'] == 'yes') {
              echo "Hello mister robot!";
            } else {
              echo "Aloha mister robot!";
            }
            } else {
              if ($_GET['english'] == 'yes') {
                echo "Hello miss robot!";
              } else {
                echo "Aloha miss robot!";
              }
            }
        }
      }
?>

<form method="get" action="">
  <label for="age">Gimme yo age</label>
  <input type="" name="age"><br>
  What's your gender?
  <label for="man">Man</label>
  <input type="radio" id="man" name="gender" value="man">
  <label for="woman">Woman</label>
  <input type="radio" id="woman" name="gender" value="woman"><br>
  Do you speak english?
  <lable for="yes">Yes</label>
  <input type="radio" id="yes" name="english" value ="yes">
  <label for="no">No</label>
  <input type="radio" id="no" name="english" value ="no"><br>
  <input type="submit" name="submit" value="Greet me now">
</form><br>

