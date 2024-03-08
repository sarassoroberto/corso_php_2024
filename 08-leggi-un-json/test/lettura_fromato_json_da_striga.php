<?php

$domande = '{
    "response_code": 0,
    "results": [
      {
        "type": "multiple",
        "difficulty": "hard",
        "category": "Entertainment: Film",
        "question": "What was Humphrey Bogart&#039;s middle name?",
        "correct_answer": "DeForest",
        "incorrect_answers": [
          "DeWinter",
          "Steven",
          "Bryce"
        ]
      },
      {
        "type": "multiple",
        "difficulty": "hard",
        "category": "Entertainment: Film",
        "question": "What did the first moving picture depict?",
        "correct_answer": "A galloping horse",
        "incorrect_answers": [
          "A woman in a dress",
          "A man walking",
          "A crackling fire"
        ]
      }
    ]
}';

$domande_php = json_decode($domande,true);
// $domande_php
print_r($domande_php['results'][1]['incorrect_answers']);