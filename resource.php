<?php
session_start();
//Inventory fills up with the items the user picks up (not yet implanted)
//$inventory = [];

$avalibaleDoors = [];


// What doors exists in what room
$roomDoors = [
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


//initialValue of:
$currentRoom = 'outside';


/*
$geraltSword = false;
$goldenApple = false;
$meat = false;
$lock = false;
$dogIsFed = false;
$dice = false;
$wind = false;
$boots = false;
$key = false;
$chest = false;
*/

//items to be placed in the rooms (not yet implanted)
$roomItems = [
    
    'Geralds silver sword',
   'Golden apple',
   'meat',
    'lock',
    'Angry dog',
    'dice of fortune',
    'The wind of change',
    'The boots of Hermes',
    'A key',
    'Treasure chest'
];
// the different rooms
$rooms = [
    'outside',
    'room1',
    'room2' ,
    'room3',
    'room4',
    'room5',
    'room6' ,
    'room7' ,
    'room8',
    'room9',
    'treasure_room' 
];
//not yet implanted varibalses of the itms
//$geraltSword,$goldenApple,$meat,$lock,$dogIsFed,$dice,$key,$chest,$boots,$wind