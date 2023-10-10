<?php
session_start();
__DIR__. require 'head.php';
__DIR__. require 'logic.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (isset($_POST["input"])) {  //vi kollar om det finns input att hämta
        $selectedButton = $_POST["input"]; // finns det input lagrar vi den i variabeln på denna rad
        
    } 
};
//$lastFiveCommandsGiven = []; 
$lastFiveCommandsGiven[] = $selectedButton;
for ($i = 0; $i < count($lastFiveCommandsGiven);$i++){
    echo 'your last choices: '.$lastFiveCommandsGiven[$i];
};
if ($currentRoom === 'room1' && $selectedButton === 'door1'){
    $currentRoom = $rooms[0];
}
elseif ($currentRoom === 'outside' && $selectedButton === 'door1'){
    $currentRoom = $rooms[1];
}
elseif ($currentRoom === 'room1' && $selectedButton === 'door2'){
    $currentRoom = $rooms[3];
}
elseif ($currentRoom === 'room1' && $selectedButton === 'door3'){
    $currentRoom = $rooms[5];
}
elseif ($currentRoom === 'room1' && $selectedButton === 'door4'){
    $currentRoom = $rooms[2];
}
elseif ($currentRoom === 'room2' && $selectedButton === 'door4'){
    $currentRoom = $rooms[1];
}
elseif ($currentRoom === 'room2' && $selectedButton === 'door5'){
    $currentRoom = $rooms[4];
}
elseif ($currentRoom === 'room3' && $selectedButton === 'door2'){
    $currentRoom = $rooms[1];
}
elseif ($currentRoom === 'room3' && $selectedButton === 'door6'){
    $currentRoom = $rooms[6];
}
elseif ($currentRoom === 'room4' && $selectedButton === 'door5'){
    $currentRoom = $rooms[2];
}
elseif ($currentRoom === 'room4' && $selectedButton === 'door8'){
    $currentRoom = $rooms[5];
}
elseif ($currentRoom === 'room4' && $selectedButton === 'door7'){
    $currentRoom = $rooms[7];
}
elseif ($currentRoom === 'room5' && $selectedButton === 'door8'){
    $currentRoom = $rooms[4];
}
elseif ($currentRoom === 'room5' && $selectedButton === 'door3'){
    $currentRoom = $rooms[1];
}
elseif ($currentRoom === 'room5' && $selectedButton === 'door11'){
    $currentRoom = $rooms[6];
}
elseif ($currentRoom === 'room5' && $selectedButton === 'door10'){
    $currentRoom = $rooms[8];
}
elseif ($currentRoom === 'room6' && $selectedButton === 'door11'){
    $currentRoom = $rooms[5];
}
elseif ($currentRoom === 'room6' && $selectedButton === 'door6'){
    $currentRoom = $rooms[3];
}
elseif ($currentRoom === 'room6' && $selectedButton === 'door12'){
    $currentRoom = $rooms[9];
}
elseif ($currentRoom === 'room7' && $selectedButton === 'door7'){
    $currentRoom = $rooms[4];
}
elseif ($currentRoom === 'room7' && $selectedButton === 'door9'){
    $currentRoom = $rooms[8];
}
elseif ($currentRoom === 'room8' && $selectedButton === 'door9'){
    $currentRoom = $rooms[7];
}
elseif ($currentRoom === 'room8' && $selectedButton === 'door10'){
    $currentRoom = $rooms[5];
}
elseif ($currentRoom === 'room8' && $selectedButton === 'door13'){
    $currentRoom = $rooms[9];
}
elseif ($currentRoom === 'room9' && $selectedButton === 'door13'){
    $currentRoom = $rooms[8];
}
elseif ($currentRoom === 'room9' && $selectedButton === 'door12'){
    $currentRoom = $rooms[6];
}
elseif ($currentRoom === 'room4' && $selectedButton === 'door14'){
    $currentRoom = $rooms[10];
}
elseif ($currentRoom === 'treasure_room' && $selectedButton === 'door14'){
    $currentRoom = $rooms[4];
};
switch($currentRoom){    
    case $currentRoom ==='room1' : ?>
        <p>you enter room1, its dark and damp. You can see 3 doors.
        <?php if ($geraltSword === false){
            echo 'On the floor you can see Geralts silver sword';} 
            else {echo 'the room is empty';}?> </p>
            <p>The doors you can choose from are<?php            
            if ($currentRoom === 'room1') {
                foreach($roomDoors['room1'] as $doors){
                $avalibaleDoors[] = $doors;  
                echo $doors.', ';  
                }     
            } ?></p>
<?php // lägg till knapp 'plocka upp svärd' 
break;
    case $currentRoom === 'room2' : ?>
        <p>You enter room2, you hear a distant growling from somewhere. there are 2 doors.<?php if ($goldenApple === false){
            echo 'On the floor you can see an Golden apple';} else {echo 'the room is empty';}?></p>
             <p>The doors you can choose from are<?php if ( $currentRoom === 'room2'){
                $avalibaleDoors = $roomDoors['room2'];
            }
            if ($currentRoom === 'room2') {
                foreach($roomDoors['room2'] as $doors)
                $avalibaleDoors = $doors;            
            } ?></p>
<?php // lägg till knapp 'plocka upp äpple' 
break;
    case $currentRoom ==='room3' : ?>
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
    case $currentRoom === 'room4' : ?>
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
    case $currentRoom === 'room5' : ?>
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
    case $currentRoom === 'room6' : ?>
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
    case $currentRoom === 'room7' : ?>
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
    case $currentRoom === 'room8' : ?>
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
    case $currentRoom === 'room9' : ?>
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
    case $currentRoom === 'treasure_room' : ?>
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
}

?>