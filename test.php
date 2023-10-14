<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Question Form</title><?php
    __DIR__. require 'logic.php';?>
</head>
<body>  
<div id="question-container">       
    <script>
        const questionContainer = document.getElementById('question-container');
        const questionText = document.getElementById('question');
        const answerButtons = document.querySelectorAll('button[id^="door"]');

        
        function handleAnswer(selectedButton) {
    const formData = new FormData();
    formData.append('selectedButton', selectedButton);            
    
    fetch('logic.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())                
    .then(nextQuestion => {                
        questionText.innerHTML = nextQuestion;
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });
}
        answerButtons.forEach(button => {
            button.addEventListener('click', () => {
                const selectedButton = button.id;
                handleAnswer(selectedButton);
            });
        });
        // Load the initial question when the page loads
       //handleAnswer('outside'); 
    </script>   
</div>
</body>
</html>