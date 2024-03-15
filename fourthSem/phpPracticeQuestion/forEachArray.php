<?php

// Associative array containing student names as keys and their corresponding grades as values
$grades = array(
    "John" => 85,
    "Emily" => 92,
    "Michael" => 78,
    "Sarah" => 89,
    "David" => 95
);

// Initialize variables to calculate average
$totalGrades = 0;
$numStudents = count($grades);

// Iterate over the associative array using foreach loop
foreach ($grades as $student => $grade) {
    // Display each student's name and grade
    echo "$student: $grade<br>";
    
    // Add grade to total
    $totalGrades += $grade;
}

// Calculate average grade
$averageGrade = $totalGrades / $numStudents;

// Display the average grade
echo "<br>Average Grade: $averageGrade";

?>
