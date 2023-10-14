<?php
declare(strict_types=1);
$a = 5;

$result = $a === 50 ? 'a is equal to 50' : 'a is not equal to 50';
echo $result;


// old code
.then(response => response.text())
                .then(nextQuestion => {                
                questionText.textContent = nextQuestion;
                })


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