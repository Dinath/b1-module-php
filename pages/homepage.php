

<h1 class="mt-5">Je suis sur la page d'accueil</h1>

<?php
/**
 * Cette fonction est cool mais elle a un défaut :
 *
 * Elle ne prend pas compte les non-binaires.
 *
 * @param bool $isFemale
 */
function displayWelcomeMessage(bool $isFemale): void {
    if ($isFemale) {
        echo "Bonjour Madame";
    } else {
        echo "Bonjour Monsieur";
    }
}

/**
 * Récupère le nom et le prénom dans une seule chaîne de caractère.
 *
 * @param string $name
 * @param string $firstname
 * @return string
 */
function getFullname(string $name, string $firstname): string
{
    return $firstname . " " . strtoupper($name);
}

$fullname = getFullname('Soyer', 'Alex');

displayWelcomeMessage(false) ;

echo "<h3>$fullname</h3>";
echo "<p>Cher $fullname, nous sommes ravi de...</p>"

?>