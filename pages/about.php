<h1>À propos de moi</h1>


<?php
$name = "Jean";
$firstname = "Luc";
$age = 18;
$hasDriverLicence = true; // a le permis voiture
?>

<ul>
    <li>Nom : <?php echo $name; ?></li>
    <li>Age : <?php echo $age; ?></li>
    <li>Permis ? : <?php echo $hasDriverLicence; ?></li>
</ul>

<?php
if ($age >= 18) {
    echo "Vous êtes majeur !";
}
if ($hasDriverLicence) {
    echo "Vous avez le permis :car:";
}
?>

<?php
$name = "Soyer";
$firstname = "Alex";
$gender = "male"; // male or female

/**
 * @param string $name
 * @param string $firstname
 * @return string
 */
function getFullName(string $name, string $firstname): string
{
    return $firstname . " " . strtoupper($name);
}

/**
 * @param string $gender
 */
function getWelcomeMessage(string $gender): string
{
    if ($gender === "male") {
        return "Bonjour Monsieur,";
    } elseif ($gender === "female") {
        return "Bonjour Madame,";
    } else {
        return "Bonjour,";
    }
}

$fullname = getWelcomeMessage('male') . ' ' . getFullName($name, $firstname);
?>

<h2><?php echo $fullname; ?></h2>
