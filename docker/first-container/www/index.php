<h1>Lista de Usuárois</h1>

<?php
$pdo = new PDO("mysql:dbname=my_db;host=db", "cortelucas", "1234");

$sql = $pdo->query("SELECT * FROM users");

if ($sql->rowCount() > 0) {
  $users = $sql->fetchAll();

  echo "<ul>";
  foreach ($users as $user) {
    echo "<li>" . $user['name'] . "</li>";
  }
  echo "</ul>";
} else {
  echo "Usuário não cadastrado";
}
