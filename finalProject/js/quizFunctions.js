// JavaScript File
$(document).ready(function() {

    var possibleWeather = ['rain', 'sun', 'clouds'];
    var randomWeather = possibleWeather[Math.round(Math.random() * 2)];
    var score = 0;
    var scoreDisplay = document.getElementById('score');

    function beginQuiz() {

        var firstQuestion = document.getElementById('questionOne');
        var disappear = document.getElementById('begin');
        var myTitle = document.getElementById('myTitle');
        var myTitleHeight = document.getElementById('titleSection');

        firstQuestion.style.display = 'block';
        disappear.style.display = 'none';
        myTitle.innerHTML = '<h1>Weather Quiz</h1>';
        myTitle.style.padding = '30px';
        myTitle.style.borderRadius = '10px';
        myTitleHeight.style.height = 'auto';
        scoreDisplay.innerHTML = '<p>Score: ' + score + '</p>';
        scoreDisplay.style.paddingBottom = '5px';

    }

    function checkQOne(event) {
        var answerQOne = event.target.id;
        var showWeather = document.getElementById('randomWeatherDisp');
        var firstQComplete = document.getElementById('questionOne');
        var secondQuestion = document.getElementById('questionTwo');
        showWeather.innerHTML = '<p><strong>' + randomWeather + '</strong></p>';
        firstQComplete.style.display = 'none';
        secondQuestion.style.display = 'block';

        if (answerQOne === 'windSpeed') {
            score++;
            scoreDisplay.innerHTML = '<p>Correct!<br>Score: ' + score + '</p>';
        }
        else {
            scoreDisplay.innerHTML = '<p>Sorry, wrong answer.<br>Score: ' + score + '</p>';
        }
    }

    function checkQTwo(event) {
        var answerQTwo = event.target.id;
        var secondQComplete = document.getElementById('questionTwo');
        var thirdQuestion = document.getElementById('questionThree');

        secondQComplete.style.display = 'none';
        thirdQuestion.style.display = 'block';

        if (answerQTwo === randomWeather) {
            score++;
            scoreDisplay.innerHTML = '<p>Correct!<br>Score: ' + score + '</p>';
        }
        else {
            scoreDisplay.innerHTML = '<p>Sorry, wrong answer.<br>Score: ' + score + '</p>';
        }
    }

    function checkQThree() {

        var thirdQComplete = document.getElementById('questionThree');
        var fourthQuestion = document.getElementById('questionFour');

        thirdQComplete.style.display = 'none';
        fourthQuestion.style.display = 'block';

        var checkBoxes = document.getElementsByName('q3');
        var answersQThree = [];
        var correctQThree = ['mammatus', 'cumulus', 'nimbus'];
        var qThreeBool = true;

        for (i = 0; i < checkBoxes.length; i++) {
            if (checkBoxes[i].checked) {
                answersQThree.push(checkBoxes[i].value);
            }
        }
        answersQThree.sort();
        correctQThree.sort();
        if (answersQThree.length === correctQThree.length) {
            for (i = 0; i < answersQThree.length; i++) {
                if (answersQThree[i] !== correctQThree[i]) {
                    qThreeBool = false;
                    break;
                }
            }
        }
        else {
            qThreeBool = false;
        }

        if (qThreeBool === true) {
            score++;
            scoreDisplay.innerHTML = '<p>Correct!<br>Score: ' + score + '</p>';
        }
        else {
            scoreDisplay.innerHTML = '<p>Sorry, wrong answer.<br>Score: ' + score + '</p>';
        }
    }

    function checkQFour() {
        var fourthInput = document.getElementById('stringOrNumber').value;
        var fourthInputLower = fourthInput.toLowerCase();
        var fourthQComplete = document.getElementById('questionFour');
        var showFinal = document.getElementById('finish');
        finalScore = document.getElementById('finalScore');

        fourthQComplete.style.display = 'none';
        showFinal.style.display = 'block';

        if ((parseInt(fourthInput) === 4) || (fourthInputLower === 'four')) {
            score++;
            checkFinalScore();
        }
        else {
            checkFinalScore();
        }
    }

    function checkFinalScore() {
        switch (score) {
            case 4:
                scoreDisplay.innerHTML = '<p>Correct! Well done! You got 100%!</p>';
                finalScore.innerHTML = '<img src="https://image.ibb.co/kX5PoR/sparkles.png"><h3>' + score + '</h3>';
                break;

            case 3:
                scoreDisplay.innerHTML = '<p>You completed the quiz with 75%!</p>';
                finalScore.innerHTML = '<h3>' + score + '</h3>';
                break;

            case 2:
                scoreDisplay.innerHTML = '<p>You could do better...</p>';
                finalScore.innerHTML = '<h3>' + score + '</h3>';
                break;

            case 1:
                scoreDisplay.innerHTML = '<p>You could do better...</p>';
                finalScore.innerHTML = '<h3>' + score + '</h3>';
                break;

            case 0:
                scoreDisplay.innerHTML = '<p>Zero!? Really?</p>';
                finalScore.innerHTML = '<h3>' + score + '</h3>';
                break;
        }
    }
















    // $.ajax({
    //     type: "GET",
    //     url: "../sql/getImages.php",
    //     dataType: "json",
    //     data: {

    //     },
    //     success: function(data, status) {
    //       console.log(data);
    //         $(".column").each(function(i) {
    //                 $(this).append("<img id='img" + i + "' src='" + data[i]['image_url'] + "' width='408' height='250'/> ");
    //                 $(this).append("<img id='heart" + i + "' src='../img/dilike.png'>");
    //                 $("#heart" + i).css({
    //                     'width': '40px',
    //                     'height': '40px',
    //                     'padding': '10px'
    //                 });

    //             });
    //     }
    // });


});
