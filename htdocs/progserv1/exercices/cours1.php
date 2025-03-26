<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours 1</title>
</head>

<body>
    <h1>Exercices</h1>
    <?php
    echo "Exercice 2: <br>";
    $name = "Thierry";
    echo "Hello, $name !<br><br>"; ?>

    <?php
    echo "Exercice 3: <br>";
    $age = 17;

    if ($age >= 18) {
        echo "You are over 18.<br><br>";
    } else {
        echo "You are under 18.<br><br>";
    } ?>

    <?php
    echo "Exercice 4: <br>";
    const PI = 3.14;
    echo PI; ?>

    <br>
    <br>

    <?php
    echo "Exercice 5: <br>";
    $number = 10;
    $double = $number * 2;
    echo "Le double de $number est $double.<br><br>"; ?>

    <?php
    echo "Exercice 6: <br>";
    $nom = 'Nom';
    $name = 'Name';

    echo '$nom, $name!<br>';
    echo "$nom, $name!"; ?>

    <br>
    <br>

    <?php
    echo "Exercice 7: <br>";
    $text = "PHP";
    echo "J'apprends $text dans ce nouveau cours ProgServ1."; ?>

    <?php
    echo "Exercice 8: <br>";
    $hasABachelorDegree = true;
    $hasFinishedHeigVd = true;

    if ($hasABachelorDegree = true && $hasFinishedHeigVd = true) {
        echo "You have another Bachelor's degree !.<br>";
    } elseif ($hasFinishedHeigVd = true && $hasABachelorDegree = false) {
        echo "You have finished the HEIG-VD, congratulations!";
    } else {
        echo "You are still a student.";
    }

    ?>

    <br>
    <br>

    <?php
    echo "Exercice 9: <br>";
    echo "Lorsqu'un utilisateur demande une page web, le serveur web reço it la requête et transmet le fichier PHP correspondant à l'interpréteur PHP. L'interpréteur PHP exécute le code PHP dans le fichier et génère du code HTML. Le serveur web renvoie le code HTML généré par l'interpréteur PHP à l'utilisateur, qui voit la page web dans son navigateur."
    ?>

    <br>
    <br>

    <?php
    echo "Exercice 10: <br>";
    $day = "Monday";
    switch ($day) {
        case "Monday":
        case "Tuesday":
        case "Wednesday":
        case "Thursday":
        case "Friday":
            echo "Weekday";
            break;

        case "Saturday":
        case "Sunday":
            echo "Weekend";
            break;

        default:
            echo "Unknown day";
    }
    ?>

    <br>
    <br>

    <?php
    echo "Exercice 11 <br>";
    $temperature = 30;
    if ($temperature > 25) {
        echo "It's hot";
    } elseif ($temperature >= 15 && $temperature <= 25) {
        echo "It's cool";
    } else {
        echo "It's cold";
    }
    ?>

    <br>
    <br>

    <?php
    echo "Exercice 12 <br>";
    $grade = 5;
    switch ($grade) {
        case 1:
            echo "Baaaaaaaaaad";
            break;
        case 2:
            echo "Bad";
            break;
        case 3:
            echo "Average";
            break;
        case 4:
            echo "Good";
            break;
        case 5:
            echo "Excellent";
            break;
        case 6:
            echo "Superb";
            break;
        default:
            echo "Invalid grade";
    }
    ?>

    <br>
    <br>

    <?php
    echo "Exercice 13 <br>";
    $a = 1;
    $b = 2;

    if ($a < $b) {
        echo "a is less than b";
    } else {
        echo "a is greater than or equal to b";
    }
    ?>

    <br>
    <br>

    <?php
    echo "Exercice 14 <br>";
    const USERNAME = "admin";
    const PASSWORD = "1234";

    $username = "admin";
    $password = "1234";

    if ($username == USERNAME && $password == PASSWORD) {
        echo "You are logged in";
    } else {
        echo "Login failed";
    }
    ?>

    <?php
    $number = 9;

    if ($number % 3 == 0) {
        echo "Multiple of 3";
    } else {
        echo "Not a multiple of 3";
    }
    ?>


</body>

</html>