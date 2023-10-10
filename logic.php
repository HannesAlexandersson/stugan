<?php
session_start();
$inventory = [];

$lastFiveCommandsGiven = [];
$rooms = [
    'outside' => ['door1'],
    'room1' => ['door1', 'door2', 'door3', 'door4'],
    'room2' => ['door4', 'door5'],
    'room3' => ['door2', 'door6'],
    'room4' => ['door5', 'door8', 'door7', 'door14'],
    'room5' => ['door8', 'door10', 'door11', 'door3'],
    'room6' => ['door6', 'door11', 'door12'],
    'room7' => ['door7', 'door9'],
    'room8' => ['door9', 'door10', 'door13'],
    'room9' => ['door13', 'door12'],
    'treasure_room' => ['door14']
];


$roomItems = [
    'outside' => 'nothing',
    'room1' => 'Geralds silver sword',
    'room2' => 'Golden apple',
    'room3' => 'meat',
    'room4' => 'lock',
    'room5' => 'Angry dog',
    'room6' => 'dice of fortune',
    'room7' => 'The wind of change',
    'room8' => 'The boots of Hermes',
    'room9' => 'A key',
    'treasure_room' => 'Treasure chest'
];
$currentRoom = 'outside';

if ($currentRoom === 'outside') {
    foreach($rooms['outside'] as $doors)
    $avalibaleDoors = $doors;
    echo $avalibaleDoors;
} ?>

<!-- room1 -->
<p>you enter room1, its dark and damp. You can see 3 doors.<?php if ($geraltSword === false){
    echo 'On the floor you can see Geralts silver sword';} else {echo 'the room is empty';}?></p>
    <?php // lägg till knapp 'plocka upp svärd' ?>

<!-- room2 -->
<p>You enter room2, you hear a distant growling from somewhere. there are 2 doors.<?php if ($goldenApple === false){
    echo 'On the floor you can see an Golden apple';} else {echo 'the room is empty';}?></p>
    <?php // lägg till knapp 'plocka upp äpple' ?>

<!-- room3 -->
<p>You enter room3, The smell of rotting flesh is overhelming There are 2 doors.<?php if ($meat === false){
    echo 'on the floor you see some meat';} else { echo 'the room is empty';}?></p>
    <?php // lägg till knapp 'plocka upp kött' ?>

<!-- room4 -->
<p>You enter room4, There is a door with an old huge lock, you can see light from under the door.<?php if ($lock === false){
    echo 'the lock is locked shut and impossible to budge';}else {'the lock is unlocked';}?></p>
    <?php //lägg till knapp 'lås upp lås' ?>

<!-- room5 -->
<p>You enter room5, There is an big, evil, giganticous helldog here!<?php if ($dogIsFed === false){
    echo 'He seems hungry! If you cant feed him he will probably eat you!';}else {echo 'he seems not hungry anymore';}?></p>
    <?php //lägg till knapp 'mata hunden' OM player har 'meat' ?>

<!-- room6 -->
<p>You enter room6, a flute is playing but you cant seem to make out the direction.<?php if($dice === false){
    echo 'There are the dice of fortune on the floor!';}else {echo 'the room is empty!';}?></p>
<?php //lägg till knapp 'plocka upp dice' ?>

<!-- room7 -->
<p>You enter room7, The scorpions are here for some reason.<?php if($wind === false){
    echo 'the wind of change are here';}else { echo ' the room is now empty';}?></p>
<?php //lägg till knapp 'plocka wind of change' ?>

<!-- room8 -->
<p>You enter room 8, You can hear the sound of birds flying, and wings flapping.<?php if ($boots === false){
    echo ' the boots of hermes are on the ground!';}else {echo 'the room are emtpy!';}?></p>
<?php //lägg till knapp 'plocka upp boots of hermes' ?>


<!-- room9 -->
<p>You enter room 9, You can hear nothing but the sound of silence.<?php if ($key === false){
    echo 'there are an big rusty key on the ground!';}else {echo 'the room are emtpy!';}?></p>
<?php //lägg till knapp 'plocka upp key' ?>


<!-- treasure room -->
<p>You enter the treasure room, There is an big chest in the midle of the room. <?php if ($chest === false){
    echo 'Its full of gold!';}else {echo 'the chest is emtpy!';}?></p>
<?php //lägg till knapp 'plocka upp guld' ?>