<h1>À propos de moi</h1>

<h1>Page de test</h1>

<h2>Les membres de ma famille</h2>

<?php
?>

<form action="" method="post">
    <input type="text" name="new-firstname" id="">
    <input type="submit" value="Ajouter">
</form>

<?php
/**
 * Je rajoute un nouveau prénom à la liste depuis le formulaire
 */
if (array_key_exists('new-firstname', $_POST)) {
    /**
     * Je n'ai encore personne dans ma famille,
     * => je l'initialise avec un tableau vide
     */
    if (
        ! array_key_exists('families', $_SESSION) // || // personne n'a rempli de familles
//        empty($_SESSION['families']) // ma famille n'est pas vide
    )
    {
        $_SESSION['families'] = [];
    }

    /**
     * J'envoie les informations dans le tableau
     */
    array_push($_SESSION['families'], $_POST['new-firstname']); // [] !== NULL
}
?>

<?php if (array_key_exists('families', $_SESSION)) { ?>

    <ul>
        <?php foreach ($_SESSION['families'] as $family): ?>
            <li><?php echo $family; ?></li>
        <?php endforeach; ?>
    </ul>

<?php } ?>

<h2>Vos informations</h2>

<?php
$name = "alderson";
$firstname = "elliot";
$has_driver_licence = true;
$hasDriverLicence = true;
$hasCar = false;
$pi = 3.14;
$age = 18;

function isAdult(int $age): bool
{
    if ($age >= 18) {
        return true;
    }

    return false;
}

/**
 * Display majority.
 *
 * Commentaire inutile !
 */
function displayMajority(): void {

    $age = '18';

    $isAdult = isAdult($age);

    if ($isAdult) {
        echo "Vous êtes majeur";
    } else {
        echo "Vous n'êtes PAS majeur";
    }
}

function formatFullName(string $name, string $firstname, bool $isFemale): string
{
    if ($isFemale) {
        return "Mme $firstname " . strtoupper($name);
    } else {
        return "Mr $firstname " . strtoupper($name);
    }
}

/**
 * À quoi sert le point ?
 */
$age = 18;
$translationIHave = "J'ai ";
$translationYear = " ans.";

echo $translationIHave . $age . $translationYear; // j'ai 18 ans.

?>

<!--    HTML dans du PHP-->
<h2><?php echo formatFullName($name, $firstname, false); ?></h2>

<?php displayMajority(); ?>


<?php
/**
 * @var DateTime
 */
$datetime = new DateTime();
$todaysDateTime = $datetime->format('d/m/Y');

/**
 * @var DateTime
 */
$birthdate = new \DateTime('1993-10-19');
echo $birthdate->format('d/m/Y');

/**
 * @var DateInterval
 */
$difference = $birthdate->diff($datetime);
//$difference = date_diff($birthdate, $datetime);
$age = $difference->format('%Y');

// Vérifier que l'abonnement n'a pas expiré
$subscriptionDate = new DateTime('2017-10-10');
$interval = new DateInterval('P1Y');

$subscriptionDate->add($interval);
$subscriptionHasEnded = ($subscriptionDate < new DateTime());
?>

<hr>

<ul>
    <li>
        Nous somme le <?php echo $todaysDateTime; ?>
    </li>
    <li>
        Vous avez <?php echo $age; ?> ans
    </li>
    <li>
        <!--        Utilisation d'une ternaire -->
        Votre abonnement est <?php echo $subscriptionHasEnded ? "terminé" : "valide"; ?>
    </li>
    <li>
        <?php
        echo "Votre abonnement est ";

        if ($subscriptionHasEnded) {
            echo "terminé";
        } else {
            echo "valide";
        }
        ?>
    </li>
</ul>
