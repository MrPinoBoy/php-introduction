<?php
//    $room_is_filthy = true;

//    if ($room_is_filthy){
//      echo "Yuk, Room is dirty : let's clean it up";
//       //cleanup_room();
//      echo "<br>Room is now clean !";
//      $room_is_filthy = false;
//    } else {
//      echo "<br>Nothing to do, room is neat.";
//    }

   $room_filth_states = array(
     0 => "health hazard",
     1 => "filthy",
     2 => "dirty",
     3 => "clean",
     4 => "immaculate"
   );

   $room_filth_status = $room_filth_states[4];

   if ($room_filth_status == "health hazard") {
     echo "You're going to jail, at least your cell will be clean";
   } else if ($room_filth_status == "filthy"){
     echo "It's about time you cleaned your room, let's go!";
   } else if ($room_filth_status == "dirty"){
     echo "I spot dirt on the floor, you should mop a bit";
   } else if ($room_filth_status == "clean"){
     echo "NO STOP, YOUR ROOM IS CLEAN ALREADY, DON'T PROCEED ANY FURTHER";
   } else {
     echo "You did it, the perfect cleanliness has been achieved. Humans can't go any further, we found the meaning of it all.";
   }
?>