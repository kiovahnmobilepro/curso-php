<?php
 $name = "Miguel";
 $isDev = true;
 $age = 600;

 define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-logo-png-transparent.png');

 $output = "Hola $name, con una edad de $age 🔥";
 $outputAge = match (true) {
    $age < 2    => "Eres un bebé, $name 👶🏼",
    $age < 10   => "Eres un niño, $name 🧒🏼🧒🏾",
    $age < 15   => "Eres un prejoven, $name 😬",
    $age === 18 => "Eres mayor de edad, $name 🍺",
    $age < 30   => "Eres un joven, $name 🧑‍🦰🧑🏿‍🦰",
    $age < 60   => "Eres un adulto mayor, $name 🧑‍🦰🧑🏿‍🦰",
    default     => "Viejooo, $name 👨🏾‍🦳👩‍🦳"
 };

 $bestLanguages = ["PHP", "JS", "Python"];
 $bestLanguages[] = "Java";
 $bestLanguages[] = "TS";

?>

<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " .  $language ?></li>
    <?php endforeach; ?>
</ul>

<h2><?= $outputAge ?></h2>


<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">
<h1>
    <?= 
        $output
    ?>
</h1>

<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }
</style>