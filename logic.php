<?php
session_start();


$inventory = [];

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

$currentRoom = 'outside';
function getCurrentRoom (&$currentRoom, $selectedButton, $rooms){
    if ($currentRoom == null){
        $currentRoom = $rooms[0];
    }
    elseif ($currentRoom === 'room1' && $selectedButton === 'door1'){
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
    return $currentRoom;
}



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