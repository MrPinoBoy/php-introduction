<?php 
    $currentTime = date("H:i:s", time());
    echo "It is currently $currentTime<br>";
    if (strtotime($currentTime) >= strtotime('05:00:00') AND strtotime($currentTime) <= strtotime('09:00:00')) {
      echo "Good morning !";
    } else if (strtotime($currentTime) > strtotime('09:01:00') AND strtotime($currentTime) <= strtotime('12:00:00')) {
      echo "Good day !";
    } else if (strtotime($currentTime) > strtotime('12:01:00') AND strtotime($currentTime) <= strtotime('16:00:00')) {
      echo "Good afternoon !";
    } else if (strtotime($currentTime) > strtotime('16:01:00') AND strtotime($currentTime) <= strtotime('21:00:00')) {
      echo "Good evening !";
    } else if (strtotime($currentTime) > strtotime('21:01:00') AND strtotime($currentTime) <= strtotime('04:59:00')) {
      echo "Good night !";
    }
?>