<?php
session_start();


$inventory = [];
$currentRoom = 'outside';
$avalibaleDoors = [];
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