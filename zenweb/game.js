const question = document.querySelector('#question');
const choices = Array.from(document.querySelectorAll)('.choice-text');
const progressText = document.querySelector('#progressText');
const scoreText = document.querySelector('#score');
const progressBarFull = document.querySelector('#progressBarFull');

let currentQuestion={}
let acceptingAnswers=true
let score=0
let questionCounter=0
let availableQuestions=[]

let questions=[
{
    question: 'Rate your day 1-5.',
    choice1: '1',
    choice2: '2',
    choice3: '3',
    choice4: '4',
    choice5: '5',     
    answer: 1,
},
{
    question: "What kind of emotions did you feel the most today?",
    choice1: 'happy',
    choice2: 'excited',
    choice3: 'sad',
    choice4: 'angry',
    choice5: 'calm',
    choice6: 'other',
    answer: 1
},
{
    question: "Why do you think you felt that way?",
        
},
{
    question: "What did you enjoy today?",
        
},
{
    question: "What did you find challenging today?",
        
}, 
{
    question: "What are you most grateful today?",
        
},       
]
