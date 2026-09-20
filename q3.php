<?php


$fruits = array("Apple", "Mango", "Banana", "Orange");

echo "Fruits using for loop:<br>";

for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "<br>";
}

$student = array(
    "Name" => "Poonam",
    "Age" => 20,
    "Course" => "Computer Engineering"
);
echo "<br>Student details using foreach:<br>";

foreach ($student as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

echo "<br>Combining for and foreach:<br>";

$students = array(
    array("Name" => "Poonam", "Marks" => 85),
    array("Name" => "swara", "Marks" => 90)
);

for ($i = 0; $i < count($students); $i++) {

    foreach ($students[$i] as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }

    echo "<br>";
}

array_push($fruits, "Grapes");

echo "After array_push:<br>";
print_r($fruits);
echo "<br><br>";

array_pop($fruits);
echo "After array_pop:<br>";
print_r($fruits);
echo "<br><br>";

$a = array("A", "B");
$b = array("C", "D");
$c = array_merge($a, $b);
echo "After array_merge:<br>";
print_r($c);
echo "<br><br>";
$slice = array_slice($fruits, 1, 2);

echo "After array_slice:<br>";
print_r($slice);
echo "<br><br>";
$keys = array_keys($student);
echo "Array keys:<br>";
print_r($keys);

?>