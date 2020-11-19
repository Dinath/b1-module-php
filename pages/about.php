<h1>À propos de moi</h1>

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
