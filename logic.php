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
function getAvalibaleDoors ($roomDoors,$currentRoom){
    foreach($roomDoors[$currentRoom] as $doors){
        $avalibaleDoors[] = $doors;  
        echo $doors.', ';  
    };
    return $avalibaleDoors;     
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
//$geraltSword,$goldenApple,$meat
function getQuestion($currentRoom, $selectedButton, $rooms,$roomDoors,$geraltSword,$goldenApple,$meat,$lock,$dogIsFed,$dice,$key,$chest,$boots,$wind) {
    ?><div id="question-container">
        <?php
    switch(getCurrentRoom($currentRoom, $selectedButton, $rooms)){ 
        case 'outside': 
             ?>
            <p>You are currently <?=$currentRoom ?></p>                            
            <label id="question" for="door">choose a door (<?=getAvalibaleDoors($roomDoors, $currentRoom); ?>)</label>            
            <button id="door1">door1</button> </div><?php
            break;       
        case 'room1' : 
             ?>
            <p>you enter <?=$currentRoom?>, its dark and damp. You can see 4 doors. </p>
            <p>The doors you can choose from are <?php getAvalibaleDoors($roomDoors, $currentRoom); ?></p>                     
                 <label id="question" for="door">choose a door</label>            
                 <button id="door1">door1</button> 
                 <button id="door2">door2</button> 
                 <button id="door3">door3</button> 
                 <button id="door4">door4</button>                      
                <?php // lägg till knapp 'plocka upp svärd' 
                break;
        case 'room2' : ?>
            <p>You enter room2, you hear a distant growling from somewhere. there are 2 doors.</p>
                <p>The doors you can choose from are<?php 
                getAvalibaleDoors($roomDoors, $currentRoom);  
                ?></p>                    
                <label id="question" for="door">choose a door</label>            
                <button id="door5">door5</button>             
                <button id="door4">door4</button> 
                <?php // lägg till knapp 'plocka upp äpple' 
                break;
        case 'room3' : ?>
            <p>You enter room3, The smell of rotting flesh is overhelming There are 2 doors.</p>
             <p>The doors you can choose from are<?php
             getAvalibaleDoors($roomDoors, $currentRoom);
                ?></p>
                <label id="question" for="door">choose a door</label>
                <button id="door2">door2</button>  
                <button id="door6">door6</button>            
                <?php // lägg till knapp 'plocka upp kött' 
                break;
        case 'room4' : ?>
            <p>You enter room4, There is a door with an old huge lock, you can see light from under the door.</p>
             <p>The doors you can choose from are<?php
             getAvalibaleDoors($roomDoors, $currentRoom);
                ?></p>
                <label id="question" for="door">choose a door</label>
                <button id="door5">door5</button>  
                <button id="door8">door8</button>
                <button id="door7">door7</button>  
                <button id="door14">door14</button>      
                <?php //lägg till knapp 'lås upp lås' 
                break;
        case 'room5' : ?>
            <p>You enter room5, There is an big, evil, giganticous helldog here!</p>
             <p>The doors you can choose from are<?php
             getAvalibaleDoors($roomDoors, $currentRoom);
                ?></p>
                <label id="question" for="door">choose a door</label>
                <button id="door3">door3</button>  
                <button id="door8">door8</button>
                <button id="door11">door11</button>  
                <button id="door10">door10</button>
                <?php //lägg till knapp 'mata hunden' OM player har 'meat' 
                break;
        case 'room6' : ?>
            <p>You enter room6, a flute is playing but you cant seem to make out the direction.</p>
             <p>The doors you can choose from are<?php
             getAvalibaleDoors($roomDoors, $currentRoom);
                ?></p>
                <label id="question" for="door">choose a door</label>
                <button id="door6">door6</button>  
                <button id="door11">door11</button>
                <button id="door12">door12</button>                     
                <?php //lägg till knapp 'plocka upp dice' 
                break;
        case 'room7' : ?>
            <p>You enter room7, The scorpions are here for some reason.</p>
             <p>The doors you can choose from are<?php
             getAvalibaleDoors($roomDoors, $currentRoom);
                ?></p>
                <label id="question" for="door">choose a door</label>                    
                <button id="door7">door7</button>  
                <button id="door9">door9</button>
                <?php //lägg till knapp 'plocka wind of change' 
                break;
        case 'room8' : ?>
            <p>You enter room 8, You can hear the sound of birds flying, and wings flapping.</p>
             <p>The doors you can choose from are<?php
             getAvalibaleDoors($roomDoors, $currentRoom);
                ?></p>
                <label id="question" for="door">choose a door</label>
                <button id="door9">door9</button>  
                <button id="door10">door10</button>
                <button id="door13">door13</button>                     
                <?php //lägg till knapp 'plocka upp boots of hermes'
                break;
        case 'room9' : ?>
            <p>You enter room 9, You can hear nothing but the sound of silence.</p>
             <p>The doors you can choose from are<?php
             getAvalibaleDoors($roomDoors, $currentRoom);
                ?></p>
                <label id="question" for="door">choose a door</label>
                <button id="door12">door12</button>  
                <button id="door13">door13</button>                    
                <?php //lägg till knapp 'plocka upp key' 
                break;
        case 'treasure_room' : ?>
            <p>You enter the treasure room, There is an big chest in the midle of the room.</p>
             <p>The doors you can choose from are<?php
             getAvalibaleDoors($roomDoors, $currentRoom);
                ?></p>
                <label id="question" for="door">choose a door</label>
                <button id="door14">door14</button>                                 
                <?php //lägg till knapp 'plocka upp guld' 
                break;
    };?>    
</div><?php
}
if (isset($_POST['selectedButton'])) {
    $selectedButton = $_POST['selectedButton'];
    // Process the selected answer here
    // Generate the next question
    $nextQuestion = getQuestion($currentRoom, $selectedButton, $rooms, $roomDoors, $geraltSword, $goldenApple, $meat, $lock, $dogIsFed, $dice, $key, $chest, $boots, $wind);
    echo $nextQuestion;
} else {
    // Handle the initial question when the page loads
    $initialQuestion = getQuestion($currentRoom, null, $rooms, $roomDoors, $geraltSword, $goldenApple, $meat, $lock, $dogIsFed, $dice, $key, $chest, $boots, $wind);
    echo $initialQuestion;
}