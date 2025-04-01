<?php
// Definicja funkcji division
function division($x, $y) {
    // Sprawdzenie, czy oba argumenty są liczbami całkowitymi
    if (!is_int($x) || !is_int($y)) {
        throw new InvalidArgumentException("Oba parametry muszą być liczbami całkowitymi.");
    }

    // Sprawdzenie, czy dzielnik nie jest zerem
    if ($y === 0) {
        throw new DivisionByZeroError("Nie można dzielić przez zero!");
    }

    return $x / $y;
}

// Testowanie funkcji dla różnych zestawów parametrów
$test_cases = [
    [10, 2],   // Poprawne
    [15, 3],   // Poprawne
    [7, 0],    // Błąd dzielenia przez zero
    ["10", 2], // Błąd - nieprawidłowy typ
    [5, 2.5]   // Błąd - nieprawidłowy typ
];

foreach ($test_cases as $case) {
    try {
        list($a, $b) = $case;
        echo "Wynik dzielenia $a / $b = " . division($a, $b) . "\n";
    } catch (Exception $e) {
        echo "Błąd: " . $e->getMessage() . "\n";
    }
}
?>
