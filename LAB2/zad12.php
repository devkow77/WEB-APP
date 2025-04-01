<?php
//Zad 2.12

date_default_timezone_set('Europe/Warsaw');

// 1. Obecna data w formacie: Thursday, 06-03-2025
echo "Obecna data: " . date("l, d-m-Y") . "\n";

// 2. Obecna data i godzina w formacie: 2024-March-06 10:10
echo "Obecna data i godzina: " . date("Y-F-d H:i") . "\n";

// 3. Liczba dni pomiędzy dniem dzisiejszym a 12 marca 2022 roku
$today = new DateTime();
$pastDate = new DateTime("2022-03-12");
$interval = $today->diff($pastDate);
echo "Liczba dni pomiędzy dzisiaj a 12 marca 2022: " . $interval->days . "\n";

// 4. Liczba godzin i minut pomiędzy aktualną godziną a 7:00 dnia dzisiejszego
$now = new DateTime();
$sevenAM = (new DateTime())->setTime(7, 0);
$timeDiff = $now->diff($sevenAM);
echo "Różnica czasu od 7:00 do teraz: " . $timeDiff->h . " godzin i " . $timeDiff->i . " minut\n";

// 5. Która data jest wcześniejsza: data dzisiejsza czy 1 kwietnia 2024 roku
$compareDate = new DateTime("2024-04-01");
if ($today < $compareDate) {
    echo "Dzisiejsza data jest wcześniejsza niż 1 kwietnia 2024 roku.";
} elseif ($today > $compareDate) {
    echo "Dzisiejsza data jest późniejsza niż 1 kwietnia 2024 roku.";
} else {
    echo "Obie daty są takie same.";
}
?>