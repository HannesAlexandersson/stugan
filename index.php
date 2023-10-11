<?php
session_start();
__DIR__. require 'head.php';

?>
<main>
    <div class="intro">
        <h1>Welcome to the Cabin 2.0</h1>
        <p>The cabin was the first ever game I played, as an 7 year old boy on my very first PC back in the early 90's.</p>
        <p>This is my own take on the old classic. It also happens to be an assignment from my teacher so it works out fine for me, two birds with one stone sort of speak.</p>
        <p>The rules are simple, You need to navigate the game using only text commands and find the key items to use in certain areas. GO!</p>
    </div>
    <div class="form input" id="form-container"><?php
    switch(getCurrentRoom($currentRoom, $selectedButton, $rooms)){ 
    case 'outside': ?>
        <p>You are currently <?=$currentRoom ?></p><?php 
         if ( $currentRoom === 'outside'){
            $avalibaleDoors = $roomDoors['outside'];
        }
        if ($currentRoom === 'outside') {
            foreach($roomDoors['outside'] as $doors)
            $avalibaleDoors = $doors;            
        } ?>        
        <p>From here you can choose to enter <?= $avalibaleDoors?></p>
        <form action="submit.php" method="post">
        <label for="door">choose a door (<?=$avalibaleDoors?>)</label>            
        <button type="submit" name="input" value="door1">door1</button></div><?php
        break;       
    case 'room1' : ?>
        <p>you enter room1, its dark and damp. You can see 4 doors.
        <?php 
        if ($geraltSword === false){// när user plockar upp svärdet blir det true
            echo 'On the floor you can see Geralts silver sword';
        } 
        else {
            echo 'the room is empty';
        }
        //kolla vilket rum programmet är i
        echo $currentRoom;
        ?>
        </p>
        <p>The doors you can choose from are <?php 
        getAvalibaleDoors($roomDoors,$currentRoom, $selectedButton, $rooms);       
             ?></p>             
             <form action="submit.php" method="post">
             <label for="door">choose a door</label>            
             <button type="submit" name="input" value="door1">door1</button>
             <button type="submit" name="input" value="door2">door2</button>
             <button type="submit" name="input" value="door3">door3</button>
             <button type="button" name="input" onclick="submitForm()" value="door4">door4</button>
             </form></div>        
<?php // lägg till knapp 'plocka upp svärd' 
break;
    case 'room2' : ?>
        <p>You enter room2, you hear a distant growling from somewhere. there are 2 doors.<?php 
        if ($goldenApple === false){
            echo 'On the floor you can see an Golden apple';
            } 
            else {
            echo 'the room is empty';
            }?></p>
            <p>The doors you can choose from are<?php 
            getAvalibaleDoors($roomDoors,$currentRoom, $selectedButton, $rooms);  
            ?></p><?php
            $nextQuestionHTML = '
            <form action="submit.php" method="post" id="nextQuestion">
            <label for="door">choose a door</label>            
            <button type="submit" name="input" value="door1">door5</button>            
            <button type="submit" name="input" value="door4">door4</button>
            </form>';
            echo $nextQuestionHTML;?>
<?php // lägg till knapp 'plocka upp äpple' 
break;
    case 'room3' : ?>
    <p>You enter room3, The smell of rotting flesh is overhelming There are 2 doors.<?php if ($meat === false){
        echo 'on the floor you see some meat';} else { echo 'the room is empty';}?></p>
         <p>The doors you can choose from are<?php if ( $currentRoom === 'room3'){
                $avalibaleDoors = $roomDoors['room3'];
            }
            if ($currentRoom === 'room3') {
                foreach($roomDoors['room3'] as $doors)
                $avalibaleDoors = $doors;            
            } ?></p>
<?php // lägg till knapp 'plocka upp kött' 
break;
    case 'room4' : ?>
    <p>You enter room4, There is a door with an old huge lock, you can see light from under the door.<?php if ($lock === false){
        echo 'the lock is locked shut and impossible to budge';}else {'the lock is unlocked';}?></p>
         <p>The doors you can choose from are<?php if ( $currentRoom === 'room4'){
                $avalibaleDoors = $roomDoors['room4'];
            }
            if ($currentRoom === 'room4') {
                foreach($roomDoors['room4'] as $doors)
                $avalibaleDoors = $doors;            
            } ?></p>
<?php //lägg till knapp 'lås upp lås' 
break;
    case 'room5' : ?>
    <p>You enter room5, There is an big, evil, giganticous helldog here!<?php if ($dogIsFed === false){
        echo 'He seems hungry! If you cant feed him he will probably eat you!';}else {echo 'he seems not hungry anymore';}?></p>
         <p>The doors you can choose from are<?php if ( $currentRoom === 'room5'){
                $avalibaleDoors = $roomDoors['room5'];
            }
            if ($currentRoom === 'room5') {
                foreach($roomDoors['room5'] as $doors)
                $avalibaleDoors = $doors;            
            } ?></p>
<?php //lägg till knapp 'mata hunden' OM player har 'meat' 
break;
    case 'room6' : ?>
    <p>You enter room6, a flute is playing but you cant seem to make out the direction.<?php if($dice === false){
        echo 'There are the dice of fortune on the floor!';}else {echo 'the room is empty!';}?></p>
         <p>The doors you can choose from are<?php if ( $currentRoom === 'room6'){
                $avalibaleDoors = $roomDoors['room6'];
            }
            if ($currentRoom === 'room6') {
                foreach($roomDoors['room6'] as $doors)
                $avalibaleDoors = $doors;            
            } ?></p>
<?php //lägg till knapp 'plocka upp dice' 
break;
    case 'room7' : ?>
    <p>You enter room7, The scorpions are here for some reason.<?php if($wind === false){
        echo 'the wind of change are here';}else { echo ' the room is now empty';}?></p>
         <p>The doors you can choose from are<?php if ( $currentRoom === 'room7'){
                $avalibaleDoors = $roomDoors['room7'];
            }
            if ($currentRoom === 'room7') {
                foreach($roomDoors['room7'] as $doors)
                $avalibaleDoors = $doors;            
            } ?></p>
<?php //lägg till knapp 'plocka wind of change' 
break;
    case 'room8' : ?>
    <p>You enter room 8, You can hear the sound of birds flying, and wings flapping.<?php if ($boots === false){
        echo ' the boots of hermes are on the ground!';}else {echo 'the room are emtpy!';}?></p>
         <p>The doors you can choose from are<?php if ( $currentRoom === 'room8'){
                $avalibaleDoors = $roomDoors['room8'];
            }
            if ($currentRoom === 'room8') {
                foreach($roomDoors['room8'] as $doors)
                $avalibaleDoors = $doors;            
            } ?></p>
<?php //lägg till knapp 'plocka upp boots of hermes'
break;
    case 'room9' : ?>
    <p>You enter room 9, You can hear nothing but the sound of silence.<?php if ($key === false){
        echo 'there are an big rusty key on the ground!';}else {echo 'the room are emtpy!';}?></p>
         <p>The doors you can choose from are<?php if ( $currentRoom === 'room9'){
                $avalibaleDoors = $roomDoors['room9'];
            }
            if ($currentRoom === 'room9') {
                foreach($roomDoors['room9'] as $doors)
                $avalibaleDoors = $doors;            
            } ?></p>
<?php //lägg till knapp 'plocka upp key' 
break;
    case 'treasure_room' : ?>
    <p>You enter the treasure room, There is an big chest in the midle of the room. <?php if ($chest === false){
        echo 'Its full of gold!';}else {echo 'the chest is emtpy!';}?></p>
         <p>The doors you can choose from are<?php if ( $currentRoom === 'treasure_room'){
                $avalibaleDoors = $roomDoors['treasure_room'];
            }
            if ($currentRoom === 'treasure_room') {
                foreach($roomDoors['treasure_room'] as $doors)
                $avalibaleDoors = $doors;            
            } ?></p>
<?php //lägg till knapp 'plocka upp guld' 
break;
}?>
       
        </form>
    </div>    
</main>
