/*global Vue*/

var q1Answer;
var q2Answer;
var q3Answer;
var q4Answer;


$("button.checker").one("click", function(e) {
    // Don't need e.preventDefault() because we have <button type="button">
    // Question 1 
    var selectedRadio0 = $("input[name='answer0']:checked");
    var selectedQuestionValue0 = selectedRadio.val();
    
    //Question 2
    var selectedRadio1 = $("input[name='answer1']:checked");
    var selectedQuestionValue1 = selectedRadio.val();
    
    //Question 3
    var selectedRadio2 = $("input[name='answer2']:checked");
    var selectedQuestionValue2 = selectedRadio.val();
    
    //Question 4
    var selectedRadio3 = $("input[name='answer3']:checked");
    var selectedQuestionValue3 = selectedRadio.val();


  











var app = new Vue({
	  el: '#main',
	  data: {
    answers: [],
    current: {},
    finishedQuiz: false,
    loadingResult: false,
    answers : {},
    enableSubmit: false,
    breed: '',
    subBreed: '',
	}, //end data
  methods: {
    finishedQuizFunction: function() {
      this.finishedQuiz = true;
      this.loadingResult = true;

      if (this.answers[0].actualAnswer === 'A') {
        if (this.answers[1].actualAnswer === 'A') {
          this.breed = 'Chihuahua';
        } else if (this.answers[1].actualAnswer ==='B') {
          this.breed = 'Beagle';
        } else {
          this.breed = 'Cardigan Corgi';
        }

      } else if (this.answers[0].actualAnswer === 'B') {
        if (this.answers[1].actualAnswer === 'A') {
          this.breed = 'Golden Retriever';
        } else if (this.answers[1].actualAnswer ==='B') {
          this.breed = 'Husky';
        } else {
          this.breed = 'Germanshepherd';
        }
      } else {
        if (this.answers[1].actualAnswer === 'A') {
          this.breed = 'Lhasa';
        } else if (this.answers[1].actualAnswer ==='B') {
          this.breed = 'French Bulldog';
        } else {
          this.breed = 'Pomeranian';
        }
      }

      this.title = this.breed;
      if (this.breed.charAt(0) === 'A' || this.breed.charAt(0) === 'E' || this.breed.charAt(0) === 'I' || this.breed.charAt(0) === 'O' || this.breed.charAt(0) === 'U'){
        this.message = 'An ' + this.breed + ' is best for you!';
      } else {
        this.message = 'A ' + this.breed + ' is best for you!';
      }

			const url = 'https://dog.ceo/api/breed/' + this.breed.toLowerCase() + '/images/random';
      fetch(url).then(response => {
       return response.json();
      }).then(json => {
         this.current = json;
         this.loadingResult = false;
         return true;
      }).catch(err => {
          this.message = 'Something went wrong';
      });

    },
    answeredQuestion: function(num, answer) {
      if (!(num in this.answers)) {
        Vue.set(app.answers, num, {actualAnswer: answer});
      } else {
        this.answers[num].actualAnswer = answer;
      }
      console.log("answer for " + num + " is now " + this.answers[num].actualAnswer);
      var size = 0;

      for(var prop in this.answers) {
        if(this.answers.hasOwnProperty(prop))
            ++size;
      }
      console.log('num answers is ' + size);

      if (size === 3){
        this.enableSubmit = true;
      }
    },
    again : function() {
      location.reload();
    },

  }, //end methods
});
