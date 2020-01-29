<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Print every array element in a new line.
*/

$foodArr = [
    "apple",
    "orange",
    "banana",
    "blueberry"
];

echo $foodArr[0] . "<br>";
echo $foodArr[1] . "<br>";
echo $foodArr[2] . "<br>";
echo $foodArr[3] . "<br>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>

<li>$foodArr[0]</li>
<li>$foodArr[1]</li>
<li>$foodArr[2]</li>
<li>$foodArr[3]</li>

</ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

$food_assoc = [];

$food_assoc = [
    "main course" => "apple",
    "salad" => "banana",
    "desert" => "blueberry"
];

echo $food_assoc["main course"];
echo " | ";
echo "main course";
echo "<br>";

echo $food_assoc["salad"];
echo " | ";
echo "salad";
echo "<br>";

echo $food_assoc["desert"];
echo " | ";
echo "desert";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

$food_assoc1 = [
    "meal1" => [
        "food" => "apple",
        "type" => "main course",
        "origin" => "Italy"
    ],
    "meal2" => [
        "food" => "banana",
        "type" => "salad",
        "origin" => "Greece"
    ],
    "meal3" => [
        "food" => "blueberry",
        "type" => "desert",
        "origin" => "France"
    ]
];

echo $food_assoc1["meal1"]["food"] . " | " . $food_assoc1["meal1"]["type"] . " | " . $food_assoc1["meal1"]["origin"];
echo "<br>";

echo $food_assoc1["meal2"]["food"] . " | " . $food_assoc1["meal2"]["type"] . " | " . $food_assoc1["meal2"]["origin"];
echo "<br>";

echo $food_assoc1["meal3"]["food"] . " | " . $food_assoc1["meal3"]["type"] . " | " . $food_assoc1["meal3"]["origin"];
echo "<br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/

echo "
<table>
  <tr>
    <th>Food</th>
    <th>Type</th>
    <th>Origin</th>
  </tr>
  
  <tr>
    <td>{$food_assoc1["meal1"]["food"]}</td>
    <td>{$food_assoc1["meal1"]["type"]}</td>
    <td>{$food_assoc1["meal1"]["origin"]}</td>
  </tr>
  
   <tr>
    <td>{$food_assoc1["meal2"]["food"]}</td>
    <td>{$food_assoc1["meal2"]["type"]}</td>
    <td>{$food_assoc1["meal2"]["origin"]}</td>
  </tr>
  
  <tr>
    <td>{$food_assoc1["meal3"]["food"]}</td>
    <td>{$food_assoc1["meal3"]["type"]}</td>
    <td>{$food_assoc1["meal3"]["origin"]}</td>
  </tr>
</table> "
?>