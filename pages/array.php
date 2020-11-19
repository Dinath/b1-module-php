
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

$users = [];
$users[0] = $teacher;
$users[1] = $student;
$users[2] = $student2;
$users[3] = $student3;

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

print_r($users);

//echo '<ul>';
//echo "<li>" . displayUserName($users[0]) . "</li>";
//echo "<li>" . displayUserName($users[1]) . "</li>";
//echo '</ul>';

//echo '<ul>';
//foreach ($users as $user) {
//    echo '<li>' . displayUserName($user) . '</li>';
//}
//echo '</ul>';

function displayUserName(array $user): string {
    return $user['name'] . ' ' . $user['firstname'];
}

$userNames = array_map('displayUserName', $users);

//var_dump($userNames);

?>
</pre>
