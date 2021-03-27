<?php

require_once(__DIR__ . '/models/Square.php');
require_once(__DIR__ . '/models/Rectangle.php');
require_once(__DIR__ . '/models/Triangle.php');

echo '<h1>Farmer Lands</h1>';

// Square => 5
// Rectangle => 3
// Triangle => 2

$shapes = [
    new Square(2),
    new Square(3),
    new Square(4),
    new Square(5),
    new Square(6),

    new Rectangle(2, 3),
    new Rectangle(2, 4),
    new Rectangle(2, 5),
    new Rectangle(2, 6),

    new Triangle(2, 3, 4),
    new Triangle(5, 6, 7)
];

function renderDisplayShapes($shapes)
{
    $str = '<table border="1"><tr><th>Type</th><th>Area</th></tr>';
    foreach ($shapes as $shape) {
        $str .= '<tr><td>' . $shape->getType() . '</td><td>' . $shape->getArea() . '</td></tr>';
    }
    $str .= '</table>';

    return $str;
}

echo '<p>1. Total number of lands area</p>';

echo renderDisplayShapes($shapes);

$totalArea = 0;
foreach ($shapes as $shape) {
    $totalArea += $shape->getArea();
}

echo '<p>Total Area: ' . $totalArea  . ' </p>';





echo '<p>2. Total number of lands with rectangle shape</p>';

$totalRectangle = 0;
foreach ($shapes as $shape) {
    $totalRectangle += $shape->getType() === 'rectangle' ? 1 : 0;
}

echo '<p>Total Rectangle: ' . $totalRectangle  . ' </p>';




echo '<p>3. Display all lands ordering by biggest area</p>';
usort($shapes, fn ($s1, $s2) => $s2->getArea() <=> $s1->getArea() );

echo renderDisplayShapes($shapes);
?>