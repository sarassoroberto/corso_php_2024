<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Allievi</title>
<style>
    .student {
        width: 200px;
        height: 100px;
        margin: 20px;
        padding: 10px;
        border: 2px solid black;
        border-radius: 5px;
        text-align: center;
        display: inline-block;
    }
</style>
</head>
<body>
<section class="students" >

<?php
$students = array(
    array("first_name" => "John", "last_name" => "Doe", "favorite_color" => "Blue"),
    array("first_name" => "Sarah", "last_name" => "Smith", "favorite_color" => "Red"),
    array("first_name" => "Michael", "last_name" => "Johnson", "favorite_color" => "Green"),
    array("first_name" => "Emily", "last_name" => "Brown", "favorite_color" => "Purple"),
    array("first_name" => "David", "last_name" => "Williams", "favorite_color" => "Yellow"),
    array("first_name" => "Emma", "last_name" => "Jones", "favorite_color" => "Pink"),
    array("first_name" => "Ethan", "last_name" => "Garcia", "favorite_color" => "Orange"),
    array("first_name" => "Olivia", "last_name" => "Martinez", "favorite_color" => "Blue"),
    array("first_name" => "Daniel", "last_name" => "Lee", "favorite_color" => "Black"),
    array("first_name" => "Sophia", "last_name" => "Taylor", "favorite_color" => "White")
);

foreach ($students as $student) {
    $first_name = $student["first_name"];
    $last_name = $student["last_name"];
    $favorite_color = $student["favorite_color"];
    echo "<div class='student' style='background-color: $favorite_color;'>
              <p>$first_name $last_name</p>
          </div>";
}
?>
</section>

</body>
</html>
