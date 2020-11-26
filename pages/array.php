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

echo "<p>Il y a $numberOfUsers utilisateurs.</p>";

echo "<h2>Exemple avec while</h2>";
$i = 0;
echo "<ul>";
while ($i < $numberOfUsers) {
    echo "<li>" . $users[$i]['firstname'] . "</li>";
    $i++;
}
echo "</ul>";

/**
 * Exemple avec boucle for.
 */
echo "<h2>Exemple avec for</h2>";
echo "<ul>";
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

echo "<h2>Exemple avec foreach</h2>";
echo "<ul>";
// $users = liste d'utilisateurs [$teacher, $student1, $student2]
// $user =
foreach ($users as $user) {
    // $user = $teacher // 0  => $users[0]
    // $user = $student1 // 1  => $users[1]
    // $user = $student2 // 2  => $users[2]
    echo "<li>" . $user['firstname'] . '</li>';
}
echo "</ul>";

echo "<h3>Ma liste de course en foreach</h3>\n";

$course = ['banane', 'raisin', 'pain', 'yaourts', 'flan'];

foreach ($course as $index => $aliment) {
    echo "$aliment\n";
}

/**
 * Exemple avec foreach et index
 */
echo "<h2>Exemple avec foreach + index</h2>";
echo "<ul>";
foreach ($users as $index => $user) {
    echo "<li>Utilisateur n° " . ($index + 1) . " : " . $user['firstname'] . '</li>';
}
echo "</ul>"

?>

</pre>
