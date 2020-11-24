
<?php
error_reporting(-1);
ini_set('display_errors', 'On');
?>

<pre>
<?php

$teacher = [
    'firstname' => 'Alex',
    'name' => 'Soyer',
];

$student = [
    'firstname' => 'Tom',
    'name' => 'Henry',
];

$student2 = [
    'firstname' => 'Liz',
    'name' => 'Henry',
];

$student3 = [
    'firstname' => 'Fred',
    'name' => 'Perry',
];

$users = [
    $teacher, // 0
    $student, // 1
    $student2, // 2
    $student3, // 3
];

$numberOfUsers = count($users);

echo '<p>Vous avez ' . $numberOfUsers . ' utilisateurs.</p>';

$i = 0;
echo "<h2>Boucle while avec un index ++</h2>";
echo '<ul>';
while ($i < $numberOfUsers) {
    echo "<li>" . displayUserName($users[$i]) . "</li>";
    $i++; // $i = $i + 1;
}
echo '</ul>';

$i = $numberOfUsers;
echo "<h2>Boucle while avec un index --</h2>";
echo '<ul>';
while ($i > 0) {
    $i--; // $i = $i - 1;
    echo "<li>" . displayUserName($users[$i]) . "</li>";
}
echo '</ul>';

echo "<h2>Boucle foreach avec clef => valeur</h2>";
echo '<ul>';
// $users = liste
// $index = clef
// $u = valeur
foreach ($users as $index => $u) {
    echo "<li>$index : " . displayUserName($u) . '</li>';
}
echo '</ul>';

/**
 * On peut aussi affecter des éléments par leur index.
 */
$users = [];
$users[0] = $teacher;
$users[1] = $student;
$users[2] = $student2;
$users[3] = $student3;

echo '<h2>Boucle for "classique"</h2>';
echo '<ul>';
/**
 * $i = 0           =        i = 0,
 * $i < 2           =        tant que i strictement inférieur à 2
 * $i = $i + 1      =        i++ soit i = i + 1
 */
for ($i = 0;
     $i < $numberOfUsers; // 3 < 4, 4 < 4 , sort de la condition !
     $i = $i + 1
) { // $i + 1 = $i ++
    echo "<li>" . $i . " -> " . displayUserName($users[$i]) . "</li>";
    // <li>0 -> Soyer Alex</li>
//    echo "<li>" . $i . " -> " . $users[$i]['name'] . "</li>";
}
echo '</ul>';

//echo '<ul>';
//echo "<li>" . displayUserName($users[0]) . "</li>";
//echo "<li>" . displayUserName($users[1]) . "</li>";
//echo '</ul>';

function displayUserName(array $user): string {
    return strtoupper($user['name']) . ' ' . $user['firstname'];
}

echo "<h2>Exemple d'utilisation array_map</h2>";

$userNames = array_map('displayUserName', $users);

var_dump($userNames);

?>
</pre>
