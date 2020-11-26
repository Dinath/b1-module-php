<?php
error_reporting(-1);
ini_set('display_errors', 'On');
?>

<?php
/**
 * Eviter les problèmes heure -1
 */
\date_default_timezone_set('Europe/Brussels');

$date = new DateTime();

echo $date->format('Y');

$date = new DateTime('1993-10-10');

echo $date->format('Y');

/**
 * J'affiche la date actuelle
 */
$currentDate = new DateTime();
$currentDateFormatted = $currentDate->format('d/m/Y');

/**
 * Je calcule la différence entre deux dates pour trouver mon âge
 */
$birthdate = new DateTime('1993-10-19');
$age = $birthdate->diff($currentDate)->format('%y');

/**
 * Je rajoute 1 an à une date pour calculer mon abonnement
 */
$subscribeDate = new DateTime();
$interval = new DateInterval('P1Y');

$subscribeDate->add($interval);

echo '<pre>';
print_r($subscribeDate);
echo '</pre>';

$subscribeDateFormatted = $subscribeDate->format('d/m/Y');

/**
 * Je vérifie que mon abonnement est toujours valide
 */
$isSubscriptionValid = ($subscribeDate > $currentDate);
?>

<h1>Nous sommes le <?php echo $currentDateFormatted; ?></h1>

<ul>
    <li>J'ai <?php echo $age; ?> ans</li>
    <li>Mon abonnement se termine le <?php echo $subscribeDateFormatted; ?></li>
    <li>
    <?php
    if ($isSubscriptionValid) {
        echo "Mon abonnement est toujours valide";
    } else {
        echo "Mon abonnement n'est plus valide";
    }
    ?>
    </li>
</ul>