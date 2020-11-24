
<h1>Les tableaux</h1>

<h2>Tableaux simples</h2>

<pre>
<?php

// classique, une dimension
$families = [
    'brother', // 0
    'sister', // 1
    'uncle', // 2
    'mother', // 3
];

// clef/valeur
//$families = [
//    0 => 'brother',
//    1 => 'sister'
//];

//array_splice($families, 1, 2);

array_push($families, 'mother');

$families[] = 'father';

print_r($families);
?>

</pre>


<h2>Tableau clef / valeur</h2>

<pre>
<?php

$teacher = [
    'name' => 'SOYER',
    'firstname' => 'Alexandre'
];

$student = [
    'name' => 'ALDERSON',
    'firstname' => 'Elliot',
];

$users = [
    $teacher, // 0
    $student, // 1
    $student, // 2
    $student, // 3
];

$numberOfUsers = count($users); // 4

echo "Vous avez $numberOfUsers utilisateurs";

echo "<h3>while</h3>";
$i = 0;
echo '<ul>';
while ($i < $numberOfUsers) {
    echo '<li>' . $users[$i]['firstname'] . ' ' . $users[$i]['name'] . '</li>';
    $i ++;
}
echo '</ul>';


echo "<h3>foreach</h3>";
echo '<ul>';
foreach ($users as $user) {
    echo '<li>' . $user['firstname'] . ' ' . $user['name'] . '</li>';
}
echo '</ul>';


echo "<h3>for</h3>";

echo '<ul>';
// $i = 0
// $i = 1
// $i = 2
// $i = 3
// $i = 4 ---> $i < 4, on ne respecte la condition, on sort
for ($i = 0; $i < $numberOfUsers; $i++) { // $i = $i + 1
    echo '<li>' . $users[$i]['firstname'] . ' ' . $users[$i]['name']  . '</li>';
}
echo '</ul>';

// $users[0]; // teacher
// $users[1]; // student
// $users[2] // undefined index 2
?>
</pre>
