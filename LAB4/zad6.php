<?php
print_r($_REQUEST);
print('<br>');

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Sprawdzenie metody HTTP
    // Pobranie wartości z formularza
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $offer_type = htmlspecialchars(trim($_POST['offer_type']), ENT_QUOTES, 'UTF-8');
    $budget = floatval($_POST['budget']); // Zamiana na liczbę
    $comment = htmlspecialchars(trim($_POST['comment']), ENT_QUOTES, 'UTF-8');

    // Sprawdzenie, czy wszystkie wymagane pola są ustawione
    if (!isset($_POST['email'], $_POST['offer_type'], $_POST['budget'], $_POST['comment'])) {
        die("Błąd: Brak wymaganych pól formularza.<br>");
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("Nieprawidlowy adres email");
    }

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
