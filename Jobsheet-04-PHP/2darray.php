<?php
    $gradeList = [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90],
    ];

    $total = 0;
    foreach ($gradeList as $grade) {
        $total += $grade[1];
    }

    $average = $total / count($gradeList);

    echo "Class average grade is: $average <br><br>";
    echo "Students with grades above the class average: <br>";

    foreach ($gradeList as $grade) {
        if ($grade[1] > $average) {
            echo "Name: {$grade[0]}, Grade: {$grade[1]} <br>";
        }
    }
?>
