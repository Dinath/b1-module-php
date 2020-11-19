<h1>À propos de moi</h1>

<?php

$currentDate = new DateTime();
$birthdate = new DateTime('1993-10-19');

/**
 * Afficher mon âge et ma date de naissance.
 */
echo "<p>Je suis né le " . $birthdate->format('d/m/Y') . " </p>";
$interval = $birthdate->diff($currentDate);
echo "<p>J'ai actuellement " . $interval->format('%y') .  " ans.</p>";

/**
 * Gérer les dates de mon abonnement à l'équipe !
 */
echo "<p>Mon abonnement démarre le " . $currentDate->format('d/m/Y') . "</p>";

$currentDate->add(new DateInterval('P1Y'));

echo "<p>Mon abonnement termine le " . $currentDate->format('d/m/Y') . "</p>";

/**
 * Est-ce que mon abonnement est toujours valide ?
 */
$isMySubscriptionEnded = new DateTime() > $currentDate;

if ($isMySubscriptionEnded) {
    echo "Mon abonnement est terminé :-(";
} else {
    echo "Mon abonnement est toujours valide !";
}
