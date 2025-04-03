<?php
// Pobranie danych z url
$email = $_GET['email'];

if(isset($email) && !empty($email)){
    try {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ai1_lab4";

        // Połączenie z bazą danych
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Przygotowanie zapytania z parametrem
        $sql = "SELECT * FROM questions WHERE email = :email ORDER BY id DESC LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "Fail: " . $e->getMessage();
    }
}

?>

<!doctype html>
<html lang="pl" data-bs-theme="">
  <head>
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zad8</title>
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <div id="inne" class="container mt-5 mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-8">
                <h2>Zapytania o ofertę</h2>
                <!-- Wygenerować tabelkę HTML zawierającą wcześniej pobrane dane -->
                <form method="GET" action="zad9.php">
                    <input type="email" placeholder="email" name="email">
                    <button>Filtruj</button>
                </form>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">OFFER_TYPE</th>
                            <th scope="col">BUDGET</th>
                            <th scope="col">COMMENT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($questions as $q) :?>
                            <tr>
                                <th scope="row"><?= htmlspecialchars($q['id']) ?></th>
                                <td><?= htmlspecialchars($q['email']) ?></td>
                                <td><?= htmlspecialchars($q['offer_type']) ?></td>
                                <td><?= htmlspecialchars($q['budget']) ?></td>
                                <td><?= htmlspecialchars($q['comment']) ?></td>
                            </tr>
                        <?php endforeach ;?>
                    </tbody>
                </table>
				<a href="/zad5.html">Powrót do formularza</a>
            </div>
        </div> 
    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>
