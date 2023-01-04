<!DOCTYPE html>

<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
        <link href="styles.css" rel="stylesheet">
        <title>Trivia!</title>
        <script>
            // Run script once DOM is loaded
            document.addEventListener('DOMContentLoaded', function() {

                // When correct answer is clicked, change color to green
                let correct = document.querySelector('.correct');
                correct.addEventListener('click', function() {
                    correct.style.backgroundColor = 'green';
                    document.querySelector('#feedback1').innerHTML = 'Correct!';
                });

                // When any inccorect answer is clicked, change color to red
                let incorrects = document.querySelectorAll('.incorrect');
                for (let i = 0; i < incorrects.length; i++) {
                    incorrects[i].addEventListener('click', function() {
                        incorrects[i].style.backgroundColor = 'red';
                        document.querySelector('#feedback1').innerHTML = 'Incorrect';
                    });
                }

                // Check free response submission
                document.querySelector('#check').addEventListener('click', function() {
                    let input = document.querySelector('input');
                    if (input.value === 'Switzerland') {
                        input.style.backgroundColor = 'green';
                        document.querySelector('#feedback2').innerHTML = 'Correct!';
                    } else {
                        input.style.backgroundColor = 'red';
                        document.querySelector('#feedback2').innerHTML = 'Incorrect';
                    }
                });
            });

        </script>
    </head>
    <body>
        <div class="header">
            <h1>Trivia!</h1>
        </div>

        <div class="container">

            <div class="section">
                <h2>Part 1: Multiple Choice </h2>
                <hr>

                <h3>What is the approximate ratio of people to sheep in New Zealand?</h3>

                <button class="incorrect">6 people per 1 sheep</button>
                <button class="incorrect">3 people per 1 sheep</button>
                <button class="incorrect">1 person per 1 sheep</button>
                <button class="incorrect">1 person per 3 sheep</button>
                <button class="correct">1 person per 6 sheep</button>

                <p id="feedback1"></p>

            </div>

            <div class="section">
                <h2>Part 2: Free Response</h2>
                <hr>

                <h3> In which country is it illegal to own only one guinea pig, as a lone guinea pig might become depressed</h3>
                <input type="text">
                <button id="check">Check Answer</button>

                <p id="feedback2"></p>
            </div>

            <div>
                <hi>Display the solar information</hi>

                <?php
                    print "PHP is fun!";
                ?>

            </div>

        </div>
    </body>
</html>
