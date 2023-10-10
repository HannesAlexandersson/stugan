<?php
session_start();
__DIR__. require 'head.php';
__DIR__. require 'logic.php';
__DIR__. require 'submit.php';?>
<main>
    <div class="intro">
        <h1>Welcome to the Cabin 2.0</h1>
        <p>The cabin was the first ever game I played, as an 7 year old boy on my very first PC back in the early 90's.</p>
        <p>This is my own take on the old classic. It also happens to be an assignment from my teacher so it works out fine for me, two birds with one stone sort of speak.</p>
        <p>The rules are simple, You need to navigate the game using only text commands and find the key items to use in certain areas. GO!</p>
    </div>
    <div class="form input">
        <p>You are currently<?= $currentRoom?></p><?php
        if ( $currentRoom === 'outside'){
            $avalibaleDoors = $rooms['outside'];
        }?>
        <p>From here you can choose to enter<?= $avalibaleDoors?></p>
        <form action="submit.php" method="post">
            <label for="name">choose a door (<?php //välj mellan tillgängliga dörrar i specefikt rum ?>)</label>
            <input type="text" id="name" name="name" required><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</main>