<?php
// $students = array();
$students = array(
    array(
        "first_name" => "John", 
        "last_name" => "Doe", 
        "favorite_color" => "Blue", 
        "hobbies" => array("Basketball", 
                           "Theatre", 
                           "Literature")
                    ),
    array("first_name" => "Sarah", "last_name" => "Smith", "favorite_color" => "Red", "hobbies" => array("Cinema", "Literature", "Soccer")),
    array("first_name" => "Michael", "last_name" => "Johnson", "favorite_color" => "Green", "hobbies" => array("Tennis", "Cinema", "Theatre")),
    array("first_name" => "Emily", "last_name" => "Brown", "favorite_color" => "Purple", "hobbies" => array("Literature", "Theatre", "Swimming")),
    array("first_name" => "David", "last_name" => "Williams", "favorite_color" => "Yellow", "hobbies" => array("Soccer", "Literature", "Photography")),
    array("first_name" => "Emma", "last_name" => "Jones", "favorite_color" => "Pink", "hobbies" => array("Cinema", "Theatre", "Writing")),
    array("first_name" => "Ethan", "last_name" => "Garcia", "favorite_color" => "Orange", "hobbies" => array("Basketball", "Literature", "Music")),
    array("first_name" => "Olivia", "last_name" => "Martinez", "favorite_color" => "Blue", "hobbies" => array("Swimming", "Theatre", "Cinema")),
    array("first_name" => "Daniel", "last_name" => "Lee", "favorite_color" => "Gray", "hobbies" => array("Literature", "Soccer", "Cooking")),
    array("first_name" => "Sophia", "last_name" => "Taylor", "favorite_color" => "White", "hobbies" => array("Theatre", "Reading", "Hiking"))
);

foreach ($students as  $student) {

    echo $student['first_name']." colore preferito ".$student['favorite_color'];
}