<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Question Form</title><?php
    __DIR__. require 'logic.php';?>
</head>
<body>          
    <script>
        const questionContainer = document.getElementById('question-container');
        const questionText = document.getElementById('question');
        const answerButtons = document.querySelectorAll('button[id^="door"]');

        // Function to handle the user's answer
        function handleAnswer(selectedButton) {
            const formData = new FormData();
            formData.append('selectedButton', selectedButton);
            // Send a request to the PHP script using fetch with POST method
                fetch('logic.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(nextQuestion => {
                // Update the question text with the response from the PHP script
                questionText.textContent = nextQuestion;
                })
                .catch(error => {
                    console.error('An error occurred:', error);
                });
        };

        // Add click event listeners to the answer buttons
        answerButtons.forEach(button => {
            button.addEventListener('click', () => {
                const selectedButton = button.id;
                handleAnswer(selectedButton);
            });
        });

        // Load the initial question when the page loads
        handleAnswer('outside'); 
    </script>   
</body>
</html>