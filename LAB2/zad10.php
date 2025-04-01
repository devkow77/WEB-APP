<?php
// Utworzenie tablicy 'people' z kluczami (imionami) i wartościami (wiekami)
$people = [
    "Bartosz" => 35,
    "Jan" => 40,
    "Kasia" => 25,
    "Piotr" => 30,
    "Anna" => 28
];

// 1. Wyświetlenie wszystkich elementów tablicy
foreach ($people as $name => $age) {
    echo "$name: $age\n";
}

// 2. Wyświetlenie liczby elementów w tablicy
echo "\nLiczba elementów w tablicy: " . count($people) . "\n";

// 3. Wyświetlenie wieku pana Bartosza
echo "\nWiek pana Bartosza: " . $people["Bartosz"] . "\n";

// 4. Dodanie pana Witolda (28 lat)
$people["Witold"] = 28;

// 5. Usunięcie pana Piotra
unset($people["Piotr"]);

// 6. Wyświetlenie tablicy posortowanej malejąco według wieku
arsort($people);  // Sortowanie malejąco według wartości (wieków)

echo "\nTablica posortowana malejąco według wieku:\n";
foreach ($people as $name => $age) {
    echo "$name: $age\n";
}
 