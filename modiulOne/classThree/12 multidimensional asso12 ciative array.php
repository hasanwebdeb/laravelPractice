<?php
$students = [
    "student1" => [
        "name" => "John Doe",
        "age" => 20,
        "grades" => [
            "math" => 85,
            "science" => 90,
            "english" => 88
        ]
    ],
    "student2" => [
        "name" => "Jane Smith",
        "age" => 22,
        "grades" => [
            "math" => 92,
            "science" => 89,
            "english" => 95
        ]
    ],
    "student3" => [
        "name" => "Sam Brown",
        "age" => 21,
        "grades" => [
            "math" => 78,
            "science" => 82,
            "english" => 80
        ]
    ]
];

$students["student1"]["grades"]["math"] = 90; // Update math grade for student1
$students["student2"]["name"] = "Jane Doe"; // Update name for student2

print_r($students);