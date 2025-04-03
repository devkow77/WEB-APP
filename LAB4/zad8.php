<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ai1_lab4";

$sql = "SELECT * FROM questions";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Pobrać zawartość tabeli questions
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Fail: " . $e->getMessage();
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
