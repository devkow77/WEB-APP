<?php
print_r($_REQUEST);
print('<br>');

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Sprawdzenie metody HTTP

    // Sprawdzenie, czy wszystkie wymagane pola są ustawione
    if (!isset($_POST['email'], $_POST['offer_type'], $_POST['budget'], $_POST['comment'])) {
        die("Błąd: Brak wymaganych pól formularza.<br>");
    }

    // Pobranie wartości z formularza
    $email = trim($_POST['email']);
    $offer_type = trim($_POST['offer_type']);
    $budget = trim($_POST['budget']);
    $comment = trim($_POST['comment']);

    // Dane do połączenia z bazą
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ai1_lab4";

    $sql = "INSERT INTO questions (email, offer_type, budget, comment) VALUES (:email, :offer_type, :budget, :comment)";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully. <br>";

        // Przygotowanie zapytania SQL z parametrami
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':email' => $email,
            ':offer_type' => $offer_type,
            ':budget' => $budget,
            ':comment' => $comment
        ]);

        echo "New record created successfully. <br><br>";
        echo "<a href='http://localhost:8008/zad8.php'>Powrót</a>";

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage() . "<br>";
    } finally {
        $conn = null; // Zamknięcie połączenia
    }
} else {
    echo "Method not supported. <br>";
}
