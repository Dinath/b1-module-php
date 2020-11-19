<?php
error_reporting(-1);
ini_set('display_errors', 'On');
?>

<?php

$families = [
    'brothers', // 0
    'sisters', // 1
    'mother', // 2
    'father' // 3
];

$families[] = 'mother';
$families[] = 'father';
?>

<!--<h1>Les membres de votre famille --><?php //echo \count($families); ?><!--</h1>-->

<pre>

<?php
//\print_r($_GET);
//
//echo $_GET['name'];
//
//\print_r($families);
//
//echo $families[1];
?>

<?php
$teacher = [
    'name' => 'Soyer',
    'firstname' => 'Alex',
    'age' => 27
];

$student1 = [
    'name' => 'Soyer',
    'firstname' => 'Tom',
    'age' => 8,
];

$student2 = [
    'name' => 'Soyer',
    'firstname' => 'Liz',
    'age' => 6,
];

$users = [
    $teacher, // 0
    $student1, // 1
    $student2, // 2
];

//print_r($users);

// j'affiche le nom du prof
//echo $teacher['name'];
//echo "<ul>";
//echo "<li>" . $users[0]['firstname'] . "</li>";
//echo "<li>" . $users[1]['firstname'] . "</li>";
//echo "<li>" . $users[2]['firstname'] . "</li>";
//echo "</ul>";

$numberOfUsers = count($users); // 3

/**
 * Exemple avec boucle for.
 */
//echo "<ul>";
for ($i = 0; // 0,
     $i < $numberOfUsers; // jusqu'à valeur < 3 si valeur 3, on sort de la boucle
     $i = $i + 1 // on incrémente i avec 1, à chaque tour
) {
    $user = $users[$i];
    echo "<li>$i : " . $user['firstname'] . "</li>";
//    echo "<li>" . $users[$i]['firstname'] . "</li>";
}
echo "</ul>";

/**
 * Exemple avec foreach
 */

echo "<ul>";

foreach ($users as $user) {
    // $user = $teacher
    // $user = $student1
    // $user = $student2
    echo "<li>" . $user['firstname'] . '</li>';
}

echo "</ul>";

/**
 * Exemple avec foreach et index
 */
echo "<ul>";

foreach ($users as $index => $user) {
    echo "<li>$index : " . $user['firstname'] . '</li>';
}

echo "</ul>"

?>

</pre>
