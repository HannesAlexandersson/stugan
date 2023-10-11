<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (isset($_POST["input"])) {  //vi kollar om det finns input att hämta
        $selectedButton = $_POST["input"]; // finns det input lagrar vi den i variabeln på denna rad
        echo "You selected: " . $selectedButton; // printar vilken knapp user tryckt på
    } else {
        echo "No button selected.";
    }
}
if ($currentRoom === 'outside') {
    foreach($rooms['outside'] as $doors)
    $avalibaleDoors = $doors;
    echo $avalibaleDoors;
} 

switch($currentRoom){
        case $currentRoom['outside'] : ?>
            <p>you enter room1, its dark and damp. You can see 3 doors.<?php if ($geraltSword === false){
                echo 'On the floor you can see Geralts silver sword';} else {echo 'the room is empty';}?></p>
                <?php // lägg till knapp 'plocka upp svärd' 
            break;
        case $currentRoom['room1'] : ?>
            <p>you enter room1, its dark and damp. You can see 3 doors.<?php if ($geraltSword === false){
                echo 'On the floor you can see Geralts silver sword';} else {echo 'the room is empty';}?></p>
    <?php // lägg till knapp 'plocka upp svärd' 
    break;
        case $currentRoom['room2'] : ?>
            <p>You enter room2, you hear a distant growling from somewhere. there are 2 doors.<?php if ($goldenApple === false){
                echo 'On the floor you can see an Golden apple';} else {echo 'the room is empty';}?></p>
    <?php // lägg till knapp 'plocka upp äpple' 
    break;
        case $currentRoom['room3'] : ?>
        <p>You enter room3, The smell of rotting flesh is overhelming There are 2 doors.<?php if ($meat === false){
            echo 'on the floor you see some meat';} else { echo 'the room is empty';}?></p>
    <?php // lägg till knapp 'plocka upp kött' 
    break;
        case $currentRoom['room4'] : ?>
        <p>You enter room4, There is a door with an old huge lock, you can see light from under the door.<?php if ($lock === false){
            echo 'the lock is locked shut and impossible to budge';}else {'the lock is unlocked';}?></p>
    <?php //lägg till knapp 'lås upp lås' 
    break;
        case $currentRoom['room5'] : ?>
        <p>You enter room5, There is an big, evil, giganticous helldog here!<?php if ($dogIsFed === false){
            echo 'He seems hungry! If you cant feed him he will probably eat you!';}else {echo 'he seems not hungry anymore';}?></p>
    <?php //lägg till knapp 'mata hunden' OM player har 'meat' 
    break;
        case $currentRoom['room6'] : ?>
        <p>You enter room6, a flute is playing but you cant seem to make out the direction.<?php if($dice === false){
            echo 'There are the dice of fortune on the floor!';}else {echo 'the room is empty!';}?></p>
    <?php //lägg till knapp 'plocka upp dice' 
    break;
        case $currentRoom['room7'] : ?>
        <p>You enter room7, The scorpions are here for some reason.<?php if($wind === false){
            echo 'the wind of change are here';}else { echo ' the room is now empty';}?></p>
    <?php //lägg till knapp 'plocka wind of change' 
    break;
        case $currentRoom['room8'] : ?>
        <p>You enter room 8, You can hear the sound of birds flying, and wings flapping.<?php if ($boots === false){
            echo ' the boots of hermes are on the ground!';}else {echo 'the room are emtpy!';}?></p>
    <?php //lägg till knapp 'plocka upp boots of hermes'
    break;
        case $currentRoom['room9'] : ?>
        <p>You enter room 9, You can hear nothing but the sound of silence.<?php if ($key === false){
            echo 'there are an big rusty key on the ground!';}else {echo 'the room are emtpy!';}?></p>
    <?php //lägg till knapp 'plocka upp key' 
    break;
        case $currentRoom['treasure_room'] : ?>
        <p>You enter the treasure room, There is an big chest in the midle of the room. <?php if ($chest === false){
            echo 'Its full of gold!';}else {echo 'the chest is emtpy!';}?></p>
    <?php //lägg till knapp 'plocka upp guld' 
    break;
}





<p>You are currently <?=$currentRoom ?></p><?php        
        if ( $currentRoom === 'outside'){
            $avalibaleDoors = $roomDoors['outside'];
        }
        if ($currentRoom === 'outside') {
            foreach($roomDoors['outside'] as $doors)
            $avalibaleDoors = $doors;            
        } ?>        
        <p>From here you can choose to enter <?= $avalibaleDoors?></p>



